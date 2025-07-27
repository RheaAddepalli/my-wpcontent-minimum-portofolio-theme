<?php get_header(); ?>

<main class="single-post">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
  ?>
      <article>
        <h1><?php the_title(); ?></h1>
        <p><em>Published on <?php the_time('F j, Y'); ?></em></p>

        <?php if ( has_post_thumbnail() ) : ?>
          <div class="post-thumbnail">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <div><?php the_content(); ?></div>
      </article>
  <?php
    endwhile;
  else :
    echo '<p>No post found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
