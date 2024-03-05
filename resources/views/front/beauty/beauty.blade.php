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
                                    data-ui-id="page-title-wrapper">Beauty</span></h1>
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
                                                    href-data="the-edge-nails-nailfx-soak-off-gel-14ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15313"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/n/a/nailfx.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;NailFX&#x20;Soak&#x20;Off&#x20;Gel&#x20;14ml" /></span></span>
                                                    <style>
                                                        .product-image-container-15313 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15313 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-nailfx-soak-off-gel-14ml.html">The
                                                            Edge Nails NailFX Soak Off Gel 14ml</a></strong>
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
                                                    href-data="morgan-taylor-professional-nail-lacquer-15ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15315"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/o/morgan_taylor.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Morgan&#x20;Taylor&#x20;Professional&#x20;Nail&#x20;Lacquer&#x20;15ml" /></span></span>
                                                    <style>
                                                        .product-image-container-15315 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15315 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="morgan-taylor-professional-nail-lacquer-15ml.html">Morgan
                                                            Taylor Professional Nail Lacquer 15ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15315" data-price-box="product-id-15315">
                                                        <span class="normal-price"> <span
                                                                class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                                <span class="price-label">As low as</span> <span
                                                                    id="product-price-15315"
                                                                    data-price-amount="5.62"
                                                                    data-price-type="finalPrice"
                                                                    class="price-wrapper "><span
                                                                        class="price">£5.62</span></span>
                                                            </span></span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="MTA901"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/15315/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="15315"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xNTMxNS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="elizabeth-arden-beauty-deodorant-spray-150ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16337"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/l/ela001.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Elizabeth&#x20;Arden&#x20;Beauty&#x20;Deodorant&#x20;Spray&#x20;150ml" /></span></span>
                                                    <style>
                                                        .product-image-container-16337 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16337 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="elizabeth-arden-beauty-deodorant-spray-150ml.html">Elizabeth
                                                            Arden Beauty Deodorant Spray 150ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16337" data-price-box="product-id-16337">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-16337" data-price-amount="5.13"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.13</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="ELA001"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/16337/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="16337"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xNjMzNy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="protan-unbelievably-black-ultra-dark-bronzing-lotion-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4379"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prt006.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="ProTan&#x20;Unbelievably&#x20;Black&#x20;Ultra&#x20;Dark&#x20;Bronzing&#x20;Lotion&#x20;250ml" /></span></span>
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
                                                            href-data="protan-unbelievably-black-ultra-dark-bronzing-lotion-250ml.html">ProTan
                                                            Unbelievably Black Ultra Dark Bronzing Lotion
                                                            250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4379" data-price-box="product-id-4379">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-4379" data-price-amount="10.99"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£10.99</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="PRT006"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/4379/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="4379"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC80Mzc5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="haz-nail-polish-remover-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10598"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/a/haz005.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Haz&#x20;Nail&#x20;Polish&#x20;Remover&#x20;250ml" /></span></span>
                                                    <style>
                                                        .product-image-container-10598 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10598 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="haz-nail-polish-remover-250ml.html">Haz Nail
                                                            Polish Remover 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10598" data-price-box="product-id-10598">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10598" data-price-amount="1.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="HAZ005"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10598/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10598"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDU5OC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="emerald-bay-definitely-black-bronzer-aloe-vera-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17515"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/e/m/emb011.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Emerald&#x20;Bay&#x20;Definitely&#x20;Black&#x20;Bronzer&#x20;&#x2B;&#x20;Aloe&#x20;Vera&#x20;250ml" /></span></span>
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
                                                            href-data="emerald-bay-definitely-black-bronzer-aloe-vera-250ml.html">Emerald
                                                            Bay Definitely Black Bronzer + Aloe Vera
                                                            250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17515" data-price-box="product-id-17515">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-17515" data-price-amount="12.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£12.50</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="EMB011"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/17515/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17515"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xNzUxNS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="dmi-paper-wax-strips-x100-white.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16075"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi113.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI&#x20;Paper&#x20;Wax&#x20;Strips&#x20;x100&#x20;White" /></span></span>
                                                    <style>
                                                        .product-image-container-16075 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16075 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="dmi-paper-wax-strips-x100-white.html">DMI Paper
                                                            Wax Strips x100 White </a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16075" data-price-box="product-id-16075">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-16075" data-price-amount="1.64"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.64</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="DMI113"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/16075/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="16075"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xNjA3NS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-glue-3g.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8985"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem020.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Glue&#x20;3g" /></span></span>
                                                    <style>
                                                        .product-image-container-8985 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8985 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-glue-3g.html">The Edge Nails Glue
                                                            3g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8985" data-price-box="product-id-8985">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8985" data-price-amount="1.19"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.19</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM020"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/8985/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8985"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC84OTg1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15868"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem998.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nail&#x20;File" /></span></span>
                                                    <style>
                                                        .product-image-container-15868 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15868 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link" href-data="the-edge-nails.html">The
                                                            Edge Nail File</a></strong>
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
                                                    href-data="protan-incredibly-black-ultra-powerful-bronzing-lotion-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4375"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prt002.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="ProTan&#x20;Incredibly&#x20;Black&#x20;Ultra&#x20;Powerful&#x20;Bronzing&#x20;Lotion&#x20;250ml" /></span></span>
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
                                                            href-data="protan-incredibly-black-ultra-powerful-bronzing-lotion-250ml.html">ProTan
                                                            Incredibly Black Ultra Powerful Bronzing Lotion
                                                            250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4375" data-price-box="product-id-4375">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-4375" data-price-amount="10.99"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£10.99</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="PRT002"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/4375/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="4375"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC80Mzc1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="supre-tan-coco-nutz-dark-tanning-bronzer-235ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4836"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/u/sut001.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Supre&#x20;Tan&#x20;Coco&#x20;Nutz&#x20;Dark&#x20;Tanning&#x20;Bronzer&#x20;235ml" /></span></span>
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
                                                            href-data="supre-tan-coco-nutz-dark-tanning-bronzer-235ml.html">Supre
                                                            Tan Coco Nutz Dark Tanning Bronzer 235ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4836" data-price-box="product-id-4836">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-4836" data-price-amount="13.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£13.50</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="SUT001"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/4836/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="4836"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC80ODM2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="dadi-oil-95-organic-nail-treatment-oil-14-3ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8710"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/d/ddi001_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Dadi&#x20;Oil&#x20;95&#x25;&#x20;Organic&#x20;Nail&#x20;Treatment&#x20;Oil&#x20;14.3ml" /></span></span>
                                                    <style>
                                                        .product-image-container-8710 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8710 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="dadi-oil-95-organic-nail-treatment-oil-14-3ml.html">Dadi
                                                            Oil 95% Organic Nail Treatment Oil 14.3ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8710" data-price-box="product-id-8710">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8710" data-price-amount="10.21"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£10.21</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="DDI001"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/8710/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8710"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC84NzEwLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-c-curve-assorted-nail-tips-size-9-50-pack.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10193"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem206.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;C&#x20;Curve&#x20;Assorted&#x20;Nail&#x20;Tips&#x20;Size&#x20;9&#x20;&#x28;50&#x20;Pack&#x29;" /></span></span>
                                                    <style>
                                                        .product-image-container-10193 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10193 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-c-curve-assorted-nail-tips-size-9-50-pack.html">The
                                                            Edge Nails C Curve Assorted Nail Tips Size 9 (50
                                                            Pack)</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10193" data-price-box="product-id-10193">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10193" data-price-amount="3.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM206"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10193/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10193"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDE5My8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-pink-sanding-block-10-pack-100-100.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10310"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem311.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Pink&#x20;Sanding&#x20;Block&#x20;&#x28;10&#x20;Pack&#x29;&#x20;100&#x2F;100" /></span></span>
                                                    <style>
                                                        .product-image-container-10310 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10310 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-pink-sanding-block-10-pack-100-100.html">The
                                                            Edge Nails Pink Sanding Block (10 Pack)
                                                            100/100</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10310" data-price-box="product-id-10310">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10310" data-price-amount="9.63"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.63</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM311"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10310/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10310"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDMxMC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-silver-tip-cutter.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10302"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem302.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Silver&#x20;Tip&#x20;Cutter" /></span></span>
                                                    <style>
                                                        .product-image-container-10302 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10302 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-silver-tip-cutter.html">The Edge
                                                            Nails Silver Tip Cutter</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10302" data-price-box="product-id-10302">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10302" data-price-amount="9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM302"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10302/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10302"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDMwMi8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="morgan-taylor-polished-up-professional-nail-lacquer-15ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11085"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/t/mta142.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Morgan&#x20;Taylor&#x20;Polished&#x20;Up&#x20;Professional&#x20;Nail&#x20;Lacquer&#x20;15ml" /></span></span>
                                                    <style>
                                                        .product-image-container-11085 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11085 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="morgan-taylor-polished-up-professional-nail-lacquer-15ml.html">Morgan
                                                            Taylor Polished Up Professional Nail Lacquer
                                                            15ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11085" data-price-box="product-id-11085">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-11085" data-price-amount="6.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£6.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="MTA142"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/11085/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="11085"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMTA4NS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="fiesta-sun-mango-melt-sizzling-hot-action-dark-tanning-tingle-236ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-1207"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/s/fsu003.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Fiesta&#x20;Sun&#x20;Mango&#x20;Melt&#x20;Sizzling&#x20;Hot&#x20;Action&#x20;Dark&#x20;Tanning&#x20;Tingle&#x20;236ml" /></span></span>
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
                                                            href-data="fiesta-sun-mango-melt-sizzling-hot-action-dark-tanning-tingle-236ml.html">Fiesta
                                                            Sun Mango Melt Sizzling Hot Action Dark Tanning Tingle
                                                            236ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="1207" data-price-box="product-id-1207">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-1207" data-price-amount="11.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£11.95</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="FSU003"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/1207/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="1207"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMjA3Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="sunlicious-top-secret-20xx-dark-tanning-accelerator-369ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4835"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/u/sun001.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Sunlicious&#x20;Top&#x20;Secret&#x20;20XX&#x20;Dark&#x20;Tanning&#x20;Accelerator&#x20;369ml" /></span></span>
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
                                                            href-data="sunlicious-top-secret-20xx-dark-tanning-accelerator-369ml.html">Sunlicious
                                                            Top Secret 20XX Dark Tanning Accelerator
                                                            369ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4835" data-price-box="product-id-4835">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-4835" data-price-amount="23.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£23.95</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="SUN001"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/4835/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="4835"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC80ODM1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="seche-vive-instant-gel-effect-top-coat-14ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8711"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/c/scv002_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Seche&#x20;Vive&#x20;Instant&#x20;Gel&#x20;Effect&#x20;Top&#x20;Coat&#x20;14ml" /></span></span>
                                                    <style>
                                                        .product-image-container-8711 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8711 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="seche-vive-instant-gel-effect-top-coat-14ml.html">Seche
                                                            Vive Instant Gel Effect Top Coat 14ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8711" data-price-box="product-id-8711">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8711" data-price-amount="7.24"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£7.24</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="SCV002"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/8711/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8711"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC84NzExLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-pedipad-foot-file.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8976"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem011.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;PediPad&#x20;Foot&#x20;File" /></span></span>
                                                    <style>
                                                        .product-image-container-8976 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8976 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-pedipad-foot-file.html">The Edge PediPad
                                                            Foot File</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8976" data-price-box="product-id-8976">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8976" data-price-amount="1.44"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.44</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM011"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/8976/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8976"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC84OTc2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-straight-scissor.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10333"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem338.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Straight&#x20;Scissor" /></span></span>
                                                    <style>
                                                        .product-image-container-10333 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10333 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-straight-scissor.html">The Edge
                                                            Nails Straight Scissor</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10333" data-price-box="product-id-10333">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10333" data-price-amount="3.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£3.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM338"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10333/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10333"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDMzMy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="morgan-taylor-go-ahead-grow-nail-strengthener-growth-base-coat-15ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11003"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/t/mta060.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Morgan&#x20;Taylor&#x20;Go&#x20;Ahead&#x20;&amp;&#x20;Grow&#x20;Nail&#x20;Strengthener&#x20;Growth&#x20;Base&#x20;Coat&#x20;15ml" /></span></span>
                                                    <style>
                                                        .product-image-container-11003 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11003 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="morgan-taylor-go-ahead-grow-nail-strengthener-growth-base-coat-15ml.html">Morgan
                                                            Taylor Go Ahead &amp; Grow Nail Strengthener Growth Base
                                                            Coat 15ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11003" data-price-box="product-id-11003">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-11003" data-price-amount="12.35"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£12.35</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="MTA060"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/11003/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="11003"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMTAwMy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="morgan-taylor-bare-luxury-calm-lavender-sage-pedicure-manicure.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11101"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/m/t/mta165.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Morgan&#x20;Taylor&#x20;Bare&#x20;Luxury&#x20;Calm&#x20;Lavender&#x20;&amp;&#x20;Sage&#x20;Pedicure&#x20;&amp;&#x20;Manicure" /></span></span>
                                                    <style>
                                                        .product-image-container-11101 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11101 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="morgan-taylor-bare-luxury-calm-lavender-sage-pedicure-manicure.html">Morgan
                                                            Taylor Bare Luxury Calm Lavender &amp; Sage Pedicure
                                                            &amp; Manicure</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11101" data-price-box="product-id-11101">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-11101" data-price-amount="5.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="MTA165"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/11101/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="11101"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMTEwMS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="ardell-duralash-individuals-knot-free-triple-flares-medium-black.html"
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
                                                            href-data="ardell-duralash-individuals-knot-free-triple-flares-medium-black.html">Ardell
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/17595/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17595"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xNzU5NS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="seche-vite-dry-fast-top-coat-14ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8712"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/c/scv001_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Seche&#x20;Vite&#x20;Dry&#x20;Fast&#x20;Top&#x20;Coat&#x20;14ml" /></span></span>
                                                    <style>
                                                        .product-image-container-8712 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-8712 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="seche-vite-dry-fast-top-coat-14ml.html">Seche Vite
                                                            Dry Fast Top Coat 14ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8712" data-price-box="product-id-8712">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-8712" data-price-amount="7.24"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£7.24</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="SCV001"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/8712/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="8712"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC84NzEyLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-ultra-tips-x-100-assorted.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10108"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem101.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Ultra&#x20;Tips&#x20;x&#x20;100&#x20;Assorted" /></span></span>
                                                    <style>
                                                        .product-image-container-10108 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10108 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-ultra-tips-x-100-assorted.html">The
                                                            Edge Nails Ultra Tips x 100 Assorted</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10108" data-price-box="product-id-10108">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10108" data-price-amount="6.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£6.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM101"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10108/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10108"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDEwOC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-purple-sanding-block-60-100.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10305"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem306.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Purple&#x20;Sanding&#x20;Block&#x20;60&#x2F;100" /></span></span>
                                                    <style>
                                                        .product-image-container-10305 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10305 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-purple-sanding-block-60-100.html">The
                                                            Edge Nails Purple Sanding Block 60/100</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10305" data-price-box="product-id-10305">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10305" data-price-amount="4.13"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.13</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM306"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10305/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10305"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDMwNS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-acrylic-nail-brush-cleaner-100ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10436"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem369.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Acrylic&#x20;Nail&#x20;Brush&#x20;Cleaner&#x20;100ml" /></span></span>
                                                    <style>
                                                        .product-image-container-10436 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10436 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-acrylic-nail-brush-cleaner-100ml.html">The
                                                            Edge Nails Acrylic Nail Brush Cleaner 100ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10436" data-price-box="product-id-10436">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10436" data-price-amount="10.45"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£10.45</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM369"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10436/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10436"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDQzNi8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="kaeso-eye-cream-mallow-vitamin-e-30ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-14887"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/a/kae049.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kaeso&#x20;Eye&#x20;Cream&#x20;Mallow&#x20;&amp;&#x20;Vitamin&#x20;E&#x20;30ml" /></span></span>
                                                    <style>
                                                        .product-image-container-14887 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-14887 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="kaeso-eye-cream-mallow-vitamin-e-30ml.html">Kaeso
                                                            Eye Cream Mallow &amp; Vitamin E 30ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="14887" data-price-box="product-id-14887">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-14887" data-price-amount="5.34"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.34</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="KAE049"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/14887/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="14887"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xNDg4Ny8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="kaeso-beauty-calming-facial-exfoliator-mulberry-pomegranate-245ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-1666"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/a/kae025.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kaeso&#x20;Beauty&#x20;Calming&#x20;Facial&#x20;Exfoliator&#x20;Mulberry&#x20;&amp;&#x20;Pomegranate&#x20;245ml" /></span></span>
                                                    <style>
                                                        .product-image-container-1666 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-1666 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="kaeso-beauty-calming-facial-exfoliator-mulberry-pomegranate-245ml.html">Kaeso
                                                            Beauty Calming Facial Exfoliator Mulberry &amp;
                                                            Pomegranate 245ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="1666" data-price-box="product-id-1666">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-1666" data-price-amount="8.09"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£8.09</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="KAE025"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/1666/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="1666"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xNjY2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="power-tan-super-black-onyx-accelerator-250ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-4391"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/o/pot002_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Power&#x20;Tan&#x20;Super&#x20;Black&#x20;Onyx&#x20;Accelerator&#x20;250ml" /></span></span>
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
                                                            href-data="power-tan-super-black-onyx-accelerator-250ml.html">Power
                                                            Tan Super Black Onyx Accelerator 250ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="4391" data-price-box="product-id-4391">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-4391" data-price-amount="21"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£21.00</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="POT002"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/4391/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="4391"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC80MzkxLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="protan-summer-sweet-heart-dark-tanning-accelerator-280ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-9119"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prt017.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="ProTan&#x20;Summer&#x20;Sweet&#x20;Heart&#x20;Dark&#x20;Tanning&#x20;Accelerator&#x20;280ml" /></span></span>
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
                                                            href-data="protan-summer-sweet-heart-dark-tanning-accelerator-280ml.html">ProTan
                                                            Summer Sweet Heart Dark Tanning Accelerator
                                                            280ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="9119" data-price-box="product-id-9119">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-9119" data-price-amount="16.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£16.50</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="PRT017"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/9119/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="9119"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC85MTE5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-acrylic-powder-clear-40g.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10117"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem110.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Acrylic&#x20;Powder&#x20;Clear&#x20;40g" /></span></span>
                                                    <style>
                                                        .product-image-container-10117 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10117 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-acrylic-powder-clear-40g.html">The
                                                            Edge Nails Acrylic Powder Clear 40g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10117" data-price-box="product-id-10117">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10117" data-price-amount="13.18"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£13.18</span></span> </span>
                                                    </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM110"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10117/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10117"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDExNy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-warm-water-soak-off-bowl.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10123"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem116.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Warm&#x20;Water&#x20;Soak&#x20;Off&#x20;Bowl" /></span></span>
                                                    <style>
                                                        .product-image-container-10123 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10123 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-warm-water-soak-off-bowl.html">The
                                                            Edge Nails Warm Water Soak Off Bowl</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10123" data-price-box="product-id-10123">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10123" data-price-amount="6.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£6.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM116"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10123/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10123"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDEyMy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-stork-scissors-with-gold-plated-handles.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10311"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem312.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Stork&#x20;Scissors&#x20;With&#x20;Gold&#x20;Plated&#x20;Handles" /></span></span>
                                                    <style>
                                                        .product-image-container-10311 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10311 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-stork-scissors-with-gold-plated-handles.html">The
                                                            Edge Nails Stork Scissors With Gold Plated
                                                            Handles</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10311" data-price-box="product-id-10311">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10311" data-price-amount="9.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£9.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM312"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10311/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10311"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDMxMS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                                    href-data="the-edge-nails-duraboard-file-240-240.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10327"><span
                                                            class="product-image-wrapper"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/t/e/tem332.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The&#x20;Edge&#x20;Nails&#x20;Duraboard&#x20;FIle&#x20;240&#x2F;240" /></span></span>
                                                    <style>
                                                        .product-image-container-10327 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10327 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="the-edge-nails-duraboard-file-240-240.html">The
                                                            Edge Nails Duraboard FIle 240/240</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10327" data-price-box="product-id-10327">
                                                        <span
                                                            class="price-container price-final_price&#x20;tax&#x20;weee&#x20;rewards_earn">
                                                            <span id="product-price-10327" data-price-amount="1.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form"
                                                                    data-product-sku="TEM332"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS5odG1s/product/10327/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10327"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM1b2RHMXMvcHJvZHVjdC8xMDMyNy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="Q4MNdy08g6cEXrfY" /> <button
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
                                        data-mage-init='{"productListToolbarForm":{"mode":"product_list_mode","direction":"product_list_dir","order":"product_list_order","limit":"product_list_limit","modeDefault":"grid","directionDefault":"desc","orderDefault":"bestsellers","limitDefault":36,"url":"https:\/\/www.salonwholesale.com\/beauty.html","formKey":"Q4MNdy08g6cEXrfY","post":false}}'>
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'beauty9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'beautye63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'beauty0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'beauty4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'beautybc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href-data="#"
                                                                    onclick="window.location = 'beauty5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                <li class="item"><a href-data="beauty905b.html?p=2" class="page"><span
                                                            class="label">Page</span> <span>2</span></a></li>
                                                <li class="item"><a href-data="beauty2207.html?p=3" class="page"><span
                                                            class="label">Page</span> <span>3</span></a></li>
                                                <li class="item"><a href-data="beauty5c7e.html?p=4" class="page"><span
                                                            class="label">Page</span> <span>4</span></a></li>
                                                <li class="item"><a href-data="beautyc471.html?p=5" class="page"><span
                                                            class="label">Page</span> <span>5</span></a></li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href-data="beauty905b.html?p=2" title="Next"><span
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
                                           Beautyfrom renowned brands such as, Wella, Goldwell, Fanola and Serie
                                            Expert. At emerch junction ourBeautyoffer a vast array of uses
                                            including straightening, moisturising, curl defining, anti-dandruff and
                                            much more. Available in both retail and professional sizes so you can
                                            have a diverse Beauty collection that guarantees healthy, happy hair.
                                            Our hair care products help to reduce frizz, are greta for hydrating,
                                            volumizing or moisturizing the hair, and its perfect for all hair types
                                            whether that is dry hair, curly hair, fine hair, hair loss,
                                            color-treated hair, hair with a lot of breakage, itchy scalps and so
                                            many other hair types. We have a selection of dry Beauty, repair
                                            Beauty, moisturizing Beauty, anti-dandruff Beauty,
                                            volumizing
                                            Beauty, thickening Beauty, moisturie Beauty, tea tree
                                            special
                                            Beauty, and we even have a small selection of argan oil Beauty. We
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
