@extends('layouts.app')

@section('title', 'Terms & Conditions - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Terms & Conditions'])

<!-- Terms Area -->
<div class="terms-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sp-color1">Last Updated {{ date('d F Y') }}</span>
            <h2>Our Service Terms</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(1) Service Agreement</h3>
                    <p>
                        By engaging Backspace Software Developers, you agree to these terms and conditions. Our services are provided based on mutual agreement, clear project specifications, and defined deliverables outlined in your project proposal.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(2) Payment Terms</h3>
                    <p>
                        Payment schedules are established in your project agreement. We typically require an initial deposit before work begins, with milestone-based payments throughout the project. Final payment is due upon project completion and acceptance.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(3) Intellectual Property</h3>
                    <p>
                        Upon full payment, you receive ownership of custom-developed code and deliverables. We retain rights to our development tools, frameworks, and pre-existing intellectual property. Third-party components remain subject to their respective licenses.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(4) Project Modifications</h3>
                    <p>
                        Changes to project scope, timeline, or requirements may affect project costs and delivery dates. All modifications must be agreed upon in writing. We maintain transparent communication about impacts to budget and schedule.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Terms Area End -->

<!-- Customer Terms -->
<div class="terms-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sp-color1">Client Responsibilities</span>
            <h2>Customer Terms & Responsibilities</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(1) Client Cooperation</h3>
                    <p>
                        Successful project delivery requires timely provision of necessary materials, feedback, and approvals. Delays in client responses may impact project timelines. We commit to clear communication and expect the same from our clients.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(2) Content Responsibility</h3>
                    <p>
                        Clients are responsible for providing accurate content, images, and materials. You warrant that provided content doesn't infringe on third-party rights and complies with applicable laws and regulations.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(3) Acceptance Testing</h3>
                    <p>
                        Clients have a defined period to review and test deliverables. Issues must be reported within the testing period. Acceptance of deliverables constitutes approval and triggers final payment obligations.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(4) Confidentiality</h3>
                    <p>
                        Both parties agree to maintain confidentiality of proprietary information shared during the project. We implement appropriate security measures to protect your data and business information throughout our engagement.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Customer Terms End -->

<!-- Brand Area -->
<div class="brand-area brand-bg">
    <div class="container">
        <div class="brand-slider owl-carousel owl-theme">
            <div class="brand-item">
                <img src="{{ asset('assets/images/brand-logo/brand-logo1.png') }}" alt="Partner Logo">
            </div>
            <div class="brand-item">
                <img src="{{ asset('assets/images/brand-logo/brand-logo2.png') }}" alt="Partner Logo">
            </div>
            <div class="brand-item">
                <img src="{{ asset('assets/images/brand-logo/brand-logo3.png') }}" alt="Partner Logo">
            </div>
            <div class="brand-item">
                <img src="{{ asset('assets/images/brand-logo/brand-logo4.png') }}" alt="Partner Logo">
            </div>
            <div class="brand-item">
                <img src="{{ asset('assets/images/brand-logo/brand-logo5.png') }}" alt="Partner Logo">
            </div>
            <div class="brand-item">
                <img src="{{ asset('assets/images/brand-logo/brand-logo6.png') }}" alt="Partner Logo">
            </div>
        </div>
    </div>
</div>
<!-- Brand Area End -->
@endsection
