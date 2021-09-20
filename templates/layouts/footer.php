<!-- FOOTER AREA START -->
<footer class="ltn__footer-area  ">
    <div class="footer-top-area  section-bg-2 plr--5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-3 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-about-widget">
                        <div class="footer-logo">
                            <div class="site-logo">
                                <img src="<?= $assets ?>/img/logo-2.png" alt="Logo">
                            </div>
                        </div>
                        <p><?= $Core->getSiteInfo("FooterAboutText") ?></p>
                        <div class="footer-address">
                            <ul>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-placeholder"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><?= $Core->getSiteInfo("SiteAddress") ?></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="tel:<?= $Core->getSiteInfo("SiteTelephone") ?>"><?= $Core->getSiteInfo("SiteTelephone") ?></a></p>
                                    </div>
                                </li>
                                <li>
                                    <div class="footer-address-icon">
                                        <i class="icon-mail"></i>
                                    </div>
                                    <div class="footer-address-info">
                                        <p><a href="mailto:<?= $Core->getSiteInfo("SiteEmail") ?>"><?= $Core->getSiteInfo("SiteEmail") ?></a></p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ltn__social-media mt-20">
                            <ul>
                                <li><a href="<?= $Core->getSiteInfo("link_facebook") ?>" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="<?= $Core->getSiteInfo("link_twitter") ?>" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="<?= $Core->getSiteInfo("link_linkedin") ?>" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="<?= $Core->getSiteInfo("link_youtube") ?>" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title"><?= $Core->getSiteInfo("FooterFirstMenuTitle") ?></h4>
                        <div class="footer-menu">
                            <ul>
                                <?php while ($menu1 = mysqli_fetch_array($Cat2Pages)) : ?>
                                    <li><a href="/<?= $menu1['shortname'] ?>"><?= $menu1['menutitle'] ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title"><?= $Core->getSiteInfo("FooterSecondMenuTitle") ?></h4>
                        <div class="footer-menu">
                            <ul>
                                <?php while ($menu2 = mysqli_fetch_array($Cat3Pages)) : ?>
                                    <li><a href="/<?= $menu2['shortname'] ?>"><?= $menu2['menutitle'] ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                    <div class="footer-widget footer-menu-widget clearfix">
                        <h4 class="footer-title"><?= $Core->getSiteInfo("FooterThirdMenuTitle") ?></h4>
                        <div class="footer-menu">
                            <ul>
                                <?php while ($menu3 = mysqli_fetch_array($Cat4Pages)) : ?>
                                    <li><a href="/<?= $menu3['shortname'] ?>"><?= $menu3['menutitle'] ?></a></li>
                                <?php endwhile; ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-sm-12 col-12">
                    <div class="footer-widget footer-newsletter-widget">
                        <h4 class="footer-title"><?= $Core->getSiteInfo("NewsletterTitle") ?></h4>
                        <p><?= $Core->getSiteInfo("NewsletterText") ?></p>
                        <div class="footer-newsletter">
                            <form action="#" disabled>
                                <input type="email" disabled name="email" placeholder="Email*">
                                <div class="btn-wrapper">
                                    <button disabled class="theme-btn-1 btn" type="submit"><i class="fas fa-location-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                        <h5 class="mt-30">We Accept</h5>
                        <img src="<?= $assets ?>/img/icons/payment-4.png" alt="Payment Image">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ltn__copyright-area ltn__copyright-2 section-bg-7  plr--5">
        <div class="container-fluid ltn__border-top-2">
            <div class="row">
                <div class="col-md-6 col-12">
                    <div class="ltn__copyright-design clearfix">
                        <p><?= $Core->getSiteInfo("copyright_text") ?></p>
                    </div>
                </div>
                <div class="col-md-6 col-12 align-self-center">
                    <div class="ltn__copyright-menu text-right">
                        <ul>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Privacy & Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- FOOTER AREA END -->

<?php require('./_public/modals.php') ?>

</div>
<!-- Body main wrapper end -->

<!-- preloader area start -->
<div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- All JS Plugins -->
<script src="<?= $assets ?>/js/plugins.js"></script>
<!-- Main JS -->
<script src="<?= $assets ?>/js/main.js"></script>

</body>

</html>