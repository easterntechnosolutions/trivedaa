<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<!-- Mobile Meta -->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- Favicons and Icons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
		<meta name="msapplication-TileColor" content="#ffffff">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->
	</head>
<body>
 
	<nav class="navbar navbar-expand-lg">
		<div class="container">
			<?php
				$blog_info = get_bloginfo( 'name' );
				$logo_full = "full";
				$attachment_image = get_field('logo', 'option'); 
				$logo_array = wp_get_attachment_image_src( $attachment_image['ID'], $logo_full ); ?>
			<!-- Logo -->
			<div class="logo-wrapper header-logo">
				<a href="<?php echo esc_url(home_url('/'))?>">
				<img src="<?php echo $logo_array[0]; ?>" alt="Trivedaa" title="Trivedaa" class="logo-img"></a>
			</div>

			<!-- Button -->
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> 
				<span class="navbar-toggler-icon"><i class="ti-menu"></i></span> 
			</button>
			<!-- Menu -->
			<div class="collapse navbar-collapse" id="navbar">
				<?php
					wp_nav_menu(array(
						'theme_location' => 'primary-navigation',
						'container' => false,
						'menu_class' => 'navbar-nav ms-auto',
						'fallback_cb' => '__return_false',
						'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'depth' => 3,
					));
				?>
			</div>
		</div>
	</nav>
