<?php get_header();

$args = array(
    'post_type' => 'post',
    'posts_per_page' => 10
);
$the_query = new WP_Query($args);

// The Loop
if ($the_query->have_posts()) {
    echo '<ul>';
    while ($the_query->have_posts()) {
        $the_query->the_post();
        echo '<a href=' . get_the_permalink() . '>' . get_the_title() . ' </a> <br>';

    }
    echo '</ul>';
}
/* Restore original Post Data */

get_footer();
?>