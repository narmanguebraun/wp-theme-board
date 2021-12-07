<?php get_header(); ?>

<section id="page" class="clear-self">
  <div class="wrapper">
    <?php if ( have_posts() ) : ?>
      <?php while ( have_posts() ) : the_post(); ?>
      <article <?php post_class('block'); ?> id="post_<?php the_ID(); ?>">
        <header><h3><?php the_title(); ?></h3></header>
        <div class="content">
          <p><?php the_content(); ?></p>
        </div>
      </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </div>
</section>

<section id="navigation" class="clear-self">
  <?php next_post_link( '%link', '&larr; Prev.', TRUE ); ?>
  <?php previous_post_link( '%link', 'Next &rarr;', TRUE ); ?>
</section>

<?php get_footer(); ?>
