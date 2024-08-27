<?php   
	get_header();
	get_template_part('parts/page-title');
	
// Get categories of the custom taxonomy 'ourmediatype'
$categories = get_terms(array(
    'taxonomy' => 'category',
    'orderby' => 'name',
    // 'order' => 'DESC',
    'hide_empty' => true,
));
?>

<!-- blog-classic -->
<section class="bauen-blog3 section-padding2">
    <div class="container">
		<div class="row">
		<div class="col-md-8">
			<div class="row">
        	<?php 
            	if ( have_posts() ) {
						while (have_posts()) : the_post(); ?>
							<div class="col-md-12">
								<div class="item">
									<div class="lower-content text-justify">
										<div class="image" style="margin-bottom: 20px">
											<?php
												the_post_thumbnail('medium_large');
											?>
										</div><?php
										$count = 1;
										if( have_rows('content_blocks') ) {
											while( have_rows('content_blocks') ): the_row(); ?>
												<section id="content_block_<?php echo $count; ?>" class="content_blocks_lists content_block_<?php echo $count; ?>">
													<?php
														echo $sub_content_block = get_sub_field('content_block');
													?>
												</section><?php
												$count++;
											endwhile;
										} else { ?>
											<div class="page_contents_section about-section">
												<div class="post-cont"> 
													<a href="#"><span class="tag"><?php
														$post_categories = wp_get_post_terms(get_the_ID(), 'category');
														if (!empty($post_categories)) {
															$categories_list = array_map(function($term) {
																return $term->name;
															}, $post_categories);
															echo implode(', ', $categories_list);
														}
														?> </span></a> <i>|</i> <span class="date"><?php echo get_the_date(); ?></span>
													<h5><?php the_title();?></h5>
													<p><?php
													if( '' !== get_post()->post_content ) {
														the_content();
													} else {
														echo "<h5 style='font-weight: bold'>No Contents Found.</h5>";
													} ?></p>
												</div>
											</div><?php
										} ?>
									</div>
								</div>
							</div><?php
						endwhile;
                		wp_reset_postdata();
					} else { ?>
						<h4>No Posts Found.</h4><?php
					}
				?>
            	</div>
			</div>
            <div class="col-md-4">
                <div class="blog-sidebar row">
					<div class="col-md-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Recent Posts</h6>
                            </div>
							<?php
								$args = array(
									'post_type' => 'post', 
									'post_status' => 'publish',
									'posts_per_page' => 20,
									'nopaging' => false,
									'order'    => 'DESC',
									'orderby'  => 'date',
									'paged' => $paged
								);
								$loop = new WP_Query( $args ); 
								while ( $loop->have_posts() ) : $loop->the_post(); ?>
									<div class="thum"> 
										<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('thumbnail'); ?>
										</a>
									</div>
									<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php
								endwhile;
							?>
                    	</div>           
					</div>

					<div class="col-md-12">
                        <div class="widget">
                            <div class="widget-title">
                                <h6>Categories</h6>
                            </div>
                            <ul>
								<?php 
									foreach($categories as $category):
								?>
									<li data-filter="<?php echo $category->slug?>">
										<a href="<?php echo esc_url(home_url('/'))?>/blog"><i class="ti-angle-right"></i><?php echo $category->name;?></a>
									</li>
                            	<?php endforeach; ?> 
                            </ul>
                        </div>
                    </div>
            	</div>
        	</div>
    	</div>
	</section>

<?php get_footer(); ?>