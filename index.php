<?php require_once __DIR__ . '/getTranslations.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>WikiTide - Free Wiki Hosting with No Ads</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="keywords" content="wiki, wikis, WikiTide, wiki hosting, MediaWiki" />
    <meta name="description" content="Seamlessly create and manage a wiki for free, no ads, no strings attached. See why dozens trust our expert hosting. Join WikiTide today!" />
    <meta name="google-site-verification" content="9BKrnuH_ZCD7XGAk50SjbeUEZKjfJOQ02Dmo5pMZut0" />
    <meta name="twitter:description" content="Seamlessly create and manage a wiki for free, no ads, no strings attached. See why dozens trust our expert hosting. Join WikiTide today!" />
    <meta property="og:description" content="Seamlessly create and manage a wiki for free, no ads, no strings attached. See why dozens trust our expert hosting. Join WikiTide today!" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="WikiTide - Free Wiki Hosting with No Ads" />
    <meta property="og:site_name" content="WikiTide" />
    <meta property="og:url" content="https://wikitide.org/" />
    <meta property="og:locale" content="en_US" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="WikiTide - Free Wiki Hosting with No Ads" />
    <meta name="twitter:site" content="WikiTide" />
    <meta name="mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="application-name" content="WikiTide" />
    <meta name="apple-mobile-web-app-title" content="WikiTide" />
    <link rel="canonical" href="https://wikitide.org" />
    <link rel="icon" type="image/x-icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png" />
    <script type="application/ld+json">[{"@context":"https:\/\/schema.org","@type":"WebPage","headline":"WikiTide","url":"/","thumbnailUrl":"","dateCreated":"","creator":[],"keywords":[]}]</script>

    <!-- Favicon -->
    <link href="https://wikitide.org/img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://wikitide.org/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="https://wikitide.org/css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="m-0">WikiTide</h1>
                    <!-- <img src="https://static.wikiforge.net/commonswikitide/2/2c/WikiTide_wordmark.png" width="135" alt="WikiTide"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="/" class="nav-item nav-link active"><?php echo getTranslation( 'home' ); ?></a>
                        <a href="https://meta.wikitide.org/wiki/Special:MyLanguage/WikiTide:About" class="nav-item nav-link"><?php echo getTranslation( 'about' ); ?></a>
                        <a href="https://meta.wikitide.org/wiki/Special:MyLanguage/Donate" class="nav-item nav-link"><?php echo getTranslation( 'donate' ); ?></a>
                        <a href="https://meta.wikitide.org/wiki/Special:MyLanguage/FAQ" class="nav-item nav-link"><?php echo getTranslation( 'FAQ' ); ?></a>
                        <a href="https://meta.wikitide.org/wiki/Special:MyLanguage/Help_center" class="nav-item nav-link"><?php echo getTranslation( 'contactus' ); ?></a>
                    </div>
                    <a href="https://meta.wikitide.org/wiki/Special:UserLogin" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Sign in</a>
                    <a href="https://meta.wikitide.org/wiki/Special:RequestWiki" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Start a wiki</a>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown"><?php echo getTranslation( 'wikitide-header' ); ?></h1>
                            <p class="text-white pb-3 animated slideInDown"><?php echo getTranslation( 'description-text' ); ?>.</p>
                            <a href="https://meta.wikitide.org/wiki/Special:RequestWiki" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft"><?php echo getTranslation( 'requestwiki' ); ?>.</a>
                            <a href="https://meta.wikitide.org/wiki/Special:MyLanguage/Donate" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight"><?php echo getTranslation( 'donate' ); ?>.</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="https://wikitide.org/img/hero.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- Feature Start -->
                <div class="container-xxl py-5" style="padding-top: 0rem !important;">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <h1 class="text-center"><?php echo getTranslation( 'variety-text' ); ?>.</h1>
                    <p class="text-center"><?php echo getTranslation( 'mission-text' ); ?></p>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-database text-primary mb-4"></i>
                            <h5 class="mb-3"><?php echo getTranslation( 'database' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'wiki-powered' ); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                            <h5 class="mb-3"><?php echo getTranslation( 'foss-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'foss-text' ); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-school text-primary mb-4"></i>
                            <h5 class="mb-3"><?php echo getTranslation( 'highereducation-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'highereducation-text' ); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-hands-holding-child text-primary mb-4"></i>
                            <h5 class="mb-3"><?php echo getTranslation( 'nonprofits-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'nonprofits-text' ); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-book-atlas text-primary mb-4"></i>
                            <h5 class="mb-3"><?php echo getTranslation( 'topic-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'topic-text' ); ?></p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-bullhorn text-primary mb-4"></i>
                            <h5 class="mb-3"><?php echo getTranslation( 'explore-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'explore-text' ); ?></p>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!-- Feature End -->

        <!-- Service Start -->
        <div class="container-xxl">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span><?php echo getTranslation( 'offerings-title' ); ?><span></span></p>
                    <h1 class="text-center mb-5"><?php echo getTranslation( 'reasons-title' ); ?></h1>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-rectangle-ad fa-2x"></i>
                            </div>
                            <h5 class="mb-3"><?php echo getTranslation( 'adfree-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'adfree-text' ); ?>.</p>
                            <a class="btn btn-square" href="https://meta.wikitide.org/wiki/Special:MyLanguage/Advertisements"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-screwdriver-wrench fa-2x"></i>
                            </div>
                            <h5 class="mb-3"><?php echo getTranslation( 'configuration-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'configuration-text' ); ?></p>
                            <a class="btn btn-square" href="https://meta.wikitide.org/wiki/Special:MyLanguage/ManageWiki"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-swatchbook fa-2x"></i>
                            </div>
                            <h5 class="mb-3"><?php echo getTranslation( 'customizability-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'customizability-text' ); ?></p>
                            <a class="btn btn-square" href="https://meta.wikitide.org/wiki/Special:MyLanguage/Extensions"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-window-restore fa-2x"></i>
                            </div>
                            <h5 class="mb-3"><?php echo getTranslation( 'customdomains-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'customdomains-text' ); ?>.</p>
                            <a class="btn btn-square" href="https://meta.wikitide.org/wiki/Special:MyLanguage/Custom_domains"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-headset fa-2x"></i>
                            </div>
                            <h5 class="mb-3"><?php echo getTranslation( 'support-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'support-text' ); ?></p>
                            <a class="btn btn-square" href="https://meta.wikitide.org/wiki/Special:MyLanguage/Help_center"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item d-flex flex-column text-center rounded">
                            <div class="service-icon flex-shrink-0">
                                <i class="fa fa-pen-ruler fa-2x"></i>
                            </div>
                            <h5 class="mb-3"><?php echo getTranslation( 'visualeditor-title' ); ?></h5>
                            <p class="m-0"><?php echo getTranslation( 'visualeditor-text' ); ?></p>
                            <a class="btn btn-square" href="https://meta.wikitide.org/wiki/Special:MyLanguage/VisualEditor"><i class="fa fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service End -->

        <!-- Facts Start -->
        <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">270</h1>
                        <p class="text-white mb-0"><?php echo getTranslation( 'wikis' ); ?></p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">500</h1>
                        <p class="text-white mb-0"><?php echo getTranslation( 'wikirequests' ); ?></p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">3200</h1>
                        <p class="text-white mb-0"><?php echo getTranslation( 'users' ); ?></p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">100</h1>
                        <p class="text-white mb-0"><?php echo getTranslation( 'experts' ); ?></p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Facts End -->      

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4"><?php echo getTranslation( 'contactus' ); ?><span></span></p>
                        <p><i class="fa fa-envelope me-3"></i>support [at] wikitide.org</p>
                        <p><i class="fa fa-globe me-3"></i><a href="https://meta.wikitide.org/wiki/Special:MyLanguage/Help_center" style="color: white;"><?php echo getTranslation( 'on-wiki' ); ?></p>
                       <p><i class="fa fa-flag-checkered me-3"></i><a href="https://issue-tracker.wikitide.org" style="color: white;"><?php echo getTranslation( 'phorge' ); ?></p>

                        <div class="d-flex pt-2">
                            <a rel="me" class="btn btn-outline-light btn-social" href="https://mastodon.social/@wikitide"><i class="fab fa-mastodon"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://facebook.com/WikiTide"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://github.com/WikiTideOrg"><i class="fab fa-github"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://wikitide.org/discord"><i class="fab fa-discord"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Quick Links<span></span></p>
                        <a class="btn btn-link" href="https://meta.wikitide.org/wiki/WikiTide:About"><?php echo getTranslation( 'aboutus' ); ?></a>
                        <a class="btn btn-link" href="https://meta.wikitide.org/wiki/Special:MyLanguage/Help_center"><?php echo getTranslation( 'contactus' ); ?></a>
                        <a class="btn btn-link" href="https://meta.wikitide.org/wiki/Special:MyLanguage/Privacy_Policy"><?php echo getTranslation( 'privacypolicy' ); ?></a>
                        <a class="btn btn-link" href="https://meta.wikitide.org/wiki/Special:MyLanguage/Terms_of_Use"><?php echo getTranslation( 'termsofuse' ); ?></a>
                        <a class="btn btn-link" href="https://meta.wikitide.org/wiki/Special:MyLanguage/Content_Policy"><?php echo getTranslation( 'contentpolicy' ); ?></a>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <span class="border-bottom"><?php echo getTranslation( 'wikitide' ); ?></span> - <?php echo getTranslation( 'wikitide-tagline' ); ?>
	                     </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="/">Home</a>
                                <a href="https://meta.wikitide.org/wiki/Special:MyLanguage/Privacy_Policy#Cookies">Cookies</a>
                                <a href="https://meta.wikitide.org/wiki/Special:MyLanguage/Help_center">Help</a>
                                <a href="https://meta.wikitide.org/wiki/Special:MyLanguage/FAQ">FAQ</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://wikitide.org/lib/wow/wow.min.js"></script>
    <script src="https://wikitide.org/lib/easing/easing.min.js"></script>
    <script src="https://wikitide.org/lib/waypoints/waypoints.min.js"></script>
    <script src="https://wikitide.org/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="https://wikitide.org/js/main.js"></script>
</body>
</html>
