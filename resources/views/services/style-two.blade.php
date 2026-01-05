@extends('layouts.app')

@section('title', 'Services - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Our Services'])

<!-- Services List Area -->
<div class="services-list-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <div class="services-content">
                    <span class="sp-color1">01. Web Development</span>
                    <h2>Modern Web Applications</h2>
                    <p>Build responsive, fast, and secure web applications using cutting-edge frameworks and technologies. Our team specializes in creating scalable solutions that grow with your business.</p>
                    <ul>
                        <li><i class='bx bx-check'></i> Full-stack development</li>
                        <li><i class='bx bx-check'></i> Progressive Web Apps (PWA)</li>
                        <li><i class='bx bx-check'></i> E-commerce platforms</li>
                        <li><i class='bx bx-check'></i> Content Management Systems</li>
                    </ul>
                    <a href="{{ route('services.details', 'web-development') }}" class="default-btn btn-bg1">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-img">
                    <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800&h=600&fit=crop" alt="Web Development">
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6 order-lg-2">
                <div class="services-content">
                    <span class="sp-color1">02. Mobile Development</span>
                    <h2>Native & Cross-Platform Apps</h2>
                    <p>Create powerful mobile experiences for iOS and Android. We build native apps for optimal performance and cross-platform apps for cost-effective deployment.</p>
                    <ul>
                        <li><i class='bx bx-check'></i> iOS & Android development</li>
                        <li><i class='bx bx-check'></i> Flutter & React Native</li>
                        <li><i class='bx bx-check'></i> Mobile-first design</li>
                        <li><i class='bx bx-check'></i> App Store optimization</li>
                    </ul>
                    <a href="{{ route('services.details', 'mobile-development') }}" class="default-btn btn-bg1">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="services-img">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop" alt="Mobile Development">
                </div>
            </div>
        </div>

        <div class="row align-items-center mb-5">
            <div class="col-lg-6">
                <div class="services-content">
                    <span class="sp-color1">03. Cloud Solutions</span>
                    <h2>Scalable Cloud Infrastructure</h2>
                    <p>Leverage the power of cloud computing to scale your applications efficiently. We provide cloud architecture, migration, and management services.</p>
                    <ul>
                        <li><i class='bx bx-check'></i> AWS, Google Cloud, Azure</li>
                        <li><i class='bx bx-check'></i> Cloud migration & optimization</li>
                        <li><i class='bx bx-check'></i> Serverless architecture</li>
                        <li><i class='bx bx-check'></i> Container orchestration</li>
                    </ul>
                    <a href="{{ route('services.details', 'cloud-solutions') }}" class="default-btn btn-bg1">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="services-img">
                    <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&h=600&fit=crop" alt="Cloud Solutions">
                </div>
            </div>
        </div>

        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="services-content">
                    <span class="sp-color1">04. UI/UX Design</span>
                    <h2>User-Centered Design</h2>
                    <p>Create beautiful, intuitive interfaces that users love. Our design team focuses on creating experiences that are both aesthetically pleasing and highly functional.</p>
                    <ul>
                        <li><i class='bx bx-check'></i> User research & testing</li>
                        <li><i class='bx bx-check'></i> Wireframing & prototyping</li>
                        <li><i class='bx bx-check'></i> Responsive design</li>
                        <li><i class='bx bx-check'></i> Design systems</li>
                    </ul>
                    <a href="{{ route('services.details', 'ui-ux-design') }}" class="default-btn btn-bg1">Learn More</a>
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="services-img">
                    <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?w=800&h=600&fit=crop" alt="UI/UX Design">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services List Area End -->
@endsection
