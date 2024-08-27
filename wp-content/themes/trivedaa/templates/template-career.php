<?php   
/*
Template Name: Career
*/

get_header();
get_template_part('parts/page-title');?>
<style>
    input[type="password"], input[type="email"], input[type="tel"], input[type="text"], input[type="file"], textarea {
        border-bottom: 1px solid #565656;
    }
    .wpcf7-response-output{
        display:none;
    }
</style>
<section class="section-padding2">
    <div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="animate-box" data-animate-effect="fadeInUp">
                <h2 class="section-title">Car<span>ee</span>r</h2>
            </div>
            <div style="background-color:#323232;padding:30px;">
                <?php  echo do_shortcode('[contact-form-7 id="3941968" title="Career"]');?>
            </div>
        </div>
        <div class="col-md-4">
            <div style="background-color:#323232;padding:30px;" class="mt-90">
            <div class="mb-30 animate-box" data-animate-effect="fadeInUp">
                <p><b>Bauen Architecture Firm</b></p>
                <p>Our firm nisl sodales sit amet sapien idea placerat sodales orcite. Vivamus ne miss rhoncus felis bauen architecture.</p>
            </div>
            <div class="mb-30 animate-box" data-animate-effect="fadeInUp">
                <p><b>Contact Details</b></p>
                <p><b>Phone : </b><a href="tel:+91 98797 03800"> +91 98797 03800</a></p>
                <p><b>Email :</b> architecture@bauen.com</p>
                <p><b>Address :</b> TRIVEDAA, 601 Icon Business Center, Nr. Valentine Cinema, Surat - Dumas Road, Rundh, Piplod, Surat, Gujarat 395007</p>
            </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>