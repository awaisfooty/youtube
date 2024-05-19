<?php get_header(); ?>
    <div class="container">
        <div class="row py-5">
        <div class="col-md-6 col-lg-6 col-sm-12">
            <h1><?php echo get_the_title();?></h1>
            <p><?php echo get_the_content();?></p>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12">
        <?php 
            $img = wp_get_attachment_image_src(get_post_thumbnail_id(),'full');
            if ($img == ''){
            ?>
            <?php
            }else {
                ?>
                    <img class="new-post" src="<?php echo $img[0]; ?>" alt="">
                <?php
            }
            ?>
        </div>
        </div>
    </div>
<?php get_footer();?>