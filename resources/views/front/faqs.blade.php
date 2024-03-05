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
                <div class="main-content col-xs-12">
                    <div class="page-title-wrapper">
                        <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">FAQs</span>
                        </h1>
                    </div><input name="form_key" type="hidden" value="pA8jICjYlj81P9d2" />
                    <div id="authenticationPopup"
                        data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                        <!-- ko template: getTemplate() --><!-- /ko -->
                    </div>
                    <div id="monkey_campaign" style="display:none;"
                        data-mage-init='{"campaigncatcher":{"checkCampaignUrl": "https://www.salonwholesale.com/mailchimp/campaign/check/"}}'>
                    </div>
                    <div
                        data-mage-init='{"Mirasvit_CacheWarmer\/js\/track":{"pageType":"cms_page_view","url":"https:\/\/www.salonwholesale.com\/cache_warmer\/track\/","cookieName":"mst-cache-warmer-track","cookieValue":null}}'>
                    </div>
                    <!DOCTYPE html>
                    <html>

                    <head>
                        <style>
                            button.accordion {
                                background-color: #eee;
                                color: #444;
                                cursor: pointer;
                                padding: 18px;
                                width: 100%;
                                border: none;
                                text-align: left;
                                outline: none;
                                font-size: 15px;
                                transition: 0.4s;
                            }

                            button.accordion.active,
                            button.accordion:hover {
                                background-color: #FFFF;
                            }

                            button.accordion:after {
                                content: '\02795';
                                font-size: 13px;
                                color: #777;
                                float: right;
                                margin-left: 5px;
                            }

                            button.accordion.active:after {
                                content: "\2796";
                            }

                            div.panel {
                                padding: 0 18px;
                                background-color: white;
                                max-height: 0;
                                overflow: hidden;
                                transition: 0.6s ease-in-out;
                                opacity: 0;
                            }

                            div.panel.show {
                                opacity: 1;
                                max-height: 500px;
                            }
                        </style>
                    </head>

                    <body>

                        <button class="accordion">Where is my order?</button>
                        <div class="panel">
                            <br>
                            <p>We aim to dispatch all orders within 24 hours, though occasionally it can take a
                                little longer. Our delivery estimates vary from country to country, for full
                                details of them, please see <a href="delivery-information.html"
                                    style="color: rgb(245,154,51)">here</a>. If your order is outside of our
                                estimate, please <a href="contact.html" style="color: rgb(245,154,51)">get in
                                    touch</a> and we'll see what we can do.</p>
                            <br>
                        </div>
                        <button class="accordion">What's my tracking number?</button>
                        <div class="panel">
                            <br>
                            <p>If your order has a tracking number it will be in your dispatch email. However,
                                we only use these for select orders. If you would like more details on your
                                order, please <a href="contact.html" style="color: rgb(245,154,51)">message
                                    us</a> and we'll be happy to help.</p>
                            <br>
                        </div>
                        <button class="accordion">When will this be back in stock?</button>
                        <div class="panel">
                            <br>
                            <p>This can change from item to item, for more information please <a
                                    href="contact.html" style="color: rgb(245,154,51)">just ask.</a></p>
                            <br>
                        </div>
                        <button class="accordion">How do I return an item?</button>
                        <div class="panel">
                            <br>
                            <p>Log into <a href="customer/account/login/index.html"
                                    style="color: rgb(245,154,51)">My Account</a> and click My Returns.</p>
                            <p>For more information, please check out our <a href="swreturns.html"
                                    style="color: rgb(245,154,51)">Returns</a> page.</p>
                            <br>
                        </div>
                        <button class="accordion">Can I change my address for an order I've already
                            placed?</button>
                        <div class="panel">
                            <br>
                            <p>If it's not been dispatched then yes you can. <a href="contact.html"
                                    style="color: rgb(245,154,51)">Message us</a> quick, before we post it, and
                                we should be able to get that changed for you.</p>
                            <br>
                        </div>
                        <button class="accordion">Not found the answer?</button>
                        <div class="panel">
                            <br>
                            <p>Just <a href="contact.html" style="color: rgb(245,154,51)">drop us a message</a>
                                and we'll get right on it.</p>
                            <br>
                        </div>


                </div>

@endsection