<?php
if (!defined('WP_UNISNSTALL_PLUGIN')) {
    die;
}

$posts = get_post( [
    'post_type' => 'kurio_track',
    'numberposts' => -1,
    'post_status' => 'any'
]);
foreach ($posts as $post) {
    wp_delete_post( $post->ID, true );
}

remove_role( 'staff' );
remove_role( 'manager' );