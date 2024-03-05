<header class="page-header">
    <div class="panel header">
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-sm-3 col-md-4 header-panel-left">
                    <ul class="header-panel links">
                        <li class="customer-welcome"><span class="customer-name logged-out" role="link" tabindex="0"
                                data-mage-init='{"dropdown":{}}' data-toggle="dropdown"
                                data-trigger-keypress-button="true" data-bind="scope: 'customer'"> <span> <span
                                        class="hidden-xs">Welcome,</span>Sign In</span> </span>
                            <div class="customer-menu" data-target="dropdown">
                                <ul>
                                    <li class="link authorization-link" data-label="or"><a
                                            href="#">Sign
                                            In</a></li>
                                    <li><a href="#" id="id5rI70Sai">Create an
                                            Account</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-xs-4 col-sm-6 col-md-4 header-panel-center hidden-xs">
                    <div class="club-link"><a class="join-club" href="#"
                            title="Save 15% forever. Find out how...">Save 15% forever. Find out how...</a>
                    </div>
                </div>
                <div class="col-xs-6 col-sm-3 col-md-4 header-panel-right">
                    <div class="switcher language switcher-language" id="switcher-language-header"><strong
                            class="label switcher-label"><span>Location</span></strong>
                        <div class="actions dropdown options switcher-options">
                            <div class="action toggle switcher-trigger" id="switcher-language-trigger-header">
                                <strong class="language"><span> <img
                                            src="{{asset('assets/static/version1702335172/frontend/Yoma/salonwholesale/en_GB/images/flags/sgbp.png')}}"
                                            alt="GBP £" />GBP £</span></strong>
                            </div>
                            <ul class="dropdown switcher-dropdown"
                                data-mage-init='{"dropdownDialog":{ "appendTo":"#switcher-language-header > .options", "triggerTarget":"#switcher-language-trigger-header", "closeOnMouseLeave": false, "triggerClass":"active", "parentClass":"active", "buttons":null}}'>
                                <div class="column">
                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"sgbp"}}'><img
                                                src='media/wysiwyg/flags/base.png' alt='GBP' /> GBP &pound;</a>
                                    </div>
                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"susd"}}'><img
                                                src='media/wysiwyg/flags/us.png' alt='USD $' /> USD $</a></div>
                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"seur"}}'><img
                                                src='media/wysiwyg/flags/eu.png' alt='EUR' /> EUR &euro;</a>
                                    </div>
                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"scad"}}'><img
                                                src='media/wysiwyg/flags/ca.png' alt='CAD CA$' /> CAD $</a>
                                    </div>
                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"saud"}}'><img
                                                src='media/wysiwyg/flags/au.png' alt='AU $' /> AUD $</a></div>

                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"sdnk"}}'><img
                                                src='media/wysiwyg/flags/dnk.png' alt='DKK' /> DKK Kr </a></div>
                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"snzl"}}'><img
                                                src='media/wysiwyg/flags/nzl.png' alt='NZD $' /> NZD $ </a>
                                    </div>
                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"snor"}}'><img
                                                src='media/wysiwyg/flags/nor.png' alt='NOK' /> NOK </a></div>
                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"sswe"}}'><img
                                                src='media/wysiwyg/flags/swe.png' alt='SEK' /> SEK </a></div>
                                    <div class="switcher-option"><a href='#'
                                            data-post='{"action":"https://www.salonwholesale.com/website/switcher/switch/","data":{"code":"sche"}}'><img
                                                src='media/wysiwyg/flags/che.png' alt='CHF' /> CHF </a></div>

                                </div>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 header-content-left">
                    <h1>Salon Wholesale</h1> <a class="logo" href="{{route('home')}}" title="Salon&#x20;Wholesale"
                        aria-label="store logo"><img
                            src="{{asset('assets/elogo.jpg')}}"
                            data-amsrc="https://www.salonwholesale.com/media/logo/websites/14/sw-logo.svg"
                            title="Salon&#x20;Wholesale" alt="Salon&#x20;Wholesale" width="430" style="max-width: 136px" /></a>
                </div>
                <div class="col-sm-6 header-content-right">
                    <div data-block="minicart" class="minicart-wrapper"><a class="action showcart"
                            href="#" data-bind="scope: 'minicart_content'"><span
                                class="cart-title">My Basket</span> <span
                                data-bind="css: {loaded: getCartParam('summary_count') !== false}"
                                class="item-count"><!-- ko text: getCartParam('summary_count') || 0 --><!-- /ko --><!-- ko i18n: ' Items' --><!-- /ko --></span>
                            <span class="cart-count" data-bind="html: getCartParam('subtotal')"></span></a>
                        <div id="minicart-content-wrapper" data-bind="scope: 'minicart_content'">
                            <!-- ko template: getTemplate() --><!-- /ko -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="top-navigation-bar">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-9"> <a href="#" class="toggle-button mobile-menu-button"
                        data-type="nav">Menu</a>
                    <nav class="top-navigation" role="navigation">
                        <ul>
                            <li class="home-link"><a href="{{route('home')}}">Home</a></li>
                            {{-- <li class="level0 nav-1 category-item first level-top parent"><a href="brands.html"
                                    class="level-top"><span>Brands</span></a>
                                <ul class="level0 submenu">
                                    <li class="level1 nav-1-1 category-item first"><a
                                            href="brands/american-crew.html"><span>American Crew</span></a></li>
                                    <li class="level1 nav-1-2 category-item"><a
                                            href="brands/andis.html"><span>Andis</span></a></li>
                                    <li class="level1 nav-1-3 category-item parent"><a
                                            href="brands/ardell.html"><span>Ardell</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-3-1 category-item first last"><a
                                                    href="brands/ardell/magnetic-lashes.html"><span>Magnetic
                                                        Lashes</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-4 category-item"><a
                                            href="brands/astra.html"><span>Astra</span></a></li>
                                    <li class="level1 nav-1-5 category-item"><a
                                            href="brands/babyliss.html"><span>BaByliss</span></a></li>
                                    <li class="level1 nav-1-6 category-item"><a
                                            href="brands/barber-loco.html"><span>Barber Loco</span></a></li>
                                    <li class="level1 nav-1-7 category-item parent"><a
                                            href="brands/cricket.html"><span>Cricket</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-7-1 category-item first"><a
                                                    href="brands/cricket/aprons.html"><span>Aprons</span></a>
                                            </li>
                                            <li class="level2 nav-1-7-2 category-item last"><a
                                                    href="brands/cricket/spray-bottles.html"><span>Spray
                                                        Bottles</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-8 category-item"><a
                                            href="brands/creative-image-adore.html"><span>Creative Image
                                                Adore</span></a></li>
                                    <li class="level1 nav-1-9 category-item"><a
                                            href="brands/d-fi.html"><span>D:fi</span></a></li>
                                    <li class="level1 nav-1-10 category-item parent"><a
                                            href="brands/dmi.html"><span>DMI</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-10-1 category-item first"><a
                                                    href="brands/dmi/cases.html"><span>Cases</span></a></li>
                                            <li class="level2 nav-1-10-2 category-item"><a
                                                    href="brands/dmi/hair-accessories.html"><span>Hair
                                                        Accessories</span></a></li>
                                            <li class="level2 nav-1-10-3 category-item last"><a
                                                    href="brands/dmi/waxing.html"><span>Waxing</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-11 category-item"><a
                                            href="brands/dear-barber.html"><span>Dear Barber</span></a></li>
                                    <li class="level1 nav-1-12 category-item parent"><a
                                            href="brands/denman.html"><span>Denman</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-12-1 category-item first"><a
                                                    href="brands/denman/curling-brushes.html"><span>Curling
                                                        Brushes</span></a></li>
                                            <li class="level2 nav-1-12-2 category-item last"><a
                                                    href="brands/denman/hair.html"><span>Dressing out
                                                        Brushes</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-13 category-item"><a
                                            href="brands/derby.html"><span>Derby</span></a></li>
                                    <li class="level1 nav-1-14 category-item"><a
                                            href="catalog/category/view/s/duru/id/18834/index.html"><span>Duru</span></a>
                                    </li>
                                    <li class="level1 nav-1-15 category-item"><a
                                            href="brands/eslabondexx.html"><span>Eslabondexx</span></a></li>
                                    <li class="level1 nav-1-16 category-item parent"><a
                                            href="brands/elizabeth-arden.html"><span>Elizabeth Arden</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-16-1 category-item first"><a
                                                    href="brands/elizabeth-arden/bodycare.html"><span>Bodycare</span></a>
                                            </li>
                                            <li class="level2 nav-1-16-2 category-item"><a
                                                    href="brands/elizabeth-arden/cleansers-toners.html"><span>Cleansers
                                                        &amp; Toners</span></a></li>
                                            <li class="level2 nav-1-16-3 category-item"><a
                                                    href="brands/elizabeth-arden/eyecare.html"><span>Eyecare</span></a>
                                            </li>
                                            <li class="level2 nav-1-16-4 category-item"><a
                                                    href="brands/elizabeth-arden/hand-cream.html"><span>Hand
                                                        Cream</span></a></li>
                                            <li class="level2 nav-1-16-5 category-item"><a
                                                    href="brands/elizabeth-arden/makeup.html"><span>Makeup</span></a>
                                            </li>
                                            <li class="level2 nav-1-16-6 category-item"><a
                                                    href="brands/elizabeth-arden/moisturisers.html"><span>Moisturisers</span></a>
                                            </li>
                                            <li class="level2 nav-1-16-7 category-item"><a
                                                    href="brands/elizabeth-arden/serums-capsules.html"><span>Serums
                                                        &amp; Capsules</span></a></li>
                                            <li class="level2 nav-1-16-8 category-item last"><a
                                                    href="brands/elizabeth-arden/sun-protection.html"><span>Sun
                                                        Protection</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-17 category-item"><a
                                            href="brands/fanola.html"><span>Fanola</span></a></li>
                                    <li class="level1 nav-1-18 category-item"><a
                                            href="brands/feather.html"><span>Feather</span></a></li>
                                    <li class="level1 nav-1-19 category-item"><a href="brands/fonex.html"><span>Fonex
                                                Gummy Professional</span></a>
                                    </li>
                                    <li class="level1 nav-1-20 category-item"><a
                                            href="brands/gelluv.html"><span>Gelluv</span></a></li>
                                    <li class="level1 nav-1-21 category-item parent"><a
                                            href="brands/goldwell.html"><span>Goldwell</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-21-1 category-item first"><a
                                                    href="brands/goldwell/style-sign.html"><span>Style
                                                        Sign</span></a></li>
                                            <li class="level2 nav-1-21-2 category-item"><a
                                                    href="brands/goldwell/dual-senses.html"><span>Dual
                                                        Senses</span></a></li>
                                            <li class="level2 nav-1-21-3 category-item"><a
                                                    href="brands/goldwell/curl-waves.html"><span>Curls &amp;
                                                        Waves</span></a></li>
                                            <li class="level2 nav-1-21-4 category-item last"><a
                                                    href="brands/goldwell/bond-pro.html"><span>Bond
                                                        Pro</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-22 category-item"><a
                                            href="brands/hairtools.html"><span>Hairtools</span></a></li>
                                    <li class="level1 nav-1-23 category-item"><a
                                            href="catalog/category/view/s/isinis/id/18832/index.html"><span>Isinis</span></a>
                                    </li>
                                    <li class="level1 nav-1-24 category-item"><a
                                            href="brands/it-s-a-10-miracle.html"><span>It&#039;s a 10
                                                Miracle</span></a></li>
                                    <li class="level1 nav-1-25 category-item parent"><a
                                            href="brands/joico.html"><span>Joico</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-25-1 category-item first"><a
                                                    href="brands/joico/shampoo.html"><span>Shampoo</span></a>
                                            </li>
                                            <li class="level2 nav-1-25-2 category-item"><a
                                                    href="brands/joico/conditioner.html"><span>Conditioner</span></a>
                                            </li>
                                            <li class="level2 nav-1-25-3 category-item"><a
                                                    href="brands/joico/treatments.html"><span>Treatments</span></a>
                                            </li>
                                            <li class="level2 nav-1-25-4 category-item last"><a
                                                    href="brands/joico/styling.html"><span>Styling</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-26 category-item parent"><a
                                            href="brands/kadus.html"><span>Kadus</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-26-1 category-item first"><a
                                                    href="brands/kadus/color-radiance.html"><span>Color
                                                        Radiance</span></a></li>
                                            <li class="level2 nav-1-26-2 category-item"><a
                                                    href="brands/kadus/visible-repair.html"><span>Visible
                                                        Repair</span></a></li>
                                            <li class="level2 nav-1-26-3 category-item"><a
                                                    href="brands/kadus/deep-moisture.html"><span>Deep
                                                        Moisture</span></a></li>
                                            <li class="level2 nav-1-26-4 category-item"><a
                                                    href="brands/kadus/impressive-volume.html"><span>Impressive
                                                        Volume</span></a></li>
                                            <li class="level2 nav-1-26-5 category-item"><a
                                                    href="brands/kadus/pure.html"><span>PURE</span></a></li>
                                            <li class="level2 nav-1-26-6 category-item"><a
                                                    href="brands/kadus/fiber-infusion.html"><span>Fiber
                                                        Infusion</span></a></li>
                                            <li class="level2 nav-1-26-7 category-item"><a
                                                    href="brands/kadus/velvet-oil.html"><span>Velvet
                                                        Oil</span></a></li>
                                            <li class="level2 nav-1-26-8 category-item"><a
                                                    href="brands/kadus/styling.html"><span>Styling</span></a>
                                            </li>
                                            <li class="level2 nav-1-26-9 category-item last"><a
                                                    href="brands/kadus/other.html"><span>Other</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-27 category-item parent"><a
                                            href="brands/l-oreal-professionnel.html"><span>L&#039;Oréal
                                                Professionnel</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-27-1 category-item first"><a
                                                    href="brands/l-oreal-professionnel/colour.html"><span>Colour</span></a>
                                            </li>
                                            <li class="level2 nav-1-27-2 category-item"><a
                                                    href="brands/l-oreal-professionnel/blond-studio.html"><span>Blond
                                                        Studio</span></a></li>
                                            <li class="level2 nav-1-27-3 category-item"><a
                                                    href="brands/l-oreal-professionnel/serioxyl.html"><span>Serioxyl</span></a>
                                            </li>
                                            <li class="level2 nav-1-27-4 category-item"><a
                                                    href="brands/l-oreal-professionnel/curl-expression.html"><span>Curl
                                                        Expression</span></a></li>
                                            <li class="level2 nav-1-27-5 category-item last"><a
                                                    href="brands/l-oreal-professionnel/developer-easi-meche.html"><span>Developer
                                                        &amp; Easi Meche</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-28 category-item parent"><a
                                            href="brands/matrix.html"><span>Matrix</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-28-1 category-item first"><a
                                                    href="brands/matrix/conditioner.html"><span>Conditioner</span></a>
                                            </li>
                                            <li class="level2 nav-1-28-2 category-item"><a
                                                    href="brands/matrix/colour.html"><span>Colour</span></a>
                                            </li>
                                            <li class="level2 nav-1-28-3 category-item last"><a
                                                    href="brands/matrix/styling.html"><span>Styling</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-29 category-item"><a
                                            href="catalog/category/view/s/medic/id/18830/index.html"><span>Medic</span></a>
                                    </li>
                                    <li class="level1 nav-1-30 category-item"><a
                                            href="brands/morgan-taylor.html"><span>Morgan Taylor</span></a></li>
                                    <li class="level1 nav-1-31 category-item"><a
                                            href="brands/nioxin.html"><span>Nioxin</span></a></li>
                                    <li class="level1 nav-1-32 category-item"><a
                                            href="brands/olaplex.html"><span>Olaplex</span></a></li>
                                    <li class="level1 nav-1-33 category-item"><a
                                            href="brands/osmo.html"><span>Osmo</span></a></li>
                                    <li class="level1 nav-1-34 category-item parent"><a
                                            href="brands/parker.html"><span>Parker</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-34-1 category-item first"><a
                                                    href="brands/parker/3-piece-safety-razors.html"><span>3
                                                        Piece Safety Razors</span></a></li>
                                            <li class="level2 nav-1-34-2 category-item"><a
                                                    href="brands/parker/adjustable-safety-razors-two-piece.html"><span>Adjustable
                                                        Safety Razors - Two Piece</span></a></li>
                                            <li class="level2 nav-1-34-3 category-item"><a
                                                    href="brands/parker/butterfly-open-safety-razors.html"><span>Butterfly
                                                        Open Safety Razors</span></a></li>
                                            <li class="level2 nav-1-34-4 category-item"><a
                                                    href="brands/parker/barber-shavette-razors.html"><span>Barber/Shavette
                                                        Razors</span></a></li>
                                            <li class="level2 nav-1-34-5 category-item"><a
                                                    href="brands/parker/injector-razor-blades.html"><span>Injector
                                                        Razor &amp; Blades</span></a></li>
                                            <li class="level2 nav-1-34-6 category-item"><a
                                                    href="brands/parker/cartridge-razors.html"><span>Cartridge
                                                        Razors</span></a></li>
                                            <li class="level2 nav-1-34-7 category-item"><a
                                                    href="brands/parker/horn-handle-safety-razors.html"><span>Horn
                                                        Handle Safety Razors</span></a></li>
                                            <li class="level2 nav-1-34-8 category-item last"><a
                                                    href="brands/parker/brushes-accessories.html"><span>Brushes
                                                        &amp; Accessories </span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-35 category-item"><a
                                            href="brands/philip-kingsley.html"><span>Philip Kingsley</span></a>
                                    </li>
                                    <li class="level1 nav-1-36 category-item parent"><a
                                            href="brands/proraso.html"><span>Proraso</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-36-1 category-item first last"><a
                                                    href="brands/proraso/other.html"><span>Other</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-37 category-item"><a href="brands/pomp-co.html"><span>Pomp
                                                &amp; Co</span></a></li>
                                    <li class="level1 nav-1-38 category-item"><a
                                            href="brands/revlon.html"><span>Revlon</span></a></li>
                                    <li class="level1 nav-1-39 category-item"><a
                                            href="brands/salon-ethos.html"><span>Salon Ethos</span></a></li>
                                    <li class="level1 nav-1-40 category-item parent"><a
                                            href="brands/schwarzkopf.html"><span>Schwarzkopf</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-40-1 category-item first parent"><a
                                                    href="brands/schwarzkopf/mad-about-curls-and-waves.html"><span>Mad
                                                        About Curls &amp; Waves</span></a>
                                                <ul class="level2 submenu">
                                                    <li class="level3 nav-1-40-1-1 category-item first"><a
                                                            href="brands/schwarzkopf/mad-about-curls-and-waves/mad-about-curls.html"><span>Mad
                                                                About Curls</span></a></li>
                                                    <li class="level3 nav-1-40-1-2 category-item last"><a
                                                            href="brands/schwarzkopf/mad-about-curls-and-waves/mad-about-waves.html"><span>Mad
                                                                About Waves</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level2 nav-1-40-2 category-item"><a
                                                    href="brands/schwarzkopf/mad-about-lengths.html"><span>Mad
                                                        About Lengths</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-41 category-item parent"><a
                                            href="brands/bluebeards-revenge.html"><span>The Bluebeards
                                                Revenge</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-41-1 category-item first"><a
                                                    href="brands/bluebeards-revenge/shave.html"><span>Shave</span></a>
                                            </li>
                                            <li class="level2 nav-1-41-2 category-item"><a
                                                    href="brands/bluebeards-revenge/hair-styling.html"><span>Hair
                                                        Products</span></a></li>
                                            <li class="level2 nav-1-41-3 category-item"><a
                                                    href="brands/bluebeards-revenge/moustache-beard.html"><span>Moustache
                                                        &amp; Beard</span></a></li>
                                            <li class="level2 nav-1-41-4 category-item"><a
                                                    href="brands/bluebeards-revenge/the-bluebeards-revenge-soap-alum-block.html"><span>Soap
                                                        &amp; Alum Block</span></a></li>
                                            <li class="level2 nav-1-41-5 category-item last"><a
                                                    href="brands/bluebeards-revenge/body.html"><span>Body</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-42 category-item parent"><a
                                            href="brands/the-edge.html"><span>The Edge Nails</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-42-1 category-item first"><a
                                                    href="brands/the-edge/top-base-coat.html"><span>Top &amp;
                                                        Base Coat</span></a></li>
                                            <li class="level2 nav-1-42-2 category-item last"><a
                                                    href="brands/the-edge/acetone.html"><span>Acetone</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-43 category-item"><a
                                            href="brands/vines-vintage.html"><span>Vines Vintage</span></a></li>
                                    <li class="level1 nav-1-44 category-item parent"><a
                                            href="brands/wahl.html"><span>Wahl</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-44-1 category-item first"><a
                                                    href="brands/wahl/trimmers.html"><span>Trimmers</span></a>
                                            </li>
                                            <li class="level2 nav-1-44-2 category-item"><a
                                                    href="brands/wahl/5-star.html"><span>5 Star</span></a></li>
                                            <li class="level2 nav-1-44-3 category-item"><a
                                                    href="brands/wahl/brushes-and-combs.html"><span>Hair
                                                        Combs</span></a></li>
                                            <li class="level2 nav-1-44-4 category-item last"><a
                                                    href="brands/wahl/accessories.html"><span>Accessories</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-45 category-item parent"><a
                                            href="brands/wella.html"><span>Wella Professional</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-1-45-1 category-item first"><a
                                                    href="brands/wella/colour.html"><span>Hair Colour</span></a>
                                            </li>
                                            <li class="level2 nav-1-45-2 category-item"><a
                                                    href="brands/wella/fusion.html"><span>Fusion</span></a></li>
                                            <li class="level2 nav-1-45-3 category-item parent"><a
                                                    href="brands/wella/invigo.html"><span>Invigo</span></a>
                                                <ul class="level2 submenu">
                                                    <li class="level3 nav-1-45-3-1 category-item first last"><a
                                                            href="brands/wella/invigo/aqua-pure.html"><span>Aqua
                                                                Pure</span></a></li>
                                                </ul>
                                            </li>
                                            <li class="level2 nav-1-45-4 category-item"><a
                                                    href="brands/wella/elements.html"><span>Elements</span></a>
                                            </li>
                                            <li class="level2 nav-1-45-5 category-item"><a
                                                    href="brands/wella/blondor-freelights.html"><span>Blondor
                                                        Freelights</span></a></li>
                                            <li class="level2 nav-1-45-6 category-item"><a
                                                    href="brands/wella/welloxon.html"><span>Welloxon</span></a>
                                            </li>
                                            <li class="level2 nav-1-45-7 category-item last"><a
                                                    href="brands/wella/color-fresh.html"><span>Color
                                                        Fresh</span></a></li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-1-46 category-item"><a
                                            href="brands/pulp-riot.html"><span>Pulp Riot</span></a></li>
                                    <li class="level1 nav-1-47 category-item"><a
                                            href="brands/system-professional.html"><span>System
                                                Professional</span></a></li>
                                    <li class="level1 nav-1-48 category-item"><a
                                            href="brands/lj-professional.html"><span>LJ Professional</span></a>
                                    </li>
                                    <li class="view-all-brands"><a href="brands.html">View All Brands</a></li>
                                    <li class="top-nav-widget top-nav-widget-6194 brands">.<a
                                            href="brands/american-crew.html">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                data-amsrc="https://www.salonwholesale.com/media/wysiwyg/brand-top-brands_1.jpg"
                                                alt="" />
                                        </a></li>
                                </ul>
                            </li> --}}
                            {{-- <li class="level0 nav-2 category-item level-top parent"><a href="hair-colour.html"
                                    class="level-top"><span>Colour</span></a>
                                <ul class="level0 submenu">
                                    <li class="shop-all"><a href="hair-colour.html">Shop All Colour</a></li>
                                    <li class="level1 nav-2-1 category-item first"><a
                                            href="products/hair-colour/permanent.html"><span>Permanent</span></a>
                                    </li>
                                    <li class="level1 nav-2-2 category-item"><a
                                            href="hair-colour/semi-permenant.html"><span>Semi-Permanent</span></a>
                                    </li>
                                    <li class="level1 nav-2-3 category-item"><a
                                            href="hair-colour/demi-permanent.html"><span>Demi-Permanent</span></a>
                                    </li>
                                    <li class="level1 nav-2-4 category-item"><a
                                            href="hair-colour/wash-in.html"><span>Wash In, Wash Out</span></a>
                                    </li>
                                    <li class="level1 nav-2-5 category-item"><a
                                            href="hair-colour/root-touch-up.html"><span>Root Touch Up</span></a>
                                    </li>
                                    <li class="level1 nav-2-6 category-item"><a
                                            href="hair-colour/bleach.html"><span>Bleach</span></a></li>
                                    <li class="level1 nav-2-7 category-item"><a
                                            href="hair-colour/developer.html"><span>Developer</span></a></li>
                                    <li class="level1 nav-2-8 category-item"><a
                                            href="products/hair-colour/neutraliser.html"><span>Neutraliser</span></a>
                                    </li>
                                    <li class="level1 nav-2-9 category-item"><a
                                            href="catalog/category/view/s/treatments/id/18824/index.html"><span>Treatments</span></a>
                                    </li>
                                    <li class="level1 nav-2-10 category-item"><a
                                            href="products/hair-colour/foils.html"><span>Hair Foil</span></a>
                                    </li>
                                    <li class="level1 nav-2-11 category-item last"><a
                                            href="products/hair-colour/essentials.html"><span>Essentials</span></a>
                                    </li>
                                </ul>
                            </li> --}}
                            <li class="level0 nav-3 category-item level-top parent"><a href="{{route('hair')}}"
                                    class="level-top"><span>Hair</span></a>
                                <ul class="level0 submenu">
                                    <li class="shop-all"><a href="{{route('hair')}}">Shop All Hair</a></li>
                                    <li class="level1 nav-3-1 category-item first"><a
                                            href="{{route('shampoo')}}"><span>Shampoo</span></a></li>
                                    <li class="level1 nav-3-2 category-item"><a
                                            href="{{route('conditioner')}}"><span>Conditioner</span></a></li>
                                    <li class="level1 nav-3-3 category-item"><a
                                            href="{{route('oils.treatments')}}"><span>Oils &amp;
                                                Treatments</span></a></li>
                                    <li class="level1 nav-3-4 category-item"><a href="{{route('hair.masks')}}"><span>Hair
                                                Masks</span></a></li>
                                    <li class="level1 nav-3-5 category-item"><a href="{{route('tonics')}}"><span>Hair
                                                Tonic</span></a></li>
                                    <li class="level1 nav-3-6 category-item"><a
                                            href="{{route('styling')}}"><span>Styling</span></a></li>
                                    <li class="level1 nav-3-7 category-item parent"><a
                                            href="{{route('brushes-combs')}}"><span>Hair Brushes &amp;
                                                Combs</span></a>
                                        <ul class="level1 submenu"></ul>
                                    </li>
                                    <li class="level1 nav-3-8 category-item"><a
                                            href="{{route('perming')}}"><span>Perming</span></a></li>
                                   
                                    <li class="level1 nav-3-10 category-item parent"><a
                                            href="{{route('electricals')}}"><span>Electricals</span></a>
                                        <ul class="level1 submenu"></ul>
                                    </li>
                                    <li class="level1 nav-3-11 category-item last"><a
                                            href="{{route('essentials')}}"><span>Essentials</span></a></li>
                                    <li class="top-nav-widget top-nav-widget-6198 other">.<a
                                            href="brands/redken.html">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                data-amsrc="https://www.salonwholesale.com/media/wysiwyg/hair-top-brand.jpg"
                                                alt="" />
                                        </a></li>
                                </ul>
                            </li>

                            {{-- <li class="level0 nav-4 category-item level-top"><a href="scissors.html"
                                    class="level-top"><span>Scissors</span></a></li> --}}
                            <li class="level0 nav-5 category-item level-top parent"><a href="{{ route('beauty') }}"
                                    class="level-top"><span>Beauty</span></a>
                                <ul class="level0 submenu">
                                    <li class="shop-all"><a href="{{ route('beauty') }}">Shop All Beauty</a></li>
                                    <li class="level1 nav-5-1 category-item first"><a
                                            href="{{ route('nail') }}"><span>Nail, Manicure &amp;
                                                Pedicure</span></a></li>
                                    <li class="level1 nav-5-2 category-item"><a
                                            href="{{ route('lashes-brows') }}"><span>Lashes &amp; Brows</span></a>
                                    </li>
                                    <li class="level1 nav-5-3 category-item parent"><a
                                            href="{{ route('skincare') }}"><span>Skincare</span></a>
                                        <ul class="level1 submenu">
                                            <li class="level2 nav-5-3-1 category-item first"><a
                                                    href="{{ route('foundation') }}"><span>Foundation</span></a>
                                            </li>
                                            <li class="level2 nav-5-3-2 category-item last"><a
                                                    href="{{ route('makeup') }}"><span>Makeup</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="level1 nav-5-4 category-item"><a
                                            href="{{ route('tanning') }}"><span>Tanning</span></a></li>
                                    <li class="level1 nav-5-5 category-item"><a
                                            href="{{ route('hair-removal') }}"><span>Hair Removal</span></a></li>
                                    <li class="level1 nav-5-6 category-item"><a href="{{ route('tools') }}"><span>Beauty
                                                Tools</span></a></li>
                                    {{-- <li class="level1 nav-5-7 category-item last"><a
                                            href="catalog/category/view/s/nail/id/18950/index.html"><span>Nail</span></a>
                                    </li> --}}
                                    <li class="top-nav-widget top-nav-widget-6265 other">.<a
                                            href="brands/morgan-taylor.html">
                                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR4nGP6zwAAAgcBApocMXEAAAAASUVORK5CYII="
                                                data-amsrc="https://www.salonwholesale.com/media/wysiwyg/beauty-top-brand.jpg"
                                                alt="" />
                                        </a></li>
                                </ul>
                            </li>

                             <li class="level0 nav-4 category-item level-top"><a href="{{route('contact-us')}}"
                                    class="level-top"><span>Contact Us</span></a></li>

                                     <li class="level0 nav-4 category-item level-top"><a href="{{route('about-us')}}"
                                    class="level-top"><span>About Us</span></a></li>

                                     <li class="level0 nav-4 category-item level-top"><a href="{{route('faqs')}}"
                                    class="level-top"><span>FAQs</span></a></li>

                            {{-- <li class="level0 nav-6 category-item level-top parent"><a href="barber.html"
                                    class="level-top"><span>Barber</span></a>
                                <ul class="level0 submenu">
                                    <li class="shop-all"><a href="barber.html">Shop All Barber</a></li>
                                    <li class="level1 nav-6-1 category-item first parent"><a
                                            href="barber/hair-clippers.html"><span>Hair Clippers, Trimmers &amp;
                                                Dryers</span></a>
                                        <ul class="level1 submenu"></ul>
                                    </li>
                                    <li class="level1 nav-6-2 category-item"><a href="barber/styling.html"><span>Hair
                                                Styling Product</span></a>
                                    </li>
                                    <li class="level1 nav-6-3 category-item"><a
                                            href="barber/shaving-creams-soaps.html"><span>Shaving Creams &amp;
                                                Soaps</span></a></li>
                                    <li class="level1 nav-6-4 category-item"><a
                                            href="barber/shaving-accessories.html"><span>Shaving
                                                Accessories</span></a></li>
                                    <li class="level1 nav-6-5 category-item"><a
                                            href="barber/pre-and-post-shave.html"><span>Pre and Post
                                                Shave</span></a></li>
                                    <li class="level1 nav-6-6 category-item"><a href="barber/razors.html"><span>Mens
                                                Razors</span></a></li>
                                    <li class="level1 nav-6-7 category-item"><a
                                            href="barber/razor-blades.html"><span>Razor Blades</span></a></li>
                                    <li class="level1 nav-6-8 category-item"><a
                                            href="barber/beard-moustache.html"><span>Beard &amp;
                                                Moustache</span></a></li>
                                    <li class="level1 nav-6-9 category-item"><a href="barber/shampoo.html"><span>Mens
                                                Shampoo</span></a></li>
                                    <li class="level1 nav-6-10 category-item"><a
                                            href="barber/conditioner.html"><span>Mens Conditioner</span></a>
                                    </li>
                                    <li class="level1 nav-6-11 category-item"><a
                                            href="barber/body-wash.html"><span>Body Wash</span></a></li>
                                    <li class="level1 nav-6-12 category-item"><a
                                            href="barber/skincare.html"><span>Skincare</span></a></li>
                                    <li class="level1 nav-6-13 category-item last"><a
                                            href="barber/hair-grippers.html"><span>Hair Grippers</span></a></li>
                                </ul>
                            </li>
                            <li class="level0 nav-7 category-item last level-top parent"><a href="essentials.html"
                                    class="level-top"><span>Essentials</span></a>
                                <ul class="level0 submenu">
                                    <li class="shop-all"><a href="essentials.html">Shop All Essentials</a></li>
                                    <li class="level1 nav-7-1 category-item first"><a
                                            href="essentials/furniture.html"><span>Salon Furniture</span></a>
                                    </li>
                                    <li class="level1 nav-7-2 category-item"><a
                                            href="essentials/hygiene.html"><span>Salon Hygiene</span></a></li>
                                    <li class="level1 nav-7-3 category-item"><a
                                            href="essentials/stationery.html"><span>Salon Stationery</span></a>
                                    </li>
                                    <li class="level1 nav-7-4 category-item"><a
                                            href="essentials/towels.html"><span>Towels</span></a></li>
                                    <li class="level1 nav-7-5 category-item last"><a
                                            href="essentials/salon-wear.html"><span>Salon Wear</span></a></li>
                                    <li class="top-nav-widget top-nav-widget-6268 other">.<a
                                            href="essentials/brand/kodo.html">
                                            <img src="media/wysiwyg/essentials-topbrand.jpg" alt="" />
                                        </a></li>
                                </ul>
                            </li> --}}
                        </ul>
                    </nav>
                </div>
                {{-- <div class="col-sm-8 col-md-3"> <a href="#" class="toggle-button mobile-search-button"
                        data-type="search">Search</a>
                    <form class="form minisearch" id="search_mini_form"
                        action="https://www.salonwholesale.com/catalogsearch/result/" method="get">
                        <div class="form-row">
                            <div class='search-container'><input id="search"
                                    data-mage-init='{"quickSearch":{"formSelector":"#search_mini_form","url":"https:\/\/www.salonwholesale.com\/search\/ajax\/suggest\/","destinationSelector":"#search_autocomplete"}}'
                                    type="text" name="q" value="" placeholder="I'm searching for.."
                                    class="input-text" maxlength="100" role="combobox" aria-haspopup="false"
                                    aria-autocomplete="both" autocomplete="off" /></div><button type="submit"
                                title="Search" class="action search"><span>Search</span></button>
                        </div>
                        <div id="search_autocomplete" class="search-autocomplete"></div>
                    </form>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="header-usps">
        <div class="container">
            <div class="row">
                <div data-content-type="html" data-appearance="default" data-element="main" data-decoded="true">
                    <div class='col-sm-4  hidden-xs' data-col="col">
                        <div class='usp'>
                            <span>
                                <a href="{{route('delivery.information')}}"> Free Delivery</a>
                            </span>
                        </div>
                    </div>
                    <div class='col-sm-4'>
                        <div class='usp'>
                            <span>
                                <a href="#"> Buy Any 6 Products Get 15% Off </a>
                            </span>
                        </div>
                    </div>
                    <div class='col-sm-4 hidden-xs'>
                        <div class='usp'>
                                <span>
                                        <a href="#">
                                            <img src="https://www.salonwholesale.com/media/reviewsio/reviewsio-logo-white.svg"
                                                data-amsrc="https://www.salonwholesale.com/media/reviewsio/reviewsio-logo-white.svg"
                                                alt="Reviews.io Logo" width="120" height="20" /><img
                                                src="https://www.salonwholesale.com/media/reviewsio/starswhite.png"
                                                data-amsrc="https://www.salonwholesale.com/media/reviewsio/starswhite.png"
                                                alt="Reviews.io Stars" width="100" height="20" />
                                        </a>
                                    </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
