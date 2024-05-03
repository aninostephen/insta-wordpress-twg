        <footer class="container-fluid p-0">
            <div class="row m-0">
                <div class="col-md-6">
                    <div class="container">
                        <div class="logo-bottom">
                            <?php 
                                if ( function_exists( 'the_custom_logo' ) ) {
                                    the_custom_logo();
                                }
                            ?>
                        </div>
                        <p class="footer-company-desc mt-4">
                        TAB NZ is deeply ingrained in New Zealand's culture, and, by betting with TAB NZ on racing or sport, you contribute to fueling the future of racing codes and sporting organisations across New Zealand.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 bg-blue">
                    <div class="container">
                        <div class="row gx-0 md-4 pt-5">
                            <div class="col-md-6">
                                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                                    <div class="widget-area">
                                        <?php dynamic_sidebar( 'footer-1' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                            <div class="col-md-6">
                                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                                    <div class="widget-area">
                                        <?php dynamic_sidebar( 'footer-2' ); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <div class="back-top">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/back-top.png" />
        </div>
        <style>
            a.mainbtn{
                padding: 22px 63px;
                background-image: url('<?php echo get_template_directory_uri() ?>/assets/img/mainbtn.png');
                background-size: 168px;
                background-repeat: no-repeat;
                background-position: center;
                background-position-x: 27px;
                margin-left: -25px;
                color: #1A2A57;
                font-weight: bold;
            }
        </style>
    </body>
</html>