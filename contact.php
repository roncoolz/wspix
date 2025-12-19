<?php $head_title="Contact - Military Service PHP Template"?>
<?php require_once('template-parts/layout/top-layout.php'); ?>
<?php require_once('template-parts/header/header.php'); ?>
<?php
$page_title = "Contact Us";
require_once('template-parts/page-title.php');
?>
<div class="contact-info-area te-py-120">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="te-icon-card style-3">
                    <div class="te-icon">
                        <i class="fa-solid fa-location-dot"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Location</h3>
                        <span class="desc">4517 Washington Ave. <br/> Manchester, Kentucky 39495</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="te-icon-card style-3">
                    <div class="te-icon">
                        <i class="fa-solid fa-phone"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">Call Us</h3>
                        <a href="tel:0123456789" class="desc">(405) 555-0128</a> <br/>
                        <a href="tel:0123456789" class="desc">(316) 555-0116</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="te-icon-card style-3">
                    <div class="te-icon">
                        <i class="fa-solid fa-envelope"></i>
                    </div>
                    <div class="content">
                        <h3 class="title">E-Mail</h3>
                        <a href="mailto:info@gmail.com" class="desc">info@gmail.com</a> <br/>
                        <a href="mailto:example@gmail.com" class="desc">example@gmail.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="contact-map-area te-py-120">
    <!-- Map start -->
    <div class="te-map-widget">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d423284.04409246973!2d-118.74137159485794!3d34.020608470699536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c75ddc27da13%3A0xe22fdf6f254608f4!2sLos%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1692992084415!5m2!1sen!2sbd" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- Map end -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7 offset-lg-5">
                <div class="te-post-comments-form style-3 mt-0">
                    <div class="comment-respond">
                        <div class="te-section-title">
                            <div class="te-section-content">
                                <div class="short-title-wrapper">
                                    <span class="short-title only-divider">Contact Us</span>
                                </div>
                                <h2 class="title">Do You Have Any Question? </h2>
                                <div class="te-section-desc">
                                    <p>For your car we will do everything  advice, repairs and maintenance. We are the some preferred choice by many car owners because our experience and knowledge is selfe vident.For your car.</p>
                                </div>
                            </div>
                        </div>
                        <form action="mail.php" method="post" class="comment-form">
                            <div class="row gx-4">
                                <div class="col-xl-6">
                                    <div class="te-contacts-email">
                                        <input name="name" type="text" placeholder="Your Name*">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="te-contacts-email">
                                        <input name="email" type="email" placeholder="Your Email*">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="te-contacts-name">
                                        <input name="phone" type="text" placeholder="Your Phone">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="te-contacts-name">
                                        <input name="subject" type="text" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="te-contacts-message">
                                        <textarea name="message" cols="20" rows="3" placeholder="Write your Message here"></textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="te-theme-btn" type="submit">SUBMIT NOW</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php require_once('template-parts/footer/footer.php'); ?>
<?php require_once('template-parts/layout/bottom-layout.php'); ?>