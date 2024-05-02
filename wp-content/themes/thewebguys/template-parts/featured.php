<?php 

$args = array(
    'post_type'      => 'post', // Change this to your custom post type if necessary
    'posts_per_page' => -1, // Retrieve all posts
    'meta_query'     => array(
        array(
            'key'     => '_thumbnail_id',
            'compare' => 'EXISTS', // Checks if the post has a featured image
        ),
    ),
);

$featured_posts = new WP_Query( $args );

if($featured_posts->have_posts()) :
    while ( $featured_posts->have_posts() ) : $featured_posts->the_post(); 
        $thumbnail_id = get_post_thumbnail_id();
        $image_src = wp_get_attachment_image_src( $thumbnail_id, 'full' );
    ?>
        <div class="col-md-6">
            <div class="each-news">
                <?php if($image_src) : ?>
                    <img src="<?php echo $image_src[0] ?>" />
                <?php endif; ?>
            </div>
            
            <div class="row">
                <div class="col-md-9">
                    <p class="mt-4 color-white date-news"><?php echo get_the_date('j F Y'); ?></p>
                    <div class="news-title color-white mt-2">
                        <?php the_title(); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
endif;