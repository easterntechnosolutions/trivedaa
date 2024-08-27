<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<!-- Mobile Meta -->
    	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		
		<!-- Favicons and Icons -->
		<!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png"> -->
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
			<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#ffffff">

		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

	</head>

    <body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <!-- Logo -->
            <div class="logo-wrapper">
                <a class="logo" href="index.html"> <img src="<?php echo get_template_directory_uri();?>/img/logo.svg" class="logo-img" alt=""> </a>
            </div>
            <!-- Button -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"><i class="ti-menu"></i></span> </button>
            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbar">
                <?php 
					wp_nav_menu(
					array(
						'theme_location' => 'primary-navigation',
						'menu_class'     => 'navbar-nav ms-auto',
						'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
						'href'    	     => 'javascript:void(0)',	
						'list_item_class' => '',
						'link_class' => ''
					    )
					);
				?>
            </div>
        </div>
    </nav>