<section class="entry-content">

<?php if ( has_post_thumbnail() ) { ?>
  <a href="<?php the_permalink(); ?>">
    <img src="<?php the_post_thumbnail_url(); ?>" class="featured-image">
  </a>
<?php } ?>

<?php the_content(); ?>
<div class="entry-links"><?php wp_link_pages(); ?></div>
</section>
