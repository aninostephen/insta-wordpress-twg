<?php 

if ( has_nav_menu( 'primary' ) ) {
    ?>
        <div class="burger-nav-mobile">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/burger-menu.svg" />
        </div>
        <nav class="primary-menu-wrapper">

            <ul class="nav primary-menu reset-list-style">

                <?php
                if ( has_nav_menu( 'primary' ) ) {

                    wp_nav_menu(
                        array(
                            'container'  => '',
                            'items_wrap' => '%3$s',
                            'theme_location' => 'primary',
                        )
                    );

                }
                ?>

            </ul>

        </nav><!-- .primary-menu-wrapper -->

    <?php
}