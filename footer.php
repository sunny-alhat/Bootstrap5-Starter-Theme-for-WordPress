<footer class="bg-light py-5 mt-5">
    <div class="container">
        <div><?php dynamic_sidebar('footer-copyright-widget') ?></div>
    </div>
</footer>

<?php
    // Insert footer scripts
    wp_footer();

    // Header Scripts Widget
    dynamic_sidebar('footer-scripts-widget') 
?>

</body>
</html>