<?php get_header(); ?>

<main class="single-portfolio">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
  ?>
      <article>
        <h1><?php the_title(); ?></h1>

        <!-- ✅ Display Featured Image -->
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="portfolio-thumbnail">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>

        <p><em>Published on <?php the_time('F j, Y'); ?></em></p>
        <div><?php the_content(); ?></div>
      </article>
  <?php
    endwhile;
  else :
    echo '<p>No portfolio project found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
