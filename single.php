<?php
  get_header();
?>

  <div class="container-fluid">

    <?php
      if( have_posts() ){
        while( have_posts() ){

            //fetch the data
            the_post(); 

            // load the content as per template
            get_template_part('template-parts/content','article');

        }
      }
    ?>

  </div>

<?php
  get_footer();
?>