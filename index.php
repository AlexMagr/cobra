<!doctype html>
<html lang="ru-ru">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hello, world!</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&display=swap" rel="stylesheet" type="text/css" />
    <link href="//fonts.googleapis.com/css?family=Open+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=latin-ext" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap&amp;subset=greek-ext" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome/all.css">
    <link rel="stylesheet" type="text/css" href="css/my-style.css">
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#offcanvas-toggler').on('click', function(event) {
                event.preventDefault();
                $('.offcanvas-init').addClass('offcanvas-active');
            });
            $('.close-offcanvas, .offcanvas-overlay').on('click', function(event) {
                event.preventDefault();
                $('.offcanvas-init').removeClass('offcanvas-active');
            });
            // $(document).on('click', '.offcanvas-inner .menu-toggler', function(event) {
            //     event.preventDefault();
            //     $(this).closest('.menu-parent').toggleClass('menu-parent-open').find('>.menu-child').slideToggle(400);
            // });
        });
    </script>
</head>

<body class="ltr offcanvs-position-left offcanvas-init">
    <div class="body-wrapper">
        <div class="body-innerwrapper">
            <div class="header-wrapper">
                <header id="sp-header" class="">
                    <div class="container">
                        <div class="container-inner">
                            <div class="row">
                                <div class="sp-top1-wrapper col-auto col-lg-5" style="position: relative;">
                                    <div id="sp-top1">
                                        <div class="sp-column text-center text-lg-left">
                                            <div class="sp-module ">
                                                <div class="sp-module-content">
                                                    <div class="mod-languages">
                                                        <ul class="lang-inline">
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul class="sp-contact-info">
                                                <li class="sp-contact-email"><a href="mailto:info@cobra-corp.ru"><span class="fa fa-regular fa-envelope" aria-hidden="true"></span> <span class="sp-contact-content">info@cobra-corp.ru</span></a></li>
                                                <li class="sp-contact-phone"><a href="tel:+79688984378"><span class="fa fa-phone" aria-hidden="true"></span> <span class="sp-contact-content">+7 (968) 898-43-78</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div id="sp-menu" class="d-none d-lg-block" style="position: static;">
                                        <div class="sp-column">
                                            <nav class="sp-megamenu-wrapper" role="navigation">
                                                <ul class="sp-megamenu-parent menu-animation-fade-down d-none d-lg-block">
                                                    <li class="sp-menu-item"><a href="/">Главная</a></li>
                                                    <li class="sp-menu-item"><a href="/about2">О&nbsp;компании</a></li>
                                                    <li class="sp-menu-item"><a href="/contact-2">Контакты</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                                <div id="sp-logo" class="col-auto col-lg-2">
                                    <div class="sp-column"><a id="offcanvas-toggler" aria-label="Navigation" class="offcanvas-toggler-left d-block d-lg-none" href="#"><span class="fa fa-bars" aria-hidden="true" title="Navigation"></span></a>
                                        <div class="logo"><a href="/"><img class="logo-image d-none d-lg-inline-block" src="/images/logo-top.svg" alt="Cobra TV"><img class="logo-image-phone d-inline-block d-lg-none" src="/images/logo-top.svg" alt="Cobra TV"></a></div>
                                    </div>
                                </div>
                                <div class="sp-top2-wrapper col-auto col-lg-5" style="position: relative;">
                                    <div id="sp-top2">
                                        <div class="sp-column text-center text-lg-right">
                                            <div class="sp-module ">
                                                <div class="sp-module-content">
                                                    <div class="j2store_cart_module_115">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="sp-menu2" class="d-none d-lg-block" style="position: static;">
                                        <div class="sp-column">
                                            <nav class="sp-megamenu-wrapper" role="navigation">
                                                <ul class="sp-megamenu-parent menu-animation-fade-down d-none d-lg-block">
                                                    <li class="sp-menu-item"><a href="/hard-2">Оборудование</a></li>
                                                    <li class="sp-menu-item"><a href="/soft">Софт</a></li>
                                                    <li class="sp-menu-item order"><a href="/shop">Заказ</a></li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
            </div>
            <section id="sp-main-body" class="container">
                <div class="row">
                    <main id="sp-component" class="col-lg-12 " role="main">
                        <div class="sp-column ">
                            <div id="system-message-container"></div>
                            <div id="sp-page-builder" class="sp-page-builder">
                                <div class="page-content">
                                    <section id="" class="sppb-section">
                                        <div class="container">
                                            <div class="row row-center">
                                                <div class="col-md-6" id="">
                                                    <div id="" class="sppb-column">
                                                        <div class="sppb-column-addons">
                                                            <div id="" class="sppb-addon-wrapper">
                                                                <div id="" class="clearfix ">
                                                                    <div class="sppb-text-center">
                                                                        <div class="sppb-addon-content">
                                                                            <div class="sppb-addon-single-image-container">
                                                                                <img class="sppb-img-responsive" src="/images/logo.svg" alt="Image" title="" loading="lazy">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="" class="sppb-addon-wrapper">
                                                                <div id="" class="clearfix">
                                                                    <div class="sppb-addon-text-block sppb-text-center">
                                                                        <h1 class="sppb-addon-title">Продажа вещательного
                                                                            оборудования и софта
                                                                        </h1>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div id="section-id-contact" class="sppb-section contact-widget">
                                                                <div class="container-inner">
                                                                    <div class="container">
                                                                        <div class="sppb-section-title sppb-text-center">
                                                                            <h3 class="sppb-title-heading">Контакты</h3>
                                                                            <p class="sppb-title-subheading">для запросов
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="row">
                                                                        <div class="col-md-6" id="">
                                                                            <div id="" class="sppb-column">
                                                                                <div class="sppb-column-addons">
                                                                                    <div id="" class="sppb-addon-wrapper sppb-addon-wrapper-contact">
                                                                                        <div id="" class="clearfix sppb-addon-contact">
                                                                                            <div class="sppb-text-left contact-info">
                                                                                                <div class="sppb-addon-content sppb-text-left">
                                                                                                    <div class="sppb-media">
                                                                                                        <div class="pull-left">
                                                                                                            <div class="sppb-icon">
                                                                                                                <span class="sppb-icon-container" aria-label="+7 (987) 123-45-67"><i class="fas fa-mobile-alt" aria-hidden="true"></i></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="sppb-media-body">
                                                                                                            <div class="sppb-media-content">
                                                                                                                <h3 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">
                                                                                                                    <a href="tel:+7 (987) 123-45-67">+7(987)123-45-67</a>
                                                                                                                </h3>
                                                                                                                <div class="sppb-addon-text">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6" id="">
                                                                            <div id="" class="sppb-column">
                                                                                <div class="sppb-column-addons">
                                                                                    <div id="" class="sppb-addon-wrapper sppb-addon-wrapper-contact">
                                                                                        <div id="" class="clearfix sppb-addon-contact">
                                                                                            <div class="sppb-text-left contact-info">
                                                                                                <div class="sppb-addon-content sppb-text-left">
                                                                                                    <div class="sppb-media">
                                                                                                        <div class="pull-left">
                                                                                                            <div class="sppb-icon">
                                                                                                                <span class="sppb-icon-container" aria-label="info@cobra-corp.ru"><i class="fas fa-envelope-open" aria-hidden="true"></i></span>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div class="sppb-media-body">
                                                                                                            <div class="sppb-media-content">
                                                                                                                <h3 class="sppb-addon-title sppb-feature-box-title sppb-media-heading">
                                                                                                                    <a href="mailto:info@cobra-corp.ru">info@cobra-corp.ru</a>
                                                                                                                </h3>
                                                                                                                <div class="sppb-addon-text">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-12" id="">
                                                                            <div id="" class="sppb-column">
                                                                                <div class="sppb-column-addons"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </section>
            <section id="sp-bottom">
                <div class="container">
                    <div class="container-inner">
                        <div class="row">
                            <div id="sp-bottom1" class="col-6 col-lg-2 ">
                                <div class="sp-column ">
                                    <div class="sp-module ">
                                        <div class="sp-module-content">
                                            <ul class="menu">
                                                <li class="item-101 default"><a href="/">Главная</a></li>
                                                <li class="item-179"><a href="/about2">О&nbsp;компании</a></li>
                                                <li class="item-182"><a href="/contact-2">Контакты</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sp-bottom2" class="col-6 col-lg-2 ">
                                <div class="sp-column ">
                                    <div class="sp-module ">
                                        <div class="sp-module-content">
                                            <ul class="menu">
                                                <li class="item-443"><a href="/hard-2">Оборудование</a></li>
                                                <li class="item-105"><a href="/soft">Софт</a></li>
                                                <li class="item-178"><a href="/shop">Заказ</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sp-bottom3" class="col-lg-4 ">
                                <div class="sp-column ">
                                    <div class="sp-module sp-module-contact">
                                        <h3 class="sp-module-title">Контакты</h3>
                                        <div class="sp-module-content">
                                            <div class="mod-sppagebuilder  sp-page-builder">
                                                <div class="page-content">
                                                    <div id="section-id-1559040938643" class="sppb-section">
                                                        <div class="sppb-container-inner">
                                                            <div class="sppb-row">
                                                                <div class="sppb-col-md-12" id="column-wrap-id-1559040938642">
                                                                    <div id="column-id-1559040938642" class="sppb-column">
                                                                        <div class="sppb-column-addons">
                                                                            <div id="sppb-addon-wrapper-1559040938646" class="sppb-addon-wrapper">
                                                                                <div id="sppb-addon-1559040938646" class="clearfix ">
                                                                                    <div class="sppb-addon sppb-addon-text-block sppb-text-left ">
                                                                                        <div class="sppb-addon-content">
                                                                                            <p>Москва,
                                                                                                ул.&nbsp;Каргопольская, д.
                                                                                                18<br>+7 (987)
                                                                                                123-45-67<br>info@yourmail.ru
                                                                                            </p>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="sp-bottom4" class="col-lg-4 ">
                                <div class="sp-column ">
                                    <div class="sp-module ">
                                        <h3 class="sp-module-title">Дизайны отдельных страниц</h3>
                                        <div class="sp-module-content">
                                            <ul class="menu">
                                                <li class="item-440"><a href="/kartochka-tovara">Карточка товара</a></li>
                                                <li class="item-441"><a href="/korzina">Корзина</a></li>
                                                <li class="item-442"><a href="/oborudovanie">Оборудование</a></li>
                                                <li class="item-444"><a href="/oborudovanie-2">Оборудование - 2</a></li>
                                                <li class="item-445 current active"><a href="/vremennaya">Временная</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <footer id="sp-footer">
                <div class="container">
                    <div class="container-inner">
                        <div class="row">
                            <div id="sp-footer1" class="col-lg-6 ">
                                <div class="sp-column ">
                                    <div class="sp-module ">
                                        <div class="sp-module-content">
                                            <div class="mod-sppagebuilder  sp-page-builder">
                                                <div class="page-content">
                                                    <div id="" class="sppb-section">
                                                        <div class="sppb-row-overlay"></div>
                                                        <div class="sppb-container-inner">
                                                            <div class="row">
                                                                <div class="col-md-12" id="">
                                                                    <div id="" class="sppb-column">
                                                                        <div class="sppb-column-addons">
                                                                            <div id="" class="sppb-addon-wrapper">
                                                                                <div id="" class="clearfix ">
                                                                                    <div class="sppb-addon sppb-addon-single-image sppb-text-left ">
                                                                                        <div class="sppb-addon-content">
                                                                                            <div class="sppb-addon-single-image-container">
                                                                                                <img class="sppb-img-responsive" src="/images/logo-cc.svg" alt="Image" title="" loading="lazy">
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><span class="sp-copyright">
                                        <!--© 2021-2021. Все права сохранены.<br> -->Сервера и специализированный софт для ТВ-вещания.
                                    </span>
                                </div>
                            </div>
                            <div id="sp-footer2" class="col-lg-6 ">
                                <div class="sp-column ">
                                    <div class="sp-module ">
                                        <div class="sp-module-content">
                                            <div class="mod-sppagebuilder  sp-page-builder">
                                                <div class="page-content">
                                                    <div id="" class="sppb-section">
                                                        <div class="sppb-container-inner">
                                                            <div class="sppb-row">
                                                                <div class="sppb-col-md-12" id="">
                                                                    <div id="" class="sppb-column">
                                                                        <div class="sppb-column-addons">
                                                                            <div id="" class="sppb-addon-wrapper">
                                                                                <div id="" class="clearfix ">
                                                                                    <div class="sppb-addon sppb-addon-text-block sppb-text-right ">
                                                                                        <div class="sppb-addon-content">
                                                                                            © 2021. Все права сохранены.
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!-- Off Canvas Menu -->
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-menu">
        <a href="#" class="close-offcanvas"><span class="fa fa-remove"></span></a>
        <div class="offcanvas-inner">
            <div class="sp-module ">
                <div class="sp-module-content">
                    <ul class="menu">
                        <li class="item"><a href="/">Главная</a></li>
                        <li class="item"><a href="/o-kompanii">О компании</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>

</html>