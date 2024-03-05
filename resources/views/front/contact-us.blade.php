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
                        <h1 class="page-title"><span class="base" data-ui-id="page-title-wrapper">Contact
                                Us</span></h1>
                    </div><input name="form_key" type="hidden" value="DPZpBvyhFWcAIURZ" />
                    <div id="authenticationPopup"
                        data-bind="scope:'authenticationPopup', style: {display: 'none'}">
                        <!-- ko template: getTemplate() --><!-- /ko --> </div>
                    <div id="monkey_campaign" style="display:none;"
                        data-mage-init='{"campaigncatcher":{"checkCampaignUrl": "https://www.salonwholesale.com/mailchimp/campaign/check/"}}'>
                    </div>
                    <div
                        data-mage-init='{"Mirasvit_CacheWarmer\/js\/track":{"pageType":"contact_index_index","url":"https:\/\/www.salonwholesale.com\/cache_warmer\/track\/","cookieName":"mst-cache-warmer-track","cookieValue":null}}'>
                    </div>
                    <div class="row">
                        <div class="col-sm-10">
                            <form class="form contact"
                                action="https://www.salonwholesale.com/contact/index/post/" id="contact-form"
                                method="post" data-hasrequired="* Required Fields"
                                data-mage-init='{"validation":{}}'>
                                <fieldset class="fieldset">
                                    <div class="field note no-label">Jot us a note and we’ll get back to you as
                                        quickly as possible.</div>
                                    <div class="field name required"><label class="label"
                                            for="name"><span>Name</span></label>
                                        <div class="control"><input name="name" id="name" title="Name" value=""
                                                class="input-text" type="text"
                                                data-validate="{required:true}" /></div>
                                    </div>
                                    <div class="field email required"><label class="label"
                                            for="email"><span>Email</span></label>
                                        <div class="control"><input name="email" id="email" title="Email"
                                                value="" class="input-text" type="email"
                                                data-validate="{required:true, 'validate-email':true}" /></div>
                                    </div>
                                    <div class="field telephone"><label class="label"
                                            for="telephone"><span>Phone Number</span></label>
                                        <div class="control"><input name="telephone" id="telephone"
                                                title="Phone Number" value="" class="input-text" type="text" />
                                        </div>
                                    </div>
                                    <div class="field comment required"><label class="label"
                                            for="comment"><span>What’s on your mind?</span></label>
                                        <div class="control"><textarea name="comment" id="comment"
                                                title="What’s on your mind?" class="input-text" cols="5"
                                                rows="3" data-validate="{required:true}"></textarea></div>
                                    </div>
                                </fieldset>
                                <div class="actions-toolbar">
                                    <div class="primary"><input type="hidden" name="hideit" id="hideit"
                                            value="" /><button type="submit" title="Submit"
                                            class="action submit primary"><span>Submit</span></button></div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-2">
                            <h3>Contact Details</h3>
                            <div class="contact-details">
                                <div data-content-type="html" data-appearance="default" data-element="main"
                                    data-decoded="true">
                                    <p>
                                        <strong>Telephone</strong><br />
                                        +44 03302230891
                                    </p>
                                    <p>
                                        <strong>Opening hours</strong><br />
                                        9am - 4:30pm (UK Time) Monday - Friday (excluding UK Bank Holidays)
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection