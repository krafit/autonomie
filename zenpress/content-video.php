<?php
/**
 * @package ZenPress
 * @since ZenPress 1.0.0
 */
?>

<article <?php zenpress_post_id(); ?> <?php post_class(); ?><?php zenpress_semantics("post"); ?>>
  <?php get_template_part( 'entry', 'header' ); ?>

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
  <div class="entry-summary p-summary" itemprop="description">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content e-content" itemprop="description articleBody">
    <?php zenpress_the_post_thumbnail('<p>', '</p>'); ?>
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'zenpress' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'zenpress' ), 'after' => '</div>' ) ); ?>
  </div><!-- .entry-content -->
  <?php endif; ?>

  <?php get_template_part( 'entry', 'footer' ); ?>
</article><!-- #post-<?php the_ID(); ?> -->
