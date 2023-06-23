<!DOCTYPE html>
<html lang="en">
    <head>
    <style>
            /*---------------------------------------------------
            HEADER /NAVIGATION
            -----------------------------------------------------*/
            @media (min-width: 800px) {
                .nav-toggle{
                    display: none;
                    clear: left;
                }
                
                .nav-container {
                    text-align: center;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    /* background-color: #333; */
                }

                .nav{
                    display: flex;
                    flex-direction: row;
                    list-style-type: none;
                    border-right:1px solid #bbb;
                    padding-top: 0;
                }

                /* .nav > li:last-child {
                    border-right: none;
                } */

                .nav > li a {
                    display: block;
                    color: black;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                    font-size: 24px;
                }

                .nav > li a:hover:not(.active) {
                    color: #5b1300;
                }

                .nav > .active a {
                    color: #5b1300;
                }
            }
            @media (max-width: 800px) {
                .nav-toggle{
                    display: block;
                    text-align: center;
                    /* background-color: orange; */
                    padding: 5px;
                    padding-top: 8px;
                }
                
                .nav-toggle > a{
                    color: black;
                }
                
                .nav {
                    display: none;
                    list-style-type: none;
                    margin: 0;
                    padding: 0;
                    overflow: hidden;
                    background-color: #333;
                }

                /* .nav > li {
                    border-right:1px solid #bbb;
                }

                .nav > li:last-child {
                    border-right: none;
                } */

                .nav > li a {
                    display: block;
                    color: #33333333;
                    text-align: center;
                    padding: 14px 16px;
                    text-decoration: none;
                }

                .nav > li a:hover:not(.active) {
                    background-color: none;
                }

                .nav > .active {
                    background-color: none;
                }
            }
            /*---------------------------------------------------
                END HEADER NAVIGATION
            -----------------------------------------------------*/
        </style>
        <?php
            $current_slug = add_query_arg( array(), $wp->request );
            if(strlen($current_slug) < 2){
                $current_slug = "Home";
            }
        ?>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo get_bloginfo( 'name' ) . ' - ' . ucfirst($current_slug); /* - add page uri like the "You are here php code*/ ?></title>

        <!-- <link rel="stylesheet" href="styles.css" /> -->
        <link rel="icon" href="<?php echo get_theme_file_uri('/images/Logo - Transparent (1).png')?>" sizes="192x192" />
        
        <?php wp_head(); ?>
    </head>
    <header>
        <a href="#content" class="accessibility-content-skip">Skip to main content</a>  
        <div id="header-black-bar">
            <form role="search" action="/search/" method="GET">
                <input type="text" name="search_query" id="search" placeholder="Search" />
                <button type="submit" id="search-button"><i class="fa fa-search"></i></button>
            </form>
            
            <ul class="social-links" style="width: max(200px, 30%)">
                <li><a href="https://www.facebook.com/InclusionNL/" aria-label="Facebook link"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="https://www.instagram.com/inclusionnl/" aria-label="Instagram link"><i class="fa fa-instagram"></i></a></li>
                <li><a href="https://twitter.com/InclusionNL" aria-label="Twitter link"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/company/inclusionnl/" aria-label="Linkedin link"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="tel:7096973323" aria-label="local phone number link: 7096873323"><i class="fa fa-mobile"></i></a></li>
                <li><a href="tel:18445171376" aria-label="toll-free phone number link: 18445171376"><i class="fa fa-phone"></i></a></li>
                <li><a href="mailto:manager@inclusionnl.ca" aria-label="email manager@inclusionnl.ca"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>
        <div id="header-content">
            
            <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                $logo_uri = $logo[0];
            ?>
                
            <a href="/index.php" aria-label="Home"><image src="<?php echo $logo_uri; ?>" alt="" class="logo"/></a>  
        
        <div class="nav-container">
            <div class="nav-toggle">
                <a href="javascript:void(0);" class="icon" onclick="toggle_mobile_nav()" aria-label="Show menu">
                    <i class="fa fa-bars" style="width: 100%; height: 100%"></i>
                </a>
            </div>
            <?php
                $current_slug = add_query_arg( array(), $wp->request );
            ?>
            <nav>
                <ul class="nav" id="nav-ul">
                    <li <?php if($current_slug == ""){ echo 'class="active"'; }?>><a href="<?php echo get_home_url(); ?>" aria-label="Home, keyboard shortcut ALT+1">Home</a></li>
                    <li <?php if(str_contains($current_slug, "services")){ echo 'class="active"'; }?>><a href="/services/" aria-label="Services, keyboard shortcut ALT+2">Services</a></li>                    
                    <li <?php if(str_contains($current_slug, "news")){ echo 'class="active"'; }?>><a href="/news/" aria-label="News, keyboard shortcut ALT+3">News</a></li>
                    <li <?php if(str_contains($current_slug, "gallery")){ echo 'class="active"'; }?>><a href="/photo-gallery/" aria-label="Gallery, keyboard shortcut ALT+4">Gallery</a></li>
                    <li <?php if(str_contains($current_slug, "partner-feedback")){ echo 'class="active"'; }?>><a href="/partner-feedback/" aria-label="Partner feedback, keyboard shortcut ALT+5">Partner Feedback</a></li>
                    <li <?php if(str_contains($current_slug, "contact")){ echo 'class="active"'; }?>><a href="/contact/" aria-label="Contact, keyboard shortcut ALT+6">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <body>