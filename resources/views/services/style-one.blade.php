@extends('layouts.app')

@section('title', 'Services - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Our Services'])

<!-- Services Details Area -->
<div class="services-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services-article">
                    <div class="services-article-img">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=1200&h=600&fit=crop" alt="Software Development">
                    </div>
                    <div class="services-article-content">
                        <h2>Custom Software Development</h2>
                        <p>We build tailored software solutions that perfectly align with your business needs. Our team of expert developers uses the latest technologies and best practices to deliver high-quality, scalable applications.</p>

                        <h3>Our Development Services Include:</h3>
                        <ul>
                            <li><i class='bx bx-check'></i> Web Application Development</li>
                            <li><i class='bx bx-check'></i> Mobile App Development (iOS & Android)</li>
                            <li><i class='bx bx-check'></i> Enterprise Software Solutions</li>
                            <li><i class='bx bx-check'></i> API Development & Integration</li>
                            <li><i class='bx bx-check'></i> Database Design & Optimization</li>
                            <li><i class='bx bx-check'></i> Cloud-Native Applications</li>
                        </ul>

                        <blockquote>
                            <p>"Quality is not an act, it is a habit. We deliver excellence in every line of code."</p>
                        </blockquote>

                        <h3>Our Technology Stack</h3>
                        <p>We work with modern, proven technologies to ensure your project is built on a solid foundation:</p>
                        <div class="row pt-3">
                            <div class="col-md-6">
                                <ul>
                                    <li><i class='bx bx-check'></i> PHP (Laravel, Symfony)</li>
                                    <li><i class='bx bx-check'></i> JavaScript (React, Vue, Node.js)</li>
                                    <li><i class='bx bx-check'></i> Python (Django, Flask)</li>
                                </ul>
                            </div>
                            <div class="col-md-6">
                                <ul>
                                    <li><i class='bx bx-check'></i> Mobile (Flutter, React Native)</li>
                                    <li><i class='bx bx-check'></i> Databases (MySQL, PostgreSQL, MongoDB)</li>
                                    <li><i class='bx bx-check'></i> Cloud (AWS, Google Cloud, Azure)</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="services-sidebar">
                    <div class="services-list">
                        <h3>All Services</h3>
                        <ul>
                            <li><a href="{{ route('services.details', 'web-development') }}">Web Development <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'mobile-development') }}">Mobile Development <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'cloud-solutions') }}">Cloud Solutions <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'ui-ux-design') }}">UI/UX Design <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'devops') }}">DevOps & CI/CD <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'consulting') }}">Technical Consulting <i class='bx bx-right-arrow-alt'></i></a></li>
                        </ul>
                    </div>

                    <div class="services-contact">
                        <h3>Need Help?</h3>
                        <p>Contact us for a free consultation</p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg1">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Details Area End -->
@endsection
