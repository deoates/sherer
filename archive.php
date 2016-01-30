<?php
/*
Template Name: Archives
*/
?>

<?php get_sidebar(); ?>
<?php get_header(); ?>

<section id="content" role="main">
  <section><!-- most recent posts -->
      <?php query_posts(); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'entry' ); ?>
      <?php comments_template(); ?>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
      <?php get_template_part( 'nav', 'below' ); ?>
  </section><!-- most recent -->
</section>
<?php get_footer(); ?>
