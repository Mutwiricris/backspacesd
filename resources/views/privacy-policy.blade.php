@extends('layouts.app')

@section('title', 'Privacy Policy - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Privacy Policy'])

<!-- Privacy Policy Area -->
<div class="terms-area pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sp-color1">Last Updated {{ date('d F Y') }}</span>
            <h2>Information We Collect</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(1) Personal Information</h3>
                    <p>
                        We collect personal information that you voluntarily provide to us when you contact us, request a quote, or engage our services. This may include your name, email address, phone number, company name, and project details.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(2) Technical Data</h3>
                    <p>
                        We automatically collect certain technical information when you visit our website, including IP address, browser type, device information, and browsing patterns. This helps us improve our services and user experience.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(3) Project Information</h3>
                    <p>
                        During project collaboration, we collect information necessary to deliver our services, including project requirements, business objectives, technical specifications, and feedback provided throughout the development process.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(4) Communication Records</h3>
                    <p>
                        We maintain records of our communications with you, including emails, chat messages, and meeting notes. This helps us provide better service and maintain a clear history of project decisions and requirements.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Privacy Policy Area End -->

<!-- How We Use Information -->
<div class="terms-area pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sp-color1">Data Usage</span>
            <h2>How We Use Your Information</h2>
        </div>
        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(1) Service Delivery</h3>
                    <p>
                        We use your information primarily to deliver our software development services, communicate about projects, provide support, and ensure successful project completion according to your requirements and specifications.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(2) Communication</h3>
                    <p>
                        Your contact information enables us to respond to inquiries, send project updates, provide technical support, and share important information about our services. We respect your communication preferences.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(3) Service Improvement</h3>
                    <p>
                        We analyze usage patterns and feedback to enhance our services, improve our processes, and develop new features. This helps us deliver better solutions and maintain competitive, high-quality offerings.
                    </p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="single-content">
                    <h3>(4) Legal Compliance</h3>
                    <p>
                        We process your information to comply with legal obligations, enforce our terms and conditions, protect our rights and interests, and maintain the security and integrity of our services and systems.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- How We Use Information End -->

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
