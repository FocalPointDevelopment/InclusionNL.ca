<?php get_header(); ?>

<div class="main-content-single" role="main">
        <div class="content">
            <a id="content"></a>
            <div class="page-banner">
                <img class="banner-image" src="<?php echo get_template_directory_uri();?>/images/Man-in-wheelchair-at-concert.webp" aria-hidden="true"/>

                <div class="image-floating-text">
                    <p>A corporate program of</p>
                    <figure>
                        <img src="http://35.183.106.246/wp-content/uploads/2022/11/EmpowerNL-Logo.webp" alt="Empower NL Logo" class="floating-img">
                    </figure>
                </div>
                <h1 class="center">Photo Gallery</h1>
            </div>
        </div>
        <div class="small-body">
            
            <div class="gallery-links">
                <div class="gallery-link">
                    <a href="/gallery-business/" aria-label="Business Events & Awards">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri();?>/images/Biz-TN.webp" alt="Photo Gallery 1">
                        </div>
                        <div class="caption-container">
                            <p>Business Events & Awards</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-link">
                    <a href="/gallery-events/" aria-label="Workshops and Training">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri();?>/images/Training-TN.webp" alt="Photo Gallery 2">
                        </div>
                        <div class="caption-container">
                            <p>Workshops & Training</p>
                        </div>
                    </a>
                </div>
                <div class="gallery-link">
                    <a href="/festivals-gallery/" aria-label="Festivals and Fun">
                        <div class="img-container">
                            <img src="<?php echo get_template_directory_uri();?>/images/Festival-TN.webp" alt="Photo Gallery 3">
                        </div>
                        <div class="caption-container">
                            <p>Festivals & Fun</p>
                        </div>
                    </a>
                </div>
            </div>
            
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


<?php get_footer(); ?>