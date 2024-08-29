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
								<img src="<?php echo get_template_directory_uri();?>/img/about-image.svg" class="wow animated zoomIn img-fluid" data-wow-delay="600ms">														
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
                                            </svg> <span class="polygon">
                                                <i class="ti-control-play"></i>
                                            </span> </a>
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
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo get_template_directory_uri();?>/img/slider/1.jpg" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog.html">Architecture </a> - 20.12.2024
                                    </span>
                                    <h5><a href="post.html">Modern Architectural Structures</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo get_template_directory_uri();?>/img/slider/2.jpg" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog.html">Interior</a> - 18.12.2024
                                    </span>
                                    <h5><a href="post.html">Modernism in Architecture</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo get_template_directory_uri();?>/img/slider/3.jpg" alt=""> </div>
                                <div class="con"><span class="category">
                                        <a href="blog.html">Urban</a> - 16.12.2024
                                    </span>
                                    <h5><a href="post.html">Postmodern Architecture</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="<?php echo get_template_directory_uri();?>/img/slider/4.jpg" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog.html">Planing</a> - 14.12.2024
                                    </span>
                                    <h5><a href="post.html">Modern Architecture Buildings</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Testiominals -->
        <section class="testimonials">
            <div class="section-padding" data-background="img/banner2.jpg" data-overlay-dark="3">
                <div class="container">
                    <div class="row">                       
                        <!-- Testiominals -->
                        <div class="col-md-12">
                            <div class="testimonials-box animate-box" data-animate-effect="fadeInUp">
                                <div class="head-box">
                                    <h4>What Client's Say?</h4>
                                </div>
                                <div class="owl-carousel owl-theme">
                                    <div class="item"> <span class="quote"><img src="img/quot.png" alt=""></span>
                                        <p>Architect dapibus augue metus the nec feugiat erat hendrerit nec. Duis ve ante the lemon sanleo nec feugiat erat hendrerit necuis ve ante.</p>
                                        <div class="info">
                                            <div class="author-img"> <img src="<?php echo get_template_directory_uri();?>/img/team/1.jpg" alt=""> </div>
                                            <div class="cont">
                                                <h6>Jason Brown</h6> <span>Crowne Plaza Owner</span>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
</div>
<?php get_footer(); ?>
