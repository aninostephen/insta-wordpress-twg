<?php
function instagram_get_callback( $data ) {
    $data = get_instagram_data();

    $response = array(
        'data' => $data,
        'html' => buffered_html('template-parts/instagram'),
    );

    header( 'Content-Type: application/json' );
    
    echo json_encode( $response );
    exit;
}

add_action( 'rest_api_init', function () {
    register_rest_route( 'instagram/v1', '/get/', array(
        'methods' => 'POST',
        'callback' => 'instagram_get_callback',
    ));
} );
