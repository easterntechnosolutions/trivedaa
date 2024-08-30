<?php   
/*
Template Name: Career
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
                <h2 class="section-title wow animated fadeInUp" data-wow-delay="600ms">Carrer <span></span></h2>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div style="background-color:#323232;padding:30px;">
                        <?php  echo do_shortcode('[contact-form-7 id="3941968" title="Career"]');?>
                    </div>
                </div>
                <div class="col-md-4">
                    <div style="background-color:#323232;padding:30px;" class="">
                    <div class="mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Bauen Architecture Firm</b></p>
                        <p>Our firm nisl sodales sit amet sapien idea placerat sodales orcite. Vivamus ne miss rhoncus felis bauen architecture.</p>
                    </div>
                    <div class="mb-30 animate-box" data-animate-effect="fadeInUp">
                        <p><b>Contact Details</b></p>
                        <p><b>Phone : </b><a href="tel:<?php the_field('contact_number','option'); ?>"><?php the_field('contact_number','option'); ?></a></p>
                        <p><b>Email : </b><a href="mailto:<?php the_field('email_id','option'); ?>"><?php the_field('email_id','option'); ?></a></p>
                        <p><b>Address : </b><?php the_field('address','option'); ?></p>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>