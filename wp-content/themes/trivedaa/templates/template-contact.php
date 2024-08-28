<?php   
/*
Template Name: Contact Us
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
                <h2 class="section-title">Contact <span>Us</span></h2>
            </div>
            <div style="background-color:#323232;padding:30px;">
                <?php  echo do_shortcode('[contact-form-7 id="bb86e30" title="Contact form 1"]');?>
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
                <p><b>Phone : </b><a href="tel:+919879703800"> +91 98797 03800</a></p>
                <p><b>Email :</b> architecture@bauen.com</p>
                <p><b>Address :</b> TRIVEDAA, 601 Icon Business Center, Nr. Valentine Cinema, Surat - Dumas Road, Rundh, Piplod, Surat, Gujarat 395007</p>
            </div>
            </div>
        </div>
    </div>
        </section>
        <div class="row">
            </div>
            <!-- Map Section -->
            <div class="">
                <div class="animate-box" data-animate-effect="fadeInUp">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4617.287550794946!2d72.76065507600083!3d21.153908283467104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04dd5e818b18d%3A0x35445631c50c3cc9!2sICON%20BUSINESS%20HUB!5e1!3m2!1sen!2sin!4v1724748319837!5m2!1sen!2sin" width="100%" height="550" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
<?php get_footer(); ?>