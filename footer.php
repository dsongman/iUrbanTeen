			<!-- middle -->
			</div>

			<!-- footer -->
			<footer class="site-footer-wrap max-width" role="contentinfo">
				
				<!-- Testimonials -->
				<div class="testimonials-wrap col-wrap">
					<h3 class="testimonials-title col1-3">what others are saying:</h3>
					<?php espi_print_testimonials('col2-3'); ?>
				</div>

				<!-- Panels -->
					<div class="site-footer-widgets border-top col-wrap">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets')) ?>
					</div>

				<!-- SiteMap -->
				<div id="site-sitemap" class="site-sitemap-wrap">
					<h3 class="site-sitemap-title">Sitemap</h3>
					<p class="close-sitemap"><a id="site-nav-close" class="icon-x" href='#'></a></p>
					<?php espi_sitemap(); ?>
				</div>

				<!-- Site Info -->
				<div class="site-info-wrap">
					<p class="copyright">&copy; <?php echo date("Y"); ?> Copyright Energy Efficiency Funding Group, Inc.</p>
					<?php espi_site_links(); ?>
				</div>
				<!-- /Site Info -->
				
			</footer>
			<!-- /footer -->
			
		</div></div>
		<!-- /wrapper -->

		<?php wp_footer(); ?>
		
		<!-- analytics -->
		<script>
			var _gaq=[['_setAccount','UA-XXXXXXXX-XX'],['_trackPageview']];
			(function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
			g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
			s.parentNode.insertBefore(g,s)})(document,'script');
		</script>
	
	</body>
</html>