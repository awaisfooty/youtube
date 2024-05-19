<?php get_header(); ?>
    <div class="container">
        <h1><?php echo get_the_title();?></h1>
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
            <p><?php echo get_the_content();?></p>
    </div>
<?php get_footer();?>