<?php

function get_instagram_data() {
    $insta_api = get_post_meta(222, 'insta_api', true);
    $insta_username = get_post_meta(222, 'insta_username', true);

    //$api_url = 'https://graph.instagram.com/v12.0/'. $insta_username .'/media?fields=id,caption,media_type,media_url,permalink,timestamp&access_token='. $insta_api;
    $api_url = 'https://www.instagram.com/graphql/query?query_hash=f2405b236d85e8296cf30347c9f08c2a&id='. $insta_username .'&first=1';

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($ch);

    curl_close($ch);
    return json_decode($response, true);
}

function buffered_html($html) {
    ob_start();
    get_template_part($html);
    $buffered_content = ob_get_contents();
    ob_get_clean();
    ob_end_flush();

    return $buffered_content;
}