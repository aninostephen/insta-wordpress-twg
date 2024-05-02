<?php 
    $data = get_instagram_data();
    if (isset($data) && count($data['data']) > 0) :

        $post = $data['data'][0];
        $date = new DateTime($post['timestamp']);
        
?>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cf-left-container">
                    <p><?php echo $post['caption']; ?></p>

                    <!-- <div class="cf-date">*2021/22 season</div> -->
                    <div class="cf-date">*<?php echo $date->format('Y/y'); ?> season</div>
                </div>
            </div>
            <div class="col-md-5">
                <!-- <a href="#" class="mainbtn mtopbtn"><?php echo $aboutus_section['about_learn_btn'] ?></a> -->
                <a href="<?php echo $post['permalink'] ?>" target="_blank" class="secondary-btn-style blue-arrow border-blue color-blue mt-4 background-color-white cus-pos">
                    <span>Learn More</span>
                    <p class="arrow-btn"></p>
                </a>
            </div>
        </div>
    </div>

<?php endif; ?>