<?php 
/*
Template Name: Gallery
*/
get_header();
?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"> <?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div> 
    </div> 
</div>
<div class="page-content">
    <div class="section-xl">
        <div class="container">
            <div class="row">
                <?php
                if(have_rows('gallery_images')):
                    while(have_rows('gallery_images')): the_row();
                        $images = get_sub_field('images');
                ?>
                        <div class="col-md-4">
                            <a href="<?=$images['url'];?>" data-fancybox="gallery" data-caption="<?=esc_attr($images['alt']);?>">
                                <img class="img-fluid" src="<?=$images['url'];?>" alt="<?=esc_attr($images['alt']);?>" style="margin-bottom: 20px; border-radius: 5px;">
                            </a>
                        </div>        
                <?php
                    endwhile;
                endif;
                ?>
            </div>
        </div>
    </div>
</div>
<?php // echo do_shortcode('[foogallery id="814"]');  ?>
<!-- Page Content End -->



<?php 
 get_footer();
 ?>