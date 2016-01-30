<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="separator">
  <img src="<?php bloginfo('template_directory') ?>/img/post-separator.svg" alt="" width="203" height="auto">
</div>
<header>
  <div class="entry-meta">
    <span class="entry-date"><?php the_time( get_option( 'date_format' ) ); ?></span>
    <ul class="social-buttons">
      <li>
        <a target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title() ?>&summary=<?php $excerpt = strip_tags(get_the_excerpt()); echo $excerpt; ?>" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=420,width=550');return false;">
          <img class="button" src="<?php bloginfo('template_directory') ?>/img/linkedin-share.svg" alt="" width="68" height="auto">
        </a>
      </li>
      <li>
        <a target="_blank" href="https://twitter.com/intent/tweet?text=<?php the_title(); ?>&url=<?php the_permalink(); ?>&via=JohnSherer"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=420,width=550');return false;">
          <img class="button" src="<?php bloginfo('template_directory') ?>/img/twitter-share.svg" alt="" width="71" height="auto">
        </a>
      </li>
      <li>
        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>"  onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=no,scrollbars=no,height=420,width=550');return false;">
          <img class="button" src="<?php bloginfo('template_directory') ?>/img/fb-share.svg" alt="" width="46" height="auto">
        </a>
      </li>
    </ul>
  </div>
  <h1 class="entry-title">
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
      <?php the_title(); ?>
    </a>
  </h1>
  <div class="entry-meta author">
    <span class="author vcard">By <?php the_author_posts_link(); ?></span>
  </div>
</header>

<?php get_template_part( 'entry', ( is_archive() || is_search() ? 'summary' : 'content' ) ); ?>

<!--<?php if ( !is_search() ) get_template_part( 'entry-footer' ); ?>-->
</article>
