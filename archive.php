<?php
  get_header();
?>

  <div class="container-fluid">
    <div class="container">

      <div class="row g-3">
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
      <div class="custom-pagination mt-4">
        <?= the_posts_pagination(); ?>
      </div>
      
    </div>
  </div>

<?php
  get_footer();
?>