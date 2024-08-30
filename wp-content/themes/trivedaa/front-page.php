<?php
/**
 * The front-page.php corresponds to the "static front page"
 * when setting static front page in Settings > Reading 
 */
?>

<?php get_header(); ?>
    <aside class="kenburns-section" id="kenburnsSliderContainer" data-overlay-dark="3">
        <div class="kenburns-inner h-100">
		    <div class="linear-gradient-container2"></div>
            <div class="v-middle caption text-center">
                <div class="container">
                    <div class="row h-100">
                        <div class="col-md-12 mt-30 wow animated fadeInUp" data-wow-delay="1000ms">                         
                            <h4>Creative Solutions</h4>
                            <h1>Premium Showroms And Corporate Hub</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    
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

    <section class="about section-padding triveda">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 mb-30">
                        <h2 class="section-title wow animated fadeInUp" data-wow-delay="600ms">About <span>Trivedaa</span></h2>
                        <div class="wow animated fadeInUp" data-wow-delay="600ms">
                            <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu atelit finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.</p>
                            <p>Design inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen.</p>
                            <p>Planner inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen. Viverra tristique jusio the ivite dianne onen nivami acsestion augue artine.</p>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-5">
                        <div class="about-img">
                            <div class="img"> 								
								<img src="<?php echo site_url();?>/wp-content/uploads/2024/08/about-image.svg" class="wow animated zoomIn img-fluid" data-wow-delay="600ms">														
							</div>                            
                        </div>
                    </div>
                </div>
            </div>
    </section>

    <section class="testimonials">
        <div class="video-section-home">                
            <div class="container">
                <div class="row">                       
                    <!-- Promo video -->
                    <div class="col-md-6 vd-tit">
                        <div class="video-section-title">
                            One Of a King Commercial Building
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="vid-area">
                            <div class="vid-icon">
                                <a class="play-button vid" href="https://youtu.be/RziCmLzpFNY">
                                    <svg class="circle-fill">
                                        <circle cx="43" cy="43" r="39" stroke="#fff" stroke-width=".5"></circle>
                                    </svg>
                                    <svg class="circle-track">
                                        <circle cx="43" cy="43" r="39" stroke="none" stroke-width="1" fill="none"></circle>
                                    </svg> 
                                    <span class="polygon">
                                        <i class="ti-control-play"></i>
                                    </span> 
                                </a>
                            </div>                                    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog -->
    <section class="bauen-blog section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Our <span>Blogs</span></h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme">
                    <?php
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array(
                                    'post_type' => 'post',
                                    'posts_per_page' => 4,
                                    'paged' => $paged,
                                );
                        $loop = new WP_Query( $args );
                        if ( $loop->have_posts() ) {
                            while ( $loop->have_posts() ) : $loop->the_post(); ?>
                        <div class="item">
                            <div class="position-re o-hidden"><a href="<?php the_permalink();?>"><?php the_post_thumbnail('medium_large');?></a></div>
                            <div class="con"> 
                                <span class="category"><?php echo get_the_date('M,Y');?></span>
                                <h5><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
                            </div>
                        </div>
                        <?php
                            endwhile;
                        }
                        else { ?>
                        <h4>No Posts Found.</h4>
                    <?php }
                    wp_reset_postdata();
                    ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="testimonials">
        <div class="section-padding" data-overlay-dark="3">
            <div class="container">
                <div class="row">                       
                    <!-- Testimonials -->
                    <div class="col-md-12">
                        <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                            <div class="head-box">
                                <h4>What Client's Say?</h4>
                            </div>
                            <div class="owl-carousel owl-theme">
                            <?php if( have_rows('testimonial_home') ): ?>
                                    <?php while( have_rows('testimonial_home') ): the_row(); 
                                        $username = get_sub_field('username'); 
                                        $testimonial = get_sub_field('message');
                                        $desi = get_sub_field('designation');
                                        $user_image = get_sub_field('profile_image');
                                        ?>
                                        <div class="item">
                                            <span class="quote"><img src="<?php echo site_url();?>/wp-content/uploads/2024/08/quot.png" alt="quot"></span>
                                            <p><?php echo esc_html($testimonial);?></p>
                                            <div class="info">
                                                <div class="author-img">
                                                    <img src="<?php echo esc_url($user_image['url']); ?>" alt="<?php echo esc_attr($username); ?>" />
                                                </div>
                                                <div class="cont">
                                                    <h6><?php echo esc_html($username);?></h6>
                                                    <span><?php echo esc_html($desi);?></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                            <?php else: ?>
                                <p>No testimonials found.</p>
                            <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
