			<!-- middle -->
			</div>

			<!-- footer -->
			<footer class="site-footer-wrap max-width" role="contentinfo">
				
				<!-- Panels -->
					<div class="site-footer-widgets border-top col-wrap">
						<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-widgets')) ?>
					</div>

				<!-- Site Info -->
				<div class="site-info-wrap">
					<p class="copyright">&copy; <?php echo date("Y"); ?> Copyright Energy Efficiency Funding Group, Inc.</p>
					<?php iut_site_links(); ?>
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