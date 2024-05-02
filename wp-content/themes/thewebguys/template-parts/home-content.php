<?php 
$banner_group = get_field('banner_group');
$aboutus_section = get_field('aboutus_section');
$fuel_section = get_field('fuel_section');

    if ($banner_group):
?>
    <div class="container-fluid banner-container">
        <img src="<?php echo $banner_group['banner_image']['url'] ?>" width="100%" />
        <div class="container banner-text">
            <div class="banner-inner-text">
                <img src="<?php echo $banner_group['banner_text_group']['url']; ?>" />
            </div>
            
        </div>
        <div class="rounded-btn">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/circle-arrow-down.png" />
        </div>
    </div>

<?php endif; ?>
<?php if($aboutus_section): ?>
    <div class="container-fluid about-section section-mt">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="<?php echo $aboutus_section['about_image']['url'] ?>" />
                </div>
                <div class="col-md-6">
                    <div class="about-right-sec">
                        <div class="about-bottom-right c-blue">
                            <h2 class="main-heading pb-3"><?php echo  $aboutus_section['about_heading_title'] ?></h2>
                            <div class="about_description pt-3"><?php echo  $aboutus_section['about_description'] ?></div>
                            <a href="#" class="secondary-btn-style blue-arrow border-blue color-blue mt-5">
                                <span>Learn More</span>
                                <p class="arrow-btn"></p>
                            </a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>

<div class="container-fluid con3-section section-mt"></div>

<div class="container-fluid careers-section section-mt">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="career-left-container">
                    <div class="inner-left-con">
                        <span>JOIN US</span>
                        <div class="divider-dashed"></div>
                    </div>
                    <h2 class="main-heading pb-3 pt-3 color-blue">CAREERS</h2>
                    <div class="career-description pt-3">There's so much more to TAB NZ than meets the eye, so why not scratch the surface and find out more. Are you ready to join our team?</div>
                    <a href="#" class="secondary-btn-style blue-arrow border-blue color-blue mt-4">
                        <span>Learn More</span>
                        <p class="arrow-btn"></p>
                    </a>
                </div>
            </div>
            <div class="col-md-8 float-container">
                <div class="inner-floating-container">
                    <div class="row">
                        <div class="col-md-4 each-col">
                            <div class="inner-col">
                                <p class="span-label mb-2">Job title:</p>
                                <div class="jobtitle mb-2 secondary-font-style">CUSTOMER SERVICE REPRESENTATIVE</div>
                                <p class="span-label mb-2">Location:</p>
                                <div class="joblocation secondary-font-style">AUCKLAND, NEW ZEALAND</div>
                                <p class="span-label mt-5">Job posted 4 days ago</p>
                                <a href="#" class="secondary-btn-style white-arrow border-white color-white">
                                    <span>Learn More</span>
                                    <p class="arrow-btn"></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 each-col">
                            <div class="inner-col">
                                <p class="span-label mb-2">Job title:</p>
                                <div class="jobtitle mb-2 secondary-font-style">CUSTOMER SERVICE REPRESENTATIVE</div>
                                <p class="span-label mb-2">Location:</p>
                                <div class="joblocation secondary-font-style">AUCKLAND, NEW ZEALAND</div>
                                <p class="span-label mt-5">Job posted 4 days ago</p>
                                <a href="#" class="secondary-btn-style white-arrow border-white color-white">
                                    <span>Learn More</span>
                                    <p class="arrow-btn"></p>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4 each-col">
                            <div class="inner-col">
                                <p class="span-label mb-2">Job title:</p>
                                <div class="jobtitle mb-2 secondary-font-style">CUSTOMER SERVICE REPRESENTATIVE</div>
                                <p class="span-label mb-2">Location:</p>
                                <div class="joblocation secondary-font-style">AUCKLAND, NEW ZEALAND</div>
                                <p class="span-label mt-5">Job posted 4 days ago</p>
                                <a href="#" class="secondary-btn-style white-arrow border-white color-white">
                                    <span>Learn More</span>
                                    <p class="arrow-btn"></p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid news-section pb-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 pt-5">
                <h2 class="main-heading pb-3 pt-5 color-white">Catch up on the latest news from TAB NZ</h2>
            </div>
            <div class="col-md-6">
                <a href="#" class="secondary-btn-style white-arrow border-white color-white">
                    <span>Learn More</span>
                    <p class="arrow-btn"></p>
                </a>
            </div>
        </div>
        <div class="row mt-5 pb-5">
            <?php get_template_part('template-parts/featured') ?>
        </div>
    </div>
</div>

<div class="container-fluid fuel-section pb-5" style="background-image: url(<?php echo $fuel_section['fuel_bg']['url'] ?>)">
    <div class="container text-center" style="padding-top: 90px;">
        <img class="big_text" src="<?php echo $fuel_section['big_text']['url'] ?>" />
        <p class="fuel-small-desc">of sport, racing and communities in New Zealand.</p>
    </div>
</div>