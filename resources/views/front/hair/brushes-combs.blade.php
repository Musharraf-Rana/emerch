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
                                    data-ui-id="page-title-wrapper">Burshes combs</span></h1>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/brushes-combs.html&quot;,&quot;formKey&quot;:&quot;XUnRlwBHYFBe4P0C&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combs9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combse63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combs0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combs4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combsbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combs5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                <li class="item"><a href="brushes-combs905b.html?p=2"
                                                        class="page"><span class="label">Page</span> <span>2</span></a>
                                                </li>
                                                <li class="item"><a href="brushes-combs2207.html?p=3"
                                                        class="page"><span class="label">Page</span> <span>3</span></a>
                                                </li>
                                                <li class="item"><a href="brushes-combs5c7e.html?p=4"
                                                        class="page"><span class="label">Page</span> <span>4</span></a>
                                                </li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href="brushes-combs905b.html?p=2" title="Next"><span
                                                            class="label">Page</span> <span>Next</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-grid">
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../denman-d4-large-styling-brush-9-row.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-709"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den019.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D4 Large Styling Brush (9 row)"></span></span>
                                                    <style>
                                                        .product-image-container-709 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-709 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d4-large-styling-brush-9-row.html">Denman D4
                                                            Large Styling Brush (9 row)</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="709" data-price-box="product-id-709"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-709" data-price-amount="12.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN019"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/709/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="709"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNzA5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../wahl-barber-comb.html"
                                                    class="product photo product-item-photo has-special-price"
                                                    tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5197"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/wh042_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Barber Comb"></span></span>
                                                    <style>
                                                        .product-image-container-5197 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5197 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link" href-data="../wahl-barber-comb.html">Wahl
                                                            Barber Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5197" data-price-box="product-id-5197"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5197" data-price-amount="2.3"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£2.30</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WH042"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5197/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5197"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTE5Ny8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../cricket-rpm-12xl.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5697"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/c/k/ckt010_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Cricket RPM 12XL"></span></span>
                                                    <style>
                                                        .product-image-container-5697 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5697 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../cricket-rpm-12xl.html">Cricket RPM 12XL</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5697" data-price-box="product-id-5697"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5697" data-price-amount="5.66"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.66</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="CKT010"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5697/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5697"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTY5Ny8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../andis-clipper-comb-white.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5961"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/n/and118.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Andis Clipper Comb White"></span></span>
                                                    <style>
                                                        .product-image-container-5961 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5961 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../andis-clipper-comb-white.html">Andis Clipper Comb
                                                            White</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5961" data-price-box="product-id-5961"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5961" data-price-amount="2.74"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£2.74</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AND118"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5961/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5961"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTk2MS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../wahl-flat-top-comb-small-black.html"
                                                    class="product photo product-item-photo has-special-price"
                                                    tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5198"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/wh043_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Flat Top Comb Small Black"></span></span>
                                                    <style>
                                                        .product-image-container-5198 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5198 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-flat-top-comb-small-black.html">Wahl Flat Top
                                                            Comb Small Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5198" data-price-box="product-id-5198"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5198" data-price-amount="1.8"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.80</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WH043"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5198/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5198"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTE5OC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d3-brush-honolulu-yellow.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15598"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den104.1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D3 Brush Honolulu Yellow"></span></span>
                                                    <style>
                                                        .product-image-container-15598 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15598 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d3-brush-honolulu-yellow.html">Denman D3 Brush
                                                            Honolulu Yellow</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15598" data-price-box="product-id-15598"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-15598" data-price-amount="10.85"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.85</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN104"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/15598/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="15598"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTU1OTgv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../cricket-rpm-12.html" class="product photo product-item-photo"
                                                    tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5696"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/c/k/ckt009_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Cricket RPM 12"></span></span>
                                                    <style>
                                                        .product-image-container-5696 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5696 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../cricket-rpm-12.html">Cricket RPM 12</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5696" data-price-box="product-id-5696"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5696" data-price-amount="5.66"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.66</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="CKT009"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5696/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5696"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTY5Ni8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d3n-medium-styling-brush-7-row.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10411"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den069.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D3N Medium Styling Brush (7 Row)"></span></span>
                                                    <style>
                                                        .product-image-container-10411 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10411 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d3n-medium-styling-brush-7-row.html">Denman D3N
                                                            Medium Styling Brush (7 Row)</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10411" data-price-box="product-id-10411"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10411" data-price-amount="11.02"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£11.02</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN069"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/10411/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10411"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTA0MTEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d14-small-styling-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-705"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den015.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D14 Small Travel Bag Styling Brush"></span></span>
                                                    <style>
                                                        .product-image-container-705 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-705 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d14-small-styling-brush.html">Denman D14 Small
                                                            Travel Bag Styling Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="705" data-price-box="product-id-705"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-705" data-price-amount="7.48"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£7.48</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN015"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/705/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="705"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNzA1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../cricket-fast-flo-pink.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5771"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/c/k/ckt055.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Cricket Fast Flo Pink"></span></span>
                                                    <style>
                                                        .product-image-container-5771 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5771 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../cricket-fast-flo-pink.html">Cricket Fast Flo
                                                            Pink</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5771" data-price-box="product-id-5771"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5771" data-price-amount="4.53"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.53</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="CKT055"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5771/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5771"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTc3MS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../wahl-flat-top-comb-large-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5199"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/wh044_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Flat Top Comb Large Black"></span></span>
                                                    <style>
                                                        .product-image-container-5199 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5199 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-flat-top-comb-large-black.html">Wahl Flat Top
                                                            Comb Large Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5199" data-price-box="product-id-5199"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5199" data-price-amount="1.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WH044"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5199/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5199"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTE5OS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-dc03-small-cutting-carbon-comb.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10869"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den061.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman DC03 Small Cutting Carbon Comb"></span></span>
                                                    <style>
                                                        .product-image-container-10869 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10869 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-dc03-small-cutting-carbon-comb.html">Denman
                                                            DC03 Small Cutting Carbon Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10869" data-price-box="product-id-10869"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10869" data-price-amount="8.98"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£8.98</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN061"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/10869/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10869"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTA4Njkv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d3-brush-white-rose-with-gold-crown.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15600"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den106.1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D3 Brush White Rose with Gold Crown"></span></span>
                                                    <style>
                                                        .product-image-container-15600 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15600 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d3-brush-white-rose-with-gold-crown.html">Denman
                                                            D3 Brush White Rose with Gold Crown</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15600" data-price-box="product-id-15600"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-15600" data-price-amount="10.38"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.38</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN106"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/15600/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="15600"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTU2MDAv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d31-medium-volumising-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-708"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den018.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D31 Medium Volumising Brush"></span></span>
                                                    <style>
                                                        .product-image-container-708 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-708 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d31-medium-volumising-brush.html">Denman D31
                                                            Medium Volumising Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="708" data-price-box="product-id-708"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-708" data-price-amount="10.35"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.35</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN018"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/708/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="708"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNzA4Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d200-flexible-vent-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-699"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den009.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D200 Flexible Vent Brush"></span></span>
                                                    <style>
                                                        .product-image-container-699 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-699 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d200-flexible-vent-brush.html">Denman D200
                                                            Flexible Vent Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="699" data-price-box="product-id-699"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-699" data-price-amount="9"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£9.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN009"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/699/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="699"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNjk5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../andis-silver-tapering-comb.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5964"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/n/and120.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Andis Silver Tapering Comb"></span></span>
                                                    <style>
                                                        .product-image-container-5964 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5964 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../andis-silver-tapering-comb.html">Andis Silver Tapering
                                                            Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5964" data-price-box="product-id-5964"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5964" data-price-amount="2.74"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£2.74</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AND120"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5964/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5964"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTk2NC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d91-dressing-out-brush-purple.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-710"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den020.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D91 Dressing Out Brush Purple"></span></span>
                                                    <style>
                                                        .product-image-container-710 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-710 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d91-dressing-out-brush-purple.html">Denman D91
                                                            Dressing Out Brush Purple</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="710" data-price-box="product-id-710"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-710" data-price-amount="6.17"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.17</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN020"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/710/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="710"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNzEwLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-dpc-4-professional-large-cutting-comb.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10417"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den075.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman DPC 4 Professional Large Cutting Comb"></span></span>
                                                    <style>
                                                        .product-image-container-10417 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10417 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-dpc-4-professional-large-cutting-comb.html">Denman
                                                            DPC 4 Professional Large Cutting Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10417" data-price-box="product-id-10417"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10417" data-price-amount="6.24"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.24</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN075"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/10417/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10417"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTA0MTcv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-dc04-professional-large-cutting-carbon-comb.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10870"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den062.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman DC04 Professional Large Cutting Carbon Comb"></span></span>
                                                    <style>
                                                        .product-image-container-10870 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10870 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-dc04-professional-large-cutting-carbon-comb.html">Denman
                                                            DC04 Professional Large Cutting Carbon Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10870" data-price-box="product-id-10870"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10870" data-price-amount="9.42"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.42</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN062"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/10870/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10870"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTA4NzAv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d3-brush-black-with-gold-crown.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15599"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den105.1_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D3 Brush Black with Gold Crown"></span></span>
                                                    <style>
                                                        .product-image-container-15599 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15599 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d3-brush-black-with-gold-crown.html">Denman D3
                                                            Brush Black with Gold Crown</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15599" data-price-box="product-id-15599"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-15599" data-price-amount="10.38"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£10.38</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN105"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/15599/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="15599"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTU1OTkv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../kodo-heat-retainer-brush-53mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13009"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/o/kod004.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kodo Heat Retainer Brush - 53mm"></span></span>
                                                    <style>
                                                        .product-image-container-13009 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13009 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../kodo-heat-retainer-brush-53mm.html">Kodo Heat
                                                            Retainer Brush - 53mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13009" data-price-box="product-id-13009"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13009" data-price-amount="15.29"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£15.29</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="KOD004"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/13009/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="13009"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTMwMDkv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../kodo-clipper-comb-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13014"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/o/kod009.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kodo Clipper Comb - Black"></span></span>
                                                    <style>
                                                        .product-image-container-13014 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13014 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../kodo-clipper-comb-black.html">Kodo Clipper Comb -
                                                            Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13014" data-price-box="product-id-13014"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13014" data-price-amount="8.09"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£8.09</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="KOD009"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/13014/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="13014"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTMwMTQv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d143-5-row-volumising-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-706"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den016.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D143 5 Row Volumising Brush"></span></span>
                                                    <style>
                                                        .product-image-container-706 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-706 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d143-5-row-volumising-brush.html">Denman D143
                                                            5 Row Volumising Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="706" data-price-box="product-id-706"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-706" data-price-amount="8"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£8.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN016"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/706/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="706"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNzA2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../jack-dean-gentleman-s-military-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-1642"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/j/a/jad011.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Jack Dean Gentleman's Military Brush"></span></span>
                                                    <style>
                                                        .product-image-container-1642 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-1642 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../jack-dean-gentleman-s-military-brush.html">Jack Dean
                                                            Gentleman's Military Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="1642" data-price-box="product-id-1642"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-1642" data-price-amount="15.12"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£15.12</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="JAD011"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/1642/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="1642"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTY0Mi8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d3m-7-row-medium-styling-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10381"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den035.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D3M 7-Row Medium Styling Brush"></span></span>
                                                    <style>
                                                        .product-image-container-10381 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10381 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d3m-7-row-medium-styling-brush.html">Denman
                                                            D3M 7-Row Medium Styling Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10381" data-price-box="product-id-10381"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10381" data-price-amount="14.21"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£14.21</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN035"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/10381/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10381"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTAzODEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-dpc-1-professional-pin-tail-comb.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10414"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den072.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman DPC 1 Professional Pin Tail Comb"></span></span>
                                                    <style>
                                                        .product-image-container-10414 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10414 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-dpc-1-professional-pin-tail-comb.html">Denman
                                                            DPC 1 Professional Pin Tail Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10414" data-price-box="product-id-10414"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10414" data-price-amount="9.48"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.48</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN072"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/10414/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10414"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTA0MTQv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-dhh2-medium-head-hugger-33mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10409"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den067.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman DHH2 Medium Head Hugger 33mm"></span></span>
                                                    <style>
                                                        .product-image-container-10409 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10409 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-dhh2-medium-head-hugger-33mm.html">Denman DHH2
                                                            Medium Head Hugger 33mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10409" data-price-box="product-id-10409"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10409" data-price-amount="13.7"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£13.70</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN067"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/10409/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10409"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTA0MDkv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../cricket-fast-flo.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5698"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/c/k/ckt011.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Cricket Fast Flo"></span></span>
                                                    <style>
                                                        .product-image-container-5698 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5698 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../cricket-fast-flo.html">Cricket Fast Flo</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5698" data-price-box="product-id-5698"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5698" data-price-amount="5.88"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.88</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="CKT011"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5698/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="5698"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTY5OC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-d5-classic-styling-brush-wood.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5917"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den024.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman D5 Classic Styling Brush Wood"></span></span>
                                                    <style>
                                                        .product-image-container-5917 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5917 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-d5-classic-styling-brush-wood.html">Denman D5
                                                            Classic Styling Brush Wood</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5917" data-price-box="product-id-5917"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5917" data-price-amount="20.16"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£20.16</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN024"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5917/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="5917"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTkxNy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-dpc-3-professional-classic-cutting-comb.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10416"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den074_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman DPC 3 Professional Classic Cutting Comb"></span></span>
                                                    <style>
                                                        .product-image-container-10416 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10416 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-dpc-3-professional-classic-cutting-comb.html">Denman
                                                            DPC 3 Professional Classic Cutting Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10416" data-price-box="product-id-10416"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10416" data-price-amount="6.24"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£6.24</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN074"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/10416/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10416"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTA0MTYv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../cricket-static-free-thermal-43mm-1-75-inch.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5689"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/c/k/ckt002_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Cricket Static Free Thermal Barrel Brush  43mm 1.75 inch"></span></span>
                                                    <style>
                                                        .product-image-container-5689 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5689 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../cricket-static-free-thermal-43mm-1-75-inch.html">Cricket
                                                            Static Free Thermal Barrel Brush 43mm 1.75 inch</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5689" data-price-box="product-id-5689"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5689" data-price-amount="8.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£8.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="CKT002"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5689/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="5689"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTY4OS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../andis-large-silver-comb.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5944"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/n/and101.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Andis Large Silver Comb"></span></span>
                                                    <style>
                                                        .product-image-container-5944 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5944 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../andis-large-silver-comb.html">Andis Large Silver
                                                            Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5944" data-price-box="product-id-5944"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5944" data-price-amount="3.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AND101"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5944/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="5944"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTk0NC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../denman-dpc2-precision-professional-tail-comb.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10415"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den073.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Denman DPC2 Precision Professional Tail Comb"></span></span>
                                                    <style>
                                                        .product-image-container-10415 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10415 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../denman-dpc2-precision-professional-tail-comb.html">Denman
                                                            DPC2 Precision Professional Tail Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10415" data-price-box="product-id-10415"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10415" data-price-amount="6.24"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£6.24</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DEN073"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/10415/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10415"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTA0MTUv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../isinis-professional-d340-handbag-7-row-pneumatic-hair-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17199"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/c/scancube--0786-new_1_1_.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="ISINIS Professional D340 Handbag 7 Row Pneumatic Hair Brush"></span></span>
                                                    <style>
                                                        .product-image-container-17199 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17199 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../isinis-professional-d340-handbag-7-row-pneumatic-hair-brush.html">ISINIS
                                                            Professional D340 Handbag 7 Row Pneumatic Hair
                                                            Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17199" data-price-box="product-id-17199"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17199" data-price-amount="11.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£11.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="SIN001"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/17199/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17199"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvMTcxOTkv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../cricket-technique-370-44mm-1-75-inch.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5720"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/c/k/ckt030_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Cricket Technique 370 44mm 1.75 inch"></span></span>
                                                    <style>
                                                        .product-image-container-5720 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5720 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../cricket-technique-370-44mm-1-75-inch.html">Cricket
                                                            Technique 370 44mm 1.75 inch</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5720" data-price-box="product-id-5720"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5720" data-price-amount="14.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£14.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="CKT030"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5720/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="5720"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTcyMC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                                    href-data="../andis-clipper-comb-pink.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5963"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/n/and121.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Andis Clipper Comb Pink"></span></span>
                                                    <style>
                                                        .product-image-container-5963 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5963 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../andis-clipper-comb-pink.html">Andis Clipper Comb
                                                            Pink</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5963" data-price-box="product-id-5963"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5963" data-price-amount="2.74"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£2.74</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AND121"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvYnJ1c2hlcy1jb21icy5odG1s/product/5963/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="5963"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WW5KMWMyaGxjeTFqYjIxaWN5NW9kRzFzL3Byb2R1Y3QvNTk2My8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="XUnRlwBHYFBe4P0C"> <button type="button"
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/brushes-combs.html&quot;,&quot;formKey&quot;:&quot;XUnRlwBHYFBe4P0C&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combs9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combse63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combs0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combs4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combsbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'brushes-combs5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                <li class="item"><a href="brushes-combs905b.html?p=2"
                                                        class="page"><span class="label">Page</span>
                                                        <span>2</span></a></li>
                                                <li class="item"><a href="brushes-combs2207.html?p=3"
                                                        class="page"><span class="label">Page</span>
                                                        <span>3</span></a></li>
                                                <li class="item"><a href="brushes-combs5c7e.html?p=4"
                                                        class="page"><span class="label">Page</span>
                                                        <span>4</span></a></li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href="brushes-combs905b.html?p=2" title="Next"><span
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
                                            Burshes combss from renowned brands such as, Wella, Goldwell, Fanola and Serie
                                            Expert. At emerch junction our Burshes combss offer a vast array of uses
                                            including straightening, moisturising, curl defining, anti-dandruff and
                                            much more. Available in both retail and professional sizes so you can
                                            have a diverse Burshes combs collection that guarantees healthy, happy hair.
                                            Our hair care products help to reduce frizz, are greta for hydrating,
                                            volumizing or moisturizing the hair, and its perfect for all hair types
                                            whether that is dry hair, curly hair, fine hair, hair loss,
                                            color-treated hair, hair with a lot of breakage, itchy scalps and so
                                            many other hair types. We have a selection of dry Burshes combs, repair
                                            Burshes combs, moisturizing Burshes combs, anti-dandruff Burshes combs, volumizing
                                            Burshes combs, thickening Burshes combs, moisturie Burshes combs, tea tree special
                                            Burshes combs, and we even have a small selection of argan oil Burshes combs. We
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
