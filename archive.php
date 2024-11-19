<?php
  get_header();
?>

  <div class="container-fluid">
    <div class="row">
      <?php

        if( have_posts() ){
          while( have_posts() ){

            //fetch the data
            the_post(); 

            // load the content as per template
            get_template_part('template-parts/content','archive');

          }
        }
      ?>
    </div>

    <!-- Pagination -->
    <?= the_posts_pagination(); ?>
  </div>

<?php
  get_footer();
?>