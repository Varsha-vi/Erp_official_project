<?php require_once "./includes/header.php" ?>
<?php require_once "subscription.php"; ?>


<?php require_once "./includes/navigation.php" ?>


<!-- Partners -->
<section id="our-partners" class="my-5">
    <div class="container-fluid my-5">
        <div class="container py-5 my-5">
            <!-- section heading -->
            <div class="heading-main w-100 d-flex justify-content-center align-items-center flex-column gap-1 py-5" data-aos="fade-right" data-aos-duration="1000">
                <h1 class="fw-bold">Contact With Us</h1>
                <h4 class="fw-bold">We look forward to receive your valuable feedback and happy to answer your query.</h4>
            </div>
            <!-- Section Content -->
            <div class="row">
                <div class="col-md-8">
                    <div class="card border-0">
                        <div class="card-title">
                            <div class="footer-heading py-3 d-flex align-items-start flex-column gap-4 mx-3">
                                <h3 class="fw-bold py-5 ">Contact Us</h3>
                                <?php
                                $msg = "";
                                    if(isset($_GET['error'])) 
                                    {
                                        $msg = "Please fill all the Input fields";
                                        echo "<div class=\"alert alert-danger fs-5 w-100 \">$msg</div>";
                                    }
                                    if (isset($_GET["success"])) {
                                        $msg = "Your message has been sent.";
                                        echo "<div class=\"alert alert-success fs-5 w-100 \">$msg</div>";
                                    }
                                    unset($msg);
                                ?>
                            </div>
                            

                        </div>
                        <div class="card-body">
                            <form action="process.php" method="post" class="d-flex flex-column gap-3">
                                <input type="text" name="username" placeholder="Enter Your Username" class="form-control p-3 fs-5">
                                <input type="email" name="email" placeholder="Enter Your Email" class="form-control p-3 fs-5">
                                <input type="text" name="subject" placeholder="Enter Ticket Subject" class="form-control fs-5 p-3">
                                <textarea name="message" class="form-control p-3 fs-5" id="message" placeholder="Enter Your Message"></textarea>
                                <button class="btn btn-success fs-4 w-25 fw-bold " name="send">Send Message</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex flex-column gap-3">
                    <div class="footer-heading py-3 d-flex align-items-center gap-4">
                        <i class="fa-regular fa-map fs-2"></i>
                        <h3 class="fw-bold">ADDRESS</h3>
                    </div>
                    <div class="reg-office d-flex flex-column gap-2">
                        <h4 class="fw-bold">Regional Office:</h4>
                        <p class="fs-4">
                            3rd Floor,XYZ COMPANY. Phase-7, Sector-73,Mohali
                        </p>
                    </div>
                    <div class="corp-office d-flex flex-column gap-2">
                        <h4 class="fw-bold">Corporate Office:</h4>
                        <p class="fs-4">
                            ErpInfotech (P)Ltd 27/7,xyz Chowk,Hamirpur
                            (H.P)
                        </p>
                    </div>
                    <div class="mobile d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-mobile-screen-button fs-3"></i>
                        <p class="fs-4">
                            <a class="footer-links text-dark" href="tel:9805999755">98765-56799</a>,
                            <a class="footer-links text-dark" href="tel:7650978128">78609-74528</a>
                        </p>
                    </div>
                    <div class="mail d-flex gap-3 align-items-center">
                        <i class="fa-solid fa-envelope fs-3"></i>
                        <p>
                            <a class="fs-4 text-dark footer-links" href="mailto: info@iqwing.in">info@erp.in</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="row g-4 my-5">
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13720.304388172874!2d76.6912081924149!3d30.716261040923378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee50b7467741%3A0x1cdd6524b2319c9!2sSector%2073%2C%20Sahibzada%20Ajit%20Singh%20Nagar%2C%20Punjab%20140308!5e0!3m2!1sen!2sin!4v1716701154048!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="450" style="border:0; margin: 0; padding: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13720.304388172874!2d76.6912081924149!3d30.716261040923378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee50b7467741%3A0x1cdd6524b2319c9!2sSector%2073%2C%20Sahibzada%20Ajit%20Singh%20Nagar%2C%20Punjab%20140308!5e0!3m2!1sen!2sin!4v1716701154048!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" width="100%" height="450" style="border:0; margin: 0; padding: 0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php require_once "./includes/footer.php" ?>