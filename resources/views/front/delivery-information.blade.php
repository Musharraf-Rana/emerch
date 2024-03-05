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
                    <div class="main-content col-xs-12"> <input name="form_key" type="hidden" value="7lV9e8LL4FXD9Gf6">
                        <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                            <!-- ko template: getTemplate() --><!-- /ko --> </div>
                        <div id="monkey_campaign" style="display:none;"
                            data-mage-init="{&quot;campaigncatcher&quot;:{&quot;checkCampaignUrl&quot;: &quot;https://www.salonwholesale.com/mailchimp/campaign/check/&quot;}}">
                        </div>
                        <div
                            data-mage-init="{&quot;Mirasvit_CacheWarmer\/js\/track&quot;:{&quot;pageType&quot;:&quot;cms_page_view&quot;,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/cache_warmer\/track\/&quot;,&quot;cookieName&quot;:&quot;mst-cache-warmer-track&quot;,&quot;cookieValue&quot;:1}}">
                        </div>
                        <style type="text/css">
                            table.tableizer-table {
                                border: 1px solid #CCCCCC;
                            }

                            .tableizer-table td {
                                padding: 4px;
                                margin: 3px;
                                border: 1px solid #CCCCCC;
                                text-align: center;
                            }

                            .tableizer-table tr:hover {
                                background-color: #1CBBB4;
                                color: #FFFFFF;
                            }

                            .tableizer-table th {
                                background-color: #DDDDDD;
                                color: #000;
                                border: 1px solid #CCCCCC;
                                font-weight: bold;
                                text-align: center;
                            }
                        </style>


                        <h1><strong>United Kingdom Shipping and Delivery:</strong></h1>

                        <div class="table-responsive">
                            <table class="tableizer-table">
                                <thead>
                                    <tr class="tableizer-firstrow">
                                        <th colspan="3">Delivery options</th>
                                        <th colspan="3">Orders under £25</th>
                                        <th colspan="3">Orders over £25</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="3">Tracked (2 business days)</td>
                                        <td colspan="3">£3.50</td>
                                        <td colspan="3">FREE</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Fully Tracked (2 business days)</td>
                                        <td colspan="3">£3.95</td>
                                        <td colspan="3">£3.95</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">Next Day</td>
                                        <td colspan="3">£4.95</td>
                                        <td colspan="3">£4.95</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <br>

                        <h2>Returns</h2>
                        <p>
                            If for any reason you are not happy with your purchase, you may return any unopened and unused
                            items to us within 30 days of receipt. To be acceptable for return, items should be unused,
                            unopened and have any original seals intact. Please <a href="returns-policy.html"> read our
                                returns help section</a> for more information.
                        </p>



                        <link rel="stylesheet"
                            href="../assets.reviews.io/css/widgets/carousel-widgetce44.css?_t=2021070913">
                        <link rel="stylesheet"
                            href="../assets.reviews.io/iconfont/reviewsio-icons/stylece44.css?_t=2021070913">
                        <div id="reviewsio-carousel-widget">
                            <link rel="stylesheet" type="text/css"
                                href="data:text/css;charset=UTF-8,.CarouselWidget-prefix%20.CarouselWidget%7B--base-font-size%3A16px%3B--base-maxwidth%3A100%25%3B--reviewsio-logo-style%3Avar%28--logo-inverted%29%3B--common-star-color%3A%20%230E1311%3B--common-star-disabled-color%3A%20rgba%280%2C0%2C0%2C0.25%29%3B--medium-star-size%3A%2022px%3B--small-star-size%3A19px%3B--x-small-star-size%3A16px%3B--x-small-star-display%3Ainline-flex%3B--header-order%3A1%3B--header-width%3A280px%3B--header-bg-start-color%3A%230E1311%3B--header-bg-end-color%3A%230E1311%3B--header-gradient-direction%3A135deg%3B--header-padding%3A1.5em%3B--header-border-width%3A0px%3B--header-border-color%3Argba%280%2C0%2C0%2C0.1%29%3B--header-border-radius%3A0px%3B--header-shadow-size%3A10px%3B--header-shadow-color%3Argba%280%2C%200%2C%200%2C%200.05%29%3B--header-star-color%3A%23ffffff%3B--header-disabled-star-color%3Ainherit%3B--header-heading-text-color%3A%23ffffff%3B--header-heading-font-size%3Ainherit%3B--header-heading-font-weight%3Ainherit%3B--header-heading-line-height%3Ainherit%3B--header-heading-text-transform%3Ainherit%3B--header-subheading-text-color%3A%23ffffff%3B--header-subheading-font-size%3Ainherit%3B--header-subheading-font-weight%3A300%3B--header-subheading-line-height%3Ainherit%3B--header-subheading-text-transform%3Ainherit%3B--item-maximum-columns%3A5%3B--item-background-start-color%3A%23ffffff%3B--item-background-end-color%3A%23ffffff%3B--item-gradient-direction%3A135deg%3B--item-padding%3A1.5em%3B--item-border-width%3A0px%3B--item-border-color%3Argba%280%2C0%2C0%2C0.1%29%3B--item-border-radius%3A0px%3B--item-shadow-size%3A10px%3B--item-shadow-color%3Argba%280%2C0%2C0%2C0.05%29%3B--heading-text-color%3A%20%230E1311%3B--heading-text-font-weight%3A%20600%3B--heading-text-font-family%3A%20inherit%3B--heading-text-line-height%3A%201.4%3B--heading-text-letter-spacing%3A0%3B--heading-text-transform%3Anone%3B--body-text-color%3A%20%230E1311%3B--body-text-font-weight%3A400%3B--body-text-font-family%3A%20inherit%3B--body-text-line-height%3A%201.4%3B--body-text-letter-spacing%3A0%3B--body-text-transform%3Anone%3B--scroll-button-icon-color%3A%230E1311%3B--scroll-button-icon-size%3A24px%3B--scroll-button-bg-color%3Atransparent%3B--scroll-button-border-width%3A0px%3B--scroll-button-border-color%3Argba%280%2C0%2C0%2C0.1%29%3B--scroll-button-border-radius%3A60px%3B--scroll-button-shadow-size%3A0px%3B--scroll-button-shadow-color%3Argba%280%2C0%2C0%2C0.1%29%3B--scroll-button-horizontal-position%3A3px%3B--scroll-button-vertical-position%3A0px%3B--badge-icon-color%3A%230E1311%3B--badge-icon-font-size%3A15px%3B--badge-text-color%3A%230E1311%3B--badge-text-font-size%3Ainherit%3B--badge-text-letter-spacing%3Ainherit%3B--badge-text-transform%3Ainherit%3B--author-font-size%3Ainherit%3B--author-font-weight%3Ainherit%3B--author-text-transform%3Ainherit%3B--photo-video-thumbnail-size%3A60px%3B--photo-video-thumbnail-border-radius%3A0px%3B--popup-backdrop-color%3Argba%280%2C0%2C0%2C0.75%29%3B--popup-color%3A%23ffffff%3B--popup-star-color%3Ainherit%3B--popup-disabled-star-color%3Ainherit%3B--popup-heading-text-color%3Ainherit%3B--popup-body-text-color%3Ainherit%3B--popup-badge-icon-color%3Ainherit%3B--popup-badge-icon-font-size%3A19px%3B--popup-badge-text-color%3Ainherit%3B--popup-badge-text-font-size%3A14px%3B--popup-border-width%3A0px%3B--popup-border-color%3Argba%280%2C0%2C0%2C0.1%29%3B--popup-border-radius%3A0px%3B--popup-shadow-size%3A0px%3B--popup-shadow-color%3Argba%280%2C0%2C0%2C0.1%29%3B--popup-icon-color%3A%230E1311%3B--tooltip-bg-color%3A%230E1311%3B--tooltip-text-color%3A%23ffffff%3B%7D">
                            <div tabindex="0" class="CarouselWidget-prefix">
                                <div class="CarouselWidget widgetId-reviewsio-carousel-widget CarouselWidget--sideHeader--withcards CarouselWidget--default R-XXXLG R-XXXXLG"
                                    r-data-observe-resizes="">
                                    <div class=" CarouselWidget__inner">
                                        <div class="CarouselWidget__header u-textCenter--all">
                                            <div class="header__inner">
                                                <div
                                                    class="R-TextHeading R-TextHeading--xxs u-textCenter--all u-marginLeft--xs u-marginRight--xs">
                                                    <div class="cssVar-header__heading">Excellent</div>
                                                </div>
                                                <div class="R-RatingStars  u-marginBottom--xxs">
                                                    <div title="4.61 Stars" class="R-RatingStars__stars u-marginRight--none"
                                                        aria-hidden="true"><i
                                                            class="stars__icon ricon-percentage-star--100"></i><i
                                                            class="stars__icon ricon-percentage-star--100"></i><i
                                                            class="stars__icon ricon-percentage-star--100"></i><i
                                                            class="stars__icon ricon-percentage-star--100"></i><i
                                                            class="stars__icon stars__icon--50 ricon-percentage-star--100"></i>
                                                    </div>
                                                </div>
                                                <div
                                                    class="R-TextBody R-TextBody--xxs u-textCenter--all u-marginBottom--xs">
                                                    <div class="cssVar-header__subheading"><strong><span
                                                                class="cssVar-subheading__number">4.61
                                                            </span></strong>average</div>
                                                </div>
                                                <div
                                                    class="R-TextBody R-TextBody--xxs u-textCenter--all u-marginBottom--xs">
                                                    <div class="cssVar-header__subheading"><strong><span
                                                                class="cssVar-subheading__number">541
                                                            </span></strong>reviews</div>
                                                </div>
                                                <div><a rel="noreferrer" target="_blank"
                                                        href="https://www.reviews.io/company-reviews/store/the-modern-man"
                                                        class="R-ReviewsioLogo R-ReviewsioLogo--sm"
                                                        title="Read more reviews on REVIEWS.io"><span
                                                            class="R-ReviewsioLogo__image"
                                                            src="https://assets.reviews.io/img/all-global-assets/logo/reviewsio-logo.svg"
                                                            alt="REVIEWS.io Logo" width="120" height="19"></span></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="CarouselWidget__list">
                                            <div class="R-ReviewsList-container"
                                                onmouseover="reviewsio_mouseStatus('reviewsio-carousel-widget');"
                                                onmouseout="reviewsio_mouseStatus('');">
                                                <div tabindex="0" role="button"
                                                    aria-label="REVIEWS.io Carousel Scroll Left"
                                                    class="js-scroll-left-btn R-ReviewsList__controlButton R-ReviewsList__controlButton--left"
                                                    widget="reviewsio-carousel-widget"><i
                                                        class="js-scroll-left-btn ricon-thin-arrow--left controlButton__icon"></i>
                                                </div>
                                                <div tabindex="0" role="button"
                                                    aria-label="REVIEWS.io Carousel Scroll Right"
                                                    class="js-scroll-right-btn R-ReviewsList__controlButton R-ReviewsList__controlButton--right"
                                                    widget="reviewsio-carousel-widget"><i
                                                        class="js-scroll-right-btn ricon-thin-arrow--right controlButton__icon"></i>
                                                </div>
                                                <div class="R-ReviewsList" id="R-ReviewsList--reviewsio-carousel-widget">
                                                    <div tabindex="0"
                                                        class=" R-ReviewsList__item u-textLeft--all  u-cursorPointer js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20729168"
                                                        id="ReviewsList__item--firstreviewsio-carousel-widget">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Alan</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Excellent service from The Modern Man company
                                                                        And fast delivery service </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Hackney, United Kingdom, 6 days ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--product_review-26280767"
                                                        id="ReviewList__item--product_review-26280767">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Alan</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all">MUHLE
                                                                            R89 GRANDE Large Chrome Safety Razor</em></div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        I’m new to the Double Edge razor so with some
                                                                        trepidation I purchased this razor..
                                                                        I need not have worried it is beautifully built and
                                                                        performed better than I could have hoped..

                                                                        Highly recommended both razor and supplier </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Hackney, United Kingdom, 6 days ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--product_review-26014128"
                                                        id="ReviewList__item--product_review-26014128">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Terry</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all">Morgan's
                                                                            Classic Hair Darkening Cream 150ml</em></div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Same as above </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Dublin, Ireland, 1 week ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20649604"
                                                        id="ReviewList__item--store_review-20649604">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Anonymous</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Ordered a Denman Brush (Tangle Tamer Ultra), that I
                                                                        could not find in Canada from here. I recieved it,
                                                                        price was reasonable and I am happy with my
                                                                        purchase. </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Toronto, Canada, 2 weeks ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20538064"
                                                        id="ReviewList__item--store_review-20538064">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">John</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        I'm very satisfied with my purchase from The Modern
                                                                        Man. It arrived quickly even though I live abroad.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Baton Rouge, United States, 3 weeks ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--product_review-25575635"
                                                        id="ReviewList__item--product_review-25575635">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Bethany</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all">Merkur
                                                                            700 Futur Adjustable Double Edge Safety Razor
                                                                            Matt (90 700 002)</em></div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Bought this as a replacement for an Edwin Jagger
                                                                        DE89 that's threads had worn away after ~8 years as
                                                                        reviews said the Merkur was better for confident
                                                                        safety razor users. This model gives a closer shave
                                                                        and is more comfortable on the skin than the Edwin
                                                                        Jagger. The ability to adjust the shave is helpful
                                                                        and the handle feels nice with a good weight. I
                                                                        agree with previous reviews that it is for more
                                                                        confident shavers but fully recommend this model.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Belfast, United Kingdom, 4 weeks ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--product_review-25509108"
                                                        id="ReviewList__item--product_review-25509108">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Denis</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all">Morgan's
                                                                            Matt Pomade Low Shine/Firm Hold 100g</em></div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        The most favourable pomade of me. I love the smell,
                                                                        the shine, the level of fixation. I work as a tester
                                                                        meaning I can't wear strong scents. This one is
                                                                        exactly what suits my needs: subtle, yet fresh and
                                                                        pleasant. </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Etobicoke, Canada, 4 weeks ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20475468"
                                                        id="ReviewList__item--store_review-20475468">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Joanna</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        The Modern Man dealt with my order promptly and
                                                                        delivered it swiflty. The order was complete and
                                                                        well packaged and it arrived on time.</div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Nottingham, United Kingdom, 1 month ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20472527"
                                                        id="ReviewList__item--store_review-20472527">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">David</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Easy ordering process. Thank you. </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Broxbourne, United Kingdom, 1 month ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20471308"
                                                        id="ReviewList__item--store_review-20471308">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Christian</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="4 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon stars__icon--0 ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        good products, slightly let down there were no free
                                                                        samples as was mentioned when placing the order.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Chesterfield, United Kingdom, 1 month ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20471197"
                                                        id="ReviewList__item--store_review-20471197">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Michael</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Excellent
                                                                        From ordering to paying to quality to delivery
                                                                        Will use again.</div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        1 month ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20368241"
                                                        id="ReviewList__item--store_review-20368241">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Mr Mr</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        This is a great site and company to buy off I will
                                                                        buy again </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        1 month ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20218469"
                                                        id="ReviewList__item--store_review-20218469">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Lizzy</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Amazing. Really helpful service. </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Stafford, United Kingdom, 1 month ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-20129451"
                                                        id="ReviewList__item--store_review-20129451">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Susan V</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        This is the most unique wonderful store for men's
                                                                        personal care products. They have a large variety of
                                                                        high-end products which are hard to find and are
                                                                        sold for a very reasonable price. This store is the
                                                                        best.</div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Aurora, United States, 2 months ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--product_review-24243330"
                                                        id="ReviewList__item--product_review-24243330">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Edna</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all">Tenax
                                                                            Pomade Strong 125ml</em></div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Love this product but can't find it locally. Great
                                                                        scent and hold. Will order again.</div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Courtenay, Canada, 2 months ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--product_review-24105341"
                                                        id="ReviewList__item--product_review-24105341">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Melissa S</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all">Mason
                                                                            Pearson BN2 Medium Bristle and Nylon Junior
                                                                            Brush</em></div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        This is such a lovely brush. I had one as a child
                                                                        and 50 years later I still use it. I bought this one
                                                                        for my daughter and am sure it will still work for
                                                                        her in 50 years too. Well worth spending that little
                                                                        extra for quality. </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Birchington, United Kingdom, 2 months ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-19928981"
                                                        id="ReviewList__item--store_review-19928981">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Anonymous</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Fast Shipping</div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Bristol, United Kingdom, 2 months ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-19842981"
                                                        id="ReviewList__item--store_review-19842981">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Adrian E</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        I have been very impressed with this company.
                                                                        Excellent product range and swift delivery. I tend
                                                                        to order the volt beard colours which I am really
                                                                        impressed with, gone is the horrible itching and
                                                                        pain from dying every so many weeks. </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Ipswich, United Kingdom, 3 months ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--product_review-23748661"
                                                        id="ReviewList__item--product_review-23748661">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Peter</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all">MUHLE
                                                                            RCOM03 Companion Unisex Safety Razor Blue
                                                                            Cord</em></div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Nice smooth razor finish as expected from Muhle.
                                                                        Depending on which razor blade chosen to be used
                                                                        this razor can be as efficient as you want it to be.
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        Leeds, United Kingdom, 3 months ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div tabindex="0"
                                                        class="R-ReviewsList__item u-cursorPointer u-textLeft--all js-open-widgetModal"
                                                        r-popup="js-popup--store_review-19801426"
                                                        id="ReviewList__item--store_review-19801426">
                                                        <div class="item__inner">
                                                            <div>
                                                                <div>

                                                                    <div
                                                                        class="R-TextHeading R-TextHeading--xxxxs R-TextHeading--inline u-textLeft--all u-verticalAlign--middle u-marginRight--xs">

                                                                        <div class="cssVar-authorName">Amanda H</div>

                                                                    </div>

                                                                    <div class="R-RatingStars R-RatingStars--xs u-verticalAlign--middle cssVar-starDisplay cssVar-starDisplay"
                                                                        title="5 Stars">
                                                                        <div aria-hidden="true"
                                                                            class="R-RatingStars__stars">
                                                                            <i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i><i
                                                                                class="stars__icon ricon-percentage-star--100"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="R-BadgeElement R-flex-row R-flex-row--noMargin R-flex-middle-xxs R-flex-start-xxs u-marginBottom--xs">
                                                                    <div class="R-BadgeElement__icon R-IconButton R-IconButton--lg u-marginLeft--neg--xxs"
                                                                        aria-hidden="true"><span
                                                                            class="ricon-badge--checkmark R-IconButton__icon cssVar-badgeElement__icon"></span>
                                                                    </div>
                                                                    <div
                                                                        class="R-BadgeElement__text R-TextBody R-TextBody--xxxxs R-TextBody--inline u-textLeft--all u-marginBottom--none u-verticalAlign--middle">
                                                                        <div class="cssVar-badgeElement__text">Verified
                                                                            Customer</div>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <div><em
                                                                            class="R-TextBody R-TextBody--xxxs u-textLeft--all"></em>
                                                                    </div>
                                                                    <div
                                                                        class="R-ReviewsList__item--body R-TextBody R-TextBody--xxs u-textLeft--all">
                                                                        Very fast delivery and good price. Very pleased.
                                                                        Waiting for more stock to arrive so I can order
                                                                        again </div>
                                                                </div>
                                                            </div>
                                                            <div
                                                                class="R-flex-row R-flex-row--noMargin R-flex-between-xxs R-flex-bottom-xxs">
                                                                <div></div>
                                                                <div>
                                                                    <div
                                                                        class="R-TextBody R-TextBody--xxxxs u-textRight--all u-marginBottom--xs">
                                                                        3 months ago</div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <br>
                        <br>
                        <br>

                        <h2>EU Shipping and Delivery:</h2>

                        <div class="table-responsive">
                            <table class="tableizer-table">
                                <thead>
                                    <tr class="tableizer-firstrow">
                                        <th></th>
                                        <th colspan="3">Standard Shipping</th>
                                        <th colspan="3">Tracked Shipping</th>
                                        <th colspan="3">Express Shipping</th>
                                    </tr>
                                    <tr class="tableizer-firstrow">
                                        <th>Country</th>
                                        <th>Cost</th>
                                        <th>Free On Orders Over...</th>
                                        <th>Working Days</th>
                                        <th>Cost</th>
                                        <th>Free On Orders Over...</th>
                                        <th>Working Days</th>
                                        <th>Cost</th>
                                        <th>Free On Orders Over...</th>
                                        <th>Working Days</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Austria</td>
                                        <td>£2.5</td>
                                        <td>£50</td>
                                        <td>5 - 12</td>
                                        <td>£8.45</td>
                                        <td>£170</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Belgium</td>
                                        <td>£2.95</td>
                                        <td>£60</td>
                                        <td>5 - 10</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>4 - 10</td>
                                        <td>£14.45</td>
                                        <td>£300</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Cyprus</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>5 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Denmark</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 15</td>
                                        <td>£6.95</td>
                                        <td>£140</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Estonia</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 20</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Finland</td>
                                        <td>£4.5</td>
                                        <td>£90</td>
                                        <td>5 - 15</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>France</td>
                                        <td>£2.5</td>
                                        <td>£50</td>
                                        <td>5 - 12</td>
                                        <td>£5.45</td>
                                        <td>£110</td>
                                        <td>4 - 10</td>
                                        <td>£16.45</td>
                                        <td>£340</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Germany</td>
                                        <td>£3</td>
                                        <td>£60</td>
                                        <td>5 - 10</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>4 - 10</td>
                                        <td>£16.45</td>
                                        <td>£340</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Greece</td>
                                        <td>£3.5</td>
                                        <td>£70</td>
                                        <td>5 - 15</td>
                                        <td>£11.45</td>
                                        <td>£230</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Ireland</td>
                                        <td>£4.5</td>
                                        <td>£90</td>
                                        <td>5 - 12</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>4 - 10</td>
                                        <td>£14.45</td>
                                        <td>£300</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Italy</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 15</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Latvia</td>
                                        <td>£2.95</td>
                                        <td>£60</td>
                                        <td>5 - 20</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Lithuania</td>
                                        <td>£2.5</td>
                                        <td>£50</td>
                                        <td>5 - 20</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>5 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Luxembourg</td>
                                        <td>£2.95</td>
                                        <td>£60</td>
                                        <td>5 - 10</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>4 - 10</td>
                                        <td>£14.45</td>
                                        <td>£300</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Malta</td>
                                        <td>£6.95</td>
                                        <td>£140</td>
                                        <td>5 - 15</td>
                                        <td>£10.45</td>
                                        <td>£210</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Netherlands</td>
                                        <td>£3.5</td>
                                        <td>£70</td>
                                        <td>5 - 12</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>4 - 10</td>
                                        <td>£14.45</td>
                                        <td>£300</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Norway</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 12</td>
                                        <td>£11.45</td>
                                        <td>£230</td>
                                        <td>5 - 12</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Portugal</td>
                                        <td>£4.5</td>
                                        <td>£90</td>
                                        <td>5 - 15</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Slovakia</td>
                                        <td>£3.5</td>
                                        <td>£70</td>
                                        <td>5 - 15</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Slovenia</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 15</td>
                                        <td>£8.45</td>
                                        <td>£170</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Spain</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 15</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>3 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Sweden</td>
                                        <td>£3</td>
                                        <td>£60</td>
                                        <td>5 - 12</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Switzerland</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 12</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>United Kingdom</td>
                                        <td>£2.95</td>
                                        <td>£25</td>
                                        <td>2 - 4</td>
                                        <td>£4.5</td>
                                        <td>£90</td>
                                        <td>2 - 3</td>
                                        <td>£5.99</td>
                                        <td>£120</td>
                                        <td>1 - 2</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <br>
                        <br>
                        <br>

                        <p><strong>Rest of Europe Shipping and Delivery:</strong></p>

                        <div class="table-responsive">
                            <table class="tableizer-table">
                                <thead>
                                    <tr class="tableizer-firstrow">
                                        <th></th>
                                        <th colspan="3">Standard Shipping</th>
                                        <th colspan="3">Tracked Shipping</th>
                                        <th colspan="3">Express Shipping</th>
                                    </tr>
                                    <tr class="tableizer-firstrow">
                                        <th>Country</th>
                                        <th>Cost</th>
                                        <th>Free On Orders Over...</th>
                                        <th>Working Days</th>
                                        <th>Cost</th>
                                        <th>Free On Orders Over...</th>
                                        <th>Working Days</th>
                                        <th>Cost</th>
                                        <th>Free On Orders Over...</th>
                                        <th>Working Days</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>Albania</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 15</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>5 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Andorra</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>5 - 10</td>
                                        <td>£16.45</td>
                                        <td>£340</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Armenia</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 15</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>5 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Azerbaijan</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>5 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Belarus</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>5 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Bosnia and Herzegovina</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 10</td>
                                        <td>£11.45</td>
                                        <td>£230</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Bulgaria</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 20</td>
                                        <td>£12.45</td>
                                        <td>£250</td>
                                        <td>3 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Croatia</td>
                                        <td>£2.95</td>
                                        <td>£60</td>
                                        <td>5 - 15</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Czech Republic</td>
                                        <td>£2.95</td>
                                        <td>£60</td>
                                        <td>5 - 10</td>
                                        <td>£8.5</td>
                                        <td>£170</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Georgia</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Hungary</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 15</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Iceland</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 10</td>
                                        <td>£15.95</td>
                                        <td>£320</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Kazakhstan</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£17.95</td>
                                        <td>£360</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Liechtenstein</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Macedonia</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£12.45</td>
                                        <td>£250</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Moldova</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Monaco</td>
                                        <td>£2.45</td>
                                        <td>£50</td>
                                        <td>5 - 12</td>
                                        <td>£6.95</td>
                                        <td>£140</td>
                                        <td>4 - 10</td>
                                        <td>£16.45</td>
                                        <td>£340</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Montenegro</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Poland</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 15</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Romania</td>
                                        <td>£3.5</td>
                                        <td>£70</td>
                                        <td>5 - 15</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>4 - 10</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Russia</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£16.95</td>
                                        <td>£340</td>
                                        <td>5 -15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>San Marino</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£15.95</td>
                                        <td>£320</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Serbia</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Turkey</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Ukraine</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£16.95</td>
                                        <td>£340</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>0</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>

                        <br>
                        <br>
                        <br>

                        <p><strong>Rest of World Shipping and Delivery:</strong></p>

                        <div class="table-responsive">
                            <table class="tableizer-table">
                                <thead>
                                    <tr class="tableizer-firstrow">
                                        <th></th>
                                        <th colspan="3">Standard Shipping</th>
                                        <th colspan="3">Tracked Shipping</th>
                                        <th colspan="3">Express Shipping</th>
                                    </tr>
                                    <tr class="tableizer-firstrow">
                                        <th>Country</th>
                                        <th>Cost</th>
                                        <th>Free On Orders Over...</th>
                                        <th>Working Days</th>
                                        <th>Cost</th>
                                        <th>Free On Orders Over...</th>
                                        <th>Working Days</th>
                                        <th>Cost</th>
                                        <th>Free On Orders Over...</th>
                                        <th>Working Days</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Afghanistan</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 +</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Algeria</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>5 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>American Samoa</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Angola</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£8.45</td>
                                        <td>£170</td>
                                        <td>7 +</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Anguilla</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>7 +</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Antigua and Barbuda</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>7 +</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Argentina</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Aruba</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 +</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Australia</td>
                                        <td>£3</td>
                                        <td>£60</td>
                                        <td>5 - 15</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>5 - 10</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>3 - 4</td>
                                    </tr>
                                    <tr>
                                        <td>Bahamas</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 +</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Aruba</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 +</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Bahamas</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 +</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Bahrain</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>4 - 10</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Bangladesh</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>7 +</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Barbados</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>5 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Belize</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Benin</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£14.5</td>
                                        <td>£290</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Bermuda</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Bhutan</td>
                                        <td>£7.5</td>
                                        <td>£150</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Bolivia</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Botswana</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Brazil</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>British Virgin Islands</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>5 - 20</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Brunei</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>7 - 15</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Burkina Faso</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Burundi</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Cambodia</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Cameroon</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Canada</td>
                                        <td>£3</td>
                                        <td>£60</td>
                                        <td>5 - 15</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>5 - 10</td>
                                        <td>£19.95</td>
                                        <td>£400</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Cape Verde</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Cayman Islands</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 10</td>
                                        <td>£13.5</td>
                                        <td>£270</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Central African Republic</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£12.5</td>
                                        <td>£250</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Chad</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Chile</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>China</td>
                                        <td>£2.95</td>
                                        <td>£60</td>
                                        <td>5 - 20</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>5 - 15</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Colombia</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Comoros</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Cook Islands</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Costa Rica</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Cuba</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£12.5</td>
                                        <td>£250</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Djibouti</td>
                                        <td>£6.95</td>
                                        <td>£140</td>
                                        <td>5 - 20</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Dominica</td>
                                        <td>£7.5</td>
                                        <td>£150</td>
                                        <td>5 - 20</td>
                                        <td>£15.95</td>
                                        <td>£320</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Dominican Republic</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Ecuador</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Egypt</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£11.45</td>
                                        <td>£230</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>El Salvador</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Equatorial Guinea</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Eritrea</td>
                                        <td>£6.95</td>
                                        <td>£140</td>
                                        <td>5 - 20</td>
                                        <td>£16.95</td>
                                        <td>£340</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Ethiopia</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£15.95</td>
                                        <td>£320</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Falkland Islands</td>
                                        <td>£9.5</td>
                                        <td>£190</td>
                                        <td>5 - 20</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Faroe Islands</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Fiji</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>French Guiana</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>French Polynesia</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>5 - 20</td>
                                        <td>£21.95</td>
                                        <td>£440</td>
                                        <td>7 - 15</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>French Southern Territories</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Gabon</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Gambia</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Ghana</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Gibraltar</td>
                                        <td>£3.5</td>
                                        <td>£70</td>
                                        <td>5 - 10</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Greenland</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£34.95</td>
                                        <td>£700</td>
                                        <td>7 - 15</td>
                                        <td>£19.45</td>
                                        <td>£400</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Grenada</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Guadeloupe</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 20</td>
                                        <td>£24.95</td>
                                        <td>£500</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Guam</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Guatemala</td>
                                        <td>£6.95</td>
                                        <td>£140</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Guernsey</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£11.45</td>
                                        <td>£230</td>
                                        <td>7 - 15</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Guinea</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Guinea-Bissau</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>5 - 20</td>
                                        <td>£19.95</td>
                                        <td>£400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Guyana</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Haiti</td>
                                        <td>£6.95</td>
                                        <td>£140</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Honduras</td>
                                        <td>£7.5</td>
                                        <td>£150</td>
                                        <td>5 - 20</td>
                                        <td>£50.95</td>
                                        <td>£1020</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Hong Kong SAR China</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 10</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>4 - 10</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>India</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Indonesia</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Iran</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Iraq</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Israel</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 15</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>4 - 12</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Jamaica</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Japan</td>
                                        <td>£3.5</td>
                                        <td>£70</td>
                                        <td>5 - 10</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>5 - 10</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Jersey</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£10.45</td>
                                        <td>£210</td>
                                        <td>7 - 15</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Jordan</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Kenya</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Kiribati</td>
                                        <td>£13.5</td>
                                        <td>£270</td>
                                        <td>5 - 20</td>
                                        <td>£16.95</td>
                                        <td>£340</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Kuwait</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Kyrgyzstan</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£15.95</td>
                                        <td>£320</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Laos</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Lebanon</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Lesotho</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Liberia</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Libya</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Macau SAR China</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Madagascar</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£15.95</td>
                                        <td>£320</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Malawi</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Malaysia</td>
                                        <td>£3</td>
                                        <td>£60</td>
                                        <td>5 - 20</td>
                                        <td>£15.95</td>
                                        <td>£320</td>
                                        <td>7 - 15</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Maldives</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Mali</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£8.45</td>
                                        <td>£170</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Marshall Islands</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Martinique</td>
                                        <td>£3.95</td>
                                        <td>£80</td>
                                        <td>5 - 20</td>
                                        <td>£24.95</td>
                                        <td>£500</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Mauritania</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£15.95</td>
                                        <td>£320</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Mauritius</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Mayotte</td>
                                        <td>£6.95</td>
                                        <td>£140</td>
                                        <td>5 - 20</td>
                                        <td>£34.95</td>
                                        <td>£700</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Mexico</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£19.95</td>
                                        <td>£400</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Micronesia</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Mongolia</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Montserrat</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Morocco</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>1 - 2</td>
                                    </tr>
                                    <tr>
                                        <td>Mozambique</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Myanmar [Burma]</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Namibia</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Nauru</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Nepal</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>4 - 10</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Netherlands Antilles</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>New Caledonia</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>5 - 20</td>
                                        <td>£19.95</td>
                                        <td>£400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>New Zealand</td>
                                        <td>£3.5</td>
                                        <td>£70</td>
                                        <td>5 - 15</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>5 - 12</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Nicaragua</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Niger</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Nigeria</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Niue</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>North Korea</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Northern Mariana Islands</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Oman</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Pakistan</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Palau</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Panama</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Papua New Guinea</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>5 - 20</td>
                                        <td>£25.95</td>
                                        <td>£520</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Paraguay</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Peru</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Philippines</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Qatar</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£15.95</td>
                                        <td>£320</td>
                                        <td>7 - 15</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Rwanda</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Saint Helena</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Saint Kitts and Nevis</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Saint Lucia</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Saint Martin</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Saint Pierre and Miquelon</td>
                                        <td>£5</td>
                                        <td>£100</td>
                                        <td>5 - 20</td>
                                        <td>£24.95</td>
                                        <td>£500</td>
                                        <td>7 - 15</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Saint Vincent and the Grenadines</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Samoa</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Saudi Arabia</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Senegal</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Seychelles</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Sierra Leone</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Singapore</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 15</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>5 - 10</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Solomon Islands</td>
                                        <td>£13.5</td>
                                        <td>£270</td>
                                        <td>5 - 20</td>
                                        <td>£19.95</td>
                                        <td>£400</td>
                                        <td>7 - 15</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Somalia</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>South Africa</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 15</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>South Korea</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 15</td>
                                        <td>£7.95</td>
                                        <td>£160</td>
                                        <td>5 - 12</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Sri Lanka</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Sudan</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£14.45</td>
                                        <td>£290</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Suriname</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Swaziland</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Syria</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Taiwan</td>
                                        <td>£2.95</td>
                                        <td>£60</td>
                                        <td>5 - 15</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>5 - 12</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Tajikistan</td>
                                        <td>£7.5</td>
                                        <td>£150</td>
                                        <td>5 - 20</td>
                                        <td>£19.95</td>
                                        <td>£400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Tanzania</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Thailand</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Togo</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£14.95</td>
                                        <td>£300</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Tokelau</td>
                                        <td>£7.5</td>
                                        <td>£150</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Tonga</td>
                                        <td>£13.5</td>
                                        <td>£270</td>
                                        <td>5 - 20</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Trinidad and Tobago</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£9.95</td>
                                        <td>£200</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Tunisia</td>
                                        <td>£4.95</td>
                                        <td>£100</td>
                                        <td>5 - 20</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Turkmenistan</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>7 - 15</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Turks and Caicos Islands</td>
                                        <td>£12.95</td>
                                        <td>£260</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Tuvalu</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>U.S. Virgin Islands</td>
                                        <td>£6</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Uganda</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£14.45</td>
                                        <td>£290</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>United Arab Emirates</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£13.95</td>
                                        <td>£280</td>
                                        <td>5 - 12</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>United States</td>
                                        <td>£2.5</td>
                                        <td>£50</td>
                                        <td>5 - 12</td>
                                        <td>£8.95</td>
                                        <td>£180</td>
                                        <td>5 - 10</td>
                                        <td>£15.45</td>
                                        <td>£320</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Uruguay</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Uzbekistan</td>
                                        <td>£6.5</td>
                                        <td>£130</td>
                                        <td>5 - 20</td>
                                        <td>£16.95</td>
                                        <td>£340</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Vanuatu</td>
                                        <td>£10.5</td>
                                        <td>£210</td>
                                        <td>5 - 20</td>
                                        <td>£16.95</td>
                                        <td>£340</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Venezuela</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Vietnam</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£10.95</td>
                                        <td>£220</td>
                                        <td>7 - 15</td>
                                        <td>£22.95</td>
                                        <td>£460</td>
                                        <td>2 - 3</td>
                                    </tr>
                                    <tr>
                                        <td>Wallis and Futuna</td>
                                        <td>£16</td>
                                        <td>£320</td>
                                        <td>5 - 20</td>
                                        <td>£69.95</td>
                                        <td>£1400</td>
                                        <td>7 - 15</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                    </tr>
                                    <tr>
                                        <td>Yemen</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>--</td>
                                        <td>£26.45</td>
                                        <td>£540</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Zambia</td>
                                        <td>£5.95</td>
                                        <td>£120</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>
                                    <tr>
                                        <td>Zimbabwe</td>
                                        <td>£5.5</td>
                                        <td>£110</td>
                                        <td>5 - 20</td>
                                        <td>£11.95</td>
                                        <td>£240</td>
                                        <td>7 - 15</td>
                                        <td>£27.95</td>
                                        <td>£560</td>
                                        <td>3 - 5</td>
                                    </tr>


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
