<?php
// Theme Title
add_theme_support('title-tag');

// Thmbnil Image Area
add_theme_support( 'post-thumbnails', array('page', 'post'));
add_image_size('post-thumbnails', 970, 350, true);

// Except read more button add
function bhaira_excerpt_more($more){
    return '<a class="excerpt-readmore-btn" href="'. get_permalink( get_the_ID(  ) ) .'"> Read More </a>';
};
add_filter( 'excerpt_more', 'bhaira_excerpt_more' );

// Except lenth Control
function bhaira_excerpt_length($length){
    return 36;
}
add_filter( 'excerpt_length', 'bhaira_excerpt_length', 999 );
?>