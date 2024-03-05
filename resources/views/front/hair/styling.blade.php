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
                                    data-ui-id="page-title-wrapper">Styling</span></h1>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/styling.html&quot;,&quot;formKey&quot;:&quot;TNR6viqoI8uXfZO6&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'styling9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'stylinge63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'styling0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'styling4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'stylingbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'styling5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                        <div class="pages"><strong class="label pages-label"
                                                id="paging-label">Page</strong>
                                            <ul class="items pages-items" aria-labelledby="paging-label">
                                                <li class="item current"><strong class="page"><span class="label">You're
                                                            currently reading page</span> <span>1</span></strong></li>
                                                <li class="item"><a href="styling905b.html?p=2" class="page"><span
                                                            class="label">Page</span> <span>2</span></a></li>
                                                <li class="item"><a href="styling2207.html?p=3" class="page"><span
                                                            class="label">Page</span> <span>3</span></a></li>
                                                <li class="item"><a href="styling5c7e.html?p=4" class="page"><span
                                                            class="label">Page</span> <span>4</span></a></li>
                                                <li class="item"><a href="stylingc471.html?p=5" class="page"><span
                                                            class="label">Page</span> <span>5</span></a></li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href="styling905b.html?p=2" title="Next"><span
                                                            class="label">Page</span> <span>Next</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-grid">
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../red-one-red-aqua-hair-wax-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13093"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo016.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Red One Red Aqua Hair Wax 150ml"></span></span>
                                                    <style>
                                                        .product-image-container-13093 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13093 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../red-one-red-aqua-hair-wax-150ml.html">Red One Red Aqua
                                                            Hair Wax 150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13093" data-price-box="product-id-13093"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13093" data-price-amount="5.39"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.39</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO016"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/13093/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13093"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzEzMDkzLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../hair-xpertise-stayset-setting-lotion-normal-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16139"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/a/hax002.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hair Xpertise Stayset setting lotion normal 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-16139 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16139 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hair-xpertise-stayset-setting-lotion-normal-100ml.html">Hair
                                                            Xpertise Stayset setting lotion normal 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16139" data-price-box="product-id-16139"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16139" data-price-amount="2.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£2.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="HAX002"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/16139/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16139"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE2MTM5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../red-one-blue-aqua-hair-wax-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13094"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo017.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Red One Blue Aqua Hair Wax 150ml"></span></span>
                                                    <style>
                                                        .product-image-container-13094 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13094 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../red-one-blue-aqua-hair-wax-150ml.html">Red One Blue
                                                            Aqua Hair Wax 150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13094" data-price-box="product-id-13094"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13094" data-price-amount="5.29"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.29</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO017"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/13094/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13094"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzEzMDk0Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../hair-xpertise-stayset-setting-lotion-firm-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16140"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/a/hax003.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hair Xpertise Stayset Setting Lotion Firm 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-16140 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16140 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hair-xpertise-stayset-setting-lotion-firm-100ml.html">Hair
                                                            Xpertise Stayset Setting Lotion Firm 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16140" data-price-box="product-id-16140"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16140" data-price-amount="2.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£2.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="HAX003"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/16140/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16140"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE2MTQwLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
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
                                                    href-data="../red-one-black-aqua-hair-gel-wax-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13089"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo012.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Red One Black Aqua Hair Gel Wax 150ml"></span></span>
                                                    <style>
                                                        .product-image-container-13089 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13089 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../red-one-black-aqua-hair-gel-wax-150ml.html">Red One
                                                            Black Aqua Hair Gel Wax 150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13089" data-price-box="product-id-13089"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13089" data-price-amount="5.78"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.78</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO012"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/13089/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13089"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzEzMDg5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../red-one-orange-aqua-hair-gel-wax-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13090"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo013.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Red One Orange Aqua Hair Gel Wax 150ml"></span></span>
                                                    <style>
                                                        .product-image-container-13090 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13090 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../red-one-orange-aqua-hair-gel-wax-150ml.html">Red One
                                                            Orange Aqua Hair Gel Wax 150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13090" data-price-box="product-id-13090"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13090" data-price-amount="6.9"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO013"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/13090/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13090"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzEzMDkwLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../redone-creative-clay-wax-strong-hold-matte-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17310"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo043.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="RedOne Creative Clay Wax Strong Hold &amp; Matte 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-17310 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17310 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../redone-creative-clay-wax-strong-hold-matte-100ml.html">RedOne
                                                            Creative Clay Wax Strong Hold &amp; Matte 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17310" data-price-box="product-id-17310"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17310" data-price-amount="4"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO043"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/17310/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17310"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE3MzEwLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../clynol-lift-strong-mousse-300ml-cly065.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16776"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/c/l/cly065.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Clynol Lift Strong Mousse 300ml"></span></span>
                                                    <style>
                                                        .product-image-container-16776 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16776 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../clynol-lift-strong-mousse-300ml-cly065.html">Clynol
                                                            Lift Strong Mousse 300ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16776" data-price-box="product-id-16776"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16776" data-price-amount="2.05"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£2.05</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="CLY065"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/16776/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16776"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE2Nzc2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
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
                                                    href-data="../red-one-green-matte-hair-wax-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13091"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo014.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Red One Green Matte Hair Wax 150ml"></span></span>
                                                    <style>
                                                        .product-image-container-13091 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13091 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../red-one-green-matte-hair-wax-150ml.html">Red One Green
                                                            Matte Hair Wax 150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13091" data-price-box="product-id-13091"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13091" data-price-amount="5.29"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.29</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO014"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/13091/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13091"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzEzMDkxLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../osmo-clay-wax-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3619"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome103.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Osmo Clay Wax 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-3619 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3619 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../osmo-clay-wax-100ml.html">Osmo Clay Wax
                                                            100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3619" data-price-box="product-id-3619"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3619" data-price-amount="5.36"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.36</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="OME103"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/3619/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="3619"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzM2MTkv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../red-one-bright-white-aqua-hair-wax-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13092"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo015.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Red One Bright White Aqua Hair Wax 150ml"></span></span>
                                                    <style>
                                                        .product-image-container-13092 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13092 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../red-one-bright-white-aqua-hair-wax-150ml.html">Red One
                                                            Bright White Aqua Hair Wax 150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13092" data-price-box="product-id-13092"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13092" data-price-amount="5.78"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.78</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO015"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/13092/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13092"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzEzMDkyLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../goldwell-stylesign-crystal-turn-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8257"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol099.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Stylesign Crystal Turn 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-8257 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8257 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../goldwell-stylesign-crystal-turn-100ml.html">Goldwell
                                                            Stylesign Crystal Turn 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8257" data-price-box="product-id-8257"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-8257" data-price-amount="8"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£8.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL099"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/8257/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="8257"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzgyNTcv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
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
                                                    href-data="../goldwell-stylesign-creative-texture-roughman-matte-cream-paste-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-9903"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol300.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Stylesign Creative Texture Roughman Matte Cream Paste 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-9903 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-9903 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../goldwell-stylesign-creative-texture-roughman-matte-cream-paste-100ml.html">Goldwell
                                                            Stylesign Creative Texture Roughman Matte Cream Paste
                                                            100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="9903" data-price-box="product-id-9903"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-9903" data-price-amount="11.59"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£11.59</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL300"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/9903/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="9903"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0Lzk5MDMv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../redone-passionate-spider-hair-wax-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17317"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo050.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="RedOne Passionate Spider Hair Wax 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-17317 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17317 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../redone-passionate-spider-hair-wax-100ml.html">RedOne
                                                            Passionate Spider Hair Wax 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17317" data-price-box="product-id-17317"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17317" data-price-amount="4"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO050"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/17317/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17317"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE3MzE3Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../catalog/product/view/id/6678/s/kadus-professional-dramatize-it-x-strong-hold-mousse-500ml/category/6202/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-6678"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/a/kad056.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kadus Professional Dramatize It X-Strong Hold Mousse 500ml"></span></span>
                                                    <style>
                                                        .product-image-container-6678 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-6678 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../catalog/product/view/id/6678/s/kadus-professional-dramatize-it-x-strong-hold-mousse-500ml/category/6202/index.html">Kadus
                                                            Professional Dramatize It X-Strong Hold Mousse
                                                            500ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="6678" data-price-box="product-id-6678"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-6678" data-price-amount="8.52"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£8.52</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="KAD056"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/6678/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="6678"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzY2Nzgv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../osmo-matte-clay-extreme-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3621"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome105.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Osmo Matte Clay Extreme 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-3621 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3621 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../osmo-matte-clay-extreme-100ml.html">Osmo Matte Clay
                                                            Extreme 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3621" data-price-box="product-id-3621"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3621" data-price-amount="5.64"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.64</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="OME105"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/3621/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="3621"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzM2MjEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
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
                                                    href-data="../label-m-brightening-blonde-balm-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16402"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/l/b/lbm0050.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Label M Brightening Blonde Balm 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-16402 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16402 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../label-m-brightening-blonde-balm-100ml.html">Label M
                                                            Brightening Blonde Balm 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16402" data-price-box="product-id-16402"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16402" data-price-amount="1.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="LBM0050"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/16402/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16402"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE2NDAyLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../redone-creative-fiber-wax-strong-matte-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17312"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo045-removebg-preview.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="RedOne Creative Fiber Wax Strong &amp; Matte 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-17312 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17312 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../redone-creative-fiber-wax-strong-matte-100ml.html">RedOne
                                                            Creative Fiber Wax Strong &amp; Matte 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17312" data-price-box="product-id-17312"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17312" data-price-amount="4"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO045"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/17312/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17312"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE3MzEyLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../wella-eimi-perfect-setting-lotion-spray-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5639"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/m/emi033.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wella EIMI Perfect Setting Lotion Spray 150ml"></span></span>
                                                    <style>
                                                        .product-image-container-5639 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5639 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wella-eimi-perfect-setting-lotion-spray-150ml.html">Wella
                                                            EIMI Perfect Setting Lotion Spray 150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5639" data-price-box="product-id-5639"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5639" data-price-amount="7.68"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£7.68</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="EMI033"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/5639/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="5639"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzU2Mzkv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../proclere-freeze-gel-spray-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16116"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prc007.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Proclere Freeze gel spray 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-16116 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16116 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../proclere-freeze-gel-spray-250ml.html">Proclere Freeze
                                                            gel spray 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16116" data-price-box="product-id-16116"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16116" data-price-amount="5.72"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.72</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="PRC007"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/16116/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="16116"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE2MTE2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
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
                                                    href-data="../american-crew-forming-cream-50g.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-72"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/m/amc053.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="American Crew Forming Cream 50g"></span></span>
                                                    <style>
                                                        .product-image-container-72 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-72 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../american-crew-forming-cream-50g.html">American Crew
                                                            Forming Cream 50g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="72" data-price-box="product-id-72"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-72" data-price-amount="6.39"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£6.39</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AMC053"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/72/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="72"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzcyLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../goldwell-stylesign-curls-waves-curl-splash-hydrating-curl-gel-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17670"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol474.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Stylesign Curls &amp; Waves Curl Splash Hydrating Curl Gel 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-17670 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17670 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../goldwell-stylesign-curls-waves-curl-splash-hydrating-curl-gel-100ml.html">Goldwell
                                                            Stylesign Curls &amp; Waves Curl Splash Hydrating Curl Gel
                                                            100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17670" data-price-box="product-id-17670"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17670" data-price-amount="9.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL474"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/17670/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17670"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE3NjcwLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../kadus-fix-it-strong-hold-spray-300ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17078"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/a/kad282.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kadus Fix It Strong Hold Spray 300ml"></span></span>
                                                    <style>
                                                        .product-image-container-17078 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17078 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../kadus-fix-it-strong-hold-spray-300ml.html">Kadus Fix
                                                            It Strong Hold Spray 300ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17078" data-price-box="product-id-17078"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17078" data-price-amount="7.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£7.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="KAD282"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/17078/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17078"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE3MDc4Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../osmo-curl-spray-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3606"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome090.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Osmo Curl Spray 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-3606 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3606 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../osmo-curl-spray-250ml.html">Osmo Curl Spray
                                                            250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3606" data-price-box="product-id-3606"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3606" data-price-amount="5.22"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.22</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="OME090"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/3606/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="3606"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzM2MDYv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
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
                                                    href-data="../goldwell-stylesign-ultra-volume-naturally-full-200ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8254"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol096.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Stylesign Ultra Volume Naturally Full 200ml"></span></span>
                                                    <style>
                                                        .product-image-container-8254 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8254 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../goldwell-stylesign-ultra-volume-naturally-full-200ml.html">Goldwell
                                                            Stylesign Ultra Volume Naturally Full 200ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8254" data-price-box="product-id-8254"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-8254" data-price-amount="8.54"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£8.54</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL096"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/8254/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8254"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzgyNTQv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../goldwell-stylesign-creative-texture-mellogoo-modelling-paste-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-9908"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol305.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Stylesign Creative Texture Mellogoo Modelling Paste 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-9908 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-9908 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../goldwell-stylesign-creative-texture-mellogoo-modelling-paste-100ml.html">Goldwell
                                                            Stylesign Creative Texture Mellogoo Modelling Paste
                                                            100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="9908" data-price-box="product-id-9908"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-9908" data-price-amount="9.69"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.69</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL305"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/9908/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="9908"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0Lzk5MDgv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../osmo-aqua-wax-hard-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3616"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome100.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Osmo Aqua-Wax Hard 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-3616 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3616 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../osmo-aqua-wax-hard-100ml.html">Osmo Aqua-Wax Hard
                                                            100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3616" data-price-box="product-id-3616"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3616" data-price-amount="4.04"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.04</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="OME100"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/3616/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="3616"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzM2MTYv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../osmo-fibre-paste-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3622"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome106.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Osmo Fibre Paste 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-3622 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3622 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../osmo-fibre-paste-100ml.html">Osmo Fibre Paste
                                                            100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3622" data-price-box="product-id-3622"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3622" data-price-amount="4.04"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.04</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="OME106"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/3622/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="3622"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzM2MjIv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
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
                                                    href-data="../goldwell-stylesign-perfect-hold-non-aerosol-hair-spray-magic-finish-3-200ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-9871"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol270.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Stylesign Perfect Hold Non-Aerosol Hair Spray Magic Finish 3 200ml"></span></span>
                                                    <style>
                                                        .product-image-container-9871 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-9871 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../goldwell-stylesign-perfect-hold-non-aerosol-hair-spray-magic-finish-3-200ml.html">Goldwell
                                                            Stylesign Perfect Hold Non-Aerosol Hair Spray Magic Finish 3
                                                            200ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="9871" data-price-box="product-id-9871"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-9871" data-price-amount="11.09"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£11.09</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL270"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/9871/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="9871"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0Lzk4NzEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../wella-eimi-grip-cream-75ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5650"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/m/emi036.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wella EIMI Grip Cream 75ml"></span></span>
                                                    <style>
                                                        .product-image-container-5650 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5650 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wella-eimi-grip-cream-75ml.html">Wella EIMI Grip
                                                            Cream 75ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5650" data-price-box="product-id-5650"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5650" data-price-amount="9.36"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.36</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="EMI036"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/5650/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="5650"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzU2NTAv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../osmo-extreme-gel-spray-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3605"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome089.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Osmo Extreme Gel Spray 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-3605 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3605 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../osmo-extreme-gel-spray-250ml.html">Osmo Extreme Gel
                                                            Spray 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3605" data-price-box="product-id-3605"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3605" data-price-amount="7.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£7.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="OME089"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/3605/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="3605"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzM2MDUv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../proclere-infatreat-t-p-thermal-protector-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16134"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prc025.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Proclere Infatreat T.P Thermal Protector 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-16134 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16134 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../proclere-infatreat-t-p-thermal-protector-250ml.html">Proclere
                                                            Infatreat T.P Thermal Protector 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16134" data-price-box="product-id-16134"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16134" data-price-amount="5.98"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.98</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="PRC025"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/16134/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="16134"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE2MTM0Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
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
                                                    href-data="../redone-show-off-spider-hair-wax-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17316"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo049.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="RedOne Show-Off Spider Hair Wax 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-17316 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17316 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../redone-show-off-spider-hair-wax-100ml.html">RedOne
                                                            Show-Off Spider Hair Wax 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17316" data-price-box="product-id-17316"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17316" data-price-amount="4"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="REO049"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/17316/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17316"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE3MzE2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../goldwell-dualsenses-curls-waves-hydrating-serum-spray-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17649"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol453.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Dualsenses Curls &amp; Waves Hydrating Serum Spray 150ml"></span></span>
                                                    <style>
                                                        .product-image-container-17649 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17649 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../goldwell-dualsenses-curls-waves-hydrating-serum-spray-150ml.html">Goldwell
                                                            Dualsenses Curls &amp; Waves Hydrating Serum Spray
                                                            150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17649" data-price-box="product-id-17649"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17649" data-price-amount="8.99"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£8.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL453"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/17649/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17649"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE3NjQ5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../l-oreal-serie-expert-blow-dry-fluidifier-10-in-1-professional-cream-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17539"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/l/-/l-oreal-professionnel-serie-expert-blow-dry-fluidifier-cream_prev_ui.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="L'Oreal Serie Expert Blow-Dry Fluidifier 10-In-1 Professional Cream 150ml"></span></span>
                                                    <style>
                                                        .product-image-container-17539 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17539 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../l-oreal-serie-expert-blow-dry-fluidifier-10-in-1-professional-cream-150ml.html">L'Oreal
                                                            Serie Expert Blow-Dry Fluidifier 10-In-1 Professional Cream
                                                            150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17539" data-price-box="product-id-17539"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17539" data-price-amount="15.12"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£15.12</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="LOR547"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/17539/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17539"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzE3NTM5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../osmo-fibre-sculpt-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-3613"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome097.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Osmo Fibre Sculpt 100ml"></span></span>
                                                    <style>
                                                        .product-image-container-3613 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-3613 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../osmo-fibre-sculpt-100ml.html">Osmo Fibre Sculpt
                                                            100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="3613" data-price-box="product-id-3613"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-3613" data-price-amount="4.82"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.82</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="OME097"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvc3R5bGluZy5odG1s/product/3613/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="3613"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2YzNSNWJHbHVaeTVvZEcxcy9wcm9kdWN0LzM2MTMv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="TNR6viqoI8uXfZO6"> <button type="button"
                                                                        title="Add to Cart"
                                                                        class="action tocart primary"><span>Add to
                                                                            Cart</span></button></form>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/styling.html&quot;,&quot;formKey&quot;:&quot;TNR6viqoI8uXfZO6&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'styling9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'stylinge63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'styling0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'styling4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'stylingbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'styling5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                        <div class="pages"><strong class="label pages-label"
                                                id="paging-label">Page</strong>
                                            <ul class="items pages-items" aria-labelledby="paging-label">
                                                <li class="item current"><strong class="page"><span
                                                            class="label">You're currently reading page</span>
                                                        <span>1</span></strong></li>
                                                <li class="item"><a href="styling905b.html?p=2" class="page"><span
                                                            class="label">Page</span> <span>2</span></a></li>
                                                <li class="item"><a href="styling2207.html?p=3" class="page"><span
                                                            class="label">Page</span> <span>3</span></a></li>
                                                <li class="item"><a href="styling5c7e.html?p=4" class="page"><span
                                                            class="label">Page</span> <span>4</span></a></li>
                                                <li class="item"><a href="stylingc471.html?p=5" class="page"><span
                                                            class="label">Page</span> <span>5</span></a></li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href="styling905b.html?p=2" title="Next"><span
                                                            class="label">Page</span> <span>Next</span></a></li>
                                            </ul>
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
                                            shampoos from renowned brands such as, Wella, Goldwell, Fanola and Serie
                                            Expert. At emerch junction our shampoos offer a vast array of uses
                                            including straightening, moisturising, curl defining, anti-dandruff and
                                            much more. Available in both retail and professional sizes so you can
                                            have a diverse shampoo collection that guarantees healthy, happy hair.
                                            Our hair care products help to reduce frizz, are greta for hydrating,
                                            volumizing or moisturizing the hair, and its perfect for all hair types
                                            whether that is dry hair, curly hair, fine hair, hair loss,
                                            color-treated hair, hair with a lot of breakage, itchy scalps and so
                                            many other hair types. We have a selection of dry shampoo, repair
                                            shampoo, moisturizing shampoo, anti-dandruff shampoo, volumizing
                                            shampoo, thickening shampoo, moisturie shampoo, tea tree special
                                            shampoo, and we even have a small selection of argan oil shampoo. We
                                            produce products that reduce split ends and are good for scalp care. We
                                            sell products with essential oils like coconut oil to help act like a
                                            moisturizer and we even have sulfate-free products to help hydrate your
                                            hair. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('front.hair.filter')
                </div>
            </div>
        </div>
    </main>
@endsection
