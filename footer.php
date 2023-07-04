
</body>
<footer>
    <div class="footer-area">
        <div class="left-col">
            <img src="<?php echo get_template_directory_uri();?>/images/Burgundy-Teal-inclusionNL_logo.webp" alt="InclusionNL Logo" />
            <ul class="social-links">
                <li><a href="https://www.facebook.com/InclusionNL/" aria-label="Facebook link"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="https://www.linkedin.com/company/inclusionnl/" aria-label="Linkedin link"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="https://twitter.com/InclusionNL" aria-label="Twitter link"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.instagram.com/inclusionnl/" aria-label="Instagram link"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
        
        <div class="center-col">
            <h3>GET IN TOUCH</h3>
            <p>
                4 Escasoni Place <br />
                St. John's, NL A1A 3R6 
            </p>
            <p>
                Toll Free: 1-844-517-1376 <br />
                Call or Text: 1-709-697-3323 <br />
            </p>
            <p>
                PROGRAM MANAGER: <br />
                Kathy Hawkins <br />
                E: <a href="mailto:manager@inclusionnl.ca">manager@inclusionnl.ca</a>
            </p>
        </div>
        <div class="right-col">
            <h3>QUICK LINKS</h3>
            <ul class="quick-links" reversed>
                <li><a href="/">Home</a></li>
                <li><a href="/services/">Services</a></li>
                <li><a href="/news/">News</a></li>
                <li><a href="/gallery/">Gallery</a></li>
                <li><a href="/partner-feedback/">Partner Feedback</a></li>
                <li><a href="/contact/">Contact</a></li>
            </ul>
        </div>
    </div>
    <div class="bottom">
        <ul>
            <li><a href="/sitemap/">Sitemap</a></li>
            <li><a href="/disclaimer/">Disclaimer</a></li>
            <li><a href="/sitemap/">Privacy Policy</a></li>
            <li><a href="/media/">Media</a></li>
        </ul>
        <p class="copyright">
            Copyright © 2023 InclusionNL, all rights reserved
        </p>
    </div>
    
    <script>
        Mousetrap.bind("alt+1", function(e){
            window.location.replace("<?php echo get_home_url();?>")
        });
        Mousetrap.bind("alt+2", function(e){
            window.location.replace("<?php echo get_home_url() .'/services';?>")
        });
        Mousetrap.bind("alt+3", function(e){
            window.location.replace("<?php echo get_home_url() .'/resources';?>")
        });
        Mousetrap.bind("alt+4", function(e){
            window.location.replace("<?php echo get_home_url() .'/news';?>")
        });
        Mousetrap.bind("alt+5", function(e){
            window.location.replace("<?php echo get_home_url() .'/#';?>")
        });
        Mousetrap.bind("alt+6", function(e){
            window.location.replace("<?php echo get_home_url() .'/about';?>")
        });
    </script>

    <?php wp_footer();?>    
</footer>
</html>