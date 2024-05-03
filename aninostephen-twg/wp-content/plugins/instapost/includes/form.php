<?php 
    $insta_username = get_post_meta(222, 'insta_username', true);
    $insta_frequency = get_post_meta(222, 'insta_frequency', true);

?>
<form method="post" action="" id="insta-settings-form">
    <div  class="group-input">
        <label>Username</label>
        <input type="text" name="insta_username" value="<?php echo isset($insta_username) ? $insta_username : ''  ?>" />
        <span>Get you're Instagram User Id <a href="https://commentpicker.com/instagram-user-id.php">Get UserID</a></span>
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