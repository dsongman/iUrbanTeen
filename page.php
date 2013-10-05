<?php get_header(); ?>
	
	<?php if (have_posts()): while (have_posts()) : the_post(); ?>
	<!-- Featured Image -->
	<div class="page-image-wrap">
		<?php the_post_thumbnail('full'); ?>
	</div>

	<!-- Featured Image -->
	<div class="sub-nav-wrap full-width-nav">
		If we're on a University page, the subnav should print here.
		<?php include 'sub-nav.php'; ?>
	</div>

	<!-- section -->
	<section role="main">

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class('content'); ?>>
		
			<?php the_content(); ?>
			
		</article>
		<!-- /article -->
		
	<?php endwhile; ?>
	
	<?php else: ?>
	
		<!-- article -->
		<article>
			
			<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
			
		</article>
		<!-- /article -->
	
	<?php endif; ?>
	
	</section>
	<!-- /section -->
	
<?php get_sidebar(); ?>

<?php get_footer(); ?>