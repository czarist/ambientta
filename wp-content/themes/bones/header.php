<!doctype html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title(''); ?></title>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<meta name="msapplication-TileColor" content="#f01d4f">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<meta name="theme-color" content="#DA6A5E">
	<meta name="author" content="Lucas Cezar Trentin" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
	<?php wp_head(); ?>

	<!-- bootstrap -->
	<link href="<?php echo get_template_directory_uri(); ?>/library/bootstrap4.1.1/css/bootstrap.min.css" rel="stylesheet" />
	<script src="<?php echo get_template_directory_uri(); ?>/library/bootstrap4.1.1/js/bootstrap.min.js"></script>

	<!-- bootstrap icons -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/icons-1.5.0/font/bootstrap-icons.css" />

	<!-- fontawesome icons -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/fontawesome/css/all.css" />

	<!-- aos -->
	<script src="<?php echo get_template_directory_uri(); ?>/library/aos/dist/aos.js"></script>
	<link href="<?php echo get_template_directory_uri(); ?>/library/aos/dist/aos.css" rel="stylesheet" />

	<!-- urls -->
	<input type="hidden" name="get_template_directory_uri" id="get_template_directory_uri" value="<?php echo get_template_directory_uri(); ?>">
	<input type="hidden" name="home_url" id="home_url" value="<?php echo home_url(); ?>">

	<?php $image = get_the_post_thumbnail_url(7, 'full'); ?>
</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">

	<div id="container">
		<header id="header" class="header header-maior w-100" role="banner" style="background-image: url('<?= $image ?>');" itemscope itemtype="https://schema.org/WPHeader">
			<div id="inner-header" class="">
				<div class="row">
					<div class="col-12 d-flex align-items-center justify-content-center">
						<img id="imgLogo" src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png" alt="logo">
						<div class="barra mr-5 ml-5"></div>
						<h4 class="m-0 text-white"><?= the_content(7) ?></h4>
					</div>
				</div>
			</div>
		</header>