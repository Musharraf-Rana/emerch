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
                                data-ui-id="page-title-wrapper">Hair</span></h1>
                    </div>
                    <div class="category-view"> </div>
                    <div class="mst-nav__horizontal-bar"> </div><input name="form_key" type="hidden"
                        value="J62HRgJKch43STZN" />
                    <div id="authenticationPopup"
                        data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                        <!-- ko template: getTemplate() --><!-- /ko --> </div>
                    <div id="monkey_campaign" style="display:none;"
                        data-mage-init='{"campaigncatcher":{"checkCampaignUrl": "https://www.salonwholesale.com/mailchimp/campaign/check/"}}'>
                    </div>
                    <div
                        data-mage-init='{"Mirasvit_CacheWarmer\/js\/track":{"pageType":"catalog_category_view","url":"https:\/\/www.salonwholesale.com\/cache_warmer\/track\/","cookieName":"mst-cache-warmer-track","cookieValue":1}}'>
                    </div>
                    <div id="m-navigation-replacer"></div>
                    <div id="m-navigation-product-list-wrapper">
                        <div class="product-list-container">
                           
                            <div class="products-grid">
                                <div class="row">
                                    <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                        <div class="product-item-info" data-container="product-grid"> <a
                                                herf="#" href-data="red-one-red-aqua-hair-wax-150ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-13093"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo016.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Red&#x20;One&#x20;Red&#x20;Aqua&#x20;Hair&#x20;Wax&#x20;150ml" /></span></span>
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
                                                        herf="#" href-data="red-one-red-aqua-hair-wax-150ml.html">Red One Red
                                                        Aqua Hair Wax 150ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="13093" data-price-box="product-id-13093">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-13093" data-price-amount="5.39"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£5.39</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="REO016"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/13093/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="13093"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMzA5My8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="hair-xpertise-stayset-setting-lotion-normal-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-16139"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/a/hax002.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Hair&#x20;Xpertise&#x20;Stayset&#x20;setting&#x20;lotion&#x20;normal&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="hair-xpertise-stayset-setting-lotion-normal-100ml.html">Hair
                                                        Xpertise Stayset setting lotion normal
                                                        100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="16139" data-price-box="product-id-16139">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-16139" data-price-amount="2.95"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£2.95</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="HAX002"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/16139/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="16139"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNjEzOS8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="red-one-blue-aqua-hair-wax-150ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-13094"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo017.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Red&#x20;One&#x20;Blue&#x20;Aqua&#x20;Hair&#x20;Wax&#x20;150ml" /></span></span>
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
                                                        herf="#" href-data="red-one-blue-aqua-hair-wax-150ml.html">Red One
                                                        Blue Aqua Hair Wax 150ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="13094" data-price-box="product-id-13094">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-13094" data-price-amount="5.29"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£5.29</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="REO017"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/13094/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="13094"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMzA5NC8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="flairosol-fine-mist-bottle-black.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-8846"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/l/flr004.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Flairosol&#x20;Fine&#x20;Mist&#x20;Spray&#x20;Bottle&#x20;Black&#x20;300ml" /></span></span>
                                                <style>
                                                    .product-image-container-8846 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-8846 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="flairosol-fine-mist-bottle-black.html">Flairosol
                                                        Fine Mist Spray Bottle Black 300ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="8846" data-price-box="product-id-8846">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-8846" data-price-amount="12.23"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£12.23</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="FLR004"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/8846/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="8846"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC84ODQ2Lw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="hair-xpertise-stayset-setting-lotion-firm-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-16140"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/a/hax003.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Hair&#x20;Xpertise&#x20;Stayset&#x20;Setting&#x20;Lotion&#x20;Firm&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="hair-xpertise-stayset-setting-lotion-firm-100ml.html">Hair
                                                        Xpertise Stayset Setting Lotion Firm 100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="16140" data-price-box="product-id-16140">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-16140" data-price-amount="2.95"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£2.95</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="HAX003"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/16140/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="16140"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNjE0MC8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="red-one-black-aqua-hair-gel-wax-150ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-13089"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo012.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Red&#x20;One&#x20;Black&#x20;Aqua&#x20;Hair&#x20;Gel&#x20;Wax&#x20;150ml" /></span></span>
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
                                                        herf="#" href-data="red-one-black-aqua-hair-gel-wax-150ml.html">Red
                                                        One Black Aqua Hair Gel Wax 150ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="13089" data-price-box="product-id-13089">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-13089" data-price-amount="5.78"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£5.78</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="REO012"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/13089/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="13089"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMzA4OS8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="red-one-orange-aqua-hair-gel-wax-150ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-13090"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo013.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Red&#x20;One&#x20;Orange&#x20;Aqua&#x20;Hair&#x20;Gel&#x20;Wax&#x20;150ml" /></span></span>
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
                                                        herf="#" href-data="red-one-orange-aqua-hair-gel-wax-150ml.html">Red
                                                        One Orange Aqua Hair Gel Wax 150ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="13090" data-price-box="product-id-13090">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-13090" data-price-amount="6.9"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£6.90</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="REO013"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/13090/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="13090"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMzA5MC8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="redone-creative-clay-wax-strong-hold-matte-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-17310"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo043.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="RedOne&#x20;Creative&#x20;Clay&#x20;Wax&#x20;Strong&#x20;Hold&#x20;&amp;&#x20;Matte&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="redone-creative-clay-wax-strong-hold-matte-100ml.html">RedOne
                                                        Creative Clay Wax Strong Hold &amp; Matte
                                                        100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="17310" data-price-box="product-id-17310">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-17310" data-price-amount="4"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£4.00</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="REO043"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/17310/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="17310"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNzMxMC8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="clynol-lift-strong-mousse-300ml-cly065.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-16776"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/c/l/cly065.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Clynol&#x20;Lift&#x20;Strong&#x20;Mousse&#x20;300ml" /></span></span>
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
                                                        herf="#" href-data="clynol-lift-strong-mousse-300ml-cly065.html">Clynol
                                                        Lift Strong Mousse 300ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="16776" data-price-box="product-id-16776">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-16776" data-price-amount="2.05"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£2.05</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="CLY065"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/16776/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="16776"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNjc3Ni8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="osmo-intensive-deep-repair-mask-1200ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-3576"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome060.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Osmo&#x20;Intensive&#x20;Deep&#x20;Repair&#x20;Mask&#x20;1200ml" /></span></span>
                                                <style>
                                                    .product-image-container-3576 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-3576 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="osmo-intensive-deep-repair-mask-1200ml.html">Osmo
                                                        Intensive Deep Repair Mask 1200ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="3576" data-price-box="product-id-3576">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-3576" data-price-amount="9.72"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£9.72</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="OME060"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/3576/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="3576"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8zNTc2Lw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="red-one-green-matte-hair-wax-150ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-13091"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo014.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Red&#x20;One&#x20;Green&#x20;Matte&#x20;Hair&#x20;Wax&#x20;150ml" /></span></span>
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
                                                        herf="#" href-data="red-one-green-matte-hair-wax-150ml.html">Red One
                                                        Green Matte Hair Wax 150ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="13091" data-price-box="product-id-13091">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-13091" data-price-amount="5.29"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£5.29</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="REO014"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/13091/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="13091"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMzA5MS8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="osmo-clay-wax-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-3619"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome103.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Osmo&#x20;Clay&#x20;Wax&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="osmo-clay-wax-100ml.html">Osmo Clay Wax
                                                        100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="3619" data-price-box="product-id-3619">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-3619" data-price-amount="5.36"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£5.36</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="OME103"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/3619/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="3619"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8zNjE5Lw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="red-one-bright-white-aqua-hair-wax-150ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-13092"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo015.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Red&#x20;One&#x20;Bright&#x20;White&#x20;Aqua&#x20;Hair&#x20;Wax&#x20;150ml" /></span></span>
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
                                                        herf="#" href-data="red-one-bright-white-aqua-hair-wax-150ml.html">Red
                                                        One Bright White Aqua Hair Wax 150ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="13092" data-price-box="product-id-13092">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-13092" data-price-amount="5.78"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£5.78</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="REO015"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/13092/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="13092"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMzA5Mi8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="andis-clipper-oil-118ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-126"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/n/and004.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Andis&#x20;Clipper&#x20;Oil&#x20;118ml" /></span></span>
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
                                                        herf="#" href-data="andis-clipper-oil-118ml.html">Andis Clipper Oil
                                                        118ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="126" data-price-box="product-id-126"> <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-126" data-price-amount="3.5"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£3.50</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="AND004"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/126/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="126"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMjYv"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="flairosol-fine-mist-bottle-black-1.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-16960"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/l/flr007.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Flairosol&#x20;Fine&#x20;Mist&#x20;Bottle&#x20;Black&#x20;185ml" /></span></span>
                                                <style>
                                                    .product-image-container-16960 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-16960 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="flairosol-fine-mist-bottle-black-1.html">Flairosol
                                                        Fine Mist Bottle Black 185ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="16960" data-price-box="product-id-16960">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-16960" data-price-amount="3.95"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£3.95</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="FLR007"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/16960/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="16960"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNjk2MC8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="hair-xpertise-argan-oil-hair-treatment-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-16138"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/a/hax001.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Hair&#x20;Xpertise&#x20;Argan&#x20;Oil&#x20;Hair&#x20;Treatment&#x20;100ml" /></span></span>
                                                <style>
                                                    .product-image-container-16138 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-16138 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="hair-xpertise-argan-oil-hair-treatment-100ml.html">Hair
                                                        Xpertise Argan Oil Hair Treatment 100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="16138" data-price-box="product-id-16138">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-16138" data-price-amount="10.95"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£10.95</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="HAX001"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/16138/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="16138"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNjEzOC8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="goldwell-stylesign-crystal-turn-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-8257"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol099.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Goldwell&#x20;Stylesign&#x20;Crystal&#x20;Turn&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="goldwell-stylesign-crystal-turn-100ml.html">Goldwell
                                                        Stylesign Crystal Turn 100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="8257" data-price-box="product-id-8257">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-8257" data-price-amount="8"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£8.00</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="GOL099"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/8257/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="8257"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC84MjU3Lw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="kadus-fiber-infusion-in-salon-reconstructive-treatment-750ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-17072"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/a/kad276.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Kadus&#x20;Fiber&#x20;Infusion&#x20;In-Salon&#x20;Reconstructive&#x20;Treatment&#x20;750ml" /></span></span>
                                                <style>
                                                    .product-image-container-17072 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-17072 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="kadus-fiber-infusion-in-salon-reconstructive-treatment-750ml.html">Kadus
                                                        Fiber Infusion In-Salon Reconstructive Treatment
                                                        750ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="17072" data-price-box="product-id-17072">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-17072" data-price-amount="13.95"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£13.95</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="KAD276"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/17072/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="17072"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNzA3Mi8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="goldwell-stylesign-creative-texture-roughman-matte-cream-paste-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-9903"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol300.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Goldwell&#x20;Stylesign&#x20;Creative&#x20;Texture&#x20;Roughman&#x20;Matte&#x20;Cream&#x20;Paste&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="goldwell-stylesign-creative-texture-roughman-matte-cream-paste-100ml.html">Goldwell
                                                        Stylesign Creative Texture Roughman Matte Cream Paste
                                                        100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="9903" data-price-box="product-id-9903">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-9903" data-price-amount="11.59"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£11.59</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="GOL300"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/9903/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="9903"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC85OTAzLw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="goldwell-dualsenses-bond-pro-fortifying-shampoo-1000ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-17602"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol442.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Goldwell&#x20;Dualsenses&#x20;Bond&#x20;Pro&#x20;Fortifying&#x20;Shampoo&#x20;1000ml" /></span></span>
                                                <style>
                                                    .product-image-container-17602 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-17602 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="goldwell-dualsenses-bond-pro-fortifying-shampoo-1000ml.html">Goldwell
                                                        Dualsenses Bond Pro Fortifying Shampoo
                                                        1000ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="17602" data-price-box="product-id-17602">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-17602" data-price-amount="13.5"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£13.50</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="GOL442"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/17602/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="17602"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNzYwMi8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="redone-passionate-spider-hair-wax-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-17317"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo050.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="RedOne&#x20;Passionate&#x20;Spider&#x20;Hair&#x20;Wax&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="redone-passionate-spider-hair-wax-100ml.html">RedOne
                                                        Passionate Spider Hair Wax 100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="17317" data-price-box="product-id-17317">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-17317" data-price-amount="4"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£4.00</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="REO050"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/17317/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="17317"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNzMxNy8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="denman-d4-large-styling-brush-9-row.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-709"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/e/den019.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Denman&#x20;D4&#x20;Large&#x20;Styling&#x20;Brush&#x20;&#x28;9&#x20;row&#x29;" /></span></span>
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
                                                        herf="#" href-data="denman-d4-large-styling-brush-9-row.html">Denman
                                                        D4 Large Styling Brush (9 row)</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="709" data-price-box="product-id-709"> <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-709" data-price-amount="12.5"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£12.50</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="DEN019"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/709/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="709"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC83MDkv"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="catalog/product/view/id/6678/s/kadus-professional-dramatize-it-x-strong-hold-mousse-500ml/category/6198/index.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-6678"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/a/kad056.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Kadus&#x20;Professional&#x20;Dramatize&#x20;It&#x20;X-Strong&#x20;Hold&#x20;Mousse&#x20;500ml" /></span></span>
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
                                                        herf="#" href-data="catalog/product/view/id/6678/s/kadus-professional-dramatize-it-x-strong-hold-mousse-500ml/category/6198/index.html">Kadus
                                                        Professional Dramatize It X-Strong Hold Mousse
                                                        500ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="6678" data-price-box="product-id-6678">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-6678" data-price-amount="8.52"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£8.52</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="KAD056"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/6678/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="6678"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC82Njc4Lw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="osmo-matte-clay-extreme-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-3621"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/o/m/ome105.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Osmo&#x20;Matte&#x20;Clay&#x20;Extreme&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="osmo-matte-clay-extreme-100ml.html">Osmo Matte
                                                        Clay Extreme 100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="3621" data-price-box="product-id-3621">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-3621" data-price-amount="5.64"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£5.64</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="OME105"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/3621/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="3621"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8zNjIxLw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="label-m-brightening-blonde-balm-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-16402"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/l/b/lbm0050.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Label&#x20;M&#x20;Brightening&#x20;Blonde&#x20;Balm&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="label-m-brightening-blonde-balm-100ml.html">Label
                                                        M Brightening Blonde Balm 100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="16402" data-price-box="product-id-16402">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-16402" data-price-amount="1.95"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£1.95</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="LBM0050"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/16402/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="16402"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNjQwMi8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="wahl-barber-comb.html"
                                                class="product photo product-item-photo has-special-price"
                                                tabindex="-1"> <span
                                                    class="product-image-container product-image-container-5197"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/h/wh042_1.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Wahl&#x20;Barber&#x20;Comb" /></span></span>
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
                                                        class="product-item-link"
                                                        herf="#" href-data="wahl-barber-comb.html">Wahl Barber
                                                        Comb</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="5197" data-price-box="product-id-5197">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-5197" data-price-amount="2.3"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£2.30</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="WH042"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/5197/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="5197"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC81MTk3Lw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="goldwell-dualsenses-rich-repair-restoring-shampoo-1000ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-11248"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol427.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Goldwell&#x20;Dualsenses&#x20;Rich&#x20;Repair&#x20;Restoring&#x20;Shampoo&#x20;1000ml" /></span></span>
                                                <style>
                                                    .product-image-container-11248 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-11248 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="goldwell-dualsenses-rich-repair-restoring-shampoo-1000ml.html">Goldwell
                                                        Dualsenses Rich Repair Restoring Shampoo
                                                        1000ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="11248" data-price-box="product-id-11248">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-11248" data-price-amount="19.24"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£19.24</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="GOL427"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/11248/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="11248"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMTI0OC8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="andis-cool-care-plus-for-clipper-blades-5-in-one-439g.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-127"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/n/and005.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Andis&#x20;Cool&#x20;Care&#x20;Plus&#x20;for&#x20;Clipper&#x20;Blades&#x20;5&#x20;in&#x20;One&#x20;439g" /></span></span>
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
                                                        herf="#" href-data="andis-cool-care-plus-for-clipper-blades-5-in-one-439g.html">Andis
                                                        Cool Care Plus for Clipper Blades 5 in One
                                                        439g</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="127" data-price-box="product-id-127"> <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-127" data-price-amount="10.87"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£10.87</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="AND005"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/127/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="127"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMjcv"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="goldwell-dualsenses-rich-repair-restoring-conditioner-1000ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-9932"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol329.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Goldwell&#x20;Dualsenses&#x20;Rich&#x20;Repair&#x20;Restoring&#x20;Conditioner&#x20;1000ml" /></span></span>
                                                <style>
                                                    .product-image-container-9932 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-9932 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="goldwell-dualsenses-rich-repair-restoring-conditioner-1000ml.html">Goldwell
                                                        Dualsenses Rich Repair Restoring Conditioner
                                                        1000ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="9932" data-price-box="product-id-9932">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-9932" data-price-amount="18.49"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£18.49</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="GOL329"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/9932/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="9932"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC85OTMyLw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="redone-creative-fiber-wax-strong-matte-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-17312"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/r/e/reo045-removebg-preview.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="RedOne&#x20;Creative&#x20;Fiber&#x20;Wax&#x20;Strong&#x20;&amp;&#x20;Matte&#x20;100ml" /></span></span>
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
                                                        herf="#" href-data="redone-creative-fiber-wax-strong-matte-100ml.html">RedOne
                                                        Creative Fiber Wax Strong &amp; Matte 100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="17312" data-price-box="product-id-17312">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-17312" data-price-amount="4"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£4.00</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="REO045"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/17312/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="17312"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNzMxMi8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="kadus-velvet-oil-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-6715"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/a/kad096.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Kadus&#x20;Velvet&#x20;Oil&#x20;100ml" /></span></span>
                                                <style>
                                                    .product-image-container-6715 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-6715 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="kadus-velvet-oil-100ml.html">Kadus Velvet Oil
                                                        100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="6715" data-price-box="product-id-6715">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-6715" data-price-amount="12.5"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£12.50</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="KAD096"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/6715/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="6715"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC82NzE1Lw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="goldwell-dualsenses-men-hair-body-shampoo-1000ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-9911"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol308.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Goldwell&#x20;Dualsenses&#x20;Men&#x20;Hair&#x20;&amp;&#x20;Body&#x20;Shampoo&#x20;1000ml" /></span></span>
                                                <style>
                                                    .product-image-container-9911 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-9911 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="goldwell-dualsenses-men-hair-body-shampoo-1000ml.html">Goldwell
                                                        Dualsenses Men Hair &amp; Body Shampoo
                                                        1000ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="9911" data-price-box="product-id-9911">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-9911" data-price-amount="17.9"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£17.90</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="GOL308"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/9911/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="9911"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC85OTExLw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="wella-eimi-perfect-setting-lotion-spray-150ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-5639"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/m/emi033.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Wella&#x20;EIMI&#x20;Perfect&#x20;Setting&#x20;Lotion&#x20;Spray&#x20;150ml" /></span></span>
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
                                                        herf="#" href-data="wella-eimi-perfect-setting-lotion-spray-150ml.html">Wella
                                                        EIMI Perfect Setting Lotion Spray 150ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="5639" data-price-box="product-id-5639">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-5639" data-price-amount="7.68"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£7.68</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="EMI033"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/5639/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="5639"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC81NjM5Lw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="goldwell-just-smooth-thermal-spray-serum-sleek-perfection-0-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-9887"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol276.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Goldwell&#x20;Stylesign&#x20;Just&#x20;Smooth&#x20;Thermal&#x20;Spray&#x20;Serum&#x20;Sleek&#x20;Perfection&#x20;0&#x20;100ml" /></span></span>
                                                <style>
                                                    .product-image-container-9887 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-9887 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="goldwell-just-smooth-thermal-spray-serum-sleek-perfection-0-100ml.html">Goldwell
                                                        Stylesign Just Smooth Thermal Spray Serum Sleek
                                                        Perfection 0 100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="9887" data-price-box="product-id-9887">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-9887" data-price-amount="11.59"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£11.59</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="GOL276"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/9887/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="9887"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC85ODg3Lw~~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="l-oreal-professionnel-mythic-high-concentration-nourishing-oil-100ml.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-12228"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/l/o/lor415.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="L&#x27;Oreal&#x20;Professionnel&#x20;Mythic&#x20;High&#x20;Concentration&#x20;Nourishing&#x20;Oil&#x20;100ml" /></span></span>
                                                <style>
                                                    .product-image-container-12228 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-12228 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="l-oreal-professionnel-mythic-high-concentration-nourishing-oil-100ml.html">L&#039;Oreal
                                                        Professionnel Mythic High Concentration Nourishing Oil
                                                        100ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="12228" data-price-box="product-id-12228">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-12228" data-price-amount="21.96"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£21.96</span></span> </span>
                                                </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="LOR415"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/12228/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="12228"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xMjIyOC8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                                herf="#" href-data="flairosol-fine-mist-white-spray-bottle-300ml-1.html"
                                                class="product photo product-item-photo" tabindex="-1"> <span
                                                    class="product-image-container product-image-container-16958"><span
                                                        class="product-image-wrapper"><img
                                                            class="product-image-photo"
                                                            src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                           src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/l/flr005.png"
                                                            loading="lazy" width="384" height="384"
                                                            alt="Flairosol&#x20;Fine&#x20;Mist&#x20;White&#x20;Spray&#x20;Bottle&#x20;185ml" /></span></span>
                                                <style>
                                                    .product-image-container-16958 {
                                                        width: 384px;
                                                    }

                                                    .product-image-container-16958 span.product-image-wrapper {
                                                        padding-bottom: 100%;
                                                    }
                                                </style>
                                            </a>
                                            <div class="product details product-item-details"> <strong
                                                    class="product name product-item-name"><a
                                                        class="product-item-link"
                                                        herf="#" href-data="flairosol-fine-mist-white-spray-bottle-300ml-1.html">Flairosol
                                                        Fine Mist White Spray Bottle 185ml</a></strong>
                                                <div class="price-box price-final_price" data-role="priceBox"
                                                    data-product-id="16958" data-price-box="product-id-16958">
                                                    <span
                                                        class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                        <span id="product-price-16958" data-price-amount="3.95"
                                                            data-price-type="finalPrice"
                                                            class="price-wrapper "><span
                                                                class="price">£3.95</span></span> </span> </div>
                                                <div class="product-item-inner">
                                                    <div class="product actions product-item-actions">
                                                        <div class="actions-primary">
                                                            <form data-role="tocart-form"
                                                                data-product-sku="FLR005"
                                                                action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIuaHRtbA~~/product/16958/"
                                                                method="post"><input type="hidden"
                                                                    name="product" value="16958"><input
                                                                    type="hidden" name="uenc"
                                                                    value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl1YUhSdGJBfn4vcHJvZHVjdC8xNjk1OC8~"><input
                                                                    name="form_key" type="hidden"
                                                                    value="J62HRgJKch43STZN" /> <button
                                                                    type="button" title="Add to Cart"
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
                                    data-mage-init='{"productListToolbarForm":{"mode":"product_list_mode","direction":"product_list_dir","order":"product_list_order","limit":"product_list_limit","modeDefault":"grid","directionDefault":"desc","orderDefault":"bestsellers","limitDefault":36,"url":"https:\/\/www.salonwholesale.com\/hair.html","formKey":"J62HRgJKch43STZN","post":false}}'>
                                    <div class="row">
                                        <div class="col-sm-9">
                                            <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                    By</span>
                                                <div class="sorter-options">
                                                    <ul>
                                                        <li> <a rel="nofollow" herf="#" href-data="#"
                                                                onclick="window.location = 'hair9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                        </li>
                                                        <li> <a rel="nofollow" herf="#" href-data="#"
                                                                onclick="window.location = 'haire63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                        </li>
                                                        <li> <a rel="nofollow" herf="#" href-data="#"
                                                                onclick="window.location = 'hair0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                Name</a></li>
                                                        <li> <a rel="nofollow" herf="#" href-data="#"
                                                                onclick="window.location = 'hair4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                Low</a></li>
                                                        <li> <a rel="nofollow" herf="#" href-data="#"
                                                                onclick="window.location = 'hairbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                High</a></li>
                                                        <li> <a class="active" rel="nofollow" herf="#" href-data="#"
                                                                onclick="window.location = 'hair5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                    {{-- <div class="pages"><strong class="label pages-label"
                                            id="paging-label">Page</strong>
                                        <ul class="items pages-items" aria-labelledby="paging-label">
                                            <li class="item current"><strong class="page"><span
                                                        class="label">You&#039;re currently reading page</span>
                                                    <span>1</span></strong></li>
                                            <li class="item"><a herf="#" href-data="hair905b.html?p=2" class="page"><span
                                                        class="label">Page</span> <span>2</span></a></li>
                                            <li class="item"><a herf="#" href-data="hair2207.html?p=3" class="page"><span
                                                        class="label">Page</span> <span>3</span></a></li>
                                            <li class="item"><a herf="#" href-data="hair5c7e.html?p=4" class="page"><span
                                                        class="label">Page</span> <span>4</span></a></li>
                                            <li class="item"><a herf="#" href-data="hairc471.html?p=5" class="page"><span
                                                        class="label">Page</span> <span>5</span></a></li>
                                            <li class="item pages-item-next"> <a class="action  next"
                                                    herf="#" href-data="hair905b.html?p=2" title="Next"><span
                                                        class="label">Page</span> <span>Next</span></a></li>
                                        </ul>
                                    </div> --}}
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
                                    <p> No matter what you need, whether that is shampoo, conditioner, styling
                                        products, treatments or much more, you are able to find everything you
                                        need here at emerch junction.com. We have products for all hair types
                                        whether that is dry hair, dandruff, curly hair, hair loss, damaged hair,
                                        frizzy hair, color-treated hair we sell lots of products that will help
                                        to give your clients the best hair. With best sellers at Salon
                                        Wholesale, we are thrilled to be able to bring you such a diverse range
                                        of hairdressing products from top hair suppliers in the industry
                                        including <a herf="#" href-data="brands/l-oreal-professionnel.html">L'Oréal
                                            Professionnel</a>, <a herf="#" href-data="brands/denman.html">Denman</a>, <a
                                            herf="#" href-data="brands/parlux.html">Parlux</a>, <a
                                            herf="#" href-data="brands/goldwell.html">Goldwell</a> and <a
                                            herf="#" href-data="brands/wahl.html">Wahl</a>. We will cater for all of your hair
                                        care needs and whether it’s a hair styling wand, mousse, hair brush,
                                        hairspray, pomade, dry shampoo, hair masks (masque), hair treatments or
                                        hair conditioner you need you can be reassured you are purchasing a high
                                        quality product at a fantastic price. Take a look at our extensive
                                        hairdressing supplies today. Whether you want electrical's like hair
                                        straighteners, flat irons, curling irons or hair dryers, products to use
                                        on natural hair or products for colored hair, products to help with
                                        split ends or breakage, styling tools, you are able to find everything
                                        in categories depending on the type of hair care products you want. We
                                        sell products that are sulfate free and paraben free, with ingredients
                                        like coconut oil and shea butter, so your clients can have the perfect
                                        hair. It is so easy to find what you are looking for but if there are
                                        any problems don’t hesitate to contact our support.

                                    <p> We also have a range of other products for any hairdressing or barbering
                                        needs. This includes <a herf="#" href-data="hair-colour.html">hair color</a>, <a
                                            herf="#" href-data="products/beauty/skincare.html">skin care </a> (in our beauty
                                        section), <a herf="#" href-data="barbers.html"> barbers</a>, <a
                                            herf="#" href-data="essentials.html">our salon essentials</a> and our <a
                                            herf="#" href-data="scissors.html">hairdressing scissors and thinners. </a></p>
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