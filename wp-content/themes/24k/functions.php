<?php
/** Start the engine */
require_once( get_template_directory() . '/lib/init.php' );

/** Child theme (do not remove) */
define( 'CHILD_THEME_NAME', '24k Child Theme' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/themes/24k' );

/** Add support for custom background */
add_custom_background();

/** Add support for custom header */
add_theme_support( 'genesis-custom-header', array( 'width' => 960, 'height' => 90 ) );

/** Add support for 3-column footer widgets */
add_theme_support( 'genesis-footer-widgets', 3 );

/** Relocate the post info function */
remove_action( 'genesis_before_post_content', 'genesis_post_info' );
add_action( 'genesis_before_post_title', 'genesis_post_info' );

/** Customize the post info function */
add_filter( 'genesis_post_info', 'post_info_filter' );
function post_info_filter($post_info) {
if (!is_page()) {
    $post_info = '<div class="post-date"><span class="month">[post_date format="M"]</span><span class="day">[post_date format="d"]</span></div>[post_categories before=""]<div class="post-tags">[post_tags before=""]</div><div class="comment-number">[post_comments zero="0" one="1" more="%"]</div>';
    return $post_info;
}}