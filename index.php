<?php
session_start();
define('time', microtime());
$lang = "en";
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];
}
$dir = $lang == 'en' ? 'ltr' : 'rtl';
?>
<!doctype html>
<html lang="<?= $lang; ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Anker">
        <title>Anker</title>
        <link rel="canonical" href="https://anker-mea.com/">
        <!-- Bootstrap core CSS -->
        <link href="dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- Favicons -->
        <meta name="theme-color" content="#111636">
        <!-- Custom styles for this template -->
        <link href="css/template.css?<?php echo time; ?>" rel="stylesheet">
        <link href="css/mobile_devices.css?<?php echo time; ?>" rel="stylesheet">
        <link href="css/lang_<?= $lang; ?>.css?<?php echo time; ?>" rel="stylesheet">
    </head>
    <body>
        <div id="preloader">
            <div class="spinner"></div>
        </div>
        <div id="main-content" class="container-fluid custom-max-width">
            <div class="mx-auto">
                <section class="container-main">
                    <header class="bg-header">
                        <div class="row" dir="<?= $dir; ?>">
                            <div class="col-3 px-5 py-5 d-none d-md-block logo-top">
                                <img src="images/logo.png"/>
                            </div>
                            <div class="col-6 py-5 d-none d-md-block padding-bottom">
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <h1 class="Gilroy-ExtraBold text-white title-txt title-txt-mt">
                                            <?php
                                            echo $lang == 'en' ? 'ANKER DEALER EVENT 2025' : 'حدَث تجمُّع موزّعي أنكر 2025';
                                            ?>
                                        </h1>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <h3 class="Gilroy-Regular text-white subtitle-txt">
                                            <?php
                                            echo $lang == 'en' ? 'Empowering Partnerships, Driving Success' : 'تمكين الشَراكات ودفع عجلة النجاح للأمام!';
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-3 px-lg-5 py-5 lang-font-size text-end d-none d-md-block lang-sec">
                                <span>
                                    <a href="index.php?lang=en" class="Gilroy-Bold text-white no-underline">
                                        ENG
                                    </a>
                                </span>
                                <span>
                                    <img class="ms-3 me-3 vertical-line" src="images/vertical-line.png" alt="line" />
                                </span>
                                <span>
                                    <a href="index.php?lang=ar" class="GESSTwoLight text-white no-underline lang-ar">
                                        عربي
                                    </a>
                                </span>
                            </div>

                            <div class="d-block d-md-none text-white">
                                <div class="row mt-3">
                                    <div class="col-12">
                                        <div class="row">
                                            <div class="col d-flex align-items-center justify-content-start">
                                                <img src="images/logo.png" class="logo ms-1 me-1"/>
                                            </div>
                                            <div class="col d-flex align-items-center justify-content-end lang-font-size ms-1 me-1">
                                                <span>
                                                    <a href="index.php?lang=en" class="Gilroy-Bold text-white no-underline">
                                                        ENG
                                                    </a>
                                                </span>
                                                <span>
                                                    <img class="ms-3 me-3 vertical-line" src="images/vertical-line.png" alt="line" />
                                                </span>
                                                <span>
                                                    <a href="index.php?lang=ar" class="GESSTwoLight text-white no-underline">
                                                        عربي
                                                    </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-5 col-12 d-flex align-items-center justify-content-center sm-title">
                                        <h1 class="Gilroy-ExtraBold text-white title-txt">
                                            <?php
                                            echo $lang == 'en' ? 'ANKER DEALER EVENT 2025' : 'حدَث تجمُّع موزّعي أنكر 2025';
                                            ?>
                                        </h1>
                                    </div>
                                    <div class="col-12 d-flex align-items-center justify-content-center">
                                        <h3 class="Gilroy-Regular text-white subtitle-txt">
                                            <?php
                                            echo $lang == 'en' ? 'Empowering Partnerships, Driving Success' : 'تمكين الشَراكات ودفع عجلة النجاح للأمام!';
                                            ?>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </header>
                    <main class="main-bg d-flex align-items-center justify-content-center">
                        <img src="images/component.png" class="img-fluid img-component"/>
                    </main>
                </section>
                <section class="section-bg d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-12">
                            <h3 class="Gilroy-Regular text-white download-txt">
                                <?php
                                echo $lang == 'en' ? 'Click the button to download the Brand Catalogue' : 'انقُر الزرّ بالأسفل، لتحميل كتالوج العلامة التجاريّة';
                                ?>
                            </h3>
                        </div>
                    </div>
                </section>

                <footer class="footer-bg">
                    <div class="d-flex flex-column">
                        <div class="row text-center" dir="<?= $dir; ?>">
                            <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <a href="#" class="btn-custom">
                                    <img src="images/anker.png" alt="anker" class="img-fluid img-anker"/>
                                </a>
                            </div>
                            <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3">
                                <a href="#" class="btn-custom">
                                    <img src="images/eufy.png" alt="eufy" class="img-fluid img-eufy"/>
                                </a>
                            </div>
                            <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 mt-3 mt-sm-3 mt-md-0 mt-lg-0 mt-xl-0">
                                <a href="#" class="btn-custom">
                                    <img src="images/soundcore.png" alt="soundcore" class="img-fluid img-soundcore"/>
                                </a>
                            </div>
                            <div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 mt-3 mt-sm-3 mt-md-0 mt-lg-0 mt-xl-0">
                                <a href="#" class="btn-custom">
                                    <img src="images/nebula.png" alt="nebula" class="img-fluid img-nebula"/>
                                </a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <script>
            // Hide preloader and show content after the page loads
            window.addEventListener("load", function () {
              document.getElementById("preloader").style.display = "none";
              document.getElementById("main-content").style.display = "block";
            });
        </script>
    </body>
</html>
