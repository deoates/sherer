<?php get_header(); ?>
<section id="content" role="main">
<?php if ( is_front_page() || is_home() || is_front_page() && is_home() ) { ?>

  <section class="cta-section">
    <header>
      <h1>Growing a sales org from<br> nothing to <span class="stars">ten mill</span> ARR</h1>
    </header>
    <div class="entry-content">
      <div class="headshot-container">
        <img class="headshot" src="<?php bloginfo('template_directory') ?>/img/headshot-fancy.jpg" alt="John Sherer">
        <br>
        <a target="blank" href="https://www.linkedin.com/in/johnsherer">
          <img class="button" src="<?php bloginfo('template_directory') ?>/img/li-connect.svg" alt="Connect with John Sherer on Linkedin" width="122" height="29">
        </a>
      </div><!-- headshot -->
      <p>
        I’m John Sherer, and I’m building a sales org from the ground up at Appcues, a product-first SaaS startup in Boston.
      </p>
      <p>
        I’ve found there’s no playbook for scaling a sales org. Even if there was, it wouldn’t be much help. Every business is different. What works for them probably won’t work for you.
      </p>
      <p>
        This isn’t a playbook. It’s up-to-the-minute learnings on working with product, compensation, inbound sales, hiring, and more.
      </p>
      <p>
        Join me on this journey to $10M ARR.
      </p>
    </div><!-- entry-content -->

    <div class="form-container">
      <form class="subscribe">
        <input type="email" placeholder="your@email.com">
        <input type="submit" value="Subscribe">
      </form>
    </div>
  </section><!-- cta-section -->

  <section class="kindwords">
    <header>
      <img class="divider" src="<?php bloginfo('template_directory') ?>/img/divider.svg" alt="" width="81" height="29">
      <h1> Kind Words </h1>
      <h2>from people I respect</h2>
    <header>
    <div class="accolades-container">
      <ul class="accolades">
        <li>
          <img src="<?php bloginfo('template_directory') ?>/img/balfour.jpg" alt="Brian Balfour" width="66" height="auto">
          <p>
            <strong>John’s approach to building a sales org at Appcues has been data-driven and results-oriented.</strong>
            <br><br>
            <strong>
            Brian Balfour
            </strong>
            <br>
            VP Growth, Signals
          </p>
        </li>
        <li>
          <img src="<?php bloginfo('template_directory') ?>/img/balfour.jpg" alt="Brian Balfour" width="66" height="auto">
          <p>
            <strong>John’s approach to building a sales org at Appcues has been data-driven and results-oriented.</strong>
            <br><br>
            <strong>
            Brian Balfour
            </strong>
            <br>
            VP Growth, Signals
          </p>
        </li>
        <li>
          <img src="<?php bloginfo('template_directory') ?>/img/balfour.jpg" alt="Brian Balfour" width="66" height="auto">
          <p>
            <strong>John’s approach to building a sales org at Appcues has been data-driven and results-oriented.</strong>
            <br>
            <br>
            <strong>
            Brian Balfour
            </strong>
            <br>
            VP Growth, Signals
          </p>
        </li>
      </ul>
        
    </div>
  </section>
  <section id="most-popular" class="popular"><!-- most popular posts -->
    <header>
      <img class="divider" src="<?php bloginfo('template_directory') ?>/img/divider.svg" alt="" width="81" height="29">
      <h1> Writing On Sales </h1>
      <h2> my most popular posts</h2>
    <header>
    <div class="collection-container">
      <div class="collection">
        <a href="/category/inbound-sales">
          <h1>Inbound Sales</h1>
        </a>
        <ul class="post-listing">
          <?php query_posts('cat=3'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <h1><?php the_title(); ?></h1>
                  <p><?php the_excerpt(); ?></p>
                </a>
              </li>
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
        </ul>
        <a href="/category/inbound-sales">
          <img class="button" src="<?php bloginfo('template_directory') ?>/img/see-all-button.svg" alt=""  height="auto">
        </a>
      </div>
      <div class="collection">
        <a href="/category/inbound-sales">
          <h1>Inbound Sales</h1>
        </a>
        <ul class="post-listing">
          <?php query_posts('cat=3'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <h1><?php the_title(); ?></h1>
                  <p><?php the_excerpt(); ?></p>
                </a>
              </li>
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
        </ul>
        <a href="/category/inbound-sales">
          <img class="button" src="<?php bloginfo('template_directory') ?>/img/see-all-button.svg" alt=""  height="auto">
        </a>
      </div>
      <div class="collection">
        <a href="/category/inbound-sales">
          <h1>Inbound Sales</h1>
        </a>
        <ul class="post-listing">
          <?php query_posts('cat=3'); ?>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <li>
                <a href="<?php the_permalink(); ?>">
                  <h1><?php the_title(); ?></h1>
                  <p><?php the_excerpt(); ?></p>
                </a>
              </li>
          <?php endwhile; endif; ?>
          <?php wp_reset_query(); ?>
        </ul>
        <a href="/category/inbound-sales">
        <img class="button" src="<?php bloginfo('template_directory') ?>/img/see-all-button.svg" alt=""  height="auto">
        </a>
      </div>
  </section><!-- most popular posts -->
  <section id="most-recent" class="most-recent"><!-- most recent posts -->
    <header>
      <img class="divider" src="<?php bloginfo('template_directory') ?>/img/divider.svg" alt="" width="81" height="29">
      <h1> Most Recent Posts </h1>
    <header>
      <?php query_posts('showposts=3'); ?>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <?php get_template_part( 'entry' ); ?>
      <?php comments_template(); ?>
      <?php endwhile; endif; ?>
      <?php wp_reset_query(); ?>
      <br><br>
      <a href="/posts">
        <img class="button" src="<?php bloginfo('template_directory') ?>/img/see-all-button.svg" alt=""  height="auto">
      </a>
  </section><!-- most recent -->
<?php } ?>

</section>
<?php get_footer(); ?>
