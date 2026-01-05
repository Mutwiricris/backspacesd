@extends('layouts.app')

@section('title', 'Service Details - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Service Details'])

<!-- Services Details Area -->
<div class="services-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="services-details-content">
                    <div class="services-details-img">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=1200&h=600&fit=crop" alt="Service Details">
                    </div>

                    <h2>Professional Software Development Services</h2>
                    <p>At Backspace Software Developers, we provide comprehensive software development services tailored to meet your unique business needs. Our team of experienced professionals is dedicated to delivering high-quality solutions that drive growth and innovation.</p>

                    <h3>What We Deliver</h3>
                    <p>Our commitment to excellence ensures that every project we undertake meets the highest standards of quality, performance, and security. We use industry best practices and cutting-edge technologies to build solutions that stand the test of time.</p>

                    <div class="row pt-3 pb-3">
                        <div class="col-md-6">
                            <ul class="services-details-list">
                                <li><i class='bx bx-check'></i> Custom Software Solutions</li>
                                <li><i class='bx bx-check'></i> Scalable Architecture</li>
                                <li><i class='bx bx-check'></i> Clean, Maintainable Code</li>
                                <li><i class='bx bx-check'></i> Comprehensive Documentation</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="services-details-list">
                                <li><i class='bx bx-check'></i> Agile Development Process</li>
                                <li><i class='bx bx-check'></i> Regular Communication</li>
                                <li><i class='bx bx-check'></i> Quality Assurance Testing</li>
                                <li><i class='bx bx-check'></i> Post-Launch Support</li>
                            </ul>
                        </div>
                    </div>

                    <div class="services-details-quote">
                        <i class='bx bxs-quote-right'></i>
                        <p>"Innovation distinguishes between a leader and a follower. We help you lead through technology."</p>
                    </div>

                    <h3>Our Development Process</h3>
                    <p>We follow a proven development methodology that ensures project success:</p>

                    <div class="services-process">
                        <div class="process-item">
                            <div class="process-number">01</div>
                            <h4>Discovery & Planning</h4>
                            <p>Understanding your requirements and defining project scope</p>
                        </div>
                        <div class="process-item">
                            <div class="process-number">02</div>
                            <h4>Design & Architecture</h4>
                            <p>Creating wireframes, mockups, and technical architecture</p>
                        </div>
                        <div class="process-item">
                            <div class="process-number">03</div>
                            <h4>Development & Testing</h4>
                            <p>Building features with continuous testing and quality assurance</p>
                        </div>
                        <div class="process-item">
                            <div class="process-number">04</div>
                            <h4>Deployment & Support</h4>
                            <p>Launching your solution and providing ongoing maintenance</p>
                        </div>
                    </div>

                    <div class="services-details-img mt-4">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=1200&h=500&fit=crop" alt="Development Team">
                    </div>

                    <h3>Technologies We Use</h3>
                    <p>We work with modern, proven technologies to ensure your project is built on a solid foundation. Our technology stack includes:</p>
                    <div class="tech-stack">
                        <span class="tech-badge">Laravel</span>
                        <span class="tech-badge">React</span>
                        <span class="tech-badge">Vue.js</span>
                        <span class="tech-badge">Node.js</span>
                        <span class="tech-badge">Flutter</span>
                        <span class="tech-badge">Python</span>
                        <span class="tech-badge">PostgreSQL</span>
                        <span class="tech-badge">MongoDB</span>
                        <span class="tech-badge">AWS</span>
                        <span class="tech-badge">Docker</span>
                        <span class="tech-badge">Kubernetes</span>
                        <span class="tech-badge">Git</span>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="services-sidebar">
                    <div class="sidebar-widget">
                        <h3>All Services</h3>
                        <ul class="services-links">
                            <li><a href="{{ route('services.details', 'web-development') }}">Web Development <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'mobile-development') }}">Mobile Development <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'cloud-solutions') }}">Cloud Solutions <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'ui-ux-design') }}">UI/UX Design <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'devops') }}">DevOps & CI/CD <i class='bx bx-right-arrow-alt'></i></a></li>
                            <li><a href="{{ route('services.details', 'consulting') }}">Technical Consulting <i class='bx bx-right-arrow-alt'></i></a></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget download-widget">
                        <h3>Download Brochure</h3>
                        <a href="#" class="download-btn"><i class='bx bxs-file-pdf'></i> Download PDF</a>
                        <a href="#" class="download-btn"><i class='bx bxs-file-doc'></i> Download DOC</a>
                    </div>

                    <div class="sidebar-widget contact-widget">
                        <h3>Get a Quote</h3>
                        <p>Ready to start your project?</p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg1">Contact Us</a>
                    </div>

                    <div class="sidebar-widget">
                        <h3>Quick Contact</h3>
                        <ul class="contact-info">
                            <li><i class='bx bx-phone'></i> +254 717 966 966</li>
                            <li><i class='bx bx-envelope'></i> info@backspace.co.ke</li>
                            <li><i class='bx bx-map'></i> Your Address Here</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Services Details Area End -->
@endsection
