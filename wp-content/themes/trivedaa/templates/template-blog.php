<?php
/*
Template Name: Blog
*/

get_header();
get_template_part('parts/page-title');

// Get categories of the custom taxonomy 'category'
$categories = get_terms(array(
    'taxonomy' => 'category',
    'orderby' => 'name',
    'hide_empty' => true,
));
?>

<!-- blog-classic -->
<section class="bauen-blog section-padding2">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="section-title">Our <span>Blog</span></h2>
            </div>
        </div>
        <div class="row">
            <?php
            foreach ($categories as $category) :
                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
                    'order' => 'DESC',
                    'orderby' => 'date',
                    'tax_query' => array(
                        array(
                            'taxonomy' => 'category',
                            'field' => 'slug',
                            'terms' => $category->slug,
                        ),
                    ),
                );
                $custom_posts = new WP_Query($args);
                if ($custom_posts->have_posts()) :
                    while ($custom_posts->have_posts()) : $custom_posts->the_post(); ?>
                        <div class="col-md-6">
                            <div class="item">
                                <div class="position-re o-hidden">
                                    <a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail('medium_large'); ?>
                                    </a>
                                </div>
                                <div class="con">
                                    <div class="upper-box clearfix">
                                        <span class="category">
                                            <?php
                                            $post_categories = wp_get_post_terms(get_the_ID(), 'category');
                                            if (!empty($post_categories)) {
                                                $categories_list = array_map(function($term) {
                                                    return $term->name;
                                                }, $post_categories);
                                                echo implode(', ', $categories_list);
                                            }
                                            ?> - <?php echo get_the_date(); ?>
                                        </span>
                                        <h5><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile;
                else : ?>
                    <h4>No Posts Found.</h4>
                <?php endif;
                wp_reset_postdata();
            endforeach;
            ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>