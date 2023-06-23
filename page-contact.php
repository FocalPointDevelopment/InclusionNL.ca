<?php get_header(); ?>

<div class="container" role="main">
    <div class="content">
        <a id="content"></a>
        <div class="page-banner">
            <img class="banner-image" src="<?php echo get_template_directory_uri();?>/images/contact-pg-1024x390.webp" aria-hidden="true"/>

            <div class="image-floating-text">
                <p>A corporate program of</p>
                <figure>
                    <img src="http://35.183.106.246/wp-content/uploads/2022/11/EmpowerNL-Logo.webp" alt="Empower NL Logo" class="floating-img">
                </figure>
            </div>
            <h1 class="center">Contact</h1>
        </div>

        <div class="small-body">

            <div class="contact-container">
                <div class="contact-info">
                <h2 style="text-align: left">Contact Us</h2>

                    <section class="contact-info-section">
                        <p><strong>Address</strong></p>
                        <p>Empower The Disability Resource Centre</p>
                        <p>4 Escasoni Place</p>
                        <p>St. John's, NL</p>
                    </section>

                    <section class="contact-info-section">
                        <p><strong>Phone</strong></p>
                        <p>Toll free: <a href="tel:1-844-517-1376">1-844-517-1376</a></p>
                        <p>Call or Text: <a href="tel:1-709-697-3323">1-709-697-3323</a></p>
                    </section>

                    <section class="contact-info-section">
                        <p><strong>Program Manager</strong></p>
                        <p>Kathy Hawkins</p>
                        <p>E: <a href="mailto:manager@inclusionNL.ca">manager@inclusionnl.ca</a></p>
                    </section>

                    <section class="contact-info-section">
                        <p><strong>Follow Us!</strong></p>

                        <div class="contact-section-socials">
                            <a href="https://twitter.com/inclusionnl" target="_blank" rel="noopener noreferrer" aria-label="Link to Twitter">
                                <img src="<?php echo get_template_directory_uri();?>/images/twitter-circle-grey-logo.webp" alt="Twitter Icon">
                            </a>
                            <a href="https://www.facebook.com/InclusionNL/" target="_blank" rel="noopener noreferrer" aria-label="Link to Facebook">
                                <img src="<?php echo get_template_directory_uri();?>/images/facebook-circle-grey-logo.webp" alt="Facebook Icon">
                            </a>
                            <a href="https://www.linkedin.com/company/inclusionnl/" target="_blank" rel="noopener noreferrer" aria-label="Link to LinkedIn">
                                <img src="<?php echo get_template_directory_uri();?>/images/linkedin-circle-grey-logo.webp" alt="LinkedIn Icon">
                            </a>
                            <a href="https://www.instagram.com/InclusionNL/" target="_blank" rel="noopener noreferrer" aria-label="Link to Instagram">
                                <img src="<?php echo get_template_directory_uri();?>/images/instagram-circle-grey-logo.webp" alt="Instagram Icon">
                            </a>
                        </div>
                    </section>


                </div>
                <div class="contact-form">
                    <!--  make a contact form that gets sent to "manager@inclusionnl.ca" with the first name, last name, email, and Your Message, along with a title that says "How can we help you?"-->
                    <h2>How can we help you?</h2>
                    <form method="post">
                        <label><strong>Name</strong></label>
                        <div class="name-container">
                            <div class="fname-container">
                                <input type="text" id="fname" name="firstname" required>
                                <label for="fname">First Name</label>
                            </div>
                            <div class="lname-container">
                                <input type="text" id="lname" name="lastname" required>
                                <label for="lname">Last Name</label>
                            </div>
                        </div>
                        <label for="email"><strong>Email</strong></label>
                        <input type="email" id="email" name="email" required>

                        <label for="message"><strong>Your Message</strong></label>
                        <textarea id="message" name="message" required></textarea>

                        <input id="submit" type="submit" value="Submit">
                    </form>
                    <!-- Form send logic -->
                    <?php
                        if(isset($_POST['submit'])){
                            $valid_submission = true;

                            $fname = $_POST['firstname'];
                            $lname = $_POST['lastname'];
                            $email = $_POST['email'];
                            $message = $_POST['message'];
                            
                            $to = "april@focalpointdevelopment.ca";
                            $subject = "New Contact Form Submission";
                            $body = "You have received a new message from the user $fname $lname.\n".
                            "Here is the message:\n $message".
                            "You can contact $fname $lname via email at $email";

                            $headers = 'From: '. 'jim@empowernl.ca' . "\r\n" .
                            'Reply-To: ' .'jim@empowernl.ca' . "\r\n";

                            if(mail($to, $subject, $body, $headers)){
                                echo "<p>Thank you for your submission!</p>";
                            } else {
                                echo "<p>Something went wrong. Please try again.</p>";
                            }
                        }

                    ?>

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
</div>

<?php get_footer(); ?>