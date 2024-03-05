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
                                    data-ui-id="page-title-wrapper">Lash Brows</span></h1>
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
                          
                                <div class="products-grid">
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../ardell-duralash-individuals-knot-free-triple-flares-medium-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17595"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard092.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;DuraLash&#x20;Individuals&#x20;Knot-Free&#x20;Triple&#x20;Flares&#x20;Medium&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-17595 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17595 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-duralash-individuals-knot-free-triple-flares-medium-black.html">Ardell
                                                            DuraLash Individuals Knot-Free Triple Flares Medium
                                                            Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17595" data-price-box="product-id-17595">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-17595" data-price-amount="3.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD092"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/17595/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17595"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzE3NTk1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-professional-magnetic-lashes-double-demi-wispies.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15758"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard081.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Professional&#x20;Magnetic&#x20;Lashes&#x20;Double&#x20;Demi&#x20;Wispies" /></span></span>
                                                    <style>
                                                        .product-image-container-15758 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15758 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-professional-magnetic-lashes-double-demi-wispies.html">Ardell
                                                            Professional Magnetic Lashes Double Demi Wispies
                                                        </a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15758" data-price-box="product-id-15758">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-15758" data-price-amount="9.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD081"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/15758/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="15758"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzE1NzU4Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-duralash-individuals-knotted-flares-short-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8400"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard054.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;DuraLash&#x20;Individuals&#x20;Knotted&#x20;Flares&#x20;Short&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8400 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8400 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-duralash-individuals-knotted-flares-short-black.html">Ardell
                                                            DuraLash Individuals Knotted Flares Short
                                                            Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8400" data-price-box="product-id-8400">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8400" data-price-amount="3.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD054"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8400/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8400"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzg0MDAv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-duralash-individuals-knot-free-naturals-long-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8401"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard055.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;DuraLash&#x20;Individuals&#x20;Knot-Free&#x20;Naturals&#x20;Long&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8401 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8401 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-duralash-individuals-knot-free-naturals-long-black.html">Ardell
                                                            DuraLash Individuals Knot-Free Naturals Long
                                                            Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8401" data-price-box="product-id-8401">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8401" data-price-amount="2.99"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£2.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD055"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8401/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8401"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzg0MDEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-natural-lashes-106-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8750"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard003.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Natural&#x20;Lashes&#x20;106&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8750 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8750 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-natural-lashes-106-black.html">Ardell
                                                            Natural Lashes 106 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8750" data-price-box="product-id-8750">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8750" data-price-amount="3.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD003"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8750/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8750"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzg3NTAv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-accent-lashes-315-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8384"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard037.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Accent&#x20;Lashes&#x20;315&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8384 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8384 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-accent-lashes-315-black.html">Ardell
                                                            Accent Lashes 315 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8384" data-price-box="product-id-8384">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8384" data-price-amount="3.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD037"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8384/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8384"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzODQv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-duralash-individuals-knotted-flares-long-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8403"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard057.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;DuraLash&#x20;Individuals&#x20;Knotted&#x20;Flares&#x20;Long&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8403 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8403 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-duralash-individuals-knotted-flares-long-black.html">Ardell
                                                            DuraLash Individuals Knotted Flares Long
                                                            Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8403" data-price-box="product-id-8403">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8403" data-price-amount="2.99"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£2.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD057"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8403/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8403"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzg0MDMv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-duralash-individuals-knotted-flares-medium-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8407"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard061.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;DuraLash&#x20;Individuals&#x20;Knotted&#x20;Flares&#x20;Medium&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8407 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8407 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-duralash-individuals-knotted-flares-medium-black.html">Ardell
                                                            DuraLash Individuals Knotted Flares Medium
                                                            Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8407" data-price-box="product-id-8407">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8407" data-price-amount="2.99"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£2.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD061"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8407/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8407"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzg0MDcv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-duralash-individuals-knot-free-flares-medium-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8408"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard062.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;DuraLash&#x20;Individuals&#x20;Knot-Free&#x20;Flares&#x20;Medium&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8408 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8408 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-duralash-individuals-knot-free-flares-medium-black.html">Ardell
                                                            DuraLash Individuals Knot-Free Flares Medium
                                                            Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8408" data-price-box="product-id-8408">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8408" data-price-amount="3.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD062"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8408/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8408"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzg0MDgv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-brush-on-strip-lash-adhesive-clear-5ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8411"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard066.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Brush-On&#x20;Strip&#x20;Lash&#x20;Adhesive&#x20;Clear&#x20;5ml" /></span></span>
                                                    <style>
                                                        .product-image-container-8411 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8411 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-brush-on-strip-lash-adhesive-clear-5ml.html">Ardell
                                                            Brush-On Strip Lash Adhesive Clear 5ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8411" data-price-box="product-id-8411">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8411" data-price-amount="4.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD066"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8411/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8411"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzg0MTEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-natural-lashes-111-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8355"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard006.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Natural&#x20;Lashes&#x20;111&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8355 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8355 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-natural-lashes-111-black.html">Ardell
                                                            Natural Lashes 111 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8355" data-price-box="product-id-8355">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8355" data-price-amount="3.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD006"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8355/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8355"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzNTUv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-curvy-lashes-412-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8394"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard048.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Curvy&#x20;Lashes&#x20;412&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8394 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8394 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-curvy-lashes-412-black.html">Ardell
                                                            Curvy Lashes 412 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8394" data-price-box="product-id-8394">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8394" data-price-amount="3.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD048"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8394/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8394"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzOTQv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-professional-natural-wispies-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8414"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard069.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Professional&#x20;Natural&#x20;Wispies&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8414 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8414 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-professional-natural-wispies-black.html">Ardell
                                                            Professional Natural Wispies Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8414" data-price-box="product-id-8414">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8414" data-price-amount="3.33"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.33</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD069"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8414/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8414"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzg0MTQv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../duo-brush-on-striplash-adhesive.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13805"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/u/duo001.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Duo&#x20;Brush&#x20;on&#x20;Striplash&#x20;Adhesive" /></span></span>
                                                    <style>
                                                        .product-image-container-13805 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13805 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../duo-brush-on-striplash-adhesive.html">Duo Brush
                                                            on Striplash Adhesive </a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13805" data-price-box="product-id-13805">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-13805" data-price-amount="5.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="duo001"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/13805/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="13805"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzEzODA1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-natural-lashes-110-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8356"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard007.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Natural&#x20;Lashes&#x20;110&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8356 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8356 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-natural-lashes-110-black.html">Ardell
                                                            Natural Lashes 110 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8356" data-price-box="product-id-8356">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8356" data-price-amount="3.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD007"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8356/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8356"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzNTYv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-flawless-lashes-805.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8372"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard024.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Flawless&#x20;Lashes&#x20;805" /></span></span>
                                                    <style>
                                                        .product-image-container-8372 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8372 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-flawless-lashes-805.html">Ardell
                                                            Flawless Lashes 805</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8372" data-price-box="product-id-8372">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8372" data-price-amount="3.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD024"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8372/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8372"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzNzIv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-double-up-lashes-204-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8375"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard027.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Double&#x20;Up&#x20;Lashes&#x20;204&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8375 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8375 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-double-up-lashes-204-black.html">Ardell
                                                            Double Up Lashes 204 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8375" data-price-box="product-id-8375">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8375" data-price-amount="5.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD027"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8375/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8375"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzNzUv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-double-up-lashes-205-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8376"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard028.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Double&#x20;Up&#x20;Lashes&#x20;205&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8376 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8376 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-double-up-lashes-205-black.html">Ardell
                                                            Double Up Lashes 205 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8376" data-price-box="product-id-8376">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8376" data-price-amount="5.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD028"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8376/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8376"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzNzYv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-double-up-lashes-208-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8377"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard029.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Double&#x20;Up&#x20;Lashes&#x20;208&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8377 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8377 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-double-up-lashes-208-black.html">Ardell
                                                            Double Up Lashes 208 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8377" data-price-box="product-id-8377">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8377" data-price-amount="5.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD029"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8377/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8377"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzNzcv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-accent-lashes-301-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8381"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard033.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Accent&#x20;Lashes&#x20;301&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8381 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8381 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-accent-lashes-301-black.html">Ardell
                                                            Accent Lashes 301 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8381" data-price-box="product-id-8381">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8381" data-price-amount="3.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD033"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8381/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8381"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzODEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-edgy-lashes-403-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8390"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard044.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Edgy&#x20;Lashes&#x20;403&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8390 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8390 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-edgy-lashes-403-black.html">Ardell Edgy
                                                            Lashes 403 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8390" data-price-box="product-id-8390">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8390" data-price-amount="3.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD044"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8390/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8390"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzOTAv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-edgy-lashes-405-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8391"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard045.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Edgy&#x20;Lashes&#x20;405&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8391 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8391 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-edgy-lashes-405-black.html">Ardell Edgy
                                                            Lashes 405 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8391" data-price-box="product-id-8391">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8391" data-price-amount="3.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD045"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8391/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8391"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzOTEv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-curvy-lashes-410-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8392"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard046_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Curvy&#x20;Lashes&#x20;410&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8392 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8392 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-curvy-lashes-410-black.html">Ardell
                                                            Curvy Lashes 410 Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8392" data-price-box="product-id-8392">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8392" data-price-amount="3.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD046"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8392/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8392"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzgzOTIv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-duralash-individuals-knot-free-naturals-long-brown.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8409"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard063.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;DuraLash&#x20;Individuals&#x20;Knot-Free&#x20;Naturals&#x20;Long&#x20;Brown" /></span></span>
                                                    <style>
                                                        .product-image-container-8409 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8409 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-duralash-individuals-knot-free-naturals-long-brown.html">Ardell
                                                            DuraLash Individuals Knot-Free Naturals Long
                                                            Brown</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8409" data-price-box="product-id-8409">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8409" data-price-amount="2.99"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£2.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD063"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/8409/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8409"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzg0MDkv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-flawless-lashes-802.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-9654"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/8/0/802609961207-0503.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Flawless&#x20;Lashes&#x20;802" /></span></span>
                                                    <style>
                                                        .product-image-container-9654 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-9654 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-flawless-lashes-802.html">Ardell
                                                            Flawless Lashes 802</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="9654" data-price-box="product-id-9654">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-9654" data-price-amount="3.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD021"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/9654/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="9654"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0Lzk2NTQv"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-professional-magnetic-lashes-double-wispies.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15757"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard080.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Professional&#x20;Magnetic&#x20;Lashes&#x20;Double&#x20;Wispies" /></span></span>
                                                    <style>
                                                        .product-image-container-15757 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15757 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-professional-magnetic-lashes-double-wispies.html">Ardell
                                                            Professional Magnetic Lashes Double Wispies
                                                        </a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15757" data-price-box="product-id-15757">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-15757" data-price-amount="9.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD080"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/15757/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="15757"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzE1NzU3Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-professional-magnetic-lashes-accents-002.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15760"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard083.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Professional&#x20;Magnetic&#x20;Lashes&#x20;Accents&#x20;002" /></span></span>
                                                    <style>
                                                        .product-image-container-15760 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15760 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-professional-magnetic-lashes-accents-002.html">Ardell
                                                            Professional Magnetic Lashes Accents 002</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15760" data-price-box="product-id-15760">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-15760" data-price-amount="9.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD083"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/15760/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="15760"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzE1NzYwLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-professional-magnetic-lashes-double-110.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15761"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard084.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Professional&#x20;Magnetic&#x20;Lashes&#x20;Double&#x20;110" /></span></span>
                                                    <style>
                                                        .product-image-container-15761 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15761 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-professional-magnetic-lashes-double-110.html">Ardell
                                                            Professional Magnetic Lashes Double 110</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15761" data-price-box="product-id-15761">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-15761" data-price-amount="9.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD084"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/15761/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="15761"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzE1NzYxLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-lashes.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15866"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard999_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Lashes" /></span></span>
                                                    <style>
                                                        .product-image-container-15866 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15866 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-lashes.html">Ardell Lashes</a></strong>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of
                                                                        stock</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../ardell-lashtite-for-individual-lashes-dark-adhesive-3-5g.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-18395"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard046-l.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Lashtite&#x20;For&#x20;Individual&#x20;Lashes&#x20;Dark&#x20;Adhesive&#x20;3.5g" /></span></span>
                                                    <style>
                                                        .product-image-container-18395 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-18395 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-lashtite-for-individual-lashes-dark-adhesive-3-5g.html">Ardell
                                                            Lashtite For Individual Lashes Dark Adhesive
                                                            3.5g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="18395" data-price-box="product-id-18395">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-18395" data-price-amount="4.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ARD093"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS9sYXNoZXMtYnJvd3MuaHRtbA~~/product/18395/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="18395"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5c1lYTm9aWE10WW5KdmQzTXVhSFJ0YkF-fi9wcm9kdWN0LzE4Mzk1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="6dktkQ4DAD1Dd5g7" /> <button
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
                                                    href-data="../ardell-duralash-individual-knot-free-flares-medium-black-multipack.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8410"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard064.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;DuraLash&#x20;Individual&#x20;Knot-Free&#x20;Flares&#x20;Medium&#x20;Black&#x20;Multipack" /></span></span>
                                                    <style>
                                                        .product-image-container-8410 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8410 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-duralash-individual-knot-free-flares-medium-black-multipack.html">Ardell
                                                            DuraLash Individual Knot-Free Flares Medium Black
                                                            Multipack</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8410" data-price-box="product-id-8410">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8410" data-price-amount="8.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£8.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of
                                                                        stock</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../ardell-double-up-207-lashes-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8413"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard068.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Double&#x20;Up&#x20;207&#x20;Lashes&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8413 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8413 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-double-up-207-lashes-black.html">Ardell
                                                            Double Up 207 Lashes Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8413" data-price-box="product-id-8413">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8413" data-price-amount="5.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of
                                                                        stock</span></div>
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
                                                    href-data="../ardell-duralash-individuals-knot-free-naturals-short-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8405"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard059.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;DuraLash&#x20;Individuals&#x20;Knot-Free&#x20;Naturals&#x20;Short&#x20;Black" /></span></span>
                                                    <style>
                                                        .product-image-container-8405 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8405 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-duralash-individuals-knot-free-naturals-short-black.html">Ardell
                                                            DuraLash Individuals Knot-Free Naturals Short
                                                            Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8405" data-price-box="product-id-8405">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8405" data-price-amount="2.99"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£2.99</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of
                                                                        stock</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../ardell-natural-lashes-101-black-multipack.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8364"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard015.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Natural&#x20;Lashes&#x20;101&#x20;Black&#x20;Multipack" /></span></span>
                                                    <style>
                                                        .product-image-container-8364 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8364 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-natural-lashes-101-black-multipack.html">Ardell
                                                            Natural Lashes 101 Black Multipack</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8364" data-price-box="product-id-8364">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8364" data-price-amount="10.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£10.90</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of
                                                                        stock</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../ardell-professional-magnetic-lashes-accents-001.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15763"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard086.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Professional&#x20;Magnetic&#x20;Lashes&#x20;Accents&#x20;001" /></span></span>
                                                    <style>
                                                        .product-image-container-15763 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15763 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-professional-magnetic-lashes-accents-001.html">Ardell
                                                            Professional Magnetic Lashes Accents 001</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15763" data-price-box="product-id-15763">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-15763" data-price-amount="9.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of
                                                                        stock</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../ardell-color-impact-lashes-demi-wispies-plum.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8388"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/r/ard041.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Ardell&#x20;Color&#x20;Impact&#x20;Lashes&#x20;Demi&#x20;Wispies&#x20;Plum" /></span></span>
                                                    <style>
                                                        .product-image-container-8388 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8388 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../ardell-color-impact-lashes-demi-wispies-plum.html">Ardell
                                                            Color Impact Lashes Demi Wispies Plum</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8388" data-price-box="product-id-8388">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8388" data-price-amount="4.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <div class="stock unavailable"><span>Out of
                                                                        stock</span></div>
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
                                        data-mage-init='{"productListToolbarForm":{"mode":"product_list_mode","direction":"product_list_dir","order":"product_list_order","limit":"product_list_limit","modeDefault":"grid","directionDefault":"desc","orderDefault":"bestsellers","limitDefault":36,"url":"https:\/\/www.salonwholesale.com\/Lash Brows\/lashes-brows.html","formKey":"6dktkQ4DAD1Dd5g7","post":false}}'>
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'lashes-brows9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'lashes-browse63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'lashes-brows0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'lashes-brows4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'lashes-browsbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'lashes-brows5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                            class="label">You&#039;re currently reading page</span>
                                                        <span>1</span></strong></li>
                                                <li class="item"><a href-data="lashes-brows905b.html?p=2"
                                                        class="page"><span class="label">Page</span>
                                                        <span>2</span></a></li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href-data="lashes-brows905b.html?p=2" title="Next"><span
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
                                           Lash Browsfrom renowned brands such as, Wella, Goldwell, Fanola and Serie
                                            Expert. At emerch junction ourLash Browsoffer a vast array of uses
                                            including straightening, moisturising, curl defining, anti-dandruff and
                                            much more. Available in both retail and professional sizes so you can
                                            have a diverse Lash Brows collection that guarantees healthy, happy hair.
                                            Our hair care products help to reduce frizz, are greta for hydrating,
                                            volumizing or moisturizing the hair, and its perfect for all hair types
                                            whether that is dry hair, curly hair, fine hair, hair loss,
                                            color-treated hair, hair with a lot of breakage, itchy scalps and so
                                            many other hair types. We have a selection of dry Lash Brows, repair
                                            Lash Brows, moisturizing Lash Brows, anti-dandruff Lash Brows,
                                            volumizing
                                            Lash Brows, thickening Lash Brows, moisturie Lash Brows, tea tree
                                            special
                                            Lash Brows, and we even have a small selection of argan oil Lash Brows. We
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
