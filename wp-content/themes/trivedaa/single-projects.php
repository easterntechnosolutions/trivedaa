<?php   
	get_header();
	get_template_part('parts/page-title');
?>

<section class="section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title2"><?php the_title();?></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <p><?php echo get_the_content(); ?></p>
            </div>
            <div class="col-md-4">
                <p><b>Year : </b> <?php echo get_field('year')?></p>
                <p><b>Project Name : </b> <?php the_title();?></p>
                <p><b>Location : </b> <?php echo get_field('location')?></p>
            </div>
        </div>
        <div class="row mt-30">
            <?php if( have_rows('project_gallery') ): ?>
				<?php while( have_rows('project_gallery') ): the_row(); 
					$project_image = get_sub_field('gallery');
                    ?>
            <div class="col-md-6 gallery-item">
                <a href="<?php echo $project_image['sizes']['full-width']; ?>" title="" class="img-zoom"  data-fancybox="gallery">
                    <div class="gallery-box">
                        <div class="gallery-img">
                            <img src="<?php echo $project_image['sizes']['large-thumbnail']; ?>" class="img-fluid mx-auto d-block" alt="<?php echo $project_image['alt'];?>" loading="lazy"> 
                        </div>
                    </div>
                </a>
            </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>