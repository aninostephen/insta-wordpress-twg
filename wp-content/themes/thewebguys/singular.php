<?php 
get_header();
?>
<main id="site-content">

<?php

if ( have_posts() ) {

    while ( have_posts() ) {
        the_post();

        if (is_front_page()) {
            get_template_part( 'template-parts/home-content', get_post_type() );
        } else {
            get_template_part( 'template-parts/content', get_post_type() );
        }
        
    }
}

?>

</main><!-- #site-content -->
<?php
get_footer();
?>