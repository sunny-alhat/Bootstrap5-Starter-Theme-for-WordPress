<?php
  get_header();
?>

  <div class="container-fluid">

    <?php
      if( have_posts() ){
        while( have_posts() ){

          the_post(); // fetch the data
          the_title(); // page name
          the_content(); // actual page content

        }
      }
    ?>

  </div>

<?php
  get_footer();
?>