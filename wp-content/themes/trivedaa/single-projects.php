<?php   
global $post;
if ( get_field( 'page_title_section', $post->ID ) ) {
    $feaured_image_array = get_field( 'background_image', $post->ID  );
    $feaured_image = $feaured_image_array['url'];
}
	get_header();
?>
<style>
    *, html {

scroll-behavior: smooth !important;
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
    <section class="banner-header full-h banner-img valign bg-img bg-fixed" data-overlay-darkgray="0" style='z-index: 2; background-image:url("<?php echo $feaured_image; ?>"); background-position:bottom;'></section>
    <?php 
    if ( have_rows('content_blocks') ) : 
    while ( have_rows('content_blocks') ) : the_row();
        $sub_field_value = get_sub_field('content_block');
        echo '<div class="content-block">' . $sub_field_value . '</div>';
    endwhile;
    else : 
    echo 'No content blocks found.';

    endif;?>
</div>
<div  class="project-page section-padding">
    <div id="OfficeHub" class="container">
            <!-- project slider -->
        <div class="row justify-content-center">
            <div class="col-md-12 text-end"><h2 class="section-title wow animated fadeInUp" data-wow-delay="800ms">Elite <span>Office </span> Hub</h2></div>
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

    <!-- Aminities -->
    <div id="Amenities" class="amenities-well" style="position: relative;">
    <div style="background-color: #FFF;padding-bottom: 0px;padding-top: 40px;">
            <div class="container">
                    <div class="row">
                        <h2 class="text-center section-title wow animated fadeInUp" style="color:#000" data-wow-delay="800ms">Amenities</h2>
                    </div>
                    <div class="row"> 
                        <?php if( have_rows('amenities') ): 
                                while( have_rows('amenities') ): the_row(); 
                                $icon = get_sub_field('amenities_icon');
                        ?>
                        <div class="col-md-4"> 
                            <div class="p-icon-list">
                                <div class="p-icon">
                                    <img src="<?php echo $icon['sizes']['thumbnail']; ?>" alt="<?php echo $icon['alt'];?>">
                                </div>
                                <div class="p-well">
                                    <div class="p-tit"><?php echo get_sub_field('amenities_title');?></div>
                                    <div class="p-text"><?php echo get_sub_field('amenities_description');?></div>
                                </div>
                            </div>
                        </div>                        
                        <?php endwhile;
                        endif; ?> 
                    </div>                                              
            </div>   
            <div class="pdp-desk mt-30"> 
                <div class=""><img src="<?php echo site_url();?>/wp-content/uploads/2024/08/building-model.webp"></div>
                <div class="linear-gradient-container2"></div>
            </div>        
        </div>         
    </div>

    <!-- Specifications -->
    <div id="Specifications" class="specification-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title  text-center wow animated fadeInUp" data-wow-delay="800ms">Specifications</h2>
                </div>
            </div>
            <div class="row">
                <?php if( have_rows('specifications') ): 
                        while( have_rows('specifications') ): the_row(); 
                        $speci_icon = get_sub_field('specifications_icon');
                ?>
                    <div class="col-md-4">
                        <div class="p-icon-list">
                            <div class="p-icon">
                                <img src="<?php echo $speci_icon['sizes']['thumbnail']; ?>" alt="<?php echo $speci_icon['alt'];?>">
                            </div>
                        </div>
                        <div class="p-well">
                            <div class="p-tit"><?php echo get_sub_field('specifications_title');?></div>
                            <div class="p-text"><?php echo get_sub_field('specifications_description');?></div>
                        </div>
                    </div>
                <?php endwhile;
                        endif; ?> 
            </div>
        </div>
    </div>
</div>

<!-- interior section -->
<div id="AreaFinishes" class="interior-common">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title text-center wow animated fadeInUp">Interior Common Area Finishes</h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="interior-common-box">
                    <?php if( have_rows('interior') ): 
                            while( have_rows('interior') ): the_row(); 
                    ?>
                    <div class="p-icon-list wow animated fadeInLeft" data-wow-delay="200ms">
                        <div class="p-well">
                            <div class="p-tit"><?php echo get_sub_field('interior_title');?></div>
                            <div class="p-text"><?php echo get_sub_field('interior_description');?></div>
                        </div>
                    </div>
                    <?php endwhile;
                    endif; ?> 
                </div>
            </div>
        </div>
    </div>
</div>

<section id="FloorPlans" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title text-center wow animated fadeInUp" data-wow-delay="800ms">Floor <span>Plan</span></h2>
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

<!-- Floor Plan -->
<div class="location-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title text-center wow animated fadeInUp" data-wow-delay="800ms">Site Location</h2>
            </div>
            <div class="col-md-12">
                <p class="text-center"><strong>TRIVEDAA RIZE</strong><br/> T.P. - 13 F.P. - 17, Beside Sangini Evoq, Nr. Bhagwan Mahavir College, VIP Road, Vesu, Surat, Gujarat 395007</p>
                <img src="../../wp-content/uploads/2024/08/map.webp" class="img-fluid">
            </div>
            <div class="col-md-12 text-center">
                <div class="butn-dark mt-30"> 
                    <a href="#"><span>View Location</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="sponsored-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title text-center wow animated fadeInUp" data-wow-delay="800ms">Sponsored by</h2>
            </div>
            <div class="col-md-12">
                <div class="client-well">
                <?php if( have_rows('sponsore') ): 
                    while( have_rows('sponsore') ): the_row(); 
                    $sponser_image = get_sub_field('sponsore_image');
                ?>
                    <div class="client-box">
                        <img src="<?php echo $sponser_image['sizes']['large']; ?>" alt="<?php echo $project_image['alt'];?>">
                    </div>
                    <?php endwhile;
                    endif; ?> 
                </div>
            </div>
        </div>
    </div>
</div>

<div class="navbar-bottom">
    <div class="nav-btn-ets">
        <a href="#overview">Overview</a>    
        <a href="#ExtendedDeck">Extended Deck</a>
        <a href="#OfficeHub">Elite Office Hub</a>
        <a href="#Amenities">Amenities</a>
        <a href="#Specifications">Specifications</a>
        <a href="#AreaFinishes">Area Finishes</a>
        <a href="#FloorPlans">Floor Plans</a>
    </div>
</div>
<?php get_footer(); ?>