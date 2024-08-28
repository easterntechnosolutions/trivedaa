<?php 
/**
 * WooCommerce Email Templates
 * Email : Header Section ( HTML Table Tags )
 * Author: ETS I.
 */
add_shortcode('email_template_header', 'email_template_header_function');
function email_template_header_function($atts){
	ob_start(); ?>
	<html <?php language_attributes(); ?>>
	<head> 
		<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo('charset'); ?>" />
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title><?php echo get_bloginfo('name', 'display'); ?></title>
	</head>
	<body <?php echo is_rtl() ? 'rightmargin' : 'leftmargin'; ?>="0" marginwidth="0" topmargin="0" marginheight="0"
		offset="0">
		<div id="wrapper" dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>" style="padding: 40px 0 0;">
			<table border="0" cellpadding="0" cellspacing="0" height="100%"
				style="margin: 0 auto; background-color: #eeeeee; width: 700px;">
				<tr>
					<td align="center" valign="top">
						<div id="template_header_image"
							style="background-color: #000000; width: 700px; padding: 20px 0; font-size: 1.24em;">
							<?php $email_image = site_url() . "/wp-content/uploads/2024/08/logo.png"; ?>
							<?php
							echo '<p style="margin-top:0; margin-bottom:0;"><img style="width: 30%;" src="' . esc_url($email_image) . ' "' . get_bloginfo('name', 'display') . '" /></p>';
							?>
						</div>
						<table border="0" cellpadding="0" cellspacing="0" width="700" id="template_container"
							style="font-size: 1.24em;">
							<tr>
								<td align="center" valign="top">
									<!-- Header -->
									<table border="0" cellpadding="0" cellspacing="0" width="100%" id="template_header">
										<tr>
										</tr>
									</table>
									<!-- End Header -->
								</td>
							</tr>
							<tr>
								<td align="center" valign="top">
									<!-- Body -->
									<table border="0" cellpadding="0" cellspacing="0" width="700" id="template_body">
										<tr>
											<td valign="top" id="body_content">
												<!-- Content -->
												<table border="0" cellpadding="20" cellspacing="0" width="100%">
													<tr>
														<td valign="top">
															<div id="body_content_inner"
																style="color: #000;">
																<?php
																return ob_get_clean();

}

/* Email Templates - Exclude Woocommerce emails */
add_shortcode('email_template_footer', 'email_template_footer_function');
function email_template_footer_function(){
ob_start(); ?>
															</div>
														</td>
													</tr>
												</table>
												<!-- End Content -->
											</td>
										</tr>
									</table>
									<!-- End Body -->
								</td>
							</tr>
							
						</table>
					</td>
				</tr>
			</table>
		</div>
	</body>
	</html>
	<?php
	return ob_get_clean();
}