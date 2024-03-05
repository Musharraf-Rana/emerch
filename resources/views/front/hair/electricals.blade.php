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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/electricals.html&quot;,&quot;formKey&quot;:&quot;oELaqDlmF3PVJgOP&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricals9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricalse63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricals0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricals4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricalsbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricals5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                <li class="item"><a href="electricals905b.html?p=2" class="page"><span
                                                            class="label">Page</span> <span>2</span></a></li>
                                                <li class="item"><a href="electricals2207.html?p=3"
                                                        class="page"><span class="label">Page</span> <span>3</span></a>
                                                </li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href="electricals905b.html?p=2" title="Next"><span
                                                            class="label">Page</span> <span>Next</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-grid">
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../andis-clipper-oil-118ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-126"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/n/and004.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Andis Clipper Oil 118ml"></span></span>
                                                    <style>
                                                        .product-image-container-126 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-126 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../andis-clipper-oil-118ml.html">Andis Clipper Oil
                                                            118ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="126" data-price-box="product-id-126"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-126" data-price-amount="3.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AND004"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/126/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="126"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTI2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../andis-cool-care-plus-for-clipper-blades-5-in-one-439g.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-127"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/n/and005.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Andis Cool Care Plus for Clipper Blades 5 in One 439g"></span></span>
                                                    <style>
                                                        .product-image-container-127 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-127 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../andis-cool-care-plus-for-clipper-blades-5-in-one-439g.html">Andis
                                                            Cool Care Plus for Clipper Blades 5 in One 439g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="127" data-price-box="product-id-127"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-127" data-price-amount="10.87"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.87</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AND005"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/127/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="127"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTI3Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-professional-clipper-holder.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5054"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/wh034_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Professional Clipper Holder"></span></span>
                                                    <style>
                                                        .product-image-container-5054 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5054 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-professional-clipper-holder.html">Wahl
                                                            Professional Clipper Holder</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5054" data-price-box="product-id-5054"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5054" data-price-amount="13.19"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£13.19</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WH034"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/5054/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5054"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvNTA1NC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-zx-910-ceramic-coated-13mm-hair-curling-tong.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10615"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/whl138.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl ZX-910 Ceramic Coated 13mm Hair Curling Tong"></span></span>
                                                    <style>
                                                        .product-image-container-10615 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10615 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-zx-910-ceramic-coated-13mm-hair-curling-tong.html">Wahl
                                                            ZX-910 Ceramic Coated 13mm Hair Curling Tong</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10615" data-price-box="product-id-10615"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10615" data-price-amount="17.01"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£17.01</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WHL138"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10615/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10615"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA2MTUv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-professional-power-dry-hairdryer-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5002"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/wh015_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Professional Power Dry Hairdryer Black"></span></span>
                                                    <style>
                                                        .product-image-container-5002 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5002 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-professional-power-dry-hairdryer-black.html">Wahl
                                                            Professional Power Dry Hairdryer Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5002" data-price-box="product-id-5002"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5002" data-price-amount="29.94"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£29.94</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WH015"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/5002/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5002"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvNTAwMi8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-professional-5-star-cordless-legend-clipper.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17850"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/whl166_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Professional 5 Star Cordless Legend Clipper"></span></span>
                                                    <style>
                                                        .product-image-container-17850 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17850 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-professional-5-star-cordless-legend-clipper.html">Wahl
                                                            Professional 5 Star Cordless Legend Clipper</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17850" data-price-box="product-id-17850"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17850" data-price-amount="149.99"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£149.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WHL166"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/17850/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17850"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTc4NTAv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-ceramic-hot-brush-19mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5358"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/wh119_2.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Ceramic Hot Brush 19mm"></span></span>
                                                    <style>
                                                        .product-image-container-5358 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5358 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-ceramic-hot-brush-19mm.html">Wahl Ceramic Hot
                                                            Brush 19mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5358" data-price-box="product-id-5358"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5358" data-price-amount="17.55"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£17.55</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WH119"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/5358/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5358"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvNTM1OC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-5-star-legend-corded-clipper.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-9068"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/whl137.4.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl 5 Star Legend Corded Clipper"></span></span>
                                                    <style>
                                                        .product-image-container-9068 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-9068 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-5-star-legend-corded-clipper.html">Wahl 5 Star
                                                            Legend Corded Clipper</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="9068" data-price-box="product-id-9068"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-9068" data-price-amount="113.99"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£113.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WHL137"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/9068/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="9068"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvOTA2OC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-professional-power-dry-hairdryer-pink.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5003"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/wh016_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Professional Power Dry Hairdryer Pink"></span></span>
                                                    <style>
                                                        .product-image-container-5003 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5003 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-professional-power-dry-hairdryer-pink.html">Wahl
                                                            Professional Power Dry Hairdryer Pink</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5003" data-price-box="product-id-5003"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5003" data-price-amount="33.91"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£33.91</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WH016"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/5003/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5003"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvNTAwMy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-2-5mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10475"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab071.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Replacement Comb 2.5mm"></span></span>
                                                    <style>
                                                        .product-image-container-10475 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10475 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-replacement-comb-2-5mm.html">BaByliss
                                                            Replacement Comb 2.5mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10475" data-price-box="product-id-10475"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10475" data-price-amount="1.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB071"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10475/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10475"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NzUv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-zx-913-ceramic-coated-25mm-hair-curling-tong.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10617"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/whl140.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl ZX-913 Ceramic Coated 25mm Hair Curling Tong"></span></span>
                                                    <style>
                                                        .product-image-container-10617 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10617 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-zx-913-ceramic-coated-25mm-hair-curling-tong.html">Wahl
                                                            ZX-913 Ceramic Coated 25mm Hair Curling Tong</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10617" data-price-box="product-id-10617"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10617" data-price-amount="15.12"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£15.12</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WHL140"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10617/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10617"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA2MTcv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-zx-912-ceramic-coated-19mm-hair-curling-tong.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10616"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/whl139.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl ZX-912 Ceramic Coated 19mm Hair Curling Tong"></span></span>
                                                    <style>
                                                        .product-image-container-10616 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10616 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-zx-912-ceramic-coated-19mm-hair-curling-tong.html">Wahl
                                                            ZX-912 Ceramic Coated 19mm Hair Curling Tong</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10616" data-price-box="product-id-10616"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10616" data-price-amount="17.08"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£17.08</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WHL139"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10616/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10616"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA2MTYv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-style-collection-styling-iron.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17221"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/whl154.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Style Collection Styling Iron"></span></span>
                                                    <style>
                                                        .product-image-container-17221 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17221 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-style-collection-styling-iron.html">Wahl Style
                                                            Collection Styling Iron</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17221" data-price-box="product-id-17221"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17221" data-price-amount="87.14"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£87.14</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WHL154"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/17221/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17221"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTcyMjEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-9-5mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10478"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab074.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Replacement Comb 9.5mm"></span></span>
                                                    <style>
                                                        .product-image-container-10478 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10478 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-replacement-comb-9-5mm.html">BaByliss
                                                            Replacement Comb 9.5mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10478" data-price-box="product-id-10478"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10478" data-price-amount="1.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB074"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10478/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10478"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0Nzgv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../wahl-ceramic-coated-steel-barrel-curling-tong-16mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-5354"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/wh115.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Ceramic Coated Steel Barrel Curling Tong 16mm"></span></span>
                                                    <style>
                                                        .product-image-container-5354 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-5354 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wahl-ceramic-coated-steel-barrel-curling-tong-16mm.html">Wahl
                                                            Ceramic Coated Steel Barrel Curling Tong 16mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="5354" data-price-box="product-id-5354"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-5354" data-price-amount="13.8"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£13.80</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WH115"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/5354/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5354"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvNTM1NC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-22mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10455"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab054.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Replacement Comb 22mm"></span></span>
                                                    <style>
                                                        .product-image-container-10455 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10455 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-replacement-comb-22mm.html">BaByliss
                                                            Replacement Comb 22mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10455" data-price-box="product-id-10455"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10455" data-price-amount="1.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB054"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10455/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10455"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NTUv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-25mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10457"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab056.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Replacement Comb 25mm"></span></span>
                                                    <style>
                                                        .product-image-container-10457 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10457 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-replacement-comb-25mm.html">BaByliss
                                                            Replacement Comb 25mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10457" data-price-box="product-id-10457"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10457" data-price-amount="1.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB056"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10457/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10457"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NTcv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-cryogenic-ceramic-replacement-comb-2-4mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10472"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab068.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Cryogenic Ceramic Replacement Comb 2.4mm"></span></span>
                                                    <style>
                                                        .product-image-container-10472 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10472 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-cryogenic-ceramic-replacement-comb-2-4mm.html">BaByliss
                                                            Cryogenic Ceramic Replacement Comb 2.4mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10472" data-price-box="product-id-10472"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10472" data-price-amount="18.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£18.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB068"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10472/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10472"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NzIv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../hairtools-large-waving-irons-19mm-3-4-inch.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12231"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/t/hto081.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hairtools Large Waving Irons 19mm (3/4 inch)"></span></span>
                                                    <style>
                                                        .product-image-container-12231 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12231 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hairtools-large-waving-irons-19mm-3-4-inch.html">Hairtools
                                                            Large Waving Irons 19mm (3/4 inch)</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12231" data-price-box="product-id-12231"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12231" data-price-amount="14.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£14.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="HTO081"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/12231/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="12231"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTIyMzEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../catalog/product/view/id/18828/s/wahl-professional-trimmer-blade-2215-1101/category/6203/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-18828"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/whl182.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Professional Trimmer Blade 2215-1101"></span></span>
                                                    <style>
                                                        .product-image-container-18828 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-18828 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../catalog/product/view/id/18828/s/wahl-professional-trimmer-blade-2215-1101/category/6203/index.html">Wahl
                                                            Professional Trimmer Blade 2215-1101</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="18828" data-price-box="product-id-18828"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-18828" data-price-amount="31.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£31.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WHL182"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/18828/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="18828"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTg4Mjgv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../catalog/product/view/id/18836/s/wahl-professional-beret-magic-trimmer-replacement-blade/category/6203/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-18836"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/whl189.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wahl Professional Beret &amp; Magic Trimmer Replacement Blade"></span></span>
                                                    <style>
                                                        .product-image-container-18836 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-18836 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../catalog/product/view/id/18836/s/wahl-professional-beret-magic-trimmer-replacement-blade/category/6203/index.html">Wahl
                                                            Professional Beret &amp; Magic Trimmer Replacement
                                                            Blade</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="18836" data-price-box="product-id-18836"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-18836" data-price-amount="22.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£22.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WHL189"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/18836/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="18836"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTg4MzYv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-16mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10456"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab055.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Replacement Comb 16mm"></span></span>
                                                    <style>
                                                        .product-image-container-10456 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10456 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-replacement-comb-16mm.html">BaByliss
                                                            Replacement Comb 16mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10456" data-price-box="product-id-10456"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10456" data-price-amount="1.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB055"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10456/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10456"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NTYv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-19mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10458"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab057.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Replacement Comb 19mm"></span></span>
                                                    <style>
                                                        .product-image-container-10458 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10458 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-replacement-comb-19mm.html">BaByliss
                                                            Replacement Comb 19mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10458" data-price-box="product-id-10458"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10458" data-price-amount="1.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB057"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10458/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10458"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NTgv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-fx610u-replacement-comb-9-5mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10463"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab059.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss FX610U Replacement Comb 9.5mm"></span></span>
                                                    <style>
                                                        .product-image-container-10463 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10463 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-fx610u-replacement-comb-9-5mm.html">BaByliss
                                                            FX610U Replacement Comb 9.5mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10463" data-price-box="product-id-10463"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10463" data-price-amount="1.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB059"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10463/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10463"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NjMv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-fx611u-replacement-comb-13mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10464"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab060.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss FX611U Replacement Comb 13mm"></span></span>
                                                    <style>
                                                        .product-image-container-10464 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10464 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-fx611u-replacement-comb-13mm.html">BaByliss
                                                            FX611U Replacement Comb 13mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10464" data-price-box="product-id-10464"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10464" data-price-amount="1.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB060"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10464/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10464"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NjQv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-fx773u-replacement-comb-6mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10465"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab061.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss FX773U Replacement Comb 6mm"></span></span>
                                                    <style>
                                                        .product-image-container-10465 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10465 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-fx773u-replacement-comb-6mm.html">BaByliss
                                                            FX773U Replacement Comb 6mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10465" data-price-box="product-id-10465"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10465" data-price-amount="1.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB061"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10465/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10465"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NjUv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-fx775u-replacement-comb-13mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10466"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab062.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss FX775U Replacement Comb 13mm"></span></span>
                                                    <style>
                                                        .product-image-container-10466 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10466 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-fx775u-replacement-comb-13mm.html">BaByliss
                                                            FX775U Replacement Comb 13mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10466" data-price-box="product-id-10466"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10466" data-price-amount="2.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£2.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB062"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10466/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10466"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NjYv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-fx774u-3-replacement-comb-9-5mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10467"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab063.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss FX774U #3 Replacement Comb 9.5mm"></span></span>
                                                    <style>
                                                        .product-image-container-10467 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10467 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-fx774u-3-replacement-comb-9-5mm.html">BaByliss
                                                            FX774U #3 Replacement Comb 9.5mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10467" data-price-box="product-id-10467"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10467" data-price-amount="2.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£2.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB063"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10467/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10467"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0Njcv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-cryogenic-ceramic-replacement-comb-0-5mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10470"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab066.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Cryogenic Ceramic Replacement Comb 0.5mm"></span></span>
                                                    <style>
                                                        .product-image-container-10470 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10470 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-cryogenic-ceramic-replacement-comb-0-5mm.html">BaByliss
                                                            Cryogenic Ceramic Replacement Comb 0.5mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10470" data-price-box="product-id-10470"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10470" data-price-amount="17.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£17.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB066"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10470/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10470"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NzAv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-cryogenic-ceramic-replacement-comb-4-0mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10471"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab067.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Cryogenic Ceramic Replacement Comb 4.0mm"></span></span>
                                                    <style>
                                                        .product-image-container-10471 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10471 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-cryogenic-ceramic-replacement-comb-4-0mm.html">BaByliss
                                                            Cryogenic Ceramic Replacement Comb 4.0mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10471" data-price-box="product-id-10471"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10471" data-price-amount="21.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£21.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB067"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10471/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10471"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NzEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-cryogenic-ceramic-replacement-comb-6-3mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10473"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab069.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Cryogenic Ceramic Replacement Comb 6.3mm"></span></span>
                                                    <style>
                                                        .product-image-container-10473 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10473 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-cryogenic-ceramic-replacement-comb-6-3mm.html">BaByliss
                                                            Cryogenic Ceramic Replacement Comb 6.3mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10473" data-price-box="product-id-10473"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10473" data-price-amount="22.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£22.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB069"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10473/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10473"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0NzMv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-10mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10479"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab075.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Replacement Comb 10mm"></span></span>
                                                    <style>
                                                        .product-image-container-10479 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10479 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-replacement-comb-10mm.html">BaByliss
                                                            Replacement Comb 10mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10479" data-price-box="product-id-10479"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10479" data-price-amount="1.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB075"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10479/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10479"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0Nzkv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-pro-forfex-replacement-comb-1-2-inch-13mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10481"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab077.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Babyliss Pro Forfex Replacement Comb 1/2 inch 13mm"></span></span>
                                                    <style>
                                                        .product-image-container-10481 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10481 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-pro-forfex-replacement-comb-1-2-inch-13mm.html">Babyliss
                                                            Pro Forfex Replacement Comb 1/2 inch 13mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10481" data-price-box="product-id-10481"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10481" data-price-amount="1.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB077"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10481/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10481"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0ODEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-30mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10482"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab078.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Replacement Comb 30mm"></span></span>
                                                    <style>
                                                        .product-image-container-10482 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10482 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-replacement-comb-30mm.html">BaByliss
                                                            Replacement Comb 30mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10482" data-price-box="product-id-10482"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10482" data-price-amount="7.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£7.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB078"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10482/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10482"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0ODIv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-t-blade-replacement-comb-40mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10483"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab079.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss T-Blade Replacement Comb 40mm"></span></span>
                                                    <style>
                                                        .product-image-container-10483 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10483 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-t-blade-replacement-comb-40mm.html">BaByliss
                                                            T-Blade Replacement Comb 40mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10483" data-price-box="product-id-10483"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10483" data-price-amount="9.66"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.66</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB079"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10483/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10483"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0ODMv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-45mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10484"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab080.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Replacement Comb 45mm"></span></span>
                                                    <style>
                                                        .product-image-container-10484 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10484 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-replacement-comb-45mm.html">BaByliss
                                                            Replacement Comb 45mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10484" data-price-box="product-id-10484"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10484" data-price-amount="19.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£19.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB080"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZWxlY3RyaWNhbHMuaHRtbA~~/product/10484/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10484"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Wld4bFkzUnlhV05oYkhNdWFIUnRiQX5-L3Byb2R1Y3QvMTA0ODQv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="oELaqDlmF3PVJgOP"> <button type="button"
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/electricals.html&quot;,&quot;formKey&quot;:&quot;oELaqDlmF3PVJgOP&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricals9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricalse63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricals0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricals4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricalsbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'electricals5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                <li class="item"><a href="electricals905b.html?p=2"
                                                        class="page"><span class="label">Page</span>
                                                        <span>2</span></a></li>
                                                <li class="item"><a href="electricals2207.html?p=3"
                                                        class="page"><span class="label">Page</span>
                                                        <span>3</span></a></li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href="electricals905b.html?p=2" title="Next"><span
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
                                            Burshes combs, moisturizing Burshes combs, anti-dandruff Burshes combs,
                                            volumizing
                                            Burshes combs, thickening Burshes combs, moisturie Burshes combs, tea tree
                                            special
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
