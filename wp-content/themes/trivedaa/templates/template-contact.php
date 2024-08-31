<?php   
/*
Template Name: Contact Us
*/

get_header();
?>
<style>
    input[type="password"], input[type="email"], input[type="tel"], input[type="text"], input[type="file"], textarea {
        border-bottom: 1px solid #565656;
    }
    .wpcf7-response-output{
        display:none;
    }
</style>
<div class="content-wrapper">
    <section class="content-lines-wrapper">
        <div class="lines">
            <div class="animatedLine"></div>
            <div class="animatedLine"></div>
            <div class="animatedLine"></div>
            <div class="animatedLine"></div>
        </div>
    </section>
    <?php get_template_part('parts/page-title');?>
    <section class="section-padding">
        <div class="container">
            <div class="row text-center">
                <h2 class="section-title wow animated fadeInUp" data-wow-delay="600ms">Contact <span>Us</span></h2>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div style="background-color:#323232;padding:30px;">
                        <?php  echo do_shortcode('[contact-form-7 id="bb86e30" title="Contact form 1"]');?>
                    </div>
                </div>
                <div class="col-md-4 get-in-touch">
                    <div style="background-color:#323232;padding:30px;">
                        <div class="mb-30 animate-box" data-animate-effect="fadeInUp">
                            <h2><b>Get In Touch</b></h2>
                        </div>
                        <div class="mb-30 animate-box" data-animate-effect="fadeInUp">
                            <!-- <p><b>Contact Details</b></p> -->
                            <p><b>Phone : </b><a href="tel:<?php the_field('contact_number','option'); ?>"><?php the_field('contact_number','option'); ?></a></p>
                            <p><b>Email : </b> <a href="mailto:<?php the_field('email_id','option'); ?>"><?php the_field('email_id','option'); ?></a></p>
                            <p><b>Address : </b><?php the_field('address','option'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="row"></div>
<!-- Map Section -->
<div class="about">
    <div class="animate-box" data-animate-effect="fadeInUp">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4617.287550794946!2d72.76065507600083!3d21.153908283467104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dd5e818b18d%3A0x35445631c50c3cc9!2sICON%20BUSINESS%20HUB!5e1!3m2!1sen!2sin!4v1724748319837!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>
<?php get_footer(); ?>