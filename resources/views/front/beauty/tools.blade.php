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
                                    data-ui-id="page-title-wrapper">Beauty tools</span></h1>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/beauty\/tools.html&quot;,&quot;formKey&quot;:&quot;tZbjXExAn9kdTbux&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tools9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'toolse63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tools0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tools4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'toolsbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'tools5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                                    href-data="../agenda-disposable-face-protector-50pcs.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-17596"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/a/g/agn217.jpg"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Agenda Disposable Face Protector (50pcs)"></span></span>
                                                    <style>
                                                        .product-image-container-17596 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-17596 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../agenda-disposable-face-protector-50pcs.html">Agenda
                                                            Disposable Face Protector (50pcs)</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="17596" data-price-box="product-id-17596"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-17596" data-price-amount="5.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.95</span></span> </span> </div>
                                                    <div class="product-item-inner">
                                                        <div class="product actions product-item-actions">
                                                            <div class="actions-primary">
                                                                <form data-role="tocart-form" data-product-sku="AGN217"
                                                                    action="https://www.salonwholesale.com/checkout/cart/add/uenc/aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2JlYXV0eS90b29scy5odG1s/product/17596/"
                                                                    method="post"><input type="hidden" name="product"
                                                                        value="17596"><input type="hidden"
                                                                        name="uenc"
                                                                        value="aHR0cHM6Ly93d3cuc2Fsb253aG9sZXNhbGUuY29tL2NoZWNrb3V0L2NhcnQvYWRkL3VlbmMvYUhSMGNITTZMeTkzZDNjdWMyRnNiMjUzYUc5c1pYTmhiR1V1WTI5dEwySmxZWFYwZVM5MGIyOXNjeTVvZEcxcy9wcm9kdWN0LzE3NTk2Lw~~"><input
                                                                        name="form_key" type="hidden"
                                                                        value="tZbjXExAn9kdTbux"> <button type="button"
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
                                                    href-data="../hydrea-london-classic-natural-bristle-long-handle-body-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7825"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd009.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Classic Natural Bristle Long Handle Body Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7825 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7825 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-classic-natural-bristle-long-handle-body-brush.html">Hydrea
                                                            London Classic Natural Bristle Long Handle Body
                                                            Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7825" data-price-box="product-id-7825"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7825" data-price-amount="8.49"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£8.49</span></span> </span> </div>
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
                                                    href-data="../hydrea-waffle-cotton-spa-head-band.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11280"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd074.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Waffle Cotton Spa Head Band"></span></span>
                                                    <style>
                                                        .product-image-container-11280 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11280 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-waffle-cotton-spa-head-band.html">Hydrea Waffle
                                                            Cotton Spa Head Band</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11280" data-price-box="product-id-11280"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-11280" data-price-amount="6.49"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.49</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-cactus-bristle-long-handle-dry-skin-body-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7819"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd003.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Cactus Bristle Long Handle Dry Skin Body Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7819 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7819 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-cactus-bristle-long-handle-dry-skin-body-brush.html">Hydrea
                                                            London Cactus Bristle Long Handle Dry Skin Body
                                                            Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7819" data-price-box="product-id-7819"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7819" data-price-amount="13.59"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£13.59</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-wooden-nail-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7830"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd015.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Wooden Nail Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7830 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7830 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-wooden-nail-brush.html">Hydrea London
                                                            Wooden Nail Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7830" data-price-box="product-id-7830"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7830" data-price-amount="3.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£3.50</span></span> </span> </div>
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
                                                    href-data="../hydrea-bamboo-bodycare-head-band.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7859"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd044.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Bamboo Bodycare Head Band"></span></span>
                                                    <style>
                                                        .product-image-container-7859 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7859 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-bamboo-bodycare-head-band.html">Hydrea Bamboo
                                                            Bodycare Head Band</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7859" data-price-box="product-id-7859"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7859" data-price-amount="5.94"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.94</span></span> </span> </div>
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
                                                    href-data="../hydrea-bamboo-bodycare-hair-drying-towel-wrap.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7861"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd046.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Bamboo Bodycare Hair Drying Towel Wrap"></span></span>
                                                    <style>
                                                        .product-image-container-7861 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7861 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-bamboo-bodycare-hair-drying-towel-wrap.html">Hydrea
                                                            Bamboo Bodycare Hair Drying Towel Wrap</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7861" data-price-box="product-id-7861"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7861" data-price-amount="10.62"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.62</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-cactus-bristle-dry-body-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7824"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd008.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Cactus Bristle Dry Body Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7824 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7824 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-cactus-bristle-dry-body-brush.html">Hydrea
                                                            London Cactus Bristle Dry Body Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7824" data-price-box="product-id-7824"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7824" data-price-amount="13"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£13.00</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-cactus-bristle-dry-skin-sauna-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7826"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd010.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Cactus Bristle Dry Skin Sauna Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7826 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7826 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-cactus-bristle-dry-skin-sauna-brush.html">Hydrea
                                                            London Cactus Bristle Dry Skin Sauna Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7826" data-price-box="product-id-7826"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7826" data-price-amount="11.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£11.95</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-natural-bristle-extra-long-back-scratcher.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7828"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd012.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Natural Bristle Extra Long Back Scratcher"></span></span>
                                                    <style>
                                                        .product-image-container-7828 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7828 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-natural-bristle-extra-long-back-scratcher.html">Hydrea
                                                            London Natural Bristle Extra Long Back Scratcher</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7828" data-price-box="product-id-7828"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7828" data-price-amount="13.65"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£13.65</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-cactus-bristles-nail-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7831"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd016.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Cactus Bristles Nail Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7831 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7831 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-cactus-bristles-nail-brush.html">Hydrea
                                                            London Cactus Bristles Nail Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7831" data-price-box="product-id-7831"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7831" data-price-amount="3.96"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£3.96</span></span> </span> </div>
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
                                                    href-data="../hydrea-bamboo-loofah-sponge.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7843"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd028.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Bamboo &amp; Loofah Sponge"></span></span>
                                                    <style>
                                                        .product-image-container-7843 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7843 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-bamboo-loofah-sponge.html">Hydrea Bamboo &amp;
                                                            Loofah Sponge</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7843" data-price-box="product-id-7843"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7843" data-price-amount="6.49"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.49</span></span> </span> </div>
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
                                                    href-data="../hydrea-egyptian-loofah-exfoliating-body-pad.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7856"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd041.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Egyptian Loofah Exfoliating Body Pad"></span></span>
                                                    <style>
                                                        .product-image-container-7856 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7856 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-egyptian-loofah-exfoliating-body-pad.html">Hydrea
                                                            Egyptian Loofah Exfoliating Body Pad</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7856" data-price-box="product-id-7856"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7856" data-price-amount="4.99"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£4.99</span></span> </span> </div>
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
                                                    href-data="../hydrea-bamboo-round-body-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7862"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd047.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Bamboo Round Body Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7862 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7862 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-bamboo-round-body-brush.html">Hydrea Bamboo
                                                            Round Body Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7862" data-price-box="product-id-7862"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7862" data-price-amount="9.36"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£9.36</span></span> </span> </div>
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
                                                    href-data="../hydrea-bamboo-body-care-bamboo-loofah-back-strap.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7870"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd056.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Bamboo Body Care Bamboo &amp; Loofah Back Strap"></span></span>
                                                    <style>
                                                        .product-image-container-7870 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7870 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-bamboo-body-care-bamboo-loofah-back-strap.html">Hydrea
                                                            Bamboo Body Care Bamboo &amp; Loofah Back Strap</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7870" data-price-box="product-id-7870"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7870" data-price-amount="10"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£10.00</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-facial-brush-with-pony-bristle.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10681"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd062_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Facial Brush with Pony Bristle"></span></span>
                                                    <style>
                                                        .product-image-container-10681 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10681 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-facial-brush-with-pony-bristle.html">Hydrea
                                                            London Facial Brush with Pony Bristle</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10681" data-price-box="product-id-10681"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10681" data-price-amount="6.4"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.40</span></span> </span> </div>
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
                                                    href-data="../hydrea-olive-wood-cushion-hair-brush-with-pure-boar-bristles.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11274"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd068.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Olive Wood Cushion Hair Brush With Pure Boar Bristles"></span></span>
                                                    <style>
                                                        .product-image-container-11274 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11274 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-olive-wood-cushion-hair-brush-with-pure-boar-bristles.html">Hydrea
                                                            Olive Wood Cushion Hair Brush With Pure Boar
                                                            Bristles</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11274" data-price-box="product-id-11274"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-11274" data-price-amount="31.95"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£31.95</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-natural-bristle-long-handle-body-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7817"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd001_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Natural Bristle Long Handle Body Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7817 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7817 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-natural-bristle-long-handle-body-brush.html">Hydrea
                                                            London Natural Bristle Long Handle Body Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7817" data-price-box="product-id-7817"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7817" data-price-amount="15.12"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£15.12</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-natural-bristle-body-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7818"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd002.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Natural Bristle Body Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7818 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7818 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-natural-bristle-body-brush.html">Hydrea
                                                            London Natural Bristle Body Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7818" data-price-box="product-id-7818"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7818" data-price-amount="12.99"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.99</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-cactus-bristle-dry-skin-body-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7820"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd004.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Cactus Bristle Dry Skin Body Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7820 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7820 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-cactus-bristle-dry-skin-body-brush.html">Hydrea
                                                            London Cactus Bristle Dry Skin Body Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7820" data-price-box="product-id-7820"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7820" data-price-amount="12"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£12.00</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-natural-bristle-classic-short-body-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7823"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd007.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Natural Bristle Classic Short Body Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7823 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7823 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-natural-bristle-classic-short-body-brush.html">Hydrea
                                                            London Natural Bristle Classic Short Body Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7823" data-price-box="product-id-7823"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7823" data-price-amount="7.64"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£7.64</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-organic-egyptian-loofah-exfoliating-bath-mitt.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7829"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd013_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Organic Egyptian Loofah Exfoliating Bath Mitt"></span></span>
                                                    <style>
                                                        .product-image-container-7829 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7829 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-organic-egyptian-loofah-exfoliating-bath-mitt.html">Hydrea
                                                            London Organic Egyptian Loofah Exfoliating Bath
                                                            Mitt</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7829" data-price-box="product-id-7829"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7829" data-price-amount="6.49"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£6.49</span></span> </span> </div>
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
                                                    href-data="../hydrea-combination-body-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7835"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd020.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Combination Body Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7835 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7835 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-combination-body-brush.html">Hydrea Combination
                                                            Body Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7835" data-price-box="product-id-7835"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7835" data-price-amount="8"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£8.00</span></span> </span> </div>
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
                                                    href-data="../hydrea-detox-massage-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7836"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd021.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Detox Massage Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7836 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7836 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-detox-massage-brush.html">Hydrea Detox Massage
                                                            Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7836" data-price-box="product-id-7836"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7836" data-price-amount="11.5"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£11.50</span></span> </span> </div>
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
                                                    href-data="../hydrea-elasticated-exfoliating-bath-mitt.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7838"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd023.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Elasticated Exfoliating Bath Mitt"></span></span>
                                                    <style>
                                                        .product-image-container-7838 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7838 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-elasticated-exfoliating-bath-mitt.html">Hydrea
                                                            Elasticated Exfoliating Bath Mitt</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7838" data-price-box="product-id-7838"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7838" data-price-amount="5.94"
                                                                data-price-type="finalPrice" class="price-wrapper "><span
                                                                    class="price">£5.94</span></span> </span> </div>
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
                                                    href-data="../hydrea-olive-wood-large-nail-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7840"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd025.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Olive Wood Large Nail Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7840 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7840 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-olive-wood-large-nail-brush.html">Hydrea Olive
                                                            Wood Large Nail Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7840" data-price-box="product-id-7840"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7840" data-price-amount="21"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£21.00</span></span> </span> </div>
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
                                                    href-data="../hydrea-chocolate-cream-bath-scrunchie-55g.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7841"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd026.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Chocolate &amp; Cream Bath Scrunchie 55g"></span></span>
                                                    <style>
                                                        .product-image-container-7841 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7841 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-chocolate-cream-bath-scrunchie-55g.html">Hydrea
                                                            Chocolate &amp; Cream Bath Scrunchie 55g</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7841" data-price-box="product-id-7841"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7841" data-price-amount="2.8"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£2.80</span></span> </span> </div>
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
                                                    href-data="../hydrea-carbonized-bamboo-exfoliating-gloves.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7845"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd030.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Carbonized Bamboo Exfoliating Gloves"></span></span>
                                                    <style>
                                                        .product-image-container-7845 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7845 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-carbonized-bamboo-exfoliating-gloves.html">Hydrea
                                                            Carbonized Bamboo Exfoliating Gloves</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7845" data-price-box="product-id-7845"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7845" data-price-amount="6.49"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£6.49</span></span> </span> </div>
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
                                                    href-data="../hydrea-olive-wood-bath-brush.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7867"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd053.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Olive Wood Bath Brush"></span></span>
                                                    <style>
                                                        .product-image-container-7867 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7867 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-olive-wood-bath-brush.html">Hydrea Olive Wood
                                                            Bath Brush</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7867" data-price-box="product-id-7867"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7867" data-price-amount="54.99"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£54.99</span></span> </span> </div>
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
                                                    href-data="../hydrea-bamboo-body-care-relaxing-lavender-eye-pillow.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-7868"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd054.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Bamboo Body Care Relaxing Lavender Eye Pillow"></span></span>
                                                    <style>
                                                        .product-image-container-7868 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-7868 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-bamboo-body-care-relaxing-lavender-eye-pillow.html">Hydrea
                                                            Bamboo Body Care Relaxing Lavender Eye Pillow</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="7868" data-price-box="product-id-7868"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-7868" data-price-amount="8.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£8.50</span></span> </span> </div>
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
                                                    href-data="../hydrea-london-luxury-soft-scrubber-black-cream.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-10680"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd061.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea London Luxury Soft Scrubber Black &amp; Cream"></span></span>
                                                    <style>
                                                        .product-image-container-10680 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-10680 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-london-luxury-soft-scrubber-black-cream.html">Hydrea
                                                            London Luxury Soft Scrubber Black &amp; Cream</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="10680" data-price-box="product-id-10680"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-10680" data-price-amount="4.79"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
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
                                                    href-data="../hydrea-olive-wood-cushion-hair-brush-with-boar-bristles-styling-pins.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11273"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd067.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Olive Wood Cushion Hair Brush With Boar Bristles &amp; Styling Pins"></span></span>
                                                    <style>
                                                        .product-image-container-11273 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11273 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-olive-wood-cushion-hair-brush-with-boar-bristles-styling-pins.html">Hydrea
                                                            Olive Wood Cushion Hair Brush With Boar Bristles &amp; Styling
                                                            Pins</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11273" data-price-box="product-id-11273"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-11273" data-price-amount="31.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£31.95</span></span> </span> </div>
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
                                                    href-data="../hydrea-olive-wood-exfoliating-facial-brush-with-pure-mane-bristles.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11275"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd069_1.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Olive Wood Exfoliating Facial Brush With Pure Mane Bristles"></span></span>
                                                    <style>
                                                        .product-image-container-11275 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11275 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-olive-wood-exfoliating-facial-brush-with-pure-mane-bristles.html">Hydrea
                                                            Olive Wood Exfoliating Facial Brush With Pure Mane
                                                            Bristles</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11275" data-price-box="product-id-11275"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-11275" data-price-amount="18.95"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£18.95</span></span> </span> </div>
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
                                                    href-data="../hydrea-bamboo-exfoliating-mitt.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11276"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd070.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Bamboo Exfoliating Mitt"></span></span>
                                                    <style>
                                                        .product-image-container-11276 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11276 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-bamboo-exfoliating-mitt.html">Hydrea Bamboo
                                                            Exfoliating Mitt</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11276" data-price-box="product-id-11276"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-11276" data-price-amount="8.5"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£8.50</span></span> </span> </div>
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
                                                    href-data="../hydrea-natural-body-massage-exfoliating-spa-mitt.html"
                                                    class="product photo product-item-photo" tabindex="-1"> <span
                                                        class="product-image-container product-image-container-11284"
                                                        style="width: 384px;"><span class="product-image-wrapper"
                                                            style="padding-bottom: 100%;"><img
                                                                class="product-image-photo"
                                                                src-data="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                                src="https://www.salonwholesale.com/media/catalog/product/cache/db82f9a580fa2b01bdea45efa2d754f9/h/y/hyd078.png"
                                                                loading="lazy" width="384" height="384"
                                                                alt="Hydrea Natural Body Massage Exfoliating Spa Mitt"></span></span>
                                                    <style>
                                                        .product-image-container-11284 {
                                                            width: 384px;
                                                        }

                                                        .product-image-container-11284 span.product-image-wrapper {
                                                            padding-bottom: 100%;
                                                        }
                                                    </style>
                                                </a>
                                                <div class="product details product-item-details"> <strong
                                                        class="product name product-item-name"><a
                                                            class="product-item-link"
                                                            href-data="../hydrea-natural-body-massage-exfoliating-spa-mitt.html">Hydrea
                                                            Natural Body Massage Exfoliating Spa Mitt</a></strong>
                                                    <div class="price-box price-final_price" data-role="priceBox"
                                                        data-product-id="11284" data-price-box="product-id-11284"> <span
                                                            class="price-container price-final_price tax weee rewards_earn">
                                                            <span id="product-price-11284" data-price-amount="7.64"
                                                                data-price-type="finalPrice"
                                                                class="price-wrapper "><span
                                                                    class="price">£7.64</span></span> </span> </div>
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
                                        data-mage-init="{&quot;productListToolbarForm&quot;:{&quot;mode&quot;:&quot;product_list_mode&quot;,&quot;direction&quot;:&quot;product_list_dir&quot;,&quot;order&quot;:&quot;product_list_order&quot;,&quot;limit&quot;:&quot;product_list_limit&quot;,&quot;modeDefault&quot;:&quot;grid&quot;,&quot;directionDefault&quot;:&quot;desc&quot;,&quot;orderDefault&quot;:&quot;bestsellers&quot;,&quot;limitDefault&quot;:36,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/beauty\/tools.html&quot;,&quot;formKey&quot;:&quot;tZbjXExAn9kdTbux&quot;,&quot;post&quot;:false}}">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                <div class="toolbar-sorter sorter"><span class="sorter-label">Sort
                                                        By</span>
                                                    <div class="sorter-options">
                                                        <ul>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tools9c8a.html?product_list_order=revenue&amp;product_list_dir=asc'; return false;">Revenue</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'toolse63c.html?product_list_order=new&amp;product_list_dir=asc'; return false;">New</a>
                                                            </li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tools0e19.html?product_list_order=name&amp;product_list_dir=asc'; return false;">Product
                                                                    Name</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'tools4852.html?product_list_order=price&amp;product_list_dir=asc'; return false;">Price
                                                                    Low</a></li>
                                                            <li> <a rel="nofollow" href="#"
                                                                    onclick="window.location = 'toolsbc04.html?product_list_order=price&amp;product_list_dir=desc'; return false;">Price
                                                                    High</a></li>
                                                            <li> <a class="active" rel="nofollow" href="#"
                                                                    onclick="window.location = 'tools5c4b.html?product_list_order=bestsellers&amp;product_list_dir=desc'; return false;">Best
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
                                        Beauty tools from renowned brands such as, Wella, Goldwell, Fanola and Serie
                                        Expert. At emerch junction ourBeauty toolsoffer a vast array of uses
                                        including straightening, moisturising, curl defining, anti-dandruff and
                                        much more. Available in both retail and professional sizes so you can
                                        have a diverse Beauty tools collection that guarantees healthy, happy hair.
                                        Our hair care products help to reduce frizz, are greta for hydrating,
                                        volumizing or moisturizing the hair, and its perfect for all hair types
                                        whether that is dry hair, curly hair, fine hair, hair loss,
                                        color-treated hair, hair with a lot of breakage, itchy scalps and so
                                        many other hair types. We have a selection of dry Beauty tools, repair
                                        Beauty tools, moisturizing Beauty tools, anti-dandruff Beauty tools,
                                        volumizing
                                        Beauty tools, thickening Beauty tools, moisturie Beauty tools, tea tree
                                        special
                                        Beauty tools, and we even have a small selection of argan oil Beauty tools. We
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
