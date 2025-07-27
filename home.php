<?php
get_header();
?>

<h1>Blog Posts</h1>

<?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <div><?php the_excerpt(); ?></div>
    <?php endwhile;
else :
    echo '<p>No posts found.</p>';
endif;
?>

<?php
get_footer();
?>
