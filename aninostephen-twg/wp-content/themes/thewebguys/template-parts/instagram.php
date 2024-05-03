<?php 
    $data = get_instagram_data();
    $extract_data = extract_data($data);
    if ($extract_data['caption']) :

        $post = $extract_data['caption'];
        $date = $extract_data['date'];
        $permalink = $extract_data['permalink'];
?>

    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="cf-left-container">
                    <p><?php echo $post; ?></p>

                    <!-- <div class="cf-date">*2021/22 season</div> -->
                    <div class="cf-date">*<?php echo $date; ?> season</div>
                </div>
            </div>
            <div class="col-md-5">
                <!-- <a href="#" class="mainbtn mtopbtn"><?php echo $aboutus_section['about_learn_btn'] ?></a> -->
                <a href="<?php echo $permalink ?>" target="_blank" class="secondary-btn-style blue-arrow border-blue color-blue mt-4 background-color-white cus-pos">
                    <span>Learn More</span>
                    <p class="arrow-btn"></p>
                </a>
            </div>
        </div>
    </div>

<?php endif; ?>