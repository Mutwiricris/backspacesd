@extends('layouts.app')

@section('title', 'FAQ - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Frequently Asked Questions'])

<!-- FAQ Area -->
<div class="faq-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">FAQ</span>
            <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row pt-45 align-items-center">
            <div class="col-lg-6">
                <div class="faq-accordion">
                    <ul class="accordion">
                        <li class="accordion-item">
                            <a class="accordion-title active" href="javascript:void(0)">
                                <i class='bx bx-chevron-down'></i>
                                How do you define project cost and scope?
                            </a>

                            <div class="accordion-content show">
                                <p>
                                    We begin with a thorough discovery phase to understand your requirements, objectives, and constraints. Our team provides detailed project estimates based on scope, timeline, and resource allocation to ensure transparency and alignment with your budget.
                                </p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-chevron-down'></i>
                                What technologies do you specialize in?
                            </a>

                            <div class="accordion-content">
                                <p>
                                    We specialize in modern web and mobile technologies including Laravel, React, Vue.js, Node.js, Python, and native mobile development. Our team stays current with the latest industry trends to deliver cutting-edge solutions.
                                </p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-chevron-down'></i>
                                Do you provide ongoing support and maintenance?
                            </a>

                            <div class="accordion-content">
                                <p>
                                    Yes, we offer comprehensive support and maintenance packages to ensure your application runs smoothly. Our support includes bug fixes, security updates, performance optimization, and feature enhancements.
                                </p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-chevron-down'></i>
                                What is your typical project timeline?
                            </a>

                            <div class="accordion-content">
                                <p>
                                    Project timelines vary based on complexity and scope. A simple website might take 4-6 weeks, while enterprise applications can take several months. We provide detailed timelines during the planning phase and maintain transparent communication throughout.
                                </p>
                            </div>
                        </li>

                        <li class="accordion-item">
                            <a class="accordion-title" href="javascript:void(0)">
                                <i class='bx bx-chevron-down'></i>
                                How do you ensure project quality?
                            </a>

                            <div class="accordion-content">
                                <p>
                                    We follow industry best practices including code reviews, automated testing, continuous integration, and regular client demonstrations. Our quality assurance process ensures your project meets the highest standards.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="faq-img">
                    <ul>
                        <li><img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=600&h=400&fit=crop" alt="Team Discussion"></li>
                        <li class="line-img">
                            <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?w=600&h=400&fit=crop" alt="Collaboration">
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ Area End -->

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
