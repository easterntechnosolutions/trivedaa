<?php   
/*
Template Name: Projects
*/

get_header();
get_template_part('parts/page-title');
?>

<section class="projects section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 animate-box" data-animate-effect="fadeInUp">
                <h2 class="section-title">Our <span>Projects</span></h2>
            </div>
        </div>
        <div class="row">
        <?php 
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 
                        'post_type' => 'projects', 
                        'posts_per_page' => -1,
                    );
            $loop = new WP_Query( $args );
            if ( $loop->have_posts() ) {
                while ( $loop->have_posts() ) : $loop->the_post(); ?>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="item">
                        <div class="position-re o-hidden">
                            <a href="<?php the_permalink();?>">
                            <?php
                                $image_id=get_post_thumbnail_id();
                                $desktop_image_srcset=wp_get_attachment_image_srcset($image_id,'medium_large');
                                // print_r($desktop_image_srcset);
                                echo '<img width="100%" height="600" decoding="async" class="img-responsive" loading="lazy" src="'.esc_url(wp_get_attachment_image_url($image_id)).'" srcset="'.esc_attr($desktop_image_srcset).'" alt="'.get_the_title().'">'; 
                            ?>
                            </a>
                        </div>
                        <div class="con">
                            <!-- <h6>Interior</h6> -->
                            <h5><a href="<?php echo the_permalink();?>"><?php the_title();?></a></h5>
                            <div class="line"></div>
                            <a href="cotton-house.html"><i class="ti-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            <?php
                endwhile;
            } 
            else { ?>
                <h4>No Posts Found.</h4><?php
            } ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>