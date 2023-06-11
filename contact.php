<?php include 'template/header.php'; ?>

<div class="inner-banner has-base-color-overlay text-center"
    style="background: url(images/background/contact.jpg); background-size: cover">
    <div class="container">
        <div class="box">
            <!-- <h1>Contact us</h1> -->
        </div>
    </div>
</div>
<div class="breadcumb-wrapper">
    <div class="container">
        <div class="pull-left">
            <ul class="list-inline link-list">
                <li>
                    <a href="index.html">Home</a>
                </li>
                <!-- <li>
                            <a href="#">Pages</a>
                        </li> -->

                <li>Contact us</li>
            </ul>
        </div>
        <div class="pull-right">
            <a href="volunteer_apply.html" class="get-qoute"><i class="fa fa-arrow-circle-right"></i>Become a
                Volunteer</a>
        </div>
    </div>
</div>

<section class="contact sec-padd2">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>Send Your <span class="thm-color">Message</span></h2>
                </div>
                <div class="default-form-area">
                    <form id="contact-form" name="contact_form" class="default-form"
                        action="http://st.ourhtmldemo.com/new/humanity-html/inc/sendmail.php" method="post">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_name" class="form-control" value=""
                                        placeholder="Your Name *" required="" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="email" name="form_email" class="form-control required email" value=""
                                        placeholder="Your Mail *" required="" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_phone" class="form-control" value=""
                                        placeholder="Phone" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="form-group">
                                    <input type="text" name="form_subject" class="form-control" value=""
                                        placeholder="Subject" />
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <textarea name="form_message" class="form-control textarea required"
                                        placeholder="Your Message...."></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group">
                                    <input id="form_botcheck" name="form_botcheck" class="form-control" type="hidden"
                                        value="" />
                                    <button class="thm-btn" type="submit" data-loading-text="Please wait...">
                                        send message
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>Quick <span class="thm-color">Contact</span></h2>
                </div>
                <div class="content">
                    <div class="text">
                        <p>
                            If you are passionate about helping people: through education, or
                            preventing then you are in the right place.
                        </p>
                    </div>
                    <ul class="contact-info">
                        <li>
                            <i class="icon-arrows"></i><span>Address:</span> Khilgaon, Dhaka-1219, Bangladesh
                        </li>
                        <li>
                            <i class="icon-phone"></i><span> Phone:</span>+88 018638-26338
                        </li>
                        <li>
                            <i class="icon-back"></i><span>Email:</span> info@humanity.com
                        </li>
                    </ul>
                    <ul class="social-icon">
                        <li>
                            <a href="#"><i class="fa fa-facebook"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-feed"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-google-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58425.518254110146!2d90.41524805337934!3d23.761821509699814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b958f24b27ed%3A0x8ed23bb19cbc5d97!2sKhilgaon%20Railgate%2C%20Khilgaon!5e0!3m2!1sen!2sbd!4v1676880358064!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</section>

<?php include 'template/footer.php'; ?>