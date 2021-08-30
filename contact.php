<?php include "./assets/includes/header.php" ?>



<section class="page-title bg-1">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="block text-center">
                    <span class="text-white">Contact Us</span>
                    <h1 class="text-capitalize mb-5 text-lg">Get in Touch</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- contact form start -->

<section class="section contact-info pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-live-support"></i>
                    <h5>Call Us</h5>
                    +1-832-754-9530
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-support-faq"></i>
                    <h5>Email Us</h5>
                    contact@orsys.com
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="contact-block mb-4 mb-lg-0">
                    <i class="icofont-location-pin"></i>
                    <h5>Location</h5>
                    1706 Cooper Bluff Ct Rosenberg Tx, 77469
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact-form-wrap section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section-title text-center">
                    <h2 class="text-md mb-2">Contact us</h2>
                    <div class="divider mx-auto my-4"></div>
                    <p class="mb-5">We cater all the problem's in a very professional manner, and we stay determined and
                        consistent all the way till we have reached the point where we tell our customers that we have
                        it what you asked for, and they love it for sure !</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <form id="contact-form" class="contact__form " method="post" action="mail.php">
                    <!-- form message -->
                    <div class="row">
                        <div class="col-12">
                            <div class="alert alert-success contact__msg" style="display: none" role="alert">
                                Your message was sent successfully.
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="name" id="name" type="text" class="form-control"
                                    placeholder="Your Full Name">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="email" id="email" type="email" class="form-control"
                                    placeholder="Your Email Address">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <select name="select" id="select" class="form-control">
                                    <option>select your services</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input name="phone" id="phone" type="text" class="form-control"
                                    placeholder="Your Phone Number">
                            </div>
                        </div>
                    </div>

                    <div class="form-group-2 mb-4">
                        <textarea name="message" id="message" class="form-control" rows="8"
                            placeholder="Your Message"></textarea>
                    </div>

                    <div class="text-center">
                        <input class="btn btn-main btn-round-full" name="submit" type="submit"
                            value="Send Messege"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>


<div class="row">
    <div class="col-md-12 col-sm-12">
        <div style="height: 450px">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1204.0300740138478!2d-95.75065342593871!3d29.52461837541241!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86411d8278dc0fc5%3A0x65046eaa4b2c7a88!2s1706%20Cooper%20Bluff%20Ct%2C%20Rosenberg%2C%20TX%2077469%2C%20USA!5e0!3m2!1sen!2s!4v1629984210234!5m2!1sen!2s"
                width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

        </div>

    </div>
</div>


<!-- newsletter -->
<?php include "./assets/includes/news.php" ?>



<!-- foter -->
<?php include "./assets/includes/footer.php" ?>
<!-- footer -->