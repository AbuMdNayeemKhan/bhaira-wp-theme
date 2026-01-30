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

// Page navfunction
function bhaira_pagenav(){
    global $wp_query, $wp_rewrite;
    $pages = '';
    $max = $wp_query -> max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;
    $args['base'] = str_replace(99999999, '%#%', get_pagenum_link(99999999));
    $args['total'] = $max;
    $args['current'] = $current;
    $total = 1;
    $sargs['prev_text'] = 'prev';
    $sargs['next_text'] = 'next';
    if ($max > 1) {
        echo '</pre>
        <div class="wp_pagenav">';
        if ($total == 1) {
            $pages = '<p class="pages">' . $current . ' <span>of</span> ' . $max . '</p>';
            echo $pages;
        }
        echo paginate_links($args);
        echo '</div><pre>';
    }
}
?>