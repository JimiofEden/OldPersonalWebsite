<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->

<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->

<!--[if IE 8]> <html class="no-js lt-ie9" lang="en"> <![endif]-->

<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

	<head>

		<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png" />

		<meta charset="utf-8">

		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">


		<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

		<link href='http://fonts.googleapis.com/css?family=Bree+Serif|Open+Sans:400,300,600' rel='stylesheet' type='text/css'>

		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>"/>
		<!-- lightbox stuff -->
		<link href="<?php bloginfo('template_url');?>/js/lightbox/css/lightbox.css" rel="stylesheet" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<section class="wrapper">

			<!-- Header Start -->
			<header id="header">
				<h1><a href="/">Adam <span style="color: #393939">Hollock</span></a></h1><hr class="only-mobile">
				<!-- navigation-block -->
				<nav class="navigation-block">
					<ul class="nav-stripe">
						<li><a href="/">about</a></li>
						<span>҉</span>
						<li><a href="/projects/">projects</a></li>
						<span>҉</span>
						<li><a href="/blog/">blog</a></li>
						<span>҉</span>
						<li><a href="/contact/">contact</a></li>
					</ul>
				</nav>

			</header>
			<hr />
