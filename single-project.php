<?php get_header(); ?>

<main class="single-project">
  <?php
  if ( have_posts() ) :
    while ( have_posts() ) : the_post();
  ?>
      <article>
        <h1><?php the_title(); ?></h1>
        <?php if ( has_post_thumbnail() ) : ?>
          <div class="project-image">
            <?php the_post_thumbnail('large'); ?>
          </div>
        <?php endif; ?>
        
        <div class="project-content">
          <?php the_content(); ?>
        </div>

        <p class="project-meta">
          <strong>Published on:</strong> <?php the_date(); ?>
        </p>
      </article>
  <?php
    endwhile;
  else :
    echo '<p>No project found.</p>';
  endif;
  ?>
</main>

<?php get_footer(); ?>
