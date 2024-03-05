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
                                    data-ui-id="page-title-wrapper">Tanning</span></h1>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/beauty\/tanning.html&quot;,&quot;formKey&quot;:&quot;ytjb8XqdO73xqDLZ&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanning9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanninge63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanning0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanning4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanningbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanning5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                    href-data="../protan-unbelievably-black-ultra-dark-bronzing-lotion-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4379"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prt006.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="ProTan Unbelievably Black Ultra Dark Bronzing Lotion 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-4379 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4379 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../protan-unbelievably-black-ultra-dark-bronzing-lotion-250ml.html">ProTan
                                                            Unbelievably Black Ultra Dark Bronzing Lotion 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4379" data-price-box="product-id-4379"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4379" data-price-amount="10.99"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="PRT006"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/4379/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="4379"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC80Mzc5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../emerald-bay-definitely-black-bronzer-aloe-vera-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17515"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/m/emb011.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Emerald Bay Definitely Black Bronzer + Aloe Vera 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-17515 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17515 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../emerald-bay-definitely-black-bronzer-aloe-vera-250ml.html">Emerald
                                                            Bay Definitely Black Bronzer + Aloe Vera 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17515" data-price-box="product-id-17515"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17515" data-price-amount="12.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="EMB011"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/17515/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17515"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC8xNzUxNS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../protan-incredibly-black-ultra-powerful-bronzing-lotion-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4375"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prt002.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="ProTan Incredibly Black Ultra Powerful Bronzing Lotion 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-4375 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4375 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../protan-incredibly-black-ultra-powerful-bronzing-lotion-250ml.html">ProTan
                                                            Incredibly Black Ultra Powerful Bronzing Lotion
                                                            250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4375" data-price-box="product-id-4375"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4375" data-price-amount="10.99"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="PRT002"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/4375/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="4375"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC80Mzc1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../supre-tan-coco-nutz-dark-tanning-bronzer-235ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4836"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/u/sut001.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Supre Tan Coco Nutz Dark Tanning Bronzer 235ml"></span></span>
                                                    <style>
                                                        .product-image-container-4836 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4836 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../supre-tan-coco-nutz-dark-tanning-bronzer-235ml.html">Supre
                                                            Tan Coco Nutz Dark Tanning Bronzer 235ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4836" data-price-box="product-id-4836"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4836" data-price-amount="13.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£13.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="SUT001"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/4836/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="4836"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC80ODM2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../fiesta-sun-mango-melt-sizzling-hot-action-dark-tanning-tingle-236ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-1207"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/s/fsu003.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Fiesta Sun Mango Melt Sizzling Hot Action Dark Tanning Tingle 236ml"></span></span>
                                                    <style>
                                                        .product-image-container-1207 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-1207 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../fiesta-sun-mango-melt-sizzling-hot-action-dark-tanning-tingle-236ml.html">Fiesta
                                                            Sun Mango Melt Sizzling Hot Action Dark Tanning Tingle
                                                            236ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="1207" data-price-box="product-id-1207"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-1207" data-price-amount="11.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£11.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="FSU003"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/1207/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="1207"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC8xMjA3Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../sunlicious-top-secret-20xx-dark-tanning-accelerator-369ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4835"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/u/sun001.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Sunlicious Top Secret 20XX Dark Tanning Accelerator 369ml"></span></span>
                                                    <style>
                                                        .product-image-container-4835 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4835 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../sunlicious-top-secret-20xx-dark-tanning-accelerator-369ml.html">Sunlicious
                                                            Top Secret 20XX Dark Tanning Accelerator 369ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4835" data-price-box="product-id-4835"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4835" data-price-amount="23.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£23.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="SUN001"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/4835/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="4835"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC80ODM1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../power-tan-super-black-onyx-accelerator-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4391"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/o/pot002_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Power Tan Super Black Onyx Accelerator 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-4391 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4391 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../power-tan-super-black-onyx-accelerator-250ml.html">Power
                                                            Tan Super Black Onyx Accelerator 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4391" data-price-box="product-id-4391"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4391" data-price-amount="21"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£21.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="POT002"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/4391/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="4391"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC80MzkxLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../protan-summer-sweet-heart-dark-tanning-accelerator-280ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-9119"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prt017.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="ProTan Summer Sweet Heart Dark Tanning Accelerator 280ml"></span></span>
                                                    <style>
                                                        .product-image-container-9119 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-9119 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../protan-summer-sweet-heart-dark-tanning-accelerator-280ml.html">ProTan
                                                            Summer Sweet Heart Dark Tanning Accelerator 280ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="9119" data-price-box="product-id-9119"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-9119" data-price-amount="16.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£16.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="PRT017"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/9119/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="9119"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC85MTE5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../emerald-bay-dark-mojo-tingle-cayene-pepper-bronzer-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17899"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/m/emb015.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Emerald Bay Dark Mojo Tingle + Cayenne Pepper Bronzer 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-17899 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17899 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../emerald-bay-dark-mojo-tingle-cayene-pepper-bronzer-250ml.html">Emerald
                                                            Bay Dark Mojo Tingle + Cayenne Pepper Bronzer 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17899" data-price-box="product-id-17899"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17899" data-price-amount="10.26"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.26</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="EMB015"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/17899/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17899"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC8xNzg5OS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../emerald-bay-catching-rays-intensifier-with-carrot-oil-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17901"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/m/emb014.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Emerald Bay Catching Rays Intensifier with Carrot Oil 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-17901 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17901 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../emerald-bay-catching-rays-intensifier-with-carrot-oil-250ml.html">Emerald
                                                            Bay Catching Rays Intensifier with Carrot Oil 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17901" data-price-box="product-id-17901"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17901" data-price-amount="10.3"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.30</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="EMB014"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/17901/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17901"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC8xNzkwMS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../emerald-bay-beach-daze-intensifier-with-hemp-seed-oil-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17900"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/m/emb013.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Emerald Bay Beach Daze Intensifier with Hemp Seed Oil 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-17900 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17900 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../emerald-bay-beach-daze-intensifier-with-hemp-seed-oil-250ml.html">Emerald
                                                            Bay Beach Daze Intensifier with Hemp Seed Oil 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17900" data-price-box="product-id-17900"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17900" data-price-amount="10.3"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.30</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="EMB013"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/17900/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17900"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC8xNzkwMC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../fiesta-sun-black-cherry-crush-supremely-dark-tanning-bronzer-236ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-1206"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/s/fsu002.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Fiesta Sun Black Cherry Crush Supremely Dark Tanning Bronzer 236ml"></span></span>
                                                    <style>
                                                        .product-image-container-1206 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-1206 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../fiesta-sun-black-cherry-crush-supremely-dark-tanning-bronzer-236ml.html">Fiesta
                                                            Sun Black Cherry Crush Supremely Dark Tanning Bronzer
                                                            236ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="1206" data-price-box="product-id-1206"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-1206" data-price-amount="11.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£11.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="FSU002"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/1206/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="1206"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC8xMjA2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../fiesta-sun-coconut-dream-ultra-dark-tanning-bronzer-236ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-1208"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/s/fsu004.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Fiesta Sun Coconut Dream Ultra Dark Tanning Bronzer 236ml"></span></span>
                                                    <style>
                                                        .product-image-container-1208 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-1208 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../fiesta-sun-coconut-dream-ultra-dark-tanning-bronzer-236ml.html">Fiesta
                                                            Sun Coconut Dream Ultra Dark Tanning Bronzer 236ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="1208" data-price-box="product-id-1208"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-1208" data-price-amount="11.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£11.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="FSU004"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90YW5uaW5nLmh0bWw~/product/1208/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="1208"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MFlXNXVhVzVuTG1oMGJXd34vcHJvZHVjdC8xMjA4Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="ytjb8XqdO73xqDLZ"> <button type="button"
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
                                                    href-data="../protan-hot-tottie-hot-action-dark-tanning-tingle-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4378"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prt005.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="ProTan Hot Tottie Hot Action Dark Tanning Tingle 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-4378 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4378 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../protan-hot-tottie-hot-action-dark-tanning-tingle-250ml.html">ProTan
                                                            Hot Tottie Hot Action Dark Tanning Tingle 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4378" data-price-box="product-id-4378"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4378" data-price-amount="10.99"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.99</span></span> </span> </div>
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
                                                    href-data="../synergy-tan-brown-envy-tan-accelerator-cream-230ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4827"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/y/syt001.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Synergy Tan Brown Envy Tan Accelerator Cream 230ml"></span></span>
                                                    <style>
                                                        .product-image-container-4827 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4827 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../synergy-tan-brown-envy-tan-accelerator-cream-230ml.html">Synergy
                                                            Tan Brown Envy Tan Accelerator Cream 230ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4827" data-price-box="product-id-4827"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4827" data-price-amount="10.05"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.05</span></span> </span> </div>
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
                                                    href-data="../synergy-tan-go-dark-hot-tanning-bronzer-230ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4828"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/y/syt002.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Synergy Tan Go Dark Hot Tanning Bronzer 230ml"></span></span>
                                                    <style>
                                                        .product-image-container-4828 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4828 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../synergy-tan-go-dark-hot-tanning-bronzer-230ml.html">Synergy
                                                            Tan Go Dark Hot Tanning Bronzer 230ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4828" data-price-box="product-id-4828"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4828" data-price-amount="14.01"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£14.01</span></span> </span> </div>
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
                                                    href-data="../emerald-bay-definitely-dark-intensifier-tyrosine-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17818"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/m/emb012-removebg-preview.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Emerald Bay Definitely Dark Intensifier + Tyrosine 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-17818 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17818 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../emerald-bay-definitely-dark-intensifier-tyrosine-250ml.html">Emerald
                                                            Bay Definitely Dark Intensifier + Tyrosine 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17818" data-price-box="product-id-17818"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17818" data-price-amount="12.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.50</span></span> </span> </div>
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
                                                    href-data="../supre-tan-honey-dew-hemp-dark-tanning-maximizer-235ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4838"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/u/sut003.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Supre Tan Honey Dew Hemp Dark Tanning Maximizer 235ml"></span></span>
                                                    <style>
                                                        .product-image-container-4838 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4838 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../supre-tan-honey-dew-hemp-dark-tanning-maximizer-235ml.html">Supre
                                                            Tan Honey Dew Hemp Dark Tanning Maximizer 235ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4838" data-price-box="product-id-4838"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4838" data-price-amount="12.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.50</span></span> </span> </div>
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
                                                    href-data="../tan-fusion-juicy-skin-therapy-berry-me-darker-tingle-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4830"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/y/syt004.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Tan Fusion Juicy Skin Therapy Berry Me Darker Tingle 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-4830 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4830 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../tan-fusion-juicy-skin-therapy-berry-me-darker-tingle-250ml.html">Tan
                                                            Fusion Juicy Skin Therapy Berry Me Darker Tingle
                                                            250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4830" data-price-box="product-id-4830"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4830" data-price-amount="12.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.50</span></span> </span> </div>
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
                                                    href-data="../tan-fusion-juicy-skin-therapy-butter-me-extra-bronze-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4829"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/y/syt003.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Tan Fusion Juicy Skin Therapy Butter Me Extra Bronze 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-4829 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-4829 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../tan-fusion-juicy-skin-therapy-butter-me-extra-bronze-250ml.html">Tan
                                                            Fusion Juicy Skin Therapy Butter Me Extra Bronze
                                                            250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4829" data-price-box="product-id-4829"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-4829" data-price-amount="12.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.50</span></span> </span> </div>
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
                                                    href-data="../power-tan-black-onyx-hot-citrus-tingle-pre-tanning-tingle-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13595"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/o/pot005.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Power Tan Black Onyx Hot Citrus Tingle Pre Tanning Tingle 250ml"></span></span>
                                                    <style>
                                                        .product-image-container-13595 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13595 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../power-tan-black-onyx-hot-citrus-tingle-pre-tanning-tingle-250ml.html">Power
                                                            Tan Black Onyx Hot Citrus Tingle Pre Tanning Tingle
                                                            250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13595" data-price-box="product-id-13595"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13595" data-price-amount="22.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£22.50</span></span> </span> </div>
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
                                                    href-data="../protan-beach-bliss-dark-natural-bronzer-280ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-9441"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prt021.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="ProTan Beach Bliss Dark Natural Bronzer 280ml"></span></span>
                                                    <style>
                                                        .product-image-container-9441 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-9441 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../protan-beach-bliss-dark-natural-bronzer-280ml.html">ProTan
                                                            Beach Bliss Dark Natural Bronzer 280ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="9441" data-price-box="product-id-9441"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-9441" data-price-amount="13.89"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£13.89</span></span> </span> </div>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/beauty\/tanning.html&quot;,&quot;formKey&quot;:&quot;ytjb8XqdO73xqDLZ&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanning9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanninge63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanning0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanning4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanningbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'tanning5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                        Tanning from renowned brands such as, Wella, Goldwell, Fanola and Serie
                                        Expert. At emerch junction ourTanningoffer a vast array of uses
                                        including straightening, moisturising, curl defining, anti-dandruff and
                                        much more. Available in both retail and professional sizes so you can
                                        have a diverse Tanning collection that guarantees healthy, happy hair.
                                        Our hair care products help to reduce frizz, are greta for hydrating,
                                        volumizing or moisturizing the hair, and its perfect for all hair types
                                        whether that is dry hair, curly hair, fine hair, hair loss,
                                        color-treated hair, hair with a lot of breakage, itchy scalps and so
                                        many other hair types. We have a selection of dry Tanning, repair
                                        Tanning, moisturizing Tanning, anti-dandruff Tanning,
                                        volumizing
                                        Tanning, thickening Tanning, moisturie Tanning, tea tree
                                        special
                                        Tanning, and we even have a small selection of argan oil Tanning. We
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
