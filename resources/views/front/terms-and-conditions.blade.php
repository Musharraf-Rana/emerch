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
                    <div class="main-content col-xs-12">
                        <div class="page-title-wrapper">
                            <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Terms &amp;
                                    Conditions</span></h1>
                        </div><input name="form_key" type="hidden" value="pA8jICjYlj81P9d2">
                        <div id="authenticationPopup" data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                            <!-- ko template: getTemplate() --><!-- /ko --> </div>
                        <div id="monkey_campaign" style="display:none;"
                            data-mage-init="{&quot;campaigncatcher&quot;:{&quot;checkCampaignUrl&quot;: &quot;https://www.salonwholesale.com/mailchimp/campaign/check/&quot;}}">
                        </div>
                        <div
                            data-mage-init="{&quot;Mirasvit_CacheWarmer\/js\/track&quot;:{&quot;pageType&quot;:&quot;cms_page_view&quot;,&quot;url&quot;:&quot;https:\/\/www.salonwholesale.com\/cache_warmer\/track\/&quot;,&quot;cookieName&quot;:&quot;mst-cache-warmer-track&quot;,&quot;cookieValue&quot;:null}}">
                        </div>
                        <div align="justify">
                            <p><b>1. Terms and Conditions.</b></p>
                            <p><b>2. Information about us.</b></p>
                            <p><b>3. Changing terms.</b></p>
                            <p><b>4. Ordering through www.salonwholesale.com.</b></p>
                            <p><b>5. Secure.</b></p>
                            <p><b>6. Privacy Policy.</b></p>
                            <p><b>7. Pricing.</b></p>
                            <p><b>8. Delivery.</b></p>
                            <p><b>9. Cancelling, returning, refunding.</b></p>
                            <p><b>10. Our liability.</b></p>
                            <p><b>11. Transfer of rights and obligations.</b></p>
                            <p><b>12. Events outside our control.</b></p>
                            <p><b>13. Waiver.</b></p>
                            <p><b>14. Severability.</b></p>
                            <p><b>15. Copyright and Other Intellectual Property Rights.</b></p>
                            <p><b>16. All Competitions.</b></p>
                            <p><b>17. Terms and conditions relating to specfic discounts, promotions and competitions:.</b>
                            </p>
                            <p><b>18. Reviews.</b></p>
                            <p><b>19. Gifts with products promotions.</b></p>
                            <p><b>20. Promotion Codes.</b></p>
                            <p><b>21. Notices.</b></p>
                            <p><b>22. Indemnity.</b></p>
                            <p><b>23. Entire agreement.</b></p>
                            <br>
                            <br>

                            <p><b>1. Terms and Conditions</b></p>
                            <p>
                            </p>
                            <p>These terms and conditions (the “terms”) apply to you, the user, when you access or visit the
                                website www.salonwholesale.com (the “website”). By accessing this website you agree to be
                                bound by these terms and conditions.</p>
                            <p><b>2. Information About Us</b></p>
                            <p>www.salonwholesale.com is a site operated by Devlnd Ltd, a company registered in the United
                                Kingdom. Registration number 09481760. Our registered address is 195 South Liberty Lane,
                                Ashton, Bristol, BS3 2TN. Our VAT number is 216224638.</p>
                            <p><b>3. Changing terms</b></p>
                            <p>We reserve the right to change or modify these terms and conditions from time to time as we
                                deem appropriate. It is your responsibility to check for such changes. If you do not wish to
                                accept such changes then you should not continue to use our website.By continuing to use the
                                website, this will indicate you agree to be bound by the new Terms.</p>
                            <p><b>4. Ordering through www.salonwholesale.com</b></p>
                            <p>All orders are subject to acceptance and availability. When placing an order with
                                www.salonwholesale.com you will receive an email from us acknowledging that we have received
                                your order. Any orders placed by you are deemed to be an offer of purchase and are subject
                                to us accepting the order. Receiving an order confirmation does not constitute an acceptance
                                of your offer to purchase goods. The contract between us and you will only be formed when we
                                dispatch your order, a process that we will confirm with you via email.</p>
                            <p><b>5. Secure</b></p>
                            <p>www.salonwholesale.com will take all reasonable care, in so far as it is in our power to do
                                so, to keep the details of your order and payment secure, but in the abscence of negligence
                                on our part we cannot be held liable for any loss you may suffer if a third party procures
                                unauthorised access to any data provided by you when you acess or order from our website.
                            </p>
                            <p>Unfortunately, transmitting information via the internet is not completely secure. Whilst we
                                will do our best to protect your personal data, we cannot guarantee the security of your
                                data transmitted to the Website; any transmission is entirely at your own risk. Once we
                                receive your information, we will use strict procedures and security features to try and
                                prevent unauthorised access.</p>
                            <p><b>6. Privacy Policy</b></p>
                            <p>We will treat all your personal information as confidential and will only use it in
                                accordance with ourPrivacy Policy.</p>
                            <p>When you shop on this Website, we will ask you to input personal details in order for us to
                                identify you, such as your name, e-mail address, billing address, delivery address, credit
                                card or other payment information. We confirm that this information will be held by us in
                                accordance with the registration we have with the Data Commissioner's office.</p>
                            <p><b>7. Pricing</b></p>
                            <p>The price of a product shall be as stated on this Website at the time you place your order
                                except in the case of obvious error. The Website contains a large number of products. It is
                                always possible that, despite our reasonable efforts, some of the products on the Website
                                may be incorrectly priced. If we discover an error in the price of a product you have
                                ordered, we will not be liable to supply that item to you at the stated price, provided that
                                we notify you before we despatch the item to you. We will inform you of this error and we
                                will give you the option of continuing to purchase the product at the correct price or
                                cancelling your order. We will not process your order until we have your instructions. If we
                                are unable to contact you using the contact details you provided during the order process,
                                we will treat the order as cancelled and notify you in writing.</p>
                            <p><b>8. Delivery</b></p>
                            <p>Any delivery date shall be seen as an estimate only, although our policy is to try to
                                despatch all orders within 3 working days. If products are not available at the time of your
                                order they will be sent to you, as soon as possible, when we receive them from the supplier.
                                www.salonwholesale.com cannot be held responsible for delivery delays caused by the
                                supplier, the carrier or any other third party.</p>
                            <p>We deliver to the countries listed on the Website, subject to our absolute discretion.
                                However certains goods have certain restrictions , so please review the information on the
                                Website carefully before ordering goods.</p>
                            <p>If you order goods from the Website for delivery to an international destination, your order
                                may be subject to import duties and taxes which are applied when the delivery reaches that
                                destination. Please note that we have no control over these charges and we cannot predict
                                their amount.</p>
                            <p>You will be responsible for payment of any such import duties and taxes. Please contact your
                                local customs office for further information before placing your order.</p>
                            <p>You must comply with all applicable laws and regulations of the country for which the
                                Products are destined. We will not be liable or responsible if you break any such law.</p>
                            <p>The Customer will assume risk of the products ordered once they have been delivered to the
                                address specified on the Order.emerch junction accept no liability for undelivered parcels
                                where the Customer provides an incorrect or invalid delivery address and/or fails to collect
                                the Order from the delivery address specified.</p>
                            <p>Where the goods are signed for, the customer bears the risk once the goods are signed for. If
                                a customer believes that a parcel has been tampered with, it is their responsibility to
                                refuse to sign for the goods.</p>
                            <p><b>9. Cancelling, returning, refunding</b></p>
                            <p>You may cancel a Contract at any time within fourteen working days, beginning the day after
                                you receive the Products. You will receive a full refund of the price paid for the Products
                                in accordance with our refunds policy (see below).
                                You must inform us in writing to cancel a Contract. You must return the Product(s)
                                immediately, in the same condition in which you received them, at your own cost and risk.
                                You have a legal obligation to take reasonable care of the Products while they are in your
                                possession. If you fail to comply with this obligation, we may have a right of action
                                against you for compensation.
                            </p>
                            <p>This provision does not affect your statutory rights.</p>
                            <p>When you return a Product to us we will process the refund due to you as soon as possible. In
                                this case, we will refund the price of the Product in full, including the cost of sending
                                the item to you. However, you will be responsible for the cost of returning the item to us.
                            </p>
                            <p>Products returned by you because of a defect will be refunded in full, including a refund of
                                the delivery charges for sending the item to you and the cost incurred by you in returning
                                the item to us.</p>
                            <p>We will usually refund any money received from you using the same method originally used by
                                you to pay for your purchase.</p>
                            <p><b>10. Our liability</b></p>
                            <p>We warrant that any Product purchased from us through our site is of satisfactory quality and
                                reasonably fit for all the purposes for which products of the kind are commonly supplied.
                            </p>
                            <p>Our liability for losses you suffer as a result of us breaking this agreement is strictly
                                limited to the purchase price of the Product you purchased [and any losses which are a
                                foreseeable consequence of us breaking the agreement. Losses are foreseeable where they
                                could be contemplated by you and us at the time your order is accepted by us].</p>
                            <p>This does not include or limit in any way our liability:</p>
                            <p>(a) For death or personal injury caused by our negligence;</p>
                            <p>(b) Under section 2(3) of the Consumer Protection Act 1987;</p>
                            <p>(c) For fraud or fraudulent misrepresentation; or</p>
                            <p>(d) For any matter for which it would be illegal for us to exclude, or attempt to exclude,
                                our liability.</p>
                            <p>We are not responsible for indirect losses which happen as a side effect of the main loss or
                                damage [and which are not foreseeable by you and us], including but not limited to:</p>
                            <p>(a) loss of income or revenue</p>
                            <p>(b) loss of business</p>
                            <p>(c) loss of profits or contracts</p>
                            <p>(d) loss of anticipated savings</p>
                            <p>(e) loss of data or</p>
                            <p>(g) waste of management or office time however arising and whether caused by tort (including
                                negligence), breach of contract or otherwise, even if foreseeable; provided this shall not
                                prevent claims for loss of or damage to your tangible property or any other claims for
                                direct financial loss that are not excluded by any other terms in these conditions</p>
                            <p><b>11. Transfer of rights and obligations</b></p>
                            <p>The contract between you and us is binding on you and us.</p>
                            <p>You may not transfer, assign, charge or otherwise dispose of a Contract, or any of your
                                rights or obligations arising under it, without our prior written consent.</p>
                            <p>We may transfer, assign, charge, sub-contract or otherwise dispose of a Contract, or any of
                                our rights or obligations arising under it, at any time during the term of the Contract.
                            </p>
                            <p><b>12. Events outside our control</b></p>
                            <p>We will not be liable or responsible for any failure to perform, or delay in performance of,
                                any of our obligations under a Contract that is caused by events outside our reasonable
                                control (Force Majeure Event).</p>
                            <p>A Force Majeure Event includes any act, event, non-happening, omission or accident beyond our
                                reasonable control and includes in particular (without limitation) the following:</p>
                            <p>(a) Strikes, lock-outs or other industrial action.</p>
                            <p>(b) Civil commotion, riot, invasion, terrorist attack or threat of terrorist attack, war
                                (whether declared or not) or threat or preparation for war.</p>
                            <p>(c) Fire, explosion, storm, flood, earthquake, subsidence, epidemic or other natural
                                disaster.</p>
                            <p>(d) Impossibility of the use of railways, shipping, aircraft, motor transport or other means
                                of public or private transport.</p>
                            <p>(e) Impossibility of the use of public or private telecommunications networks.</p>
                            <p>(f) The acts, decrees, legislation, regulations or restrictions of any government.</p>
                            <p>Our performance under any Contract is deemed to be suspended for the period that the Force
                                Majeure Event continues, and we will have an extension of time for performance for the
                                duration of that period. We will use our reasonable endeavours to bring the Force Majeure
                                Event to a close or to find a solution by which our obligations under the Contract may be
                                performed despite the Force Majeure Event.</p>
                            <p><b>13. Waiver</b></p>
                            <p>If we fail, at any time during the term of a Contract, to insist upon strict performance of
                                any of your obligations under the Contract or any of these terms and conditions, or if we
                                fail to exercise any of the rights or remedies to which we are entitled under the Contract,
                                this shall not constitute a waiver of such rights or remedies and shall not relieve you from
                                compliance with such obligations.</p>
                            <p>A waiver by us of any default shall not constitute a waiver of any subsequent default.
                                No waiver by us of any of these terms and conditions shall be effective unless it is
                                expressly stated to be a waiver and is communicated to you in writing.</p>
                            <p><b>14. Severability</b></p>
                            <p>If any of these terms and Conditions or any provisions of a Contract are determined by any
                                competent authority to be invalid, unlawful or unenforceable to any extent, such term,
                                condition or provision will to that extent be severed from the remaining terms, conditions
                                and provisions which will continue to be valid to the fullest extent permitted by law.</p>
                            <p><b>15. Copyright and Other Intellectual Property Rights</b></p>
                            <p>By using the website you are granted no rights in relation to copyright, design rights, trade
                                marks or other of our intellectual property rights (or the intellectual property rights of
                                third parties).</p>
                            <p>The website is provided to you solely for personal, non-commercial use. You may
                                electronically copy and print only those areas of the Website which are required in the
                                process of using the Website as a shopping resource. The content of the Website may not be
                                used for any other purpose without our express written permission.</p>
                            <p>The Customer shall respect all licence agreements delivered by the copyright owners.
                                www.salonwholesale.com cannot be held responsible or liable for any misuses conducted by the
                                Customer or any third party.</p>
                            <p>All trademarks shown on www.salonwholesale.com belong to their registered owners and must not
                                be copied without prior permission.</p>
                            <p>You must not use any part of the materials on the Website for commercial purposes without
                                obtaining a licence to do so from us or our licensors.</p>
                            <p><b>16. All Competitions</b></p>
                            <p>We reserve the right to amend these Terms without notice from time to time.</p>
                            <p>These rules will be deemed as applying to each competition unless any specific instruction in
                                a competition provides otherwise.</p>
                            <p>By entering the competition entrants will be deemed to have read and understood these Terms
                                and be bound by them. All our decisions will be final and binding, no correspondence will be
                                entered into.</p>
                            <p>Any employee or immediate family of an employee of www.salonwholesale.com, or any other
                                person directly connected with the organisation of any particular competition is ineligible
                                to participate.</p>
                            <p>Competitions are only open to residents of the UK unless otherwise stated.</p>
                            <p>All entrants are to be aged 18 or over unless any other age restriction is specified or
                                implied. Entrants should, if under 18, obtain permission in advance from their parent or
                                guardian.</p>
                            <p>All entries must be received by the closing date specified in the competition. We take no
                                responsibility for any answers that are misdirected, lost for technical or other reasons or
                                received after the closing date.</p>
                            <p>We reserve the absolute right to disqualify without notice any entries that we consider have
                                entered using improper means and/or we believe is fraudulent.</p>
                            <p>Entrants are entirely liable for their costs to access computer networks.</p>
                            <p>We will not accept any responsibility or be liable for: (i) any failure by the winner or any
                                entrant to comply with these terms and conditions; (ii) any disruption, delay or
                                misdirection of entries; or (iii) any server, system or network failures, malfunctioning or
                                inaccessibility.</p>
                            <p>We shall be the promoter of all competitions subject to these terms and conditions unless
                                stated otherwise.</p>
                            <p>If for any reason we discover that an advertised prize is no longer available then
                                www.salonwholesale.com reserves the right at our absolute discretion to substitute a similar
                                prize of equivalent or greater value.</p>
                            <p>We will only award one prize per household.</p>
                            <p>We do not offer cash or other alternatives to the prize and prizes are not transferable.</p>
                            <p>We will select the winner's name in a random draw after the end of the closing date.</p>
                            <p>The winner of a prize will be notified within 28 days after the winner has been ascertained.
                            </p>
                            <p>Please allow 28 days for delivery of all prizes.</p>
                            <p>If it transpires that a competition winner is unable to take up a prize for any reason or if
                                we cannot notify the winner despite all reasonable efforts having been made then we reserve
                                to right to dispose of the prize as we think fit without any liability to the winner for
                                having done so.</p>
                            <p>For each competition we run, there will only be one prize awarded per entrant / email
                                address. The names of winners will be available on request.</p>
                            <p>We may choose to publish the names of winners on our Website, through our emails and/or on
                                our Facebook, Twitter, Instagram or any other social media platform.</p>
                            <p>Competition prizes/tickets may be restricted to certain times of the year and unless
                                otherwise stated all prizes must be taken within six months of the date of the competition
                                draw.</p>
                            <p>Where prizes are to be provided by a third party then the winner will be required to complete
                                all appropriate or applicable booking or other formalities direct with such providers. We
                                will have no responsibility for the acts/defaults of any other persons or companies.</p>
                            <p><b>17.Terms and conditions relating to specfic discounts, promotions and competitions:</b>
                            </p>
                            <p>For information about terms and conditions that are applicable to specific discounts,
                                promotions and competitions, please see our <a
                                    href="terms-and-conditions/discount-promotions-competitions.html">discounts, promotions
                                    and competitions terms and conditions page.</a></p>
                            <p>Terms and conditions found on our discounts, promotions and competitions terms and conditions
                                page are in addition to the information detailed on this page, unless otherwise stated.</p>
                            <p><b>VAT Free Explained:</b></p>
                            <p>For all VAT Free offers, prices have been reduced in the promotion with a discount which is
                                equal to VAT Free (16.66%). Therefore it is equivalent to not having to pay the VAT. VAT is
                                still applied to the order at the current rate of 20%. Offer validity and expiry is stated
                                on all promotional activity and may be subject to change.</p>
                            <p><b>For example, if you order an item costing £5.95 ex VAT. The total you would normally pay
                                    is £7.14 inc VAT. When we are running a VAT FREE promotion, we deduct the price of the
                                    item down by 16.66% to £4.76. Therefore when we add the VAT, the total you pay is £5.95
                                    which would be the original price ex VAT.</b></p>
                            <p><b>18. Reviews</b></p>
                            <p>If you submit a review, you grant us a non-exclusive, royalty-free, perpetual, irrevocable,
                                and fully sub-licensable right to use, adapt, modify, reproduce, publish, translate, create
                                derivative works from, distribute, and display such content throughout the world in any
                                media.</p>
                            <p>You grant www.salonwholesale.com and the right to use the name that you submit in connection
                                with such content, if they choose.</p>
                            <p>You agree to waive your right to be identified as the author of such content and your right
                                to object to derogatory treatment of such content.</p>
                            <p>You agree to perform all further acts necessary to perfect any of the above rights granted by
                                you to www.salonwholesale.com, including the execution of deeds and documents, at the
                                request of www.salonwholesale.com.</p>
                            <p>You represent and warrant that you own or otherwise control all of the rights to the content
                                that you post; that, as at the date that the content or material is submitted to
                                www.salonwholesale.com:</p>
                            <p>1. The content and material is accurate;</p>
                            <p>2. Use of the content and material you supply does not breach any applicable
                                www.salonwholesale.com guidelines and will not cause injury to any person or entity
                                (including that the content or material is not defamatory). You agree to indemnify
                                www.salonwholesale.com for all claims brought by a third party against
                                www.salonwholesale.com arising out of or in connection with a breach of any of these
                                warranties.</p>
                            <p><b>19. Gifts with products promotions</b></p>
                            <p>Where we offer a free gift with a product we shall only provide one free gift per transaction
                                (irrespective of how many products are purchased). Free gifts are subject to availability
                                and we reserve the right to change the gift for one of a similar or equivalent value.</p>
                            <p>In order to facilitate the provision of a free gift, it may be necessary for us to list the
                                free gift on our site at a nominal value. For the avoidance of doubt, you are not entitled
                                to 'purchase' the free gift without purchasing the product it is provided free with. Any
                                attempt to 'purchase' the free gift will be cancelled (notwithstanding any automated
                                communication you may receive acknowledging your order). In the unlikely event that the free
                                gift is despatched to you, you shall be obliged to return the free gift upon written
                                request.</p>
                            <p><b>20. Promotion Codes</b></p>
                            <p>From time to time we may issue Promotional Codes. Codes can be entered in a Promotion Code
                                box situated at the "Basket" page. Codes are case and space sensitive so please take care
                                when inputting codes. We advise you choose the promotion best suited to your purchase as you
                                may only redeem one code per transaction. Promotion codes cannot be used in conjunction with
                                any other offer unless stated. PLEASE NOTE certain brand exclusions apply</p>
                            <p><b>21. Notices</b></p>
                            <p>All notices given by you to us must be given via our Contact Us page. We may give notice to
                                you at either the e-mail or postal address you provide to us when placing an order. Notice
                                will be deemed received and properly served immediately when posted on our website, 24 hours
                                after an e-mail is sent, or three days after the date of posting of any letter. In proving
                                the service of any notice, it will be sufficient to prove, in the case of a letter, that
                                such letter was properly addressed, stamped and placed in the post and, in the case of an
                                e-mail that such e-mail was sent to the specified e-mail address of the addressee.</p>
                            <p><b>22. Indemnity</b></p>
                            <p>You agree to fully indemnify, defend and hold us, and our officers, directors, employees and
                                suppliers, harmless immediately on demand, from and against all claims, losses, costs and
                                expenses, including reasonable legal fees, arising out of any breach of these Terms by you,
                                or any other liabilities arising out of your use of this Website or any other person
                                accessing the Website using your personal information.</p>
                            <p><b>23. Entire agreement</b></p>
                            <p>These terms and conditions and any document expressly referred to in them represent the
                                entire agreement between us in relation to the subject matter of any Contract and supersede
                                any prior agreement, understanding or arrangement between us, whether oral or in writing.
                                We each acknowledge that, in entering into a Contract, neither of us has relied on any
                                representation, undertaking or promise given by the other or be implied from anything said
                                or written in negotiations between us prior to such Contract except as expressly stated in
                                these terms and conditions.</p>
                            <p>Neither of us shall have any remedy in respect of any untrue statement made by the other,
                                whether orally or in writing, prior to the date of any Contract (unless such untrue
                                statement was made fraudulently) and the other party's only remedy shall be for breach of
                                contract as provided in these terms and conditions.</p>
                            <h2>Acceptable Use Policy</h2>
                            <p>This acceptable use policy sets out the terms between us and you under which you can access
                                www.salonwholesale.com ("our site"). This policy applies to all users and visitors of
                                www.salonwholesale.com.</p>
                            <p>By using our site, you accept and agree to all policies in our acceptable use policy, which
                                operate in tandem with our Terms of Use.</p>
                            <p>www.salonwholesale.com is a website operated by Devlnd Ltd ("we"). We are registered in
                                England and Wales under company number 09481760 and we have our registered office at 195
                                South Liberty Lane, Ashton, Bristol, BS3 2TN. Our VAT number is 216224638.</p>
                            <p><b>PROHIBITED USES</b></p>
                            <p>You may only use our site for lawful purposes. You may not use our site:</p>
                            <ul type="disc">
                                <li>To transmit, or procure the sending of, any unsolicited or unauthorised advertising or
                                    promotional material or any other form of similar solicitation (spam). </li>
                                <li>In any way that breaches any applicable local, national or international law or
                                    regulation.</li>
                                <li>To send, knowingly receive, upload, download, use or re-use any material which does not
                                    comply with our content standards.</li>
                                <li>In any unlawful or fraudulent way, or in a way that has unlawful or fraudulent purpose
                                </li>
                                <li>To knowingly transmit any data, send or upload any material that contains Trojan horses,
                                    spyware, time-bombs, viruses,keystroke loggers, worms, adware or any other harmful
                                    programs or similar computer code designed to adversely affect the operation of any
                                    computer software or hardware.</li>
                                <li>For the purpose of harming or attempting to harm minors in any way.</li>
                            </ul>
                            <p>You also agree not to access without authority, interfere with, damage or disrupt:</p>
                            <ul type="disc">
                                <li>any part of our site;</li>
                                <li>any software used in the provision of our site; or</li>
                                <li>any equipment or network on which our site is stored;</li>
                                <li>any equipment or network or software owned or used by any third party.</li>
                                <li>Not to reproduce, duplicate copy or re-sell any part of our site in contravention of the
                                    provisions of our Terms of Website Use.</li>
                            </ul>
                            <p><b>TERMINATION AND SUSPENSION</b></p>
                            <p>With our discretion we will determine whether this acceptable use policy has been breached
                                through your use of our site. When a breach occurs we may take such action as we deem
                                appropriate.</p>
                            <p>Failure to comply constitutes breaching the Terms of Use upon which we permit you to use our
                                site, and may result in us taking all or any of the following actions:</p>
                            <ul type="disc">
                                <li>Issuing a warning to you</li>
                                <li>Immediate removal of any posting or material uploaded to our site by you</li>
                                <li>Immediate withdrawal of your right to use our site</li>
                                <li>Disclosure of information as we reasonably feel is necessary to law enforcement
                                    authorities.</li>
                                <li>Legal proceedings against you for reimbursement of all costs on an indemnity basis
                                    (including, but not limited to, reasonable administrative and legal costs) resulting
                                    from the breach.</li>
                                <li>Further legal action against you.</li>
                            </ul>
                            <p>We exclude liability for actions taken responding to breaches of this policy. The responses
                                described in this policy are not limited, we may take any other action that we reasonably
                                deem to be necessary and appropriate.</p>
                            <p><b>CHANGING OUR ACCEPTABLE USE POLICY</b></p>
                            <p>We may revise our acceptable use policy at any time by changing this page. Any changes are
                                legally binding on you. Some of the provisions contained in our acceptable use policy may
                                potentially be superseded by notices or provisions published elsewhere on our site.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
