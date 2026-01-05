@extends('layouts.app')

@section('title', 'Case Studies Grid - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Our Portfolio'])

<!-- Case Studies Grid Area -->
<div class="case-studies-grid-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="case-studies-item">
                    <a href="{{ route('portfolio.case-study.details', 'project-1') }}">
                        <img src="https://images.unsplash.com/photo-1551434678-e076c223a692?w=800&h=600&fit=crop" alt="Project 1">
                    </a>
                    <div class="case-studies-content">
                        <span>Web Application</span>
                        <h3><a href="{{ route('portfolio.case-study.details', 'project-1') }}">Enterprise Resource Planning</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="case-studies-item">
                    <a href="{{ route('portfolio.case-study.details', 'project-2') }}">
                        <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop" alt="Project 2">
                    </a>
                    <div class="case-studies-content">
                        <span>Mobile App</span>
                        <h3><a href="{{ route('portfolio.case-study.details', 'project-2') }}">Fitness Tracking Application</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="case-studies-item">
                    <a href="{{ route('portfolio.case-study.details', 'project-3') }}">
                        <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?w=800&h=600&fit=crop" alt="Project 3">
                    </a>
                    <div class="case-studies-content">
                        <span>Cloud Platform</span>
                        <h3><a href="{{ route('portfolio.case-study.details', 'project-3') }}">SaaS Analytics Dashboard</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="case-studies-item">
                    <a href="{{ route('portfolio.case-study.details', 'project-4') }}">
                        <img src="https://images.unsplash.com/photo-1542744173-8e7e53415bb0?w=800&h=600&fit=crop" alt="Project 4">
                    </a>
                    <div class="case-studies-content">
                        <span>E-Commerce</span>
                        <h3><a href="{{ route('portfolio.case-study.details', 'project-4') }}">Multi-Vendor Marketplace</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="case-studies-item">
                    <a href="{{ route('portfolio.case-study.details', 'project-5') }}">
                        <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=800&h=600&fit=crop" alt="Project 5">
                    </a>
                    <div class="case-studies-content">
                        <span>Custom CRM</span>
                        <h3><a href="{{ route('portfolio.case-study.details', 'project-5') }}">Customer Relationship Management</a></h3>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6">
                <div class="case-studies-item">
                    <a href="{{ route('portfolio.case-study.details', 'project-6') }}">
                        <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?w=800&h=600&fit=crop" alt="Project 6">
                    </a>
                    <div class="case-studies-content">
                        <span>IoT Platform</span>
                        <h3><a href="{{ route('portfolio.case-study.details', 'project-6') }}">Smart Home Automation</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Case Studies Grid Area End -->
@endsection
