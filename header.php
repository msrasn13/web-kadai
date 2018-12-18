<!--- ここからヘッダ部分ここから --->
<head>
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico">
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" media="screen">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



<nav class="menu_nav">

		<?php wp_nav_menu( ); ?>

</nav>
<!--- ヘッダ部分はここまで --->