<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>

<!-- Slider -->
<section class="flexslider">
    <ul class="slides">
        <li style="background-image: url(img/slider_1.jpg)" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="probootstrap-slider-text text-center">
                            <h1 class="probootstrap-heading probootstrap-animate">Your Bright Future is Our Mission</h1>
                        </div>
                    </div>
                </div>
            </div>
        </li>
        <li style="background-image: url(img/slider_2.jpg)" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="probootstrap-slider-text text-center">
                            <h1 class="probootstrap-heading probootstrap-animate">Education is Life</h1>
                        </div>
                    </div>
                </div>
            </div>

        </li>
        <li style="background-image: url(img/slider_3.jpg)" class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="probootstrap-slider-text text-center">
                            <h1 class="probootstrap-heading probootstrap-animate">Helping Each of Our Students Fulfill the Potential</h1>
                        </div>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</section>
<!-- end slider -->

<!-- title -->
<section class="probootstrap-section probootstrap-section-colored">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-left section-heading probootstrap-animate">
                <h2>SEKOLAH TINGGI ILMU KESEHATAN PAPUA</h2>
            </div>
        </div>
    </div>
</section>
<!-- end title -->

<!-- Tentang STIKES -->
<section class="probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="probootstrap-flex-block">
                    <div class="probootstrap-text probootstrap-animate">
                        <h3>Tentang STIKES</h3>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis explicabo veniam labore ratione illo vero voluptate a deserunt incidunt odio aliquam commodi blanditiis voluptas error non rerum temporibus optio accusantium!</p>
                        <p><a href="#" class="btn btn-primary">Learn More</a></p>
                    </div>
                    <div class="probootstrap-image probootstrap-animate" style="background-image: url(img/slider_3.jpg)">
                        <a href="https://vimeo.com/45830194" class="btn-video popup-vimeo"><i class="icon-play3"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end tentang STIKES -->

<!-- header news and event -->
<section class="probootstrap-section probootstrap-section-colored probootstrap-bg probootstrap-custom-heading probootstrap-tab-section" style="background-image: url(img/slider_2.jpg)">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center section-heading probootstrap-animate">
                <h2 class="mb0">Yang Baru dari STIKES</h2>
            </div>
        </div>
    </div>
    <div class="probootstrap-tab-style-1">
        <ul class="nav nav-tabs probootstrap-center probootstrap-tabs no-border">
            <li class="active"><a data-toggle="tab" href="#featured-news">Berita Terbaru</a></li>
            <li><a data-toggle="tab" href="#upcoming-events">Event Yang Akan Datang</a></li>
        </ul>
    </div>
</section>
<!-- end header news and event -->

<!-- body news and event -->
<section class="probootstrap-section probootstrap-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="tab-content">

                    <div id="featured-news" class="tab-pane fade in active">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel" id="owl1">
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima, ut.</p>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis, officia.</p>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi, dolores.</p>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>

                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, earum.</p>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                </div>
                            </div>
                        </div>
                        <!-- END row -->
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p><a href="#" class="btn btn-primary">View all news</a></p>
                            </div>
                        </div>
                    </div>
                    <div id="upcoming-events" class="tab-pane fade">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="owl-carousel" id="owl2">
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                                <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="img/img_sm_1.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                                <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="img/img_sm_2.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                                <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                    <div class="item">
                                        <a href="#" class="probootstrap-featured-news-box">
                                            <figure class="probootstrap-media"><img src="img/img_sm_3.jpg" alt="Free Bootstrap Template by uicookies.com" class="img-responsive"></figure>
                                            <div class="probootstrap-text">
                                                <h3>Tempora consectetur unde nisi</h3>
                                                <span class="probootstrap-date"><i class="icon-calendar"></i>July 9, 2017</span>
                                                <span class="probootstrap-location"><i class="icon-location2"></i>White Palace, Brooklyn, NYC</span>
                                            </div>
                                        </a>
                                    </div>
                                    <!-- END item -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <p><a href="#" class="btn btn-primary">View all events</a></p>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>
<!-- end body news and event -->

<footer class="probootstrap-footer probootstrap-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>About The School</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro provident suscipit natus a cupiditate ab minus illum quaerat maxime inventore Ea consequatur consectetur hic provident dolor ab aliquam eveniet alias</p>
                    <h3>Social</h3>
                    <ul class="probootstrap-footer-social">
                        <li><a href="#"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-facebook"></i></a></li>
                        <li><a href="#"><i class="icon-github"></i></a></li>
                        <li><a href="#"><i class="icon-dribbble"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin"></i></a></li>
                        <li><a href="#"><i class="icon-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-md-push-1">
                <div class="probootstrap-footer-widget">
                    <h3>Links</h3>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Courses</a></li>
                        <li><a href="#">Teachers</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="probootstrap-footer-widget">
                    <h3>Contact Info</h3>
                    <ul class="probootstrap-contact-info">
                        <li><i class="icon-location2"></i> <span>198 West 21th Street, Suite 721 New York NY 10016</span></li>
                        <li><i class="icon-mail"></i><span>info@domain.com</span></li>
                        <li><i class="icon-phone2"></i><span>+123 456 7890</span></li>
                    </ul>
                </div>
            </div>

        </div>
        <!-- END row -->

    </div>

    <div class="probootstrap-copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-8 text-left">
                    <p>&copy; 2017 <a href="https://uicookies.com/">uiCookies:Enlight</a>. All Rights Reserved. Designed &amp; Developed with <i class="icon icon-heart"></i> by <a href="https://uicookies.com/">uicookies.com</a></p>
                </div>
                <div class="col-md-4 probootstrap-back-to-top">
                    <p><a href="#" class="js-backtotop">Back to top <i class="icon-arrow-long-up"></i></a></p>
                </div>
            </div>
        </div>
    </div>
</footer>


<?= $this->endSection(); ?>