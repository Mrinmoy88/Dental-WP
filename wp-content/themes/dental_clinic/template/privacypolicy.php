<?php
/*
Template Name: Privacy policy
*/
get_header(); 
?>
<div class="container" style="margin: 25px 50px;">
<div class="content">
    <?php
    while (have_posts()) : the_post();
        the_content();
    endwhile;
    ?>
</div>
</div>
<?php
get_footer();
?>
