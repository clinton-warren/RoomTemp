<?php 
/*
* The template for displaying the footer.
*/
?>
	</section><!--//main-->		

	<footer id="footer" role="contentinfo">	
		<div class="container">
		<div class="five columns">
			<img src="<?php bloginfo('template_directory'); ?>/images/footer-logo.png" class="footer-logo">
			<p class="footer-copyright">&copy; <?php echo date("Y") ?> Roomtemp, All rights reserved</p>
		</div>
		<div class="eleven columns">
			<ul class="footer-nav">
				<li class="footer-first">Home</li>
				<li>Portfolio</li>
				<li>Services</li>
				<li>About</li>
				<li class="footer-last">Contact</li>
			</ul>
			<p class="footer-copyright" style="clear:both; margin-top:20px; float:right">Site by <a href="http://www.kimronemusdesign.com" target="_blank" class="footer-credits">KRD</a></p>
		</div>
	</footer>
	
	<?php wp_footer(); ?>
</body>
</html>