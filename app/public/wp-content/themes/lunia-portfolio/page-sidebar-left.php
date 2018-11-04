<?php define('WP_USE_THEMES', false); get_header();
// Template Name: Left Sidebar
?>

<section class="two-column row no-max pad">
  <div class="small-12 columns">
    <div class="row">
      <!-- Primary Column -->
      <div class="small-12 medium-7 medium-offset-1 medium-push-4 columns">
        <div class="primary">

          <?php
                                  // START LOOP
?>
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
          <h1>
            <?php the_title() ?>
          </h1>
          <hr>
          <p>
            <?php the_content() ?>
          </p>
          <?php endwhile; else : ?>
          <p>
            <?php esc_html_e('Sorry, no pages found.'); ?>
          </p>
          <?php endif; ?>
          <?php
                                  // END LOOP
?>
        </div><!-- end primary class -->
      </div>
      <!--end primary col  -->


      <!-- Secondary Column / Sidebar-->
      <div class="small-12 medium-4 medium-pull-8 columns">
        <div class="secondary">
          <h2 class="module-heading">Sidebar</h2>
        </div>
      </div>
    </div><!-- end section row -->
  </div><!-- end section col -->
</section> <!-- end section  -->



<?php get_footer();
