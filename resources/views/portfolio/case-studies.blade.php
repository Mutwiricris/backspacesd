@extends('layouts.app')

@section('title', 'Case Studies - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Case Studies'])

<!-- Case Studies Area -->
<div class="case-studies-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Our Products</span>
            <h2>Enterprise Solutions</h2>
            <p>Innovative software products transforming businesses and institutions across Kenya</p>
        </div>

        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="case-studies-card">
                    <a href="https://somaplus.net" target="_blank">
                        <img src="https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&h=400&fit=crop&q=80" alt="SomaPlus School Management">
                    </a>
                    <div class="content">
                        <span>Education Technology</span>
                        <h3><a href="https://somaplus.net" target="_blank">SomaPlus School Management System</a></h3>
                        <p>Comprehensive platform serving 100+ schools, 50,000+ students with 98% satisfaction rate</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="case-studies-card">
                    <a href="{{ route('portfolio.case-study.details', 'iremit') }}">
                        <img src="https://images.unsplash.com/photo-1563986768494-4dee2763ff3f?w=600&h=400&fit=crop&q=80" alt="iRemit Mobile Payments">
                    </a>
                    <div class="content">
                        <span>FinTech</span>
                        <h3><a href="{{ route('portfolio.case-study.details', 'iremit') }}">iRemit Mobile Payment Platform</a></h3>
                        <p>Secure, fast mobile payment solution for modern businesses and consumers</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="case-studies-card">
                    <a href="{{ route('portfolio.case-study.details', 'e-chama') }}">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?w=600&h=400&fit=crop&q=80" alt="Backspace E-Chama">
                    </a>
                    <div class="content">
                        <span>Financial Management</span>
                        <h3><a href="{{ route('portfolio.case-study.details', 'e-chama') }}">Backspace E-Chama</a></h3>
                        <p>Complete management system for chamas, welfare groups, and SACCOs</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="case-studies-card">
                    <a href="{{ route('portfolio.case-study.details', 'faith-central') }}">
                        <img src="https://images.unsplash.com/photo-1438232992991-995b7058bbb3?w=600&h=400&fit=crop&q=80" alt="Faith Central">
                    </a>
                    <div class="content">
                        <span>Church Management</span>
                        <h3><a href="{{ route('portfolio.case-study.details', 'faith-central') }}">Faith Central Church System</a></h3>
                        <p>Modern church management for member administration, events, and finances</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="case-studies-card">
                    <a href="{{ route('services.index') }}">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=600&h=400&fit=crop&q=80" alt="Custom Development">
                    </a>
                    <div class="content">
                        <span>Custom Solutions</span>
                        <h3><a href="{{ route('services.index') }}">Enterprise Software Development</a></h3>
                        <p>Bespoke software solutions tailored to your unique business needs</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="case-studies-card">
                    <a href="{{ route('contact') }}">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop&q=80" alt="Consulting">
                    </a>
                    <div class="content">
                        <span>Consulting</span>
                        <h3><a href="{{ route('contact') }}">Software Consulting Services</a></h3>
                        <p>Expert guidance for your digital transformation journey</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Case Studies Area End -->
@endsection
