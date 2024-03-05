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
                                    data-ui-id="page-title-wrapper">Essential</span></h1>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/essentials.html&quot;,&quot;formKey&quot;:&quot;aSWAKNvOkAsBdc6F&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentials9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentialse63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentials0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentials4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentialsbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentials5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                <li class="item"><a href="essentials905b.html?p=2" class="page"><span
                                                            class="label">Page</span> <span>2</span></a></li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href="essentials905b.html?p=2" title="Next"><span
                                                            class="label">Page</span> <span>Next</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="products-grid">
                                    <div class="row">
                                        <div class="product-item col-xs-12 col-md-3 col-sm-6">
                                            <div class="product-item-info" data-container="product-grid"> <a
                                                    href-data="../flairosol-fine-mist-bottle-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-8846"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/l/flr004.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Flairosol Fine Mist Spray Bottle Black 300ml"></span></span>
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
                                                            href-data="../flairosol-fine-mist-bottle-black.html">Flairosol Fine
                                                            Mist Spray Bottle Black 300ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="8846" data-price-box="product-id-8846"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-8846" data-price-amount="12.23"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.23</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="FLR004"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/8846/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="8846"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC84ODQ2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../flairosol-fine-mist-bottle-black-1.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16960"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/l/flr007.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Flairosol Fine Mist Bottle Black 185ml"></span></span>
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
                                                            href-data="../flairosol-fine-mist-bottle-black-1.html">Flairosol
                                                            Fine Mist Bottle Black 185ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16960" data-price-box="product-id-16960"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16960" data-price-amount="3.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£3.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="FLR007"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/16960/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16960"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xNjk2MC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../flairosol-fine-mist-white-spray-bottle-300ml-1.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16958"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/f/l/flr005.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Flairosol Fine Mist White Spray Bottle 185ml"></span></span>
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
                                                            href-data="../flairosol-fine-mist-white-spray-bottle-300ml-1.html">Flairosol
                                                            Fine Mist White Spray Bottle 185ml</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16958" data-price-box="product-id-16958"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16958" data-price-amount="3.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£3.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="FLR005"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/16958/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16958"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xNjk1OC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/5054/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="5054"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC81MDU0Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../agenda-white-poly-aprons-dispenser-flat-pack.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16201"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/g/agn143.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="AGENDA White Disposable Flat Pack Aprons (Pack of 100)"></span></span>
                                                    <style>
                                                        .product-image-container-16201 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16201 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../agenda-white-poly-aprons-dispenser-flat-pack.html">AGENDA
                                                            White Disposable Flat Pack Aprons (Pack of 100)</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16201" data-price-box="product-id-16201"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16201" data-price-amount="3.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AGN143"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/16201/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16201"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xNjIwMS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../agenda-salon-concepts-ltd-barber-denim-apron.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17007"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/g/agn199.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Barber Loco Denim Apron"></span></span>
                                                    <style>
                                                        .product-image-container-17007 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17007 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../agenda-salon-concepts-ltd-barber-denim-apron.html">Barber
                                                            Loco Denim Apron</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17007" data-price-box="product-id-17007"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17007" data-price-amount="18.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£18.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AGN199"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/17007/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17007"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xNzAwNy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../dmi-colouring-board-with-teeth-medium-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12966"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi009.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Colouring Board with Teeth Medium - Black"></span></span>
                                                    <style>
                                                        .product-image-container-12966 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12966 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-colouring-board-with-teeth-medium-black.html">DMI
                                                            Colouring Board with Teeth Medium - Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12966" data-price-box="product-id-12966"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12966" data-price-amount="2.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£2.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI009"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/12966/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12966"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMjk2Ni8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../dmi-elastic-bands-x-250-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12990"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi034.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Elastic Bands x 250 - Black"></span></span>
                                                    <style>
                                                        .product-image-container-12990 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12990 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-elastic-bands-x-250-black.html">DMI Elastic Bands
                                                            x 250 - Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12990" data-price-box="product-id-12990"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12990" data-price-amount="5.9"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.90</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI034"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/12990/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12990"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMjk5MC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../dmi-unisex-barber-apron-rustic-brown.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13154"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi002.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Unisex Barber Apron - Rustic Brown"></span></span>
                                                    <style>
                                                        .product-image-container-13154 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13154 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-unisex-barber-apron-rustic-brown.html">DMI Unisex
                                                            Barber Apron - Rustic Brown</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13154" data-price-box="product-id-13154"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13154" data-price-amount="12.11"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.11</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI002"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/13154/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13154"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMzE1NC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../kodo-box-of-elastic-bands-x-750-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13017"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/o/kod012.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kodo Box of Elastic Bands x 750 - Black"></span></span>
                                                    <style>
                                                        .product-image-container-13017 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13017 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../kodo-box-of-elastic-bands-x-750-black.html">Kodo Box
                                                            of Elastic Bands x 750 - Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13017" data-price-box="product-id-13017"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13017" data-price-amount="7"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£7.00</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="KOD012"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/13017/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="13017"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMzAxNy8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../dmi-balayage-board-large-wide-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12964"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi007.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Balayage Board Large Wide - Black"></span></span>
                                                    <style>
                                                        .product-image-container-12964 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12964 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-balayage-board-large-wide-black.html">DMI Balayage
                                                            Board Large Wide - Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12964" data-price-box="product-id-12964"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12964" data-price-amount="6.06"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.06</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI007"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/12964/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12964"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMjk2NC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../dmi-cube-scissor-holder-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12994"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi038.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Cube Scissor Holder - Black"></span></span>
                                                    <style>
                                                        .product-image-container-12994 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12994 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-cube-scissor-holder-black.html">DMI Cube Scissor
                                                            Holder - Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12994" data-price-box="product-id-12994"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12994" data-price-amount="14.83"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£14.83</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI038"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/12994/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12994"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMjk5NC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10475/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10475"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ3NS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../dmi-balayage-board-small-wide-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-15968"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi010.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Balayage Board Small Wide - Black"></span></span>
                                                    <style>
                                                        .product-image-container-15968 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-15968 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-balayage-board-small-wide-black.html">DMI Balayage
                                                            Board Small Wide - Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="15968" data-price-box="product-id-15968"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-15968" data-price-amount="1.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI010"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/15968/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="15968"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xNTk2OC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../kodo-360-mist-spray-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-16070"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/k/o/kod073.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Kodo 360 Mist Spray Black"></span></span>
                                                    <style>
                                                        .product-image-container-16070 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-16070 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../kodo-360-mist-spray-black.html">Kodo 360 Mist Spray
                                                            Black </a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="16070" data-price-box="product-id-16070"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-16070" data-price-amount="4.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="KOD073"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/16070/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="16070"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xNjA3MC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../get-a-grip-black-hair-grips-brown-250.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-9439"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/g/agn077.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Get a Grip Black Hair Grips Brown 250"></span></span>
                                                    <style>
                                                        .product-image-container-9439 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-9439 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../get-a-grip-black-hair-grips-brown-250.html">Get a Grip
                                                            Black Hair Grips Brown 250</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="9439" data-price-box="product-id-9439"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-9439" data-price-amount="5.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AGN077"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/9439/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="9439"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC85NDM5Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../dmi-curved-balayage-board-large-wide-black.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-12963"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi006.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Curved Balayage Board Large Wide - Black"></span></span>
                                                    <style>
                                                        .product-image-container-12963 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-12963 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-curved-balayage-board-large-wide-black.html">DMI
                                                            Curved Balayage Board Large Wide - Black</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="12963" data-price-box="product-id-12963"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-12963" data-price-amount="3.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="DMI006"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/12963/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="12963"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMjk2My8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../babyliss-cryogenic-ceramic-replacement-comb-0-2mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10468"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/a/bab064.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="BaByliss Cryogenic Ceramic Replacement Comb 0.2mm"></span></span>
                                                    <style>
                                                        .product-image-container-10468 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10468 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../babyliss-cryogenic-ceramic-replacement-comb-0-2mm.html">BaByliss
                                                            Cryogenic Ceramic Replacement Comb 0.2mm</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10468" data-price-box="product-id-10468"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10468" data-price-amount="12.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB064"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10468/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="10468"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ2OC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
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
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB074"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10478/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10478"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ3OC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../dmi-spiral-dryer-holder-wall-mounted-chrome.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-13799"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/d/m/dmi055.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="DMI Spiral Dryer Holder Wall Mounted - Chrome"></span></span>
                                                    <style>
                                                        .product-image-container-13799 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-13799 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../dmi-spiral-dryer-holder-wall-mounted-chrome.html">DMI
                                                            Spiral Dryer Holder Wall Mounted - Chrome</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="13799" data-price-box="product-id-13799"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-13799" data-price-amount="12.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£12.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="dmi055"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/13799/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="13799"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMzc5OS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-22mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10455"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
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
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB054"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10455/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10455"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ1NS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../babyliss-replacement-comb-25mm.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10457"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
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
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£1.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB056"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10457/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10457"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ1Ny8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
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
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£18.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="BAB068"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10472/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10472"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ3Mi8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../hairtools-bun-roll-brown.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11536"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/t/hto048.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hairtools Medium Bun Roll"></span></span>
                                                    <style>
                                                        .product-image-container-11536 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11536 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hairtools-bun-roll-brown.html">Hairtools Medium Bun
                                                            Roll</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11536" data-price-box="product-id-11536"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-11536" data-price-amount="4.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£4.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="HTO048"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/11536/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="11536"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMTUzNi8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../barber-loco-denim-back-mirror.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17087"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/b/l/bl-dbm-001-1_prev_ui.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Barber Loco Denim Back Mirror"></span></span>
                                                    <style>
                                                        .product-image-container-17087 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17087 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../barber-loco-denim-back-mirror.html">Barber Loco Denim
                                                            Back Mirror</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17087" data-price-box="product-id-17087"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17087" data-price-amount="16.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£16.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="LOC008"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/17087/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17087"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xNzA4Ny8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                    href-data="../the-shave-factory-scissor-holder.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17400"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/s/h/shf032.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="The Shave Factory Scissor Holder"></span></span>
                                                    <style>
                                                        .product-image-container-17400 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17400 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../the-shave-factory-scissor-holder.html">The Shave
                                                            Factory Scissor Holder</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17400" data-price-box="product-id-17400"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17400" data-price-amount="6.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£6.50</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="SHF032"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/17400/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="17400"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xNzQwMC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10464/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10464"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ2NC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10465/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10465"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ2NS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10466/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10466"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ2Ni8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10467/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10467"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ2Ny8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10470/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10470"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ3MC8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10471/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10471"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ3MS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10473/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10473"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ3My8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10479/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10479"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ3OS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10481/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10481"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ4MS8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2hhaXIvZXNzZW50aWFscy5odG1s/product/10482/"
                                                                    method="post"><input type="hidden"
                                                                        name="product" value="10482"><input
                                                                        type="hidden" name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwyaGhhWEl2WlhOelpXNTBhV0ZzY3k1b2RHMXMvcHJvZHVjdC8xMDQ4Mi8~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="aSWAKNvOkAsBdc6F"> <button type="button"
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/hair\/essentials.html&quot;,&quot;formKey&quot;:&quot;aSWAKNvOkAsBdc6F&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentials9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentialse63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentials0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentials4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentialsbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'essentials5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                <li class="item"><a href="essentials905b.html?p=2"
                                                        class="page"><span class="label">Page</span>
                                                        <span>2</span></a></li>
                                                <li class="item pages-item-next"> <a class="action  next"
                                                        href="essentials905b.html?p=2" title="Next"><span
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
                                            essentials from renowned brands such as, Wella, Goldwell, Fanola and Serie
                                            Expert. At emerch junction our essentials offer a vast array of uses
                                            including straightening, moisturising, curl defining, anti-dandruff and
                                            much more. Available in both retail and professional sizes so you can
                                            have a diverse essential collection that guarantees healthy, happy hair.
                                            Our hair care products help to reduce frizz, are greta for hydrating,
                                            volumizing or moisturizing the hair, and its perfect for all hair types
                                            whether that is dry hair, curly hair, fine hair, hair loss,
                                            color-treated hair, hair with a lot of breakage, itchy scalps and so
                                            many other hair types. We have a selection of dry essential, repair
                                            essential, moisturizing essential, anti-dandruff essential,
                                            volumizing
                                            essential, thickening essential, moisturie essential, tea tree
                                            special
                                            essential, and we even have a small selection of argan oil essential. We
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
