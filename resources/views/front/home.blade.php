@extends('front.layout.main')

@section('bread')
    <div class="breadcrumbs-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xs-12"> </div>
            </div>
        </div>
    </div>
    <div class="page messages">
        <div data-placeholder="messages"></div>
        <div data-bind="scope: 'messages'"><!-- ko if: cookieMessages && cookieMessages.length > 0 -->
            <div aria-atomic="true" role="alert" data-bind="foreach: { data: cookieMessages, as: 'message' }"
                class="messages">
                <div
                    data-bind="attr: { class: 'message-' + message.type + ' ' + message.type + ' message', 'data-ui-id': 'message-' + message.type }">
                    <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
                </div>
            </div><!-- /ko --><!-- ko if: messages().messages && messages().messages.length > 0 -->
            <div aria-atomic="true" role="alert" class="messages"
                data-bind="foreach: { data: messages().messages, as: 'message' }">
                <div
                    data-bind="attr: { class: 'message-' + message.type + ' ' + message.type + ' message', 'data-ui-id': 'message-' + message.type }">
                    <div data-bind="html: $parent.prepareMessageForHtml(message.text)"></div>
                </div>
            </div><!-- /ko -->
        </div>
    </div>
@endsection
@section('content')
    <main id="maincontent" class="page-main"> <span id="contentarea" tabindex="-1"></span>
        <div class="columns-wrapper">
            <div class="container">
                <div class="row">
                    <div class="main-content col-xs-12"><input name="form_key" type="hidden" value="X2x4CYmX4oHfsbPD" />
                        <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                            <!-- ko template: getTemplate() --><!-- /ko -->
                        </div>
                        <div id="monkey_campaign" style="display:none;"
                            data-mage-init='{"campaigncatcher":{"checkCampaignUrl": "https://www.salonwholesale.com/mailchimp/campaign/check/"}}'>
                        </div>
                        <div
                            data-mage-init='{"Mirasvit_CacheWarmer\/js\/track":{"pageType":"cms_index_index","url":"https:\/\/www.salonwholesale.com\/cache_warmer\/track\/","cookieName":"mst-cache-warmer-track","cookieValue":null}}'>
                        </div>
                        <div id="slider-banner-container">
                            <div class="slider-banner">
                                <div class="slide">
                                    <a target="_blank" href="{{route('hair')}}">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_banners/SalonWholesale/SW_Jan_Sale_Banner.jpg') }}"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="slide">
                                    <a target="_blank" href="{{route('hair')}}">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_banners/SalonWholesale/Title_banner_SWS.jpg') }}"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="slide">
                                    <a target="_blank" href="{{route('hair')}}">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_banners/SalonWholesale/Haircolor.jpg') }}"
                                            alt="" />
                                    </a>
                                </div>
                                <div class="slide">
                                    <a target="_blank" href="{{route('hair')}}">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_banners/SalonWholesale/Olaplex.jpg') }}"
                                            alt="" />
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="brand-slider">
                            {{-- <div class="owl-carousel owl-theme equal-heights web-slider" id="home_page_brands">
                                <div class="item">
                                    <a href="brands/l-oreal-professionnel.html">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_brands/LOreal.png') }}"
                                            alt="LOreal" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="brands/pulp-riot.html">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_brands/PulpRiot.png') }}"
                                            alt="PulpRiot" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="brands/wella.html">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_brands/Wella.png') }}"
                                            alt="Wella" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="brands/olaplex.html">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_brands/Olaplex.png') }}"
                                            alt="Olaplex" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="brands/wahl.html">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_brands/Wahl.png') }}"
                                            alt="Wahl" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="brands/fanola.html">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_brands/Fanola.png') }}"
                                            alt="Finola" />
                                    </a>
                                </div>
                                <div class="item">
                                    <a href="brands/kadus.html">
                                        <img class="nolazy"
                                            src="{{ asset('assets/media/wysiwyg/homepage_brands/kadus.png') }}"
                                            alt="Kadus" />
                                    </a>
                                </div>
                            </div> --}}
                            <div class="brand-of-week">
                                <div data-content-type="html" data-appearance="default" data-element="main"
                                    data-decoded="true"><!-- PROMO START -->
                                    <div class="row equal-heights">

                                        <!-- LEFT HAND PROMO START-->
                                        {{-- <div
                                            class="col-lg-4 col-md-4 col-xs-12 promo-block visible-lg visible-md visible-sm visible-xs">
                                            <div class="row" style="margin-bottom:20px">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <div class="equal-child line-height">
                                                        <a href="hair-colour.html"
                                                            onclick="ga('send', 'event', 'homepage category middle', 'click', 'hair colour')">
                                                            <img src="https://www.salonwholesale.com/media/wysiwyg/homepage_banners/SalonWholesale/Colour.jpg"
                                                                src="https://www.salonwholesale.com/media/wysiwyg/homepage_banners/SalonWholesale/Colour.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <!-- LEFT HAND PROMO END -->

                                        <!-- MIDDLE PROMO START -->
                                        <div class="col-lg-4 col-md-4 col-xs-12 promo-block">
                                            <div class="row" style="margin-bottom:20px">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <div class="equal-child line-height">
                                                        <a href="{{route('hair')}}"
                                                            onclick="ga('send', 'event', 'homepage category left', 'click', 'hair')">
                                                            <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/wysiwyg/homepage_banners/SalonWholesale/Hair.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4 col-md-4 col-xs-12 promo-block">
                                            <div class="row" style="margin-bottom:20px">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <div class="equal-child line-height">
                                                        <a href="{{route('beauty')}}"
                                                            onclick="ga('send', 'event', 'homepage category middle', 'click', 'beauty')">
                                                            <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/wysiwyg/homepage_banners/SalonWholesale/beauty.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div

                                        <!-- MIDDLE PROMO END -->

                                        <!-- RIGHT PROMO START -->
                                        {{-- <div class="col-lg-4 col-md-4 col-xs-12 promo-block">
                                            <div class="row" style="margin-bottom:20px">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <div class="equal-child line-height">
                                                        <a href="scissors.html"
                                                            onclick="ga('send', 'event', 'homepage promo left', 'click', 'scissors')">
                                                            <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/wysiwyg/homepage_banners/SalonWholesale/Scissors.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <br>
                                        <!-- RIGHT PROMO END -->
                                    </div>

                                    <div class="row equal-heights">
                                        <!-- LEFT HAND PROMO START-->
                                        {{-- <div class="col-lg-4 col-md-4 col-xs-12 promo-block">
                                            <div class="row" style="margin-bottom:20px">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <div class="equal-child line-height">
                                                        <a href="beauty.html"
                                                            onclick="ga('send', 'event', 'homepage category middle', 'click', 'beauty')">
                                                            <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/wysiwyg/homepage_banners/SalonWholesale/beauty.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div> --}}
                                        </div>
                                        <!-- LEFT HAND PROMO END -->

                                        <!-- MIDDLE PROMO START -->
                                        {{-- <div class="col-lg-4 col-md-4 col-xs-12 promo-block">
                                            <div class="row" style="margin-bottom:20px">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <div class="equal-child line-height">
                                                        <a href="barber.html"
                                                            onclick="ga('send', 'event', 'homepage category middle', 'click', 'barber')">
                                                            <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/wysiwyg/homepage_banners/SalonWholesale/barber.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <!-- MIDDLE PROMO END -->

                                        <!-- RIGHT PROMO START -->
                                        {{-- <div class="col-lg-4 col-md-4 col-xs-12 promo-block">
                                            <div class="row" style="margin-bottom:20px">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <div class="equal-child line-height">
                                                        <a href="essentials.html"
                                                            onclick="ga('send', 'event', 'homepage category middle', 'click', 'Essentials category')">
                                                            <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/wysiwyg/homepage_banners/SalonWholesale/Essentials.jpg"
                                                                alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}
                                        <!-- RIGHT PROMO END -->

                                    </div>
                                    <!-- PROMO END -->
                                    </br>





                                    <!-- BRAND OF THE WEEK START -->
                                    <div class="row equal-heights">

                                        <!-- BRAND OF THE WEEK IMAGE START -->
                                        <div class="col-md-8">
                                            <div class="feature-image equal-child">
                                                <a href="#"
                                                    onclick="ga('send', 'event', 'homepage Pulp Riot brand', 'click', 'Pulp Riot')">
                                                    <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                        src="https://www.salonwholesale.com/media/wysiwyg/Pulp_Riot_Brand_Of_The_Month.jpg"
                                                        alt="" /></a>
                                            </div>
                                        </div>
                                        <!-- BRAND OF THE WEEK IMAGE START -->

                                        <!-- BRAND OF THE WEEK TEXT START -->
                                        <div class="col-md-4">
                                            <div class="content-box white-box equal-child">
                                                <h2 class="title">Trending Now</h2>
                                                <h3 class="subtitle">Pulp Riot</h3>
                                                <p>Superior pigments create beautiful tones in 5 mins or less, and
                                                    reach deeper depths of tone for up to 20 mins.</p>
                                                <a class="button" href="#"
                                                    onclick="ga('send', 'event', 'homepage brand Pulp Riot', 'click', 'Pulp Riot')">Shop
                                                    Now</a>
                                            </div>
                                        </div>
                                        <!-- BRAND OF THE WEEK TEXT END -->

                                    </div>
                                    <!-- BRAND OF THE WEEK END -->

                                    <br>
                                    <div class="equal-heights owl-carousel owl-theme web-slider" id="home_page_popular">

                                        <!-- RIGHT TOP PICK START -->
                                        <div class="item">
                                            <div class="equal-child line-height">
                                                <div class="top-pick-image">
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick centre', 'click', 'L'Oreal Professionnel Dia Light 50ml')">
                                                        <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                            src="https://www.salonwholesale.com/media/wysiwyg/dialight2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="top-pick-content">
                                                    <h3>L'oreal Professionnel Dia Light 50ml</h3>
                                                    <p></p>
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick centre', 'click', 'L'Oreal Professionnel Dia Light 50ml')">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- RIGHT TOP PICK END -->

                                        <!-- MIDDLE TOP PICK START -->
                                        <div class="item">
                                            <div class="equal-child line-height">
                                                <div class="top-pick-image">
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick centre', 'click', 'L’Oreal Professionnel Majirel 50ml')">
                                                        <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                            src="https://www.salonwholesale.com/media/wysiwyg/majirel2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="top-pick-content">
                                                    <h3>L’Oreal Professionnel Majirel 50ml</h3>
                                                    <p></p>
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick centre', 'click', 'L’Oreal Professionnel Majirel 50ml')">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- MIDDLE TOP PICK END -->

                                        <!-- LEFT HAND TOP PICK START-->
                                        <div class="item">
                                            <div class="equal-child line-height">
                                                <div class="top-pick-image">
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick left', 'click', 'Koleston Perfect Me+')">
                                                        <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                            src="https://www.salonwholesale.com/media/wysiwyg/koleston2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="top-pick-content">
                                                    <h3>Koleston Perfect Me+</h3>
                                                    <p></p>
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick left', 'click', 'Koleston Perfect Me+')">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- LEFT HAND TOP PICK END -->

                                        <!-- LEFT HAND TOP PICK START-->
                                        <div class="item">
                                            <div class="equal-child line-height">
                                                <div class="top-pick-image">
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick left', 'click', 'Kadus Permanent Hair Colour 60ml">
                                                        <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                            src="https://www.salonwholesale.com/media/wysiwyg/kadus2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="top-pick-content">
                                                    <h3>Kadus Permanent Hair Colour 60ml</h3>
                                                    <p></p>
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick left', 'click', Kadus Permanent Hair Colour 60ml">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- LEFT HAND TOP PICK END -->

                                        <!-- MIDDLE TOP PICK START -->
                                        <div class="item">
                                            <div class="equal-child line-height">
                                                <div class="top-pick-image">
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick centre', 'click', 'L’Oreal Professionnel Inoa 60g')">
                                                        <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                            src="https://www.salonwholesale.com/media/wysiwyg/inoa2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="top-pick-content">
                                                    <h3>L’Oreal Professionnel Inoa 60g</h3>
                                                    <p></p>
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'homepage top pick centre', 'click', 'L’Oreal Professionnel Inoa 60g')">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- MIDDLE TOP PICK END -->

                                        <!-- RIGHT TOP PICK START -->
                                        <div class="item">
                                            <div class="equal-child line-height">
                                                <div class="top-pick-image">
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'Renbow Crazy Color 100ml">
                                                        <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                            src="https://www.salonwholesale.com/media/wysiwyg/crazycolor2.jpg"
                                                            alt="" />
                                                    </a>
                                                </div>
                                                <div class="top-pick-content">
                                                    <h3>Renbow Crazy Color 100ml</h3>
                                                    <p></p>
                                                    <a href="#"
                                                        onclick="ga('send', 'event', 'Renbow Crazy Color 100ml">Shop
                                                        Now</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- RIGHT TOP PICK END -->
                                    </div>
                                </div>
                                <div class="popular-section">
                                    <div class="row equal-heights">

                                        <!-- LEFT HAND PROMO START-->

                                        <div
                                            class="row col-lg-12 col-md-12 col-xs-12 promo-block visible-lg hidden-md hidden-sm hidden-xs"">

                                            <a href="#"
                                                onclick="ga('send', 'event', 'homepage promo left', 'click', 'SW loyalty')">
                                                <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                    src="https://www.salonwholesale.com/media/wysiwyg/sw-loyalty-desktop-block.jpg"
                                                    alt="" /></a>

                                        </div>

                                        <!-- LEFT HAND PROMO START-->
                                        <div class="col-lg-4 col-md-4 col-xs-12 promo-block hidden-lg">
                                            <div class="row" style="margin-bottom:20px">
                                                <div class="col-lg-12 col-md-12 col-xs-12">
                                                    <div class="equal-child line-height">
                                                        <a href="#"
                                                            onclick="ga('send', 'event', 'homepage promo left', 'click', 'SW Loyalty')">
                                                            <img src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/wysiwyg/sw-loyalty-mobile-block.jpg"
                                                                alt="" /></a>
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
    </main>
@endsection
