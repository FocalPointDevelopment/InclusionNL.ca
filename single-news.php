<?php get_header(); ?>
    

    <div class="main-content-single" role="main">
        <a id="content"></a>
        <div class="small-body">
        <?php 
        while(have_posts()){
            the_post(); ?>

            <h1><?php the_title();?></h1>
            <p><?php the_field('publish_date');?><p>
            <?php the_content();?>

        <?php }?>
        </div>

    </div>

<?php get_footer();?>