<?php
/**
 * The front-page.php corresponds to the "static front page"
 * when setting static front page in Settings > Reading 
 */
?>

<?php get_header(); ?>

<header class="header">
    <div class="video-fullscreen-wrap">
        <div class="video-fullscreen-video">
            <video playsinline="" autoplay="" loop="" muted="">
                <source src="https://duruthemes.com/demo/html/bauen/img/video.mp4" type="video/mp4" autoplay="" loop="" muted="">
                <source src="https://duruthemes.com/demo/html/bauen/img/video.webm" type="video/webm" autoplay="" loop="" muted="">
            </video>
        </div>
        <div class="v-middle mt-30">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 text-left">
                        <div class="video-fullscreen-inner">
                            <h1>Innovate Design in Toronto</h1>
                            <p>Architecture viverra tellus nec massa dictum the euismoe.<br>Curabitur viverra the posuere aukue velit.</p>
                            <div class="butn-light mt-30 mb-30"><a href="https://1.envato.market/mDnXD" target="_blank"><span>Buy Now</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="content-wrapper">
    <!-- Lines -->
    <section class="content-lines-wrapper">
        <div class="content-lines-inner">
            <div class="content-lines"></div>
        </div>
    </section>

    <section class="about section-padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-30 animate-box" data-animate-effect="fadeInUp">
                    <h2 class="section-title">About <span>Trivedaa</span></h2>
                    <p>Architecture viverra tristique justo duis vitae diam neque nivamus aestan ateuene artines aringianu atelit finibus viverra nec lacus. Nedana theme erodino setlie suscipe no curabit tristique.</p>
                    <p>Design inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen.</p>
                    <p>Planner inilla duiman at elit finibus viverra nec a lacus themo the drudea seneoice misuscipit non sagie the fermen.</p>
                </div>
                <div class="col-md-6 animate-box" data-animate-effect="fadeInUp">
                    <div class="about-img">
                        <div class="img"><img src="http://localhost/trivedaa/wp-content/uploads/2024/08/about.jpg" alt="About Us" title="About us" class="alignnone size-full wp-image-39" /></div>
                        <div class="about-img-2 about-buro">Canada Office</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bauen-blog section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2 class="section-title">Current <span>News</span></h2>
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
                                <div class="position-re o-hidden"> <img src="img/slider/2.jpg" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog.html">Interior</a> - 18.12.2024
                                    </span>
                                    <h5><a href="post.html">Modernism in Architecture</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="img/slider/3.jpg" alt=""> </div>
                                <div class="con"> <span class="category">
                                        <a href="blog.html">Urban</a> - 16.12.2024
                                    </span>
                                    <h5><a href="post.html">Postmodern Architecture</a></h5>
                                </div>
                            </div>
                            <div class="item">
                                <div class="position-re o-hidden"> <img src="img/slider/4.jpg" alt=""> </div>
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
</div>
<?php get_footer(); ?>
