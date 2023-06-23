<?php get_header();?>
    <div class="container" role="main" >
        <div class="main-content">
            <a id="content"></a>
            <div class="page-banner">
                <img class="banner-image" src="<?php echo get_template_directory_uri();?>/images/man-in-wheelchair-with-tool.webp" aria-hidden="true"/>

                <div class="image-floating-text">
                    <p>A corporate program of</p>
                    <figure>
                        <img src="http://35.183.106.246/wp-content/uploads/2022/11/EmpowerNL-Logo.webp" alt="Empower NL Logo" class="floating-img">
                    </figure>
                </div>
            </div>

            <div class="small-body">
                <section>
                    <h1 class="center">InclusionNL: Employer Support Services</h1>
                    <p>A corporate program of Empower, The Disability Resource Centre that provides supports, services, and information to businesses in Newfoundland and Labrador on accessibility, inclusion, disability confidence, and inclusive employment.</p>

                    <div class="fp-row-reverse" style="background-image: url(/wp-content/uploads/2022/11/Services-Banner-1024x350-1.webp);">
                        <div class="fp-row-content">
                            <h2>Developing Partnerships</h2>
                            <p>InclusionNL focuses on developing partnerships with NL businesses and employers to increase access in 
                            hiring people with disabilities, interacting with employees and customers with disabilities, and increasing 
                            overall workplace accessibility and inclusion, which in turn benefits business in many ways.</p>
                        </div>
                    </div>
                    <div class="fp-row" style="background-image: url(/wp-content/uploads/2022/11/Inclusive-Workplace-TN.webp);">
                        <div class="fp-row-content">
                            <h2>InclusionNL and YOU</h2>
                            <p>InclusionNL provides support to:</p>
                            <ul style="font-size: 22px">
                                <li>Businesses - small, medium and large</li>
                                <li>Employers</li>
                                <li>Government</li>
                                <li>Not-for-profit organizations</li>
                                <li>Post-secondary institutions</li>
                            </ul>
                            <p>We'll also provide support to festivals, conferences and other events.</p>
                        </div>
                    </div>
                    <div class="fp-row-reverse" style="background-image: url(/wp-content/uploads/2022/11/resources.webp);">
                        <div class="fp-row-content">
                            <h2>Join the inclusive employment movement!</h2>
                            <p>22% of the Canadian population (15 years and older) self-identify as having a disability and experience barriers in their workplace and community.*  In Newfoundland and Labrador, this represents close to <strong>114,500 individuals</strong> in our province – a significant employee talent pool and market potential that is largely untapped!</p>
                            <p style="font-size: 14px;"><i>* According to the Statistics Canada, Canadian Survey of Disability, conducted in 2017<i></p>
                        </div>
                    </div>

                    <!-- Querry the custom post type 'partner feedback' for the post with the 'focused_pages' field equals 'home' -->
                    <?php
                        $args = array(
                            'post_type' => 'Partner Feedback',
                            'meta_query' => array(
                                array(
                                    'key' => 'focused_pages',
                                    'value' => 'home',
                                    'compare' => 'LIKE'
                                )
                            )
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
                </section>
                <section>
                    <h2>Photo Gallery</h2>
                    <div class="gallery-links">
                        <div class="gallery-link">
                            <a href="#">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri();?>/images/Biz-TN.webp" alt="Business & Events image" width=300/>
                                </div>
                                <div class="caption-container">
                                    <p class="center">Business Events & Awards</p>
                                </div>
                            </a>
                        </div>
                        <div class="gallery-link">
                            <a href="#">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri();?>/images/Training-TN.webp" alt="Business & Events image" width=300/>
                                </div>
                                <div class="caption-container">
                                    <p class="center">Workshops & Training</p>
                                </div>
                            </a>
                        </div>
                        <div class="gallery-link">
                            <a href="#">
                                <div class="img-container">
                                    <img src="<?php echo get_template_directory_uri();?>/images/Festival-TN.webp" alt="Business & Events image" width=300/>
                                </div>
                                <div class="caption-container">
                                    <p class="center">Festivals & Fun</p>
                                </div>
                            </a>
                        </div>
                    </div> 
                </section>
            </div> <!-- End of small body -->

            <!-- <div class="thrive-shortcode-html thrive-symbol-shortcode " data-symbol-id="1800"><style class="tve-symbol-custom-style">@media (min-width:300px){.thrv_symbol_1800 [data-css="tve-u-185602fa8d6"]{float:none;width:500px;margin:0px auto 10px !important;padding-bottom:0px !important;padding-top:0px !important;}.thrv_symbol_1800 [data-css="tve-u-185602fa8d8"]{padding-bottom:10px !important;padding-top:0px !important;border-right:none !important;}:not(#tve) .thrv_symbol_1800 [data-css="tve-u-185602fa8d4"]{letter-spacing:2px;color:rgb(249,249,249) !important;--tcb-applied-color:rgb(249,249,249)!important;--tve-applied-color:rgb(249,249,249)!important;}.thrv_symbol_1800 [data-css="tve-u-185602fa8d2"]{max-width:787px;min-width:auto;min-height:1px !important;}.thrv_symbol_1800 [data-css="tve-u-185602fa8d1"]{background-image:linear-gradient(rgba(3,118,128,0.89),rgba(3,118,128,0.89)),url("http://inclusionnl.ca/wp-content/uploads/2019/01/Services-Banner.jpg") !important;background-size:auto,cover !important;background-position:50% 50%,0% 50% !important;background-attachment:scroll,scroll !important;background-repeat:no-repeat,no-repeat !important;--background-image:linear-gradient(rgba(3,118,128,0.89),rgba(3,118,128,0.89)),url("http://inclusionnl.ca/wp-content/uploads/2019/01/Services-Banner.jpg")!important;--background-size:auto,cover!important;--background-position:50% 50%,0% 50%!important;--background-attachment:scroll,scroll!important;--background-repeat:no-repeat,no-repeat!important;--tve-applied-background-image:linear-gradient(rgba(3,118,128,0.89),rgba(3,118,128,0.89)),url("http://inclusionnl.ca/wp-content/uploads/2019/01/Services-Banner.jpg")!important;}.thrv_symbol_1800 [data-css="tve-u-185602fa8d0"]{padding:30px 10px !important;margin-bottom:-20px !important;}:not(#tve) .thrv_symbol_1800 [data-css="tve-u-185602fa8d9"]{font-size:18px !important;color:rgb(255,255,255) !important;font-family:inherit !important;font-weight:var(--g-regular-weight,normal)!important;}.thrv_symbol_1800 [data-css="tve-u-185602fa8d5"]{font-size:25px !important;--tcb-applied-color:rgb(249,249,249)!important;}.thrv_symbol_1800 [data-css="tve-u-185602fa8d3"]{padding-bottom:0px !important;padding-top:10px !important;border-right:none !important;margin-top:1px !important;}:not(#tve) .thrv_symbol_1800 [data-css="tve-u-185602fa8da"]{color:rgb(255,255,255) !important;}}</style><div class="thrv_wrapper thrv-page-section tcb-window-width" style="width: 1417px; left: 10.5468px;" data-css="tve-u-185602fa8d0"><div class="tve-page-section-out" data-css="tve-u-185602fa8d1" style="" data-tcb_hover_state_parent="1"></div><div class="tve-page-section-in tve_empty_dropzone" data-css="tve-u-185602fa8d2"><div class="thrv_wrapper thrv_text_element" data-css="tve-u-185602fa8d3"><h3 class="" data-css="tve-u-185602fa8d4" data-wahfont="25" style="text-align: center; font-size: 25px;"><strong><span data-css="tve-u-185602fa8d5" data-wahfont="25" style="font-size: 25px;">JOIN EARN-NL</span></strong></h3></div><div class="thrv_wrapper tve_image_caption" data-css="tve-u-185602fa8d6" style=""><span class="tve_image_frame" style="width: 100%; font-size: 17px;" data-wahfont="17"><img decoding="async" loading="lazy" class="tve_image wp-image-1591" alt="EARN-NL Logo white" title="EARN NL Logo (White) 500px" data-id="1591" src="http://inclusionnl.ca/wp-content/uploads/2020/03/EARN-NL-Logo-White-500px.png" style="" data-link-wrap="1" width="500" height="69" data-css="tve-u-185602fa8d7" data-width="500" data-init-width="500" data-init-height="69" srcset="https://inclusionnl.ca/wp-content/uploads/2020/03/EARN-NL-Logo-White-500px.png 500w, https://inclusionnl.ca/wp-content/uploads/2020/03/EARN-NL-Logo-White-500px-300x41.png 300w" sizes="(max-width: 500px) 100vw, 500px"></span></div><div class="thrv_wrapper thrv_text_element" data-css="tve-u-185602fa8d8"><p data-css="tve-u-185602fa8d9" data-wahfont="18" style="text-align: center; font-size: 18px;"><a class="" data-css="tve-u-185602fa8da" data-wahfont="18" href="http://inclusionnl.ca/contact/" style="font-size: 18px; outline: none;" target="_blank" role="link"><u>Contact us</u></a> to find out how!&nbsp;&nbsp;</p></div></div></div></div> -->
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
    </div><!-- main -->
<?php get_footer();?>