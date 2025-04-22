<?php
// Define site title for this page
$site_title = "AB Natural Products";

// Include header
include 'partials/header.php';
?>

<!-- Page Header -->
<div class="page-header">
    <figure class="post-thumbnail">
        <img alt="Contact Us" src="./images/contact/contact.jpg">
    </figure>
    <h1 class="title">
        <span class="line-title">Contact US<i class="fa">&#xf111;</i></span>
    </h1>
</div>

<div class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-md-push-9">
                <div class="sidebar">
                    <div class="widget">
                        <div class="widget-inner">
                            <h3 class="title">Contact Info</h3>
                            <div class="widget-text">
                                <p>At <?php echo $site_title; ?>, we value your feedback and inquiries. Feel free to reach out to us.</p>
                                <p>
                                Email: <a href="mailto:abnaturalproducts@gmail.com">abnaturalproducts@gmail.com</a><br>
                                Phone: <a href="tel:+94 77 500 8031">+ 94 77 500 8031</a>
                                </p>
                                <p>Address: 18/25, Dewasurendra Place, Galle, Sri Lanka</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-9 col-md-pull-3">
                <div class="contact-content">
                    <h3 class="title contact-title">Contact Form</h3>
                    <p class="contact-desc">We'd love to hear from you! Whether you have questions about our products, need assistance with your order, or just want to share your tea experience, please fill out the form below and we'll get back to you shortly.</p>
                    <form action="process_contact.php" method="post" id="contactform" class="contact-form">
                        <div class="row">
                            <div class="col-sm-4">
                                <p class="contact-form-author">
                                    <input type="text" required="required" size="30" value="" name="author" id="author" placeholder="Name">
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p class="contact-form-email">
                                    <input type="email" required="required" size="30" value="" name="email" id="email" placeholder="Email">
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <p class="contact-form-subject">
                                    <input type="text" required="required" size="30" value="" name="subject" id="subject" placeholder="Subject">
                                </p>
                            </div>
                        </div>

                        <p class="contact-form-message">
                            <textarea required="required" rows="3" cols="45" name="message" id="message" placeholder="Your message"></textarea>
                        </p>
                        <p class="form-submit button">
                            <button class="hvr-rectangle-out" type="submit" id="submit" name="submit">Send Message</button>
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Include footer
include 'partials/footer.php';
?>