<?php 
    $insta_api = get_post_meta(222, 'insta_api', true);
    $insta_username = get_post_meta(222, 'insta_username', true);
    $insta_frequency = get_post_meta(222, 'insta_frequency', true);

?>
<form method="post" action="" id="insta-settings-form">
    <div class="group-input">
        <label>Instagram API</label>
        <input type="text" name="instaapi" value="<?php echo isset($insta_api) ? $insta_api : ''  ?>" />
    </div>
    <div  class="group-input">
        <label>Username</label>
        <input type="text" name="insta_username" value="<?php echo isset($insta_username) ? $insta_username : ''  ?>" />
    </div>
    <div  class="group-input">
        <label>Frequency</label>
        <input type="text" name="insta_frequency" value="<?php echo isset($insta_frequency) ? $insta_frequency : ''  ?>" />
        <span>Retrieve data in millisecond (ex: 1000 = 1min)</span>
    </div>
    <button type="button" class="button button-primary submit_var_set">Save</button>
    <?php wp_nonce_field('save_insta_nonce', 'save_insta_nonce'); ?>
</form>
<style>
    .group-input {
        margin-top: 15px;
        margin-bottom: 15px;
    }
</style>