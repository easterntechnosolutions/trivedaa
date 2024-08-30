<?php
/*
Template Name: About Us
*/

get_header();
?>

<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="lines">
            <div class="animatedLine"></div>
            <div class="animatedLine"></div>
            <div class="animatedLine"></div>
            <div class="animatedLine"></div>
        </div>
    </section>
    <?php get_template_part('parts/page-title');?>
    <section class="about section-padding">
        <div class="container">
            <div class="row text-center">
                <h2 class="section-title wow animated fadeInUp" data-wow-delay="600ms">About <span>Us</span></h2>
                <div class="wow animated fadeInUp" data-wow-delay="800ms" style="width:80%;margin-left:auto;margin-right:auto;">
                    <p>Trivedaa Shaping Surat with Excellence. As a leading construction company, we bring visions to life through expert residential, commercial, and infrastructure projects. Our commitment to innovation and sustainability ensures each build is both stunning and functional. Partner with us to create exceptional spaces and a brighter future.</p>
                       <p class="wow animated fadeInUp" data-wow-delay="1000ms" style="font-size: 32px;font-style: italic; font-family: 'Nunito', sans-serif;font-weight: 400;line-height: 1.5em;">Join us on our journey as we continue to shape the skyline of Surat and build a better future for all.</p>
                </div>
            </div>
        </div>
        <div class="about-hero-image-wrapper">
            <div class="wow animated fadeInUp" data-wow-delay="800ms">
            <?php
                $image_url = 'http://localhost/trivedaa/wp-content/uploads/2024/08/about-1.webp';
                $image_id = attachment_url_to_postid($image_url);
                if ($image_id) {
                    $srcset = wp_get_attachment_image_srcset($image_id, 'Large');
                    $sizes = wp_get_attachment_image_sizes($image_id, 'Large');
                    $src = wp_get_attachment_image_src($image_id, 'Large')[0];
                    ?>
                    <img 
                        src="<?php echo esc_url($src); ?>" 
                        srcset="<?php echo esc_attr($srcset); ?>" 
                        sizes="100vw" 
                        alt="Trivedaa" loading="lazy"/>
                    <?php
                }
            ?>
            </div>
            <div class="wow animated fadeInUp" data-wow-delay="1400ms">
            <?php
                $image_url = 'http://localhost/trivedaa/wp-content/uploads/2024/08/about-2.webp';
                $image_id = attachment_url_to_postid($image_url);
                if ($image_id) {
                    $srcset = wp_get_attachment_image_srcset($image_id, 'Large');
                    $sizes = wp_get_attachment_image_sizes($image_id, 'Large');
                    $src = wp_get_attachment_image_src($image_id, 'Large')[0];
                    ?>
                    <img 
                        src="<?php echo esc_url($src); ?>" 
                        srcset="<?php echo esc_attr($srcset); ?>" 
                        sizes="100vw" 
                        alt="Trivedaa" loading="lazy"/>
                    <?php
                }
            ?>
            </div>
            <div class="wow animated fadeInUp" data-wow-delay="1200ms">
            <?php
                $image_url = 'http://localhost/trivedaa/wp-content/uploads/2024/08/about-3.webp';
                $image_id = attachment_url_to_postid($image_url);
                if ($image_id) {
                    $srcset = wp_get_attachment_image_srcset($image_id, 'Large');
                    $sizes = wp_get_attachment_image_sizes($image_id, 'Large');
                    $src = wp_get_attachment_image_src($image_id, 'Large')[0];
                    ?>
                    <img 
                        src="<?php echo esc_url($src); ?>" 
                        srcset="<?php echo esc_attr($srcset); ?>" 
                        sizes="100vw" 
                        alt="Trivedaa" loading="lazy"/>
                    <?php
                }
            ?>
            </div>
            <div class="wow animated fadeInUp" data-wow-delay="800ms">
            <?php
                $image_url = 'http://localhost/trivedaa/wp-content/uploads/2024/08/about-4.webp';
                $image_id = attachment_url_to_postid($image_url);
                if ($image_id) {
                    $srcset = wp_get_attachment_image_srcset($image_id, 'Large');
                    $sizes = wp_get_attachment_image_sizes($image_id, 'Large');
                    $src = wp_get_attachment_image_src($image_id, 'Large')[0];
                    ?>
                    <img 
                        src="<?php echo esc_url($src); ?>" 
                        srcset="<?php echo esc_attr($srcset); ?>" 
                        sizes="100vw" 
                        alt="Trivedaa" loading="lazy"/>
                    <?php
                }
            ?>
            </div>
        </div>            
    </section>

    <section class="text-section">
        <div class="container">
            <div class="row text-center">
                <h1 class="section-title wow animated fadeInUp" data-wow-delay="600ms">We believe in good ideas, flexibility & precision</h1>
            </div>
        </div>
    </section>

    <section style="position: relative;z-index: 1;">
        <div class="container">
            <div class="row">
                <div class="col-md-6" style="margin-top:180px;">
                    <h2 class="section-title wow animated fadeInUp" data-wow-delay="800ms">Our <span>Vision</span></h2>
                    <div class="">
                        <p style="font-size: 20px;">To become a leading force in the construction industry by delivering innovative, sustainable, and high-quality building solutions that enrich lives and contribute to the development of Surat and beyond.</p>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5" style="margin-top:120px;">
                    <div class="about-img">
                        <div class="img wow animated fadeInUp" data-wow-delay="800ms">
                            <img src="<?php echo site_url();?>/wp-content/uploads/2024/08/our-vision.webp" class="img-fluid" alt="Our Vision" loading="lazy">
                        </div>                            
                    </div>
                </div>
            </div>
        </div>
        <div class="container" style="margin-top:0px;margin-bottom: 100px;">
            <div class="row">
                <div class="col-md-5" style="margin-top:120px;">
                    <div class="about-img">
                        <div class="img wow animated fadeInUp" data-wow-delay="800ms">
                            <img src="<?php echo site_url();?>/wp-content/uploads/2024/08/our-mission.webp" class="img-fluid" alt="Our Mission" loading="lazy">
                        </div>                            
                    </div>
                </div> 
                <div class="col-md-1"></div>
                <div class="col-md-6" style="margin-top:180px;">
                    <h2 class="section-title wow animated fadeInUp" data-wow-delay="800ms">Our <span>Mission</span></h2>
                    <div class="">
                        <p style="font-size: 20px;">Our mission is to design and construct exceptional buildings that meet the highest standards of safety, quality, and sustainability. We are committed to enhancing the urban landscape of Surat by creating spaces that inspire and endure, while fostering a culture of integrity, collaboration, and continuous improvement.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>