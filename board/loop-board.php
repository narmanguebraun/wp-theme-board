<?php if ( have_posts() ) : ?>
  <?php while ( have_posts() ) : the_post(); ?>
    <article <?php post_class('box'); ?> id="post_<?php the_ID(); ?>">
      <div class="content">
        <a href="<?php the_permalink() ?>" class="thumb">
          <figure>
            <?php if ( has_post_thumbnail() ) {
              the_post_thumbnail('large');
              } 
              else { ?>
              <img src="<?php bloginfo('template_directory'); ?>/assets/img/thumb.jpg" alt="<?php the_title(); ?>" />
            <?php } ?>
          </figure>
        </a>
        <header>
          <h3><a href="<?php the_permalink() ?>" title="<?php printf( esc_attr__('Permalink to %s') ); ?>" rel="bookmark"><?php the_title(); ?></a></h3>
        </header>
      </div>
    </article>
  <?php endwhile; ?>
<?php endif; ?>
