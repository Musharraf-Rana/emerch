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
                    <div class="col-md-10 col-md-push-2 main-content">
                        <div class="widget block block-static-block">
                            <style>
                                .products-grid .product-item-info .product-item-photo.has-special-price:before {
                                    display: none;
                                }
                            </style>
                        </div>
                        <div class="page-title-wrapper">
                            <h1 class="page-title" id="page-title-heading"
                                aria-labelledby="page-title-heading&#x20;toolbar-amount"><span class="base"
                                    data-ui-id="page-title-wrapper">Make up</span></h1>
                        </div>
                        <div class="category-view"> </div>
                        <div class="mst-nav__horizontal-bar"> </div><input name="form_key" type="hidden"
                            value="5UpSJgFKvaHdtC4q" />
                        <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                            <!-- ko template: getTemplate() --><!-- /ko -->
                        </div>
                        <div id="monkey_campaign" style="display:none;"
                            data-mage-init='{"campaigncatcher":{"checkCampaignUrl": "https://www.salonwholesale.com/mailchimp/campaign/check/"}}'>
                        </div>
                        <div
                            data-mage-init='{"Mirasvit_CacheWarmer\/js\/track":{"pageType":"catalog_category_view","url":"https:\/\/www.salonwholesale.com\/cache_warmer\/track\/","cookieName":"mst-cache-warmer-track","cookieValue":1}}'>
                        </div>
                        <div id="m-navigation-replacer"></div>
                        <div id="m-navigation-product-list-wrapper">
                            <div class="product-list-container">
                                <div class="toolbar toolbar-top">
                                    <div class="toolbar toolbar-products"
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/Make up\/skincare\/makeup.html&quot;,&quot;formKey&quot;:&quot;QBPARmd7VS3RR5Oi&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeup9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeupe63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeup0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeup4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeupbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeup5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
                                                                    Sellers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 hidden-xs">
                                                <div class="field limiter"><label class="label"
                                                        for="limiter"><span>Show</span></label>
                                                    <div class="control"><select id="limiter" data-role="limiter"
                                                            class="limiter-options">
                                                            <option value="12">12</option>
                                                            <option value="24">24</option>
                                                            <option value="36" selected="selected">36</option>
                                                            <option value="200">200</option>
                                                            <option value="all">All</option>
                                                        </select></div><span class="limiter-text">per page</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-grid">
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../bourjois-123p-foundation-number-53-light-biege-30ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12831"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/o/bourjois_123p_foundation_1.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Bourjois 123P Foundation Number 53 Light Biege 30ml"></span></span>
                                                    <style>
                                                        .product-image-container-12831 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12831 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../bourjois-123p-foundation-number-53-light-biege-30ml.html">Bourjois
                                                            123P Foundation Number 53 Light Biege 30ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12831" data-price-box="product-id-12831"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12831" data-price-amount="11.19"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£11.19</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-active-concealer-tan.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13260"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel038.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Active Concealer- Tan"></span></span>
                                                    <style>
                                                        .product-image-container-13260 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13260 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-active-concealer-tan.html">Zelens Active
                                                            Concealer- Tan</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13260" data-price-box="product-id-13260"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13260" data-price-amount="30.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£30.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-youth-glow-foundation-tan-30ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13224"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel002.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Youth Glow Foundation - Tan 30ml"></span></span>
                                                    <style>
                                                        .product-image-container-13224 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13224 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-youth-glow-foundation-tan-30ml.html">Zelens
                                                            Youth Glow Foundation - Tan 30ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13224" data-price-box="product-id-13224"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13224" data-price-amount="51.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£51.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-youth-glow-foundation-beige-30ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13227"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel005.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Youth Glow Foundation- Beige 30ml"></span></span>
                                                    <style>
                                                        .product-image-container-13227 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13227 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-youth-glow-foundation-beige-30ml.html">Zelens
                                                            Youth Glow Foundation- Beige 30ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13227" data-price-box="product-id-13227"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13227" data-price-amount="51.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£51.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-age-control-foundation-tan-30ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13230"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel008.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Age Control Foundation- Tan 30ml"></span></span>
                                                    <style>
                                                        .product-image-container-13230 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13230 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-age-control-foundation-tan-30ml.html">Zelens
                                                            Age Control Foundation- Tan 30ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13230" data-price-box="product-id-13230"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13230" data-price-amount="51.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£51.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-extreme-velvet-treatment-lipstick-tea-rose.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13254"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel032.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Extreme Velvet Treatment Lipstick - Tea Rose"></span></span>
                                                    <style>
                                                        .product-image-container-13254 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13254 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-extreme-velvet-treatment-lipstick-tea-rose.html">Zelens
                                                            Extreme Velvet Treatment Lipstick - Tea Rose</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13254" data-price-box="product-id-13254"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13254" data-price-amount="24"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£24.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-extreme-velvet-treatment-lipstick-nude-plum.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13257"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel035.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Extreme Velvet Treatment Lipstick - Nude Plum"></span></span>
                                                    <style>
                                                        .product-image-container-13257 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13257 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-extreme-velvet-treatment-lipstick-nude-plum.html">Zelens
                                                            Extreme Velvet Treatment Lipstick - Nude Plum</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13257" data-price-box="product-id-13257"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13257" data-price-amount="24"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£24.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../catalog/product/view/id/3792/s/max-factor-crme-puff-pressed-powder-41-medium-beige-21g/category/18911/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3792"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/x/mxf015.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Max Factor Creme Puff Pressed Powder 41 Medium Beige 21g"></span></span>
                                                    <style>
                                                        .product-image-container-3792 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3792 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../catalog/product/view/id/3792/s/max-factor-crme-puff-pressed-powder-41-medium-beige-21g/category/18911/index.html">Max
                                                            Factor Creme Puff Pressed Powder 41 Medium Beige
                                                            21g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3792" data-price-box="product-id-3792"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3792" data-price-amount="4.79"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.79</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../catalog/product/view/id/3794/s/max-factor-crme-puff-pressed-powder-50-natural-21g/category/18911/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3794"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/x/mxf013_2.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Max Factor Creme Puff Pressed Powder 50 Natural 21g"></span></span>
                                                    <style>
                                                        .product-image-container-3794 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3794 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../catalog/product/view/id/3794/s/max-factor-crme-puff-pressed-powder-50-natural-21g/category/18911/index.html">Max
                                                            Factor Creme Puff Pressed Powder 50 Natural 21g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3794" data-price-box="product-id-3794"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3794" data-price-amount="4.79"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.79</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../catalog/product/view/id/3791/s/max-factor-creme-puff-pressed-powder-13-nouveau-beige-21g/category/18911/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3791"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/x/mxf014.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Max Factor Creme Puff Pressed Powder 13 Nouveau Beige 21g"></span></span>
                                                    <style>
                                                        .product-image-container-3791 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3791 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../catalog/product/view/id/3791/s/max-factor-creme-puff-pressed-powder-13-nouveau-beige-21g/category/18911/index.html">Max
                                                            Factor Creme Puff Pressed Powder 13 Nouveau Beige
                                                            21g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3791" data-price-box="product-id-3791"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3791" data-price-amount="4.79"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.79</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../catalog/product/view/id/3795/s/max-factor-crme-puff-pressed-powder-53-tempting-touch-21g/category/18911/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3795"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/x/mxf018.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Max Factor Creme Puff Pressed Powder 53 Tempting Touch 21g"></span></span>
                                                    <style>
                                                        .product-image-container-3795 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3795 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../catalog/product/view/id/3795/s/max-factor-crme-puff-pressed-powder-53-tempting-touch-21g/category/18911/index.html">Max
                                                            Factor Creme Puff Pressed Powder 53 Tempting Touch
                                                            21g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3795" data-price-box="product-id-3795"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3795" data-price-amount="4.79"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.79</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../catalog/product/view/id/3797/s/max-factor-creme-puff-pressed-powder-81-truly-fair-21g/category/18911/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3797"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/x/mxf022.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Max Factor Creme Puff Pressed Powder 81 Truly Fair 21g"></span></span>
                                                    <style>
                                                        .product-image-container-3797 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3797 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../catalog/product/view/id/3797/s/max-factor-creme-puff-pressed-powder-81-truly-fair-21g/category/18911/index.html">Max
                                                            Factor Creme Puff Pressed Powder 81 Truly Fair 21g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3797" data-price-box="product-id-3797"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3797" data-price-amount="4.79"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.79</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../catalog/product/view/id/3889/s/max-factor-2000-calorie-mascara-9ml/category/18911/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3889"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/x/mxf078.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Max Factor 2000 Calorie Mascara 9ml"></span></span>
                                                    <style>
                                                        .product-image-container-3889 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3889 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../catalog/product/view/id/3889/s/max-factor-2000-calorie-mascara-9ml/category/18911/index.html">Max
                                                            Factor 2000 Calorie Mascara 9ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3889" data-price-box="product-id-3889"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3889" data-price-amount="5.02"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.02</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-youth-glow-foundation-cream-30ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13225"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel003.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Youth Glow Foundation - Cream 30ml"></span></span>
                                                    <style>
                                                        .product-image-container-13225 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13225 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-youth-glow-foundation-cream-30ml.html">Zelens
                                                            Youth Glow Foundation - Cream 30ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13225" data-price-box="product-id-13225"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13225" data-price-amount="51.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£51.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-youth-glow-foundation-cameo-30ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13226"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel004.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Youth Glow Foundation- Cameo 30ml"></span></span>
                                                    <style>
                                                        .product-image-container-13226 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13226 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-youth-glow-foundation-cameo-30ml.html">Zelens
                                                            Youth Glow Foundation- Cameo 30ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13226" data-price-box="product-id-13226"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13226" data-price-amount="51.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£51.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-age-control-foundation-beige-30ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13231"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel009.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Age Control Foundation- Beige 30ml"></span></span>
                                                    <style>
                                                        .product-image-container-13231 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13231 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-age-control-foundation-beige-30ml.html">Zelens
                                                            Age Control Foundation- Beige 30ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13231" data-price-box="product-id-13231"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13231" data-price-amount="51.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£51.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-extreme-velvet-treatment-lipstick-red.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13255"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel033.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Extreme Velvet Treatment Lipstick - Red"></span></span>
                                                    <style>
                                                        .product-image-container-13255 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13255 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-extreme-velvet-treatment-lipstick-red.html">Zelens
                                                            Extreme Velvet Treatment Lipstick - Red</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13255" data-price-box="product-id-13255"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13255" data-price-amount="24"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£24.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../../zelens-extreme-velvet-treatment-lipstick-nude-pink.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13256"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/z/e/zel034.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Zelens Extreme Velvet Treatment Lipstick - Nude Pink"></span></span>
                                                    <style>
                                                        .product-image-container-13256 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13256 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../../zelens-extreme-velvet-treatment-lipstick-nude-pink.html">Zelens
                                                            Extreme Velvet Treatment Lipstick - Nude Pink</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13256" data-price-box="product-id-13256"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13256" data-price-amount="24"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£24.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of stock</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="toolbar toolbar-bottom">
                                    <div class="toolbar toolbar-products"
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/Make up\/skincare\/makeup.html&quot;,&quot;formKey&quot;:&quot;QBPARmd7VS3RR5Oi&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeup9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeupe63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeup0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeup4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeupbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'makeup5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
                                                                    Sellers</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3 hidden-xs">
                                                <div class="field limiter"><label class="label"
                                                        for="limiter"><span>Show</span></label>
                                                    <div class="control"><select id="limiter" data-role="limiter"
                                                            class="limiter-options">
                                                            <option value="12">12</option>
                                                            <option value="24">24</option>
                                                            <option value="36" selected="selected">36</option>
                                                            <option value="200">200</option>
                                                            <option value="all">All</option>
                                                        </select></div><span class="limiter-text">per page</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="category-description scroller-content">
                            <div data-content-type="row" data-appearance="contained" data-element="main">
                                <div data-enable-parallax="0" data-parallax-speed="0.5" data-background-images="{}"
                                    data-element="inner"
                                    style="justify-content: flex-start; display: flex; flex-direction: column; background-position: left top; background-size: cover; background-repeat: no-repeat; background-attachment: scroll; border-style: none; border-width: 1px; border-radius: 0px; margin: 0px 0px 10px; padding: 10px;">
                                    <div data-content-type="html" data-appearance="default" data-element="main"
                                        style="border-style: none; border-width: 1px; border-radius: 0px; margin: 0px; padding: 0px;">
                                        <p> Professionally care for your clients hair by using our top quality
                                           Make upfrom renowned brands such as, Wella, Goldwell, Fanola and Serie
                                            Expert. At emerch junction ourMake upoffer a vast array of uses
                                            including straightening, moisturising, curl defining, anti-dandruff and
                                            much more. Available in both retail and professional sizes so you can
                                            have a diverse Make up collection that guarantees healthy, happy hair.
                                            Our hair care products help to reduce frizz, are greta for hydrating,
                                            volumizing or moisturizing the hair, and its perfect for all hair types
                                            whether that is dry hair, curly hair, fine hair, hair loss,
                                            color-treated hair, hair with a lot of breakage, itchy scalps and so
                                            many other hair types. We have a selection of dry Make up, repair
                                            Make up, moisturizing Make up, anti-dandruff Make up,
                                            volumizing
                                            Make up, thickening Make up, moisturie Make up, tea tree
                                            special
                                            Make up, and we even have a small selection of argan oil Make up. We
                                            produce products that reduce split ends and are good for scalp care. We
                                            sell products with essential oils like coconut oil to help act like a
                                            moisturizer and we even have sulfate-free products to help hydrate your
                                            hair. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('front.beauty.filter')
                </div>
            </div>
        </div>
    </main>
@endsection
