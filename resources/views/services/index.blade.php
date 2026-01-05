@extends('layouts.app')

@section('title', 'Our Services - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Our Services'])

<!-- Services Area -->
<div class="services-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">What We Offer</span>
            <h2>Comprehensive Software Solutions</h2>
            <p>End-to-end software development services to transform your business</p>
        </div>

        <div class="row pt-45">
            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <i class="flaticon-education"></i>
                    <h3><a href="{{ route('services.details', 'web-development') }}">Web Development</a></h3>
                    <p>Build powerful, scalable web applications using modern frameworks like Laravel, React, and Vue.js.</p>
                    <a href="{{ route('services.details', 'web-development') }}" class="learn-btn">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <i class="flaticon-research-1"></i>
                    <h3><a href="{{ route('services.details', 'mobile-development') }}">Mobile Development</a></h3>
                    <p>Native and cross-platform mobile apps for iOS and Android using Flutter and React Native.</p>
                    <a href="{{ route('services.details', 'mobile-development') }}" class="learn-btn">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <i class="flaticon-rocket"></i>
                    <h3><a href="{{ route('services.details', 'cloud-solutions') }}">Cloud Solutions</a></h3>
                    <p>Scalable cloud infrastructure and deployment on AWS, Google Cloud, and Azure platforms.</p>
                    <a href="{{ route('services.details', 'cloud-solutions') }}" class="learn-btn">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <i class="flaticon-branding"></i>
                    <h3><a href="{{ route('services.details', 'ui-ux-design') }}">UI/UX Design</a></h3>
                    <p>User-centered design that creates intuitive and engaging digital experiences.</p>
                    <a href="{{ route('services.details', 'ui-ux-design') }}" class="learn-btn">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <i class="flaticon-operator"></i>
                    <h3><a href="{{ route('services.details', 'devops') }}">DevOps & CI/CD</a></h3>
                    <p>Automated deployment pipelines and infrastructure as code for efficient development.</p>
                    <a href="{{ route('services.details', 'devops') }}" class="learn-btn">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="services-card">
                    <i class="flaticon-content"></i>
                    <h3><a href="{{ route('services.details', 'consulting') }}">Technical Consulting</a></h3>
                    <p>Expert guidance on technology strategy, architecture, and digital transformation.</p>
                    <a href="{{ route('services.details', 'consulting') }}" class="learn-btn">Learn More <i class='bx bx-right-arrow-alt'></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->

<!-- Choose Area -->
<div class="choose-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Our Approach</span>
            <h2>Why Choose Our Services</h2>
        </div>

        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=400&h=300&fit=crop" alt="Expert Team">
                    <h3>Expert Team</h3>
                    <p>Skilled professionals with years of experience in cutting-edge technologies.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=400&h=300&fit=crop" alt="Quality Assurance">
                    <h3>Quality Assurance</h3>
                    <p>Rigorous testing and quality control at every stage of development.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&h=300&fit=crop" alt="Agile Process">
                    <h3>Agile Methodology</h3>
                    <p>Flexible, iterative approach ensuring continuous delivery and improvement.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?w=400&h=300&fit=crop" alt="Support">
                    <h3>Ongoing Support</h3>
                    <p>Comprehensive maintenance and support to ensure long-term success.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Choose Area End -->
@endsection
