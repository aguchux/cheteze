<?php
$Cat1Pages = $Core->CatPages("cat1");
$Cat2Pages = $Core->CatPages("cat2");
$Cat3Pages = $Core->CatPages("cat3");
$Cat4Pages = $Core->CatPages("cat4");
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?= $title ?></title>
    <meta name="robots" content="noindex, follow">

    <meta name="keywords" content="<?= keywords ?>">
    <meta name="description" content="<?= description ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="apple-touch-icon" sizes="57x57" href="<?= $assets ?>/img/favicons/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?= $assets ?>/img/favicons/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= $assets ?>/img/favicons/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= $assets ?>/img/favicons/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $assets ?>/img/favicons/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= $assets ?>/img/favicons/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $assets ?>/img/favicons/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= $assets ?>/img/favicons/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?= $assets ?>/img/favicons/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?= $assets ?>/img/favicons/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= $assets ?>/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?= $assets ?>/img/favicons/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= $assets ?>/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?= $assets ?>/img/favicons/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?= $assets ?>/img/favicons/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Place favicon.png in the root directory -->

    <!-- Font Icons css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="<?= $assets ?>/css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="<?= $assets ?>/css/responsive.css">

</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <!-- Add your site or application content here -->
    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-5) -->
        <header class="ltn__header-area ltn__header-5 ltn__header-transparent--- gradient-color-4---">
            <!-- ltn__header-top-area start -->
            <div class="ltn__header-top-area section-bg-6 top-area-color-white---">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="ltn__top-bar-menu">
                                <ul>
                                    <li><a href="#"><i class="icon-mail"></i> <?= $Core->getSiteInfo("SiteEmail") ?></a></li>
                                    <li><a href="#"><i class="icon-placeholder"></i> <?= $Core->getSiteInfo("SiteAddress") ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="top-bar-right text-right">
                                <div class="ltn__top-bar-menu">
                                    <ul>
                                        <li>
                                            <!-- ltn__social-media -->
                                            <div class="ltn__social-media">
                                                <ul>
                                                    <li><a href="<?= $Core->getSiteInfo("link_facebook") ?>" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                                    <li><a href="<?= $Core->getSiteInfo("link_twitter") ?>" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                                    <li><a href="<?= $Core->getSiteInfo("link_instagram") ?>" title="Instagram"><i class="fab fa-instagram"></i></a></li>
                                                    <li><a href="<?= $Core->getSiteInfo("link_youtube") ?>" title="Youtube"><i class="fab fa-youtube"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <!-- header-top-btn -->
                                            <div class="header-top-btn">
                                                <a href="#"><?= $Core->getSiteInfo("TopHeaderButton") ?></a>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-top-area end -->

            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area ltn__header-sticky ltn__sticky-bg-white">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo-wrap">
                                <div class="site-logo">
                                    <a href="/"><img src="<?= $assets ?>/img/logo.png" alt="<?= $Core->getSiteInfo("title") ?>"></a>
                                </div>
                                <div class="get-support clearfix">
                                    <div class="get-support-icon">
                                        <i class="icon-call"></i>
                                    </div>
                                    <div class="get-support-info">
                                        <h6><?= $Core->getSiteInfo("SiteSupportTitle") ?></h6>
                                        <h4><a href="tel:<?= $Core->getSiteInfo("SiteTelephone") ?>"><?= $Core->getSiteInfo("SiteTelephone") ?></a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col header-menu-column">
                            <div class="header-menu d-none d-xl-block">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li><a href="/">Home</a></li>
                                            <?php while ($cat2 = mysqli_fetch_array($Cat1Pages)) : ?>
                                                <?php if ($Core->HasPages($cat2['pageid'])) : $SubPages = $Core->SubPages($cat2['pageid']) ?>
                                                    <li class="menu-icon"><a href="#"><?= $cat2['menutitle'] ?></a>
                                                        <ul class="sub-menu menu-pages-img-show">
                                                            <?php while ($slink = mysqli_fetch_array($SubPages)) : ?>
                                                                <?php if ($Core->HasPages($slink['pageid'])) : $ChildPages = $Core->SubPages($slink['pageid']) ?>
                                                                    <li><a href="#"><?= $slink['menutitle'] ?> <span class="float-right">>></span></a>
                                                                        <ul>
                                                                            <?php while ($childlink = mysqli_fetch_array($ChildPages)) : ?>
                                                                                <li><a href="/<?= $cat2['shortname'] ?>/<?= $slink['shortname'] ?>/<?= $childlink['shortname'] ?>"><?= $childlink['menutitle'] ?></a></li>
                                                                            <?php endwhile; ?>
                                                                        </ul>
                                                                    </li>
                                                                <?php else : ?>
                                                                    <li><a href="/<?= $cat2['shortname'] ?>/<?= $slink['shortname'] ?>"><?= $slink['menutitle'] ?></a></li>
                                                                <?php endif; ?>
                                                            <?php endwhile; ?>
                                                        </ul>
                                                    </li>
                                                <?php else : ?>
                                                    <li><a href="/<?= $cat2['shortname'] ?>"><?= $cat2['menutitle'] ?></a></li>
                                                <?php endif; ?>
                                            <?php endwhile; ?>

                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>

                        <div class="ltn__header-options ltn__header-options-2 mb-sm-20">
                            <!-- header-search-1 -->
                            <div class="header-search-wrap">
                                <div class="header-search-1">
                                    <div class="search-icon">
                                        <i class="icon-search for-search-show"></i>
                                        <i class="icon-cancel  for-search-close"></i>
                                    </div>
                                </div>
                                <div class="header-search-1-form">
                                    <form id="#" method="get" action="/">
                                        <input type="text" name="search" value="" placeholder="Search here...">
                                        <button type="submit">
                                            <span><i class="icon-search"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>


                            <!-- Mobile Menu Button -->
                            <div class="mobile-menu-toggle d-xl-none">
                                <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                    <svg viewbox="0 0 800 600">
                                        <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                        <path d="M300,320 L540,320" id="middle"></path>
                                        <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                    </svg>
                                </a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->
        </header>
        <!-- HEADER AREA END -->