<?php get_header(); ?>

<div class="container" role="main">
    <div class="content">
        <a id="content"></a>
        <div class="page-banner">
            <img class="banner-image" src="<?php echo get_template_directory_uri();?>/images/News-Header-1024x373.webp" aria-hidden="true"/>

            <div class="image-floating-text">
                <p>A corporate program of</p>
                <figure>
                    <img src="http://35.183.106.246/wp-content/uploads/2022/11/EmpowerNL-Logo.webp" alt="Empower NL Logo" class="floating-img">
                </figure>
            </div>
            <h1 class="center">News & Events</h1>
        </div>

        <div class="small-body">

            <div class="news-cards">
            <?php
                $args = array(
                    'post_type' => 'News',
                );
                $query = new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
            ?>
                    <div class="news-card">
                        <h2 class="news-title"><?php the_title(); ?></h2>
                        <p class="news-date"><?php echo get_field('publish_date'); ?></p>
                        <p class="news-summary"><?php echo get_field('summary'); ?></p>
                        <a href="<?php the_permalink(); ?>" class="news-link">Read More</a>
                    </div>
                <?php }
                }
            ?>
        </div>

        <div class="EARN-NL-banner"
            style='
                    background-image: linear-gradient(rgba(3,118,128,0.89),rgba(3,118,128,0.89)),url("<?php echo get_template_directory_uri()?>/images/Services-Banner.webp") !important;
                    background-size: auto,cover !important;
                    background-position: 50% 50%,0% 50% !important;
                    background-attachment: scroll,scroll !important;
                    background-repeat: no-repeat,no-repeat !important;
                    --background-image: linear-gradient(rgba(3,118,128,0.89),rgba(3,118,128,0.89)),url("<?php echo get_template_directory_uri()?>/images/Services-Banner.jpg")!important;
                    --background-size: auto,cover!important;
                    --background-position: 50% 50%,0% 50%!important;
                    --background-attachment: scroll,scroll!important;
                    --background-repeat: no-repeat,no-repeat!important;
                    --tve-applied-background-image: linear-gradient(rgba(3,118,128,0.89),rgba(3,118,128,0.89)),url("<?php echo get_template_directory_uri()?>/images/Services-Banner.jpg")!important;
                '
            >
            <div class="EARN-NL-banner-content">
                <h2>JOIN EARN-NL</h2>
                <img src="<?php echo get_template_directory_uri();?>/images/EARN-NL-Logo-White-500px.webp" alt="EARN-NL Logo" class="service-banner-logo">
                <p><a href="/contact">Contact us</a> to find out how!</p>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>