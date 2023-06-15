<?php
get_header();
?>

<h1>
    <?php echo get_the_title() ?>
</h1>
<p>
    <?php echo get_the_content() ?>

</p>

<?php

if (have_posts()) {
    while (have_posts()) {
        the_post();

        echo '<li>' . get_the_permalink() . '</li>';
    }
}

?>

<?php

get_footer();

?>