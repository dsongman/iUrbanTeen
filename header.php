<!doctype html>
<!--[if lt IE 8]>      <html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html <?php language_attributes(); ?> class="no-js lt-ie9 ie8"> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"> <!--<![endif]-->
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
		
		<!-- dns prefetch -->
		<link href="//www.google-analytics.com" rel="dns-prefetch">
		
		<!-- meta -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width,initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">
		
		<!-- icons -->
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
		<link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<!-- Facebook & Twitter metas -->
		<?php if(is_single() || is_page()) :
			$siteDesc = 'The Efficiency Sales Professional Institute (ESPI), led by renowned expert Mark Jewell, is a consultancy helping energy users and service providers realize and express the true value of improving energy efficiency.';
		?>
			<meta name="twitter:card" content="summary">
			<meta name="twitter:site" content="jewell_insites">
			<meta name="twitter:creator" content="jewell_insites">
			<meta name="twitter:url" content="<?php the_permalink(); ?>">
			<meta name="twitter:title" content="<?php the_title(); ?>">
			<meta name="twitter:description" content="<?php echo $siteDesc; ?>">
		    <meta name="twitter:image" content="<?php echo get_template_directory_uri(); ?>/img/icons/sharing.png">
			<meta property="og:type" content="article">
			<meta property="og:title" content="<?php the_title(); ?>">
			<meta property="og:url" content="<?php the_permalink(); ?>">
			<meta property="og:description" content="<?php echo $siteDesc; ?>">
			<meta property="og:site_name" content="<?php bloginfo('name'); ?>">
		    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/img/icons/sharing.png">
		<?php endif; ?>
			
		<!-- css + javascript -->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	
		<!-- wrapper -->
		<div class="site-outer-wrap"><div class="site-inner-wrap">

			<!-- header -->
			<header class="site-header-wrap max-width" role="banner">
				
					<!-- logo -->
					<h1 class="site-logo">
						<a class="ir" href="<?php echo home_url(); ?>">
							<?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?>
						</a>
					</h1>
					<!-- /logo -->
					
					<!-- mobile toggles -->
					<div class="site-toggles">
						<p class="site-search-toggle"><a id="site-search-toggle" class="icon-search" href='#site-search'></a></p>
						<p class="site-nav-toggle"><a id="site-nav-toggle" class="icon-menu" href='#site-sitemap'></a></p>
					</div>

					<?php get_template_part('searchform'); ?>

					<!-- nav -->
					<nav class="site-nav-wrap" role="navigation">
						<?php espi_nav(); ?>
					</nav>
					<!-- /nav -->
			
			</header>
			<!-- /header -->

			<!-- middle -->
			<div class="site-middle-wrap max-width">