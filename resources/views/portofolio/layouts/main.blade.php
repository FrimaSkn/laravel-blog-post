<!DOCTYPE html>
<html class="no-js" lang="en">
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
    <title>Portofolio | Frima Skn</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="/portofolio/css/base.css">
    <link rel="stylesheet" href="/portofolio/css/vendor.css">
    <link rel="stylesheet" href="/portofolio/css/main.css">

    <!-- script
    ================================================== -->
    <script src="/portofolio/js/modernizr.js"></script>
    <script src="/portofolio/js/pace.min.js"></script>

    <!-- favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="180x180" href="/portofolio/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/portofolio/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/portofolio/favicon-16x16.png">
    <link rel="manifest" href="/portofolio/site.webmanifest">

</head>

<body id="top">

    <div id="preloader">
        <div id="loader"></div>
    </div>

    <!-- site header
    ================================================== -->
    @include('portofolio.layouts.header')
    <!-- end s-header -->

    {{-- section --}}
    @yield('content')
    {{-- endsection --}}
    
    <!-- footer
    ================================================== -->
    <footer>
        <div class="row">
            <div class="column large-full ss-copyright">
                <span>© Copyright Epitome 2019</span> 
                <span>Design by <a href="https://www.styleshout.com/">StyleShout</a></span>
            </div>            

            <div class="ss-go-top">
                <a class="smoothscroll" title="Back to Top" href="#top"></a>
            </div>
        </div>
    </footer>


    <!-- photoswipe background
    ================================================== -->
    {{-- <div aria-hidden="true" class="pswp" role="dialog" tabindex="-1">

        <div class="pswp__bg"></div>
        <div class="pswp__scroll-wrap">

            <div class="pswp__container">
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
                <div class="pswp__item"></div>
            </div>

            <div class="pswp__ui pswp__ui--hidden">
                <div class="pswp__top-bar">
                    <div class="pswp__counter"></div><button class="pswp__button pswp__button--close" title="Close (Esc)"></button> <button class="pswp__button pswp__button--share" title=
                    "Share"></button> <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button> <button class="pswp__button pswp__button--zoom" title=
                    "Zoom in/out"></button>
                    <div class="pswp__preloader">
                        <div class="pswp__preloader__icn">
                            <div class="pswp__preloader__cut">
                                <div class="pswp__preloader__donut"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
                    <div class="pswp__share-tooltip"></div>
                </div><button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button> <button class="pswp__button pswp__button--arrow--right" title=
                "Next (arrow right)"></button>
                <div class="pswp__caption">
                    <div class="pswp__caption__center"></div>
                </div>
            </div>

        </div>

    </div><!-- end photoSwipe background --> --}}


    <!-- Java Script
    ================================================== -->
    <script src="/portofolio/js/jquery-3.2.1.min.js"></script>
    <script src="/portofolio/js/plugins.js"></script>
    <script src="/portofolio/js/main.js"></script>
</body>