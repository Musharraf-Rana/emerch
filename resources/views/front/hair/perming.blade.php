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
                                    data-ui-id="page-title-wrapper">Perming</span></h1>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/perming.html&quot;,&quot;formKey&quot;:&quot;zdtwFe35QiXKBFja&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'perming9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'perminge63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'perming0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'perming4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'permingbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'perming5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                    href-data="../dmi-deluxe-perm-rods-brick-red.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12976"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi020.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Deluxe Perm Rods - Brick Red"></span></span>
                                                    <style>
                                                        .product-image-container-12976 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12976 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-deluxe-perm-rods-brick-red.html">DMI Deluxe Perm
                                                            Rods - Brick Red</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12976" data-price-box="product-id-12976"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12976" data-price-amount="4.68"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.68</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI020"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/12976/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12976"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEyOTc2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../dmi-deluxe-perm-rods-grey.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12969"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi013.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Deluxe Perm Rods - Grey"></span></span>
                                                    <style>
                                                        .product-image-container-12969 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12969 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-deluxe-perm-rods-grey.html">DMI Deluxe Perm Rods -
                                                            Grey</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12969" data-price-box="product-id-12969"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12969" data-price-amount="5.13"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.13</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI013"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/12969/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12969"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEyOTY5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../dmi-deluxe-perm-rods-green.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12975"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi019.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Deluxe Perm Rods - Green"></span></span>
                                                    <style>
                                                        .product-image-container-12975 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12975 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-deluxe-perm-rods-green.html">DMI Deluxe Perm Rods
                                                            - Green</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12975" data-price-box="product-id-12975"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12975" data-price-amount="5.45"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.45</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI019"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/12975/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12975"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEyOTc1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../dmi-deluxe-perm-rods-orange.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12971"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi015.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Deluxe Perm Rods - Orange"></span></span>
                                                    <style>
                                                        .product-image-container-12971 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12971 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-deluxe-perm-rods-orange.html">DMI Deluxe Perm Rods
                                                            - Orange</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12971" data-price-box="product-id-12971"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12971" data-price-amount="5.45"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.45</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI015"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/12971/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12971"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEyOTcxLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../kadus-neutralizer-1000ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17075"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/a/kad279.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kadus Neutralizer 1000ml"></span></span>
                                                    <style>
                                                        .product-image-container-17075 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17075 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../kadus-neutralizer-1000ml.html">Kadus Neutralizer
                                                            1000ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17075" data-price-box="product-id-17075"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17075" data-price-amount="4.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="KAD279"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/17075/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17075"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzE3MDc1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../dmi-deluxe-perm-rods-yellow.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12972"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi016.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Deluxe Perm Rods - Yellow"></span></span>
                                                    <style>
                                                        .product-image-container-12972 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12972 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-deluxe-perm-rods-yellow.html">DMI Deluxe Perm Rods
                                                            - Yellow</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12972" data-price-box="product-id-12972"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12972" data-price-amount="4.93"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.93</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI016"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/12972/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12972"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEyOTcyLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../proclere-impression-perm-normal-1-litre.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16126"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prc017.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Proclere Impression Perming Lotion For Normal Hair &amp; Neutraliser 1000ml"></span></span>
                                                    <style>
                                                        .product-image-container-16126 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16126 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../proclere-impression-perm-normal-1-litre.html">Proclere
                                                            Impression Perming Lotion For Normal Hair &amp; Neutraliser
                                                            1000ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16126" data-price-box="product-id-16126"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16126" data-price-amount="18.69"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£18.69</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="PRC017"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/16126/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16126"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzE2MTI2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../dmi-deluxe-perm-rods-white.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12974"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi018.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Deluxe Perm Rods - White"></span></span>
                                                    <style>
                                                        .product-image-container-12974 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12974 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-deluxe-perm-rods-white.html">DMI Deluxe Perm Rods
                                                            - White</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12974" data-price-box="product-id-12974"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12974" data-price-amount="4.81"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.81</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI018"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/12974/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12974"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEyOTc0Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../wella-professionals-creatine-straight-c-200ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13647"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/e/wel155.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wella Professionals Creatine+ Straight (C) 200ml"></span></span>
                                                    <style>
                                                        .product-image-container-13647 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13647 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wella-professionals-creatine-straight-c-200ml.html">Wella
                                                            Professionals Creatine+ Straight (C) 200ml </a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13647" data-price-box="product-id-13647"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13647" data-price-amount="15.17"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£15.17</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WEL155"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/13647/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13647"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEzNjQ3Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../dmi-spare-flips-short-round-rb4.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12985"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi029.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Spare Flips Short Round - RB4"></span></span>
                                                    <style>
                                                        .product-image-container-12985 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12985 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-spare-flips-short-round-rb4.html">DMI Spare Flips
                                                            Short Round - RB4</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12985" data-price-box="product-id-12985"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12985" data-price-amount="1.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI029"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/12985/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12985"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEyOTg1Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../wella-professionals-creatine-curl-c.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13783"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/e/wel157.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wella Professionals Creatine+ Curl (C)"></span></span>
                                                    <style>
                                                        .product-image-container-13783 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13783 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wella-professionals-creatine-curl-c.html">Wella
                                                            Professionals Creatine+ Curl (C) </a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13783" data-price-box="product-id-13783"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13783" data-price-amount="7.1"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£7.10</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WEL157"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/13783/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13783"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEzNzgzLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../dmi-spare-flips-long-flat-rb1.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12982"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi026.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Spare Flips Long Flat - RB1 x 50pc"></span></span>
                                                    <style>
                                                        .product-image-container-12982 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12982 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-spare-flips-long-flat-rb1.html">DMI Spare Flips
                                                            Long Flat - RB1 x 50pc</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12982" data-price-box="product-id-12982"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12982" data-price-amount="6.9"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI026"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/12982/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12982"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEyOTgyLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../dmi-spare-flips-short-flat-rb2.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12983"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi027.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Spare Flips Short Flat - RB2"></span></span>
                                                    <style>
                                                        .product-image-container-12983 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12983 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-spare-flips-short-flat-rb2.html">DMI Spare Flips
                                                            Short Flat - RB2</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12983" data-price-box="product-id-12983"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12983" data-price-amount="1.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI027"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/12983/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12983"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzEyOTgzLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../wella-creatine-wave-n-kit.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-14133"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/e/wel159.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wella Creatine+ Wave (N) Kit"></span></span>
                                                    <style>
                                                        .product-image-container-14133 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-14133 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wella-creatine-wave-n-kit.html">Wella Creatine+ Wave
                                                            (N) Kit</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="14133" data-price-box="product-id-14133"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-14133" data-price-amount="7.08"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£7.08</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="WEL159"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/14133/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="14133"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzE0MTMzLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../proclere-impression-perm-tinted-1-litre.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16127"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/p/r/prc018.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Proclere Impression Perming Lotion For Tinted Hair &amp; Neutraliser 1000ml"></span></span>
                                                    <style>
                                                        .product-image-container-16127 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16127 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../proclere-impression-perm-tinted-1-litre.html">Proclere
                                                            Impression Perming Lotion For Tinted Hair &amp; Neutraliser
                                                            1000ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16127" data-price-box="product-id-16127"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16127" data-price-amount="18.69"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£18.69</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="PRC018"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/16127/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16127"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzE2MTI3Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../catalog/product/view/id/18536/s/goldwell-system-end-paper-500-pack-x2/category/9576/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-18536"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol546.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell System End Paper 500 Pack x2"></span></span>
                                                    <style>
                                                        .product-image-container-18536 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-18536 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../catalog/product/view/id/18536/s/goldwell-system-end-paper-500-pack-x2/category/9576/index.html">Goldwell
                                                            System End Paper 500 Pack x2</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="18536" data-price-box="product-id-18536"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-18536" data-price-amount="6.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL546"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/18536/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="18536"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzE4NTM2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../catalog/product/view/id/18541/s/goldwell-evolution-neutral-wave-0-non-chemically-treated-resistant-hair-base-lotion-60ml/category/9576/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-18541"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol551.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Evolution Neutral Wave 0 Non-Chemically Treated Resistant Hair Base Lotion 60ml"></span></span>
                                                    <style>
                                                        .product-image-container-18541 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-18541 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../catalog/product/view/id/18541/s/goldwell-evolution-neutral-wave-0-non-chemically-treated-resistant-hair-base-lotion-60ml/category/9576/index.html">Goldwell
                                                            Evolution Neutral Wave 0 Non-Chemically Treated Resistant Hair
                                                            Base Lotion 60ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="18541" data-price-box="product-id-18541"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-18541" data-price-amount="13.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£13.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL551"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/18541/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="18541"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzE4NTQxLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../catalog/product/view/id/18542/s/goldwell-evolution-neutral-wave-1-set-60ml/category/9576/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-18542"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol552.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Evolution Neutral Wave 1 Set 60ml"></span></span>
                                                    <style>
                                                        .product-image-container-18542 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-18542 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../catalog/product/view/id/18542/s/goldwell-evolution-neutral-wave-1-set-60ml/category/9576/index.html">Goldwell
                                                            Evolution Neutral Wave 1 Set 60ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="18542" data-price-box="product-id-18542"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-18542" data-price-amount="13.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£13.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL552"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/18542/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="18542"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzE4NTQyLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../catalog/product/view/id/18543/s/goldwell-evolution-neutral-wave-2-set-60ml/category/9576/index.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-18543"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/g/o/gol553.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Goldwell Evolution Neutral Wave 2 Set 60ml"></span></span>
                                                    <style>
                                                        .product-image-container-18543 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-18543 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../catalog/product/view/id/18543/s/goldwell-evolution-neutral-wave-2-set-60ml/category/9576/index.html">Goldwell
                                                            Evolution Neutral Wave 2 Set 60ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="18543" data-price-box="product-id-18543"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-18543" data-price-amount="13.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£13.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="GOL553"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvcGVybWluZy5odG1s/product/18543/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="18543"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2Y0dWeWJXbHVaeTVvZEcxcy9wcm9kdWN0LzE4NTQzLw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="zdtwFe35QiXKBFja"> <button type="button"
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
                                                    href-data="../dmi-deluxe-perm-rods-blue.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12970"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi014.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Deluxe Perm Rods - Blue"></span></span>
                                                    <style>
                                                        .product-image-container-12970 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12970 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-deluxe-perm-rods-blue.html">DMI Deluxe Perm Rods
                                                            - Blue</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12970" data-price-box="product-id-12970"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12970" data-price-amount="5.01"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.01</span></span> </span> </div>
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
                                                    href-data="../dmi-deluxe-perm-rods-pink.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12973"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi017.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Deluxe Perm Rods - Pink"></span></span>
                                                    <style>
                                                        .product-image-container-12973 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12973 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-deluxe-perm-rods-pink.html">DMI Deluxe Perm Rods
                                                            - Pink</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12973" data-price-box="product-id-12973"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12973" data-price-amount="4.85"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.85</span></span> </span> </div>
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
                                                    href-data="../wella-creatine-curl-n-kit.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13646"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/e/wel154.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wella Creatine+ Curl (N) Kit"></span></span>
                                                    <style>
                                                        .product-image-container-13646 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13646 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wella-creatine-curl-n-kit.html">Wella Creatine+ Curl
                                                            (N) Kit</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13646" data-price-box="product-id-13646"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13646" data-price-amount="7.1"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£7.10</span></span> </span> </div>
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
                                                    href-data="../wella-professionals-creatine-straight-h-200ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13577"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/e/wel156_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wella Professionals Creatine+ Straight (H) 200ml"></span></span>
                                                    <style>
                                                        .product-image-container-13577 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13577 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wella-professionals-creatine-straight-h-200ml.html">Wella
                                                            Professionals Creatine+ Straight (H) 200ml </a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13577" data-price-box="product-id-13577"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13577" data-price-amount="15"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£15.00</span></span> </span> </div>
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
                                                    href-data="../dmi-spare-flips-long-round-rb3.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12984"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi028.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Spare Flips Long Round - RB3"></span></span>
                                                    <style>
                                                        .product-image-container-12984 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12984 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-spare-flips-long-round-rb3.html">DMI Spare Flips
                                                            Long Round - RB3</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12984" data-price-box="product-id-12984"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12984" data-price-amount="5.9"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£5.90</span></span> </span> </div>
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
                                                    href-data="../kadus-curl-coloured-hair-perm-lotion-1000ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17076"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/a/kad280.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kadus Curl Coloured Hair Perm Lotion 1000ml"></span></span>
                                                    <style>
                                                        .product-image-container-17076 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17076 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../kadus-curl-coloured-hair-perm-lotion-1000ml.html">Kadus
                                                            Curl Coloured Hair Perm Lotion 1000ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17076" data-price-box="product-id-17076"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17076" data-price-amount="14.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£14.50</span></span> </span> </div>
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
                                                    href-data="../wella-creatine-straight-200ml.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13576"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/w/e/wel153.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Wella Professionals Shinefinity Comb"></span></span>
                                                    <style>
                                                        .product-image-container-13576 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13576 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../wella-creatine-straight-200ml.html">Wella
                                                            Professionals Shinefinity Comb</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13576" data-price-box="product-id-13576"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13576" data-price-amount="15"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£15.00</span></span> </span> </div>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/perming.html&quot;,&quot;formKey&quot;:&quot;zdtwFe35QiXKBFja&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'perming9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'perminge63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'perming0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'perming4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'permingbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'perming5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                            Perming from renowned brands such as, Wella, Goldwell, Fanola and Serie
                                            Expert. At emerch junction our Perming offer a vast array of uses
                                            including straightening, moisturising, curl defining, anti-dandruff and
                                            much more. Available in both retail and professional sizes so you can
                                            have a diverse Perming collection that guarantees healthy, happy hair.
                                            Our hair care products help to reduce frizz, are greta for hydrating,
                                            volumizing or moisturizing the hair, and its perfect for all hair types
                                            whether that is dry hair, curly hair, fine hair, hair loss,
                                            color-treated hair, hair with a lot of breakage, itchy scalps and so
                                            many other hair types. We have a selection of dry Perming, repair
                                            Perming, moisturizing Perming, anti-dandruff Perming,
                                            volumizing
                                            Perming, thickening Perming, moisturie Perming, tea tree
                                            special
                                            Perming, and we even have a small selection of argan oil Perming. We
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
