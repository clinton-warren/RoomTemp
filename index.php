<?php
/**
* The main template file.
*/
get_header(); ?>
	

   <div class="container clearfix">
	
	<div class="flexslider">
	<ul class="slides">
		<?php
		$args = array(
		'post_type' => 'slider',
		'posts_per_page' => -1	
		);
		$wp_slider_query = new WP_Query($args); 
		while($wp_slider_query->have_posts()) : $wp_slider_query->the_post(); ?>
			<li><?php the_post_thumbnail("full"); ?></li>
			<?php endwhile; 
		 	wp_reset_query(); ?>
	</ul></div>
	
		
		<div id="primary" role="main" class="twelve columns">
			
				<?php if ( have_posts() ) : ?>

					<?php 					
						// Search results (index.php handles search if no search.php used)				
						if ( is_search() ) {
							echo "<div class='post'><h2 class='entry-title archive-title'>";
							echo sprintf( __( 'Your search for %s returned %s %s.', 'cudazi' ), "<span class='search-query'>".get_search_query()."</span>", $wp_query->found_posts, _n( 'result', 'results', $wp_query->found_posts, 'cudazi' ) );
							echo "</h2></div>";
						}				
						while ( have_posts() ) : the_post();												
							get_template_part( 'content', get_post_format() );						
						endwhile;			    	
				    	get_template_part( 'nav', 'post-loop' );			    	
				    ?>

				<?php else: ?>

					<div id="post-0" class="post error404 not-found clearfix">
						<h2 class="entry-title"><?php _e( 'Not Found', 'cudazi' ); ?></h2>
						<div class="entry-content">
							<p><?php _e( "We are sorry, the item you requested cannot be found.", 'cudazi' ); ?></p>
							<?php get_search_form(); ?>
						</div><!-- //entry-content -->
					</div><!-- //post-0 -->

				<?php endif; ?>
							
		</div><!--//columns-->
		
		<div id="secondary" role="complementary" class="four columns">
			<?php get_sidebar(); ?>
		</div><!--//columns-->
						
	</div><!--//container-->
	
	
	<?php if(is_home()) {
	   get_template_part('content', 'homefeatured');
	}?>
        
<?php get_footer(); ?>