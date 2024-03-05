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
                <div class="main-content col-xs-12"><input name="form_key" type="hidden"
                        value="FGqytj1bZpPlTR3V" />
                    <div id="authenticationPopup"
                        data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                        <!-- ko template: getTemplate() --><!-- /ko --> </div>
                    <div id="monkey_campaign" style="display:none;"
                        data-mage-init='{"campaigncatcher":{"checkCampaignUrl": "https://www.salonwholesale.com/mailchimp/campaign/check/"}}'>
                    </div>
                    <div
                        data-mage-init='{"Mirasvit_CacheWarmer\/js\/track":{"pageType":"cms_page_view","url":"https:\/\/www.salonwholesale.com\/cache_warmer\/track\/","cookieName":"mst-cache-warmer-track","cookieValue":1}}'>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-us-container">
            <div class="about-header">
                <div class="about-header-content">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <h1 class="about-title">About Us</h1>
                                <div class="about-content">
                                    <div data-content-type="html" data-appearance="default" data-element="main"
                                        data-decoded="true">
                                        <p>Here at emerch junction we provide hair and beauty professionals with
                                            everything they need to run their business. Not only do we supply
                                            the very best salon brands, including L’Oreal Professionnel, Wella,
                                            Goldwell and Revlon, but we guarantee the most competitive prices on
                                            the market.</p>

                                        <p>Your order will be delivered to you quickly, reliably, and in
                                            award-winning recycled and recyclable packaging.</p>

                                        <p> Emerch Junctionis your destination for the very best in salon
                                            essentials.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="about-usps">
                <div class="container">
                    <div class="row equal-heights">
                        <div class="col-md-4 col-sm-4 equal-child">
                            <div class='about-usp'></div>
                        </div>
                        <div class="col-md-4 col-sm-4 equal-child">
                            <div class='about-usp'><svg width="60px" height="60px" id="Layer_1"
                                    data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #222;
                                            }

                                            .cls-2 {
                                                fill: #212121;
                                            }
                                        </style>
                                    </defs>
                                    <title>friendly-service-icon</title>
                                    <path class="cls-1"
                                        d="M30,60A30,30,0,1,1,60,30,30.03443,30.03443,0,0,1,30,60ZM30,3.8961A26.1039,26.1039,0,1,0,56.1039,30,26.13325,26.13325,0,0,0,30,3.8961Z" />
                                    <circle class="cls-2" cx="21.35839" cy="23.37376" r="2.57732" />
                                    <circle class="cls-2" cx="38.64161" cy="23.37376" r="2.57732" />
                                    <path class="cls-2"
                                        d="M40.74751,36.65354l-1.408-.51245a9.546,9.546,0,0,1-17.6618,0l-1.408.51245a11.07514,11.07514,0,0,0,10.2309,6.90808v.00061l.008-.00031.00793.00031v-.00061A11.07514,11.07514,0,0,0,40.74751,36.65354Z" />
                                </svg>
                                <h2>Friendly Service</h2>
                                <p>Our customer service team are dedicated to ensuring your experience is
                                    smooth, simple and enjoyable</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 equal-child">
                            <div class='about-usp'><svg width="60px" height="60px" id="Layer_1"
                                    data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 60 60">
                                    <defs>
                                        <style>
                                            .cls-1 {
                                                fill: #222;
                                            }
                                        </style>
                                    </defs>
                                    <title>delivery-icon</title>
                                    <path class="cls-1"
                                        d="M30,60A30,30,0,1,1,60,30,30.03443,30.03443,0,0,1,30,60ZM30,3.8961A26.1039,26.1039,0,1,0,56.1039,30,26.13325,26.13325,0,0,0,30,3.8961Z" />
                                    <path class="cls-1"
                                        d="M33.87215,16.85805H14.161a1.30346,1.30346,0,0,0-1.29964,1.29964V34.45728H35.17178V18.15769A1.30346,1.30346,0,0,0,33.87215,16.85805Z" />
                                    <path class="cls-1"
                                        d="M16.05629,39.46622a5.523,5.523,0,0,1,1.42985-3.70932H12.86138v3.574a.97759.97759,0,0,0,.97473.97473h2.29035A5.56078,5.56078,0,0,1,16.05629,39.46622Z" />
                                    <path class="cls-1"
                                        d="M21.60676,44.14195a4.35073,4.35073,0,1,1,4.35073-4.35073A4.35573,4.35573,0,0,1,21.60676,44.14195Zm0-6.42711a2.07637,2.07637,0,1,0,2.07637,2.07637A2.0786,2.0786,0,0,0,21.60676,37.71484Z" />
                                    <path class="cls-1"
                                        d="M41.8866,44.14195A4.35073,4.35073,0,1,1,46.237,39.79121,4.35573,4.35573,0,0,1,41.8866,44.14195Zm0-6.42711a2.07637,2.07637,0,1,0,2.07605,2.07637A2.0786,2.0786,0,0,0,41.8866,37.71484Z" />
                                    <path class="cls-1"
                                        d="M48.15969,29.58783l-4.57308-7.98478h-6.235a.97758.97758,0,0,0-.97473.97473V35.7569H25.72749a5.44265,5.44265,0,0,1,1.35968,4.54873h9.1295a5.55067,5.55067,0,1,1,10.96072,0h1.1532a.97758.97758,0,0,0,.97473-.97473V36.73163m-4.7654-8.17686H38.71862V23.87067h3.38116l2.44015,4.24083Z" />
                                </svg>
                                <h2>Free Global Delivery</h2>
                                <p>We offer fast, free, international delivery and only use trusted couriers.
                                    Our award-winning packaging is safe and secure.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class='about-map'>
                <div class="getintouch">
                    <h2>Get In Touch</h2>
                    <div data-content-type="html" data-appearance="default" data-element="main"
                        data-decoded="true"></div>
                    <div class="callus"> CALL US <span> 0330 223 0891</span></div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection