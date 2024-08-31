<?php   
	get_header();
?>

<div class="content-wrapper">
    <section class="content-lines-wrapper">
        <div class="lines">
            <div class="animatedLine"></div>
            <div class="animatedLine"></div>
            <div class="animatedLine"></div>
            <div class="animatedLine"></div>
        </div>
    </section>
    <?php get_template_part('parts/page-title');
    
    if ( have_rows('content_blocks') ) : 
    while ( have_rows('content_blocks') ) : the_row();
        $sub_field_value = get_sub_field('content_block');
        echo '<div class="content-block">' . $sub_field_value . '</div>';
    endwhile;
    else : 
    echo 'No content blocks found.';

    endif;?>
</div>
<div class="project-page section-padding">
    <div class="container">
            <!-- project slider -->
        <div class="row justify-content-center">
            <div class="col-md-12 text-end"><h2 class="section-title wow animated fadeInUp" data-wow-delay="800ms">Extended  <span> Deck</span></h2></div>
            <div class="col-md-12">
                <div class="owl-carousel owl-theme">
                    <?php if( have_rows('project_gallery') ): 
                            while( have_rows('project_gallery') ): the_row(); 
                            $project_image = get_sub_field('gallery');
                            ?>
                            <div class="portfolio-item">
                        <img class="img-fluid" src="<?php echo $project_image['sizes']['large']; ?>" alt="<?php echo $project_image['alt'];?>" loading="lazy">
                        </div>
                        <?php endwhile;
                        endif; ?>  
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <div class="project-bar">
                            <div class="row justify-content-between align-items-center text-left text-lg-start">
                                <div class="col-md-3 mb-15">
                                    <h5>Project Year</h5>
                                    <h6><?php echo get_field('year')?></h6>
                                </div>
                                <div class="col-md-3 mb-15">
                                    <h5>Company</h5>
                                    <h6>Trivedaa</h6>
                                </div>
                                <div class="col-md-3 mb-15">
                                    <h5>Project Name</h5>
                                    <h6><?php the_title();?></h6>
                                </div>
                                <div class="col-md-3 mb-15">
                                    <h5>Location</h5>
                                    <h6><?php echo get_field('location')?></h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">Floor <span>Plan</span></h2>
            </div>
        </div>
        <div class="row">
            <?php if( have_rows('floor_plan') ): 
                while( have_rows('floor_plan') ): the_row(); 
                $floor_image = get_sub_field('floor_plan_image');
            ?>
            <div class="col-md-2 gallery-item">
                <a href="<?php echo $floor_image['sizes']['large']; ?>" title="Floor Plan" class="img-zoom">
                    <div class="gallery-box">
                        <div class="gallery-img">
                            <img src="<?php echo $floor_image['sizes']['large']; ?>" class="img-fluid mx-auto d-block" alt="<?php echo $project_image['alt'];?>" loading="lazy">
                        </div>
                    </div>
                </a>
            </div>
            <?php endwhile;
            endif; ?> 
        </div>
    </div>
</section>
<?php get_footer(); ?>