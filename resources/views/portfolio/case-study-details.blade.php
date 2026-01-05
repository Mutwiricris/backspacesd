@extends('layouts.app')

@section('title', 'Case Study Details - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Case Study Details'])

<!-- Case Study Details Area -->
<div class="case-study-details-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="case-study-details-content">
                    <div class="case-study-img">
                        <img src="https://images.unsplash.com/photo-1460925895917-afdab827c52f?w=1200&h=600&fit=crop" alt="Case Study">
                    </div>

                    <h2>E-Commerce Platform Transformation</h2>
                    <p>A comprehensive redesign and development project that transformed an outdated e-commerce platform into a modern, high-performing online marketplace.</p>

                    <h3>The Challenge</h3>
                    <p>Our client was struggling with an outdated e-commerce platform that was slow, difficult to maintain, and providing a poor user experience. The platform was losing customers to competitors.</p>

                    <h3>Our Solution</h3>
                    <ul class="solution-list">
                        <li><i class='bx bx-check'></i> Modern, responsive design optimized for mobile devices</li>
                        <li><i class='bx bx-check'></i> Lightning-fast page load times with advanced caching</li>
                        <li><i class='bx bx-check'></i> Seamless checkout process reducing cart abandonment</li>
                        <li><i class='bx bx-check'></i> Advanced product search and filtering capabilities</li>
                    </ul>

                    <div class="case-study-img mt-4 mb-4">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=1200&h=500&fit=crop" alt="Solution">
                    </div>

                    <h3>The Results</h3>
                    <p>The project exceeded expectations with significant improvements in key metrics including conversion rates, page speed, and customer satisfaction.</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="case-study-sidebar">
                    <div class="sidebar-widget cta-widget">
                        <h3>Start Your Project</h3>
                        <p>Ready to transform your business?</p>
                        <a href="{{ route('contact') }}" class="default-btn btn-bg1">Get In Touch</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Case Study Details Area End -->
@endsection
