        <footer class="container-fluid">
            <div class="row gx-0">
                <div class="col-sm-6">
                    <div class="container">
                        <div class="row gx-0">
                            <div class="col-sm-10">
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
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="container">
                        <div class="row gx-0">
                            <div class="col-sm-10">
                            TAB NZ is deeply ingrained in New Zealand's culture, and, by betting with TAB NZ on racing or sport, you contribute to fueling the future of racing codes and sporting organisations across New Zealand.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
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