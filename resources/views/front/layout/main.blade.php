<!DOCTYPE html>
<html lang="en">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
@include('front.layout.head')
@yield('css')
<script type="text/javascript" src="{{asset('assets/jquery.min.js')}}"></script>

{{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<body data-container="body"
    data-mage-init='{"loaderAjax": {}, "loader": { "icon": "https://www.salonwholesale.com/static/version1702335172/frontend/Yoma/salonwholesale/en_GB/images/loader-2.gif"}}'
    class="sgbp cms-home mst-nav__theme-yoma-salonwholesale cms-index-index page-layout-1column" id="html-body">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MJ8SRMF" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) --> <noscript>
        <div class="message global noscript">
            <div class="content">
                <p><strong>JavaScript seems to be disabled in your browser.</strong> <span> For the best experience on
                        our site, be sure to turn on Javascript in your browser.</span></p>
            </div>
        </div>
    </noscript>
    <div class="page-wrapper">

        @include('front.layout.header')
        @yield('bread')

        @yield('content')

        @include('front.layout.footer')
    
    </div>

    
</body>
@include('front.layout.script')
</html>