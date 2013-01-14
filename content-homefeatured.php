<div class="homepage-featured-posts">
  <div class="container clearfix">
	<h2 class="homepage-featured-posts-header">Featured Posts</h2>
		<?php  
		wp_reset_postdata();
		$args = array(
			'posts_per_page' => 3,
			'category_name' => 'featured'
			);
		$featured = new WP_Query($args);
		$counter = 0;
		while($featured -> have_posts()) : $featured -> the_post(); ?>
			<div class="five columns" <?php if($counter == 2) { echo 'style="margin-right:0px"';}?> >
				<?php $ft_image_atts = array( 'fallback_to_first_attached' => false );
					echo cudazi_featured_image( $ft_image_atts ); 
				?>
			<h2 class="homepage-featured-posts-title"><a href="<?php the_permalink();?>"><?php the_title();?></a></h2>
				<p class="homepage-featured-posts-date"><?php echo get_the_date(); ?></p>
			</div>
		<?php $counter++; ?>
		<?php endwhile; ?>
	</div>
</div>