<?php
  get_header();
?>

  <div class="container-fluid">

    <?php
      if( have_posts() ){
        while( have_posts() ){

          the_post(); // fetch the data

          // load the content as per template
          get_template_part('template-parts/content','page');

        }
      }
    ?>

  </div>

<?php
  get_footer();
?>