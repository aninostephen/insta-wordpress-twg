<?php
function instagram_get_callback( $data ) {
    $data = get_instagram_data();
    $extract_data = extract_data($data);
    $response = array(
        'data' => $extract_data,
        'html' => buffered_html('template-parts/instagram'),
    );

    header( 'Content-Type: application/json' );
    
    echo json_encode( $response );
    exit;
}

function extract_data($data) {
    $image_url = '';
    $caption = '';
    $formatted_date = '';
    $permalink = '';
    if (isset($data['data'])) {
        $user_data = $data['data'];
    
        if (isset($user_data['user']) && isset($user_data['user']['edge_owner_to_timeline_media']) && isset($user_data['user']['edge_owner_to_timeline_media']['edges'])) {
            $posts = $user_data['user']['edge_owner_to_timeline_media']['edges'];
    
            foreach ($posts as $post) {
                // Access media information for each post
                $media = $post['node'];
    
                $image_url = $media['display_url'];
                $image_data = file_get_contents($image_url);
                file_put_contents(get_template_directory().'/assets/1.jpg', $image_data);
                if (isset($media['edge_media_to_caption']['edges'][0]['node']['text'])) {
                    $caption = $media['edge_media_to_caption']['edges'][0]['node']['text'];
                }
                $permalink = 'https://www.instagram.com/p/' .$media['shortcode'];
                $date = $media['taken_at_timestamp'];
                $date = new DateTime("@$date");
                $formatted_date = $date->format('Y/y');
            }
        }
    }

    return array(
        'image' => get_template_directory_uri().'/assets/1.jpg',
        'caption' => $caption,
        'date' => $formatted_date,
        'permalink' => $permalink
    );
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'instagram/v1', '/get/', array(
        'methods' => 'POST',
        'callback' => 'instagram_get_callback',
    ));
} );
