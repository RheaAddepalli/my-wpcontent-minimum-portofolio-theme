<?php get_header(); ?>

<main id="main" class="site-main">

  <section class="portfolio-section">
    <h2>My Projects</h2>
    
    <div class="portfolio-grid">
      <?php
      $args = array(
        'post_type' => 'portfolio',
        'posts_per_page' => 6,
      );

      $portfolio_query = new WP_Query($args);

      if ($portfolio_query->have_posts()) :
        while ($portfolio_query->have_posts()) : $portfolio_query->the_post(); ?>
          
          <div class="portfolio-item">
            <a href="<?php the_permalink(); ?>">
              <?php if (has_post_thumbnail()) : ?>
                <div class="portfolio-thumb">
                  <?php the_post_thumbnail('medium'); ?>
                </div>
              <?php endif; ?>
              <h3><?php the_title(); ?></h3>
              <p><?php echo wp_trim_words(get_the_content(), 15); ?></p>
            </a>
          </div>

        <?php endwhile;
        wp_reset_postdata();
      else :
        echo '<p>No projects found.</p>';
      endif;
      ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>
