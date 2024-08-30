<div class="fot-22" style="z-index: 2;">
        <div class="fot-1">
            <img src="<?php echo get_template_directory_uri();?>/img/fot-1.svg" class="wow animated fadeInUp img-fluid" data-wow-delay="1000ms">
        </div>
        <div class="fot-2">
            <img src="<?php echo get_template_directory_uri();?>/img/fot-2.svg" class="wow animated fadeInUp img-fluid" data-wow-delay="1600ms">
        </div>
        <div class="fot-3">
            <img src="<?php echo get_template_directory_uri();?>/img/fot-3.svg" class="wow animated fadeInUp img-fluid" data-wow-delay="2000ms">
        </div>                  
    </div>
    <?php
		$blog_info = get_bloginfo( 'name' );
		$logo_full = "full";
		$attachment_image = get_field('logo', 'option'); 
		$logo_array = wp_get_attachment_image_src( $attachment_image['ID'], $logo_full ); ?>
    <footer class="main-footer">        
            <div class="container">
                <div class="row">
                <div class="col-md-12 text-center">
                    <div class="footer-logo">
                        <img src="<?php echo $logo_array[0]; ?>">
                    </div>
                </div>                  
                </div>                  
                <div class="row">                    
                    <div class="col-md-4 mb-30">
                        <div class="item fotcont text-center">
                            <div class="fothead">
                                <div class="fot-icon">
                                    <img src="<?php echo site_url();?>/wp-content/uploads/2024/08/call.svg">
                                </div>
                                <h6>Phone</h6>
                            </div>
                            <p><a href="tel:<?php the_field('contact_number','option'); ?>"><?php the_field('contact_number','option'); ?></a></p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-30">
                        <div class="item fotcont text-center">
                            <div class="fothead">
                                <div class="fot-icon">
                                    <img src="<?php echo site_url();?>/wp-content/uploads/2024/08/envelope.svg">
                                </div>
                                <h6>Email</h6>
                            </div>
                            <p><a href="mailto:<?php the_field('email_id','option'); ?>"><?php the_field('email_id','option'); ?></a></p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-30">
                        <div class="item fotcont text-center">
                            <div class="fothead">
                                <div class="fot-icon">
                                    <img src="<?php echo site_url();?>/wp-content/uploads/2024/08/location.svg">
                                </div>
                                <h6>Our Address</h6>
                            </div>
                            <p><?php the_field('address','option'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sub-footer">
                <div class="container">
                    <div class="row fot-line">
                        <div class="col-md-8">
                            <div class="text-left">
                                <p>© 2024 Trivedaa. All right reserved | Powered By : <a href="https://www.easternts.com/">Eastern Techno Solutions(I) Pvt. Ltd.</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 abot">
                            <div class="social-icon">
                                <a href="index.html"><i class="ti-facebook"></i></a>
                                <a href="index.html"><i class="ti-twitter"></i></a>
                                <a href="https://www.instagram.com/trivedaa_group"><i class="ti-instagram"></i></a>
                                <a href="index.html"><i class="ti-pinterest"></i></a>
                            </div>
                        </div>                        
                    </div>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>
</html>