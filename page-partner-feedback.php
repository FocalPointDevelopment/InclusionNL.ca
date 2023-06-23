<?php get_header(); ?>
        
    <div class="main-content-single" role="main">
        <div class="content">
            <a id="content"></a>
            <div class="page-banner">
                <img class="banner-image" src="<?php echo get_template_directory_uri();?>/images/man-in-wheelchair-with-tool.webp" aria-hidden="true"/>

                <div class="image-floating-text">
                    <p>A corporate program of</p>
                    <figure>
                        <img src="http://35.183.106.246/wp-content/uploads/2022/11/EmpowerNL-Logo.webp" alt="Empower NL Logo" class="floating-img">
                    </figure>
                </div>
                <h1 class="center">Partner Feedback</h1>
            </div>
        </div>
        <div class="small-body">
            <h2 style="text-align: left">What our partners say...</h2>
            <!-- make a wordpress loop that queries the 'partner_feedback' custom post type and outputs it -->
            <?php
                $args = array(
                    'post_type' => 'Partner Feedback',
                );
                $query = new WP_Query($args);
                if($query->have_posts()){
                    while($query->have_posts()){
                        $query->the_post();
            ?>
                        <div class="quotebox">
                            <p class="quotebox-quote"><?php echo the_field('quote');?></p>
                            <div class="quotebox-credit">
                                <p class="quotebox-name"><?php echo the_field('name');?> </p>
                                <p class="quotebox-title"><?php echo the_field('position');?> </p>
                                <p class="quotebox-company"><a href="<?php echo the_field('website')?>" target="_blank" rel="noopener"><?php the_field('company')?></a></p>
                            </div>
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

<?php get_footer();?>