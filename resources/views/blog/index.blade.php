@extends('layouts.app')

@section('title', 'Blog - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Our Blog'])

<!-- Blog Area -->
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ route('blog.details', 'modern-web-development') }}">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=600&h=400&fit=crop" alt="Blog Post">
                        </a>
                        <div class="tag">Web Development</div>
                    </div>
                    <div class="content">
                        <span><i class='bx bx-time'></i> {{ date('d F, Y') }}</span>
                        <h3><a href="{{ route('blog.details', 'modern-web-development') }}">Modern Web Development Trends in 2025</a></h3>
                        <p>Discover the latest trends shaping web development this year, from AI integration to progressive web apps.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ route('blog.details', 'mobile-app-security') }}">
                            <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=600&h=400&fit=crop" alt="Blog Post">
                        </a>
                        <div class="tag">Mobile Development</div>
                    </div>
                    <div class="content">
                        <span><i class='bx bx-time'></i> {{ date('d F, Y', strtotime('-2 days')) }}</span>
                        <h3><a href="{{ route('blog.details', 'mobile-app-security') }}">Mobile App Security Best Practices</a></h3>
                        <p>Essential security measures every mobile app developer should implement to protect user data.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ route('blog.details', 'cloud-migration-guide') }}">
                            <img src="https://images.unsplash.com/photo-1451187580459-43490279c0fa?w=600&h=400&fit=crop" alt="Blog Post">
                        </a>
                        <div class="tag">Cloud Computing</div>
                    </div>
                    <div class="content">
                        <span><i class='bx bx-time'></i> {{ date('d F, Y', strtotime('-5 days')) }}</span>
                        <h3><a href="{{ route('blog.details', 'cloud-migration-guide') }}">Complete Guide to Cloud Migration</a></h3>
                        <p>Step-by-step process for migrating your applications to the cloud successfully.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ route('blog.details', 'ai-in-software') }}">
                            <img src="https://images.unsplash.com/photo-1677442136019-21780ecad995?w=600&h=400&fit=crop" alt="Blog Post">
                        </a>
                        <div class="tag">Artificial Intelligence</div>
                    </div>
                    <div class="content">
                        <span><i class='bx bx-time'></i> {{ date('d F, Y', strtotime('-7 days')) }}</span>
                        <h3><a href="{{ route('blog.details', 'ai-in-software') }}">AI Integration in Modern Software</a></h3>
                        <p>How artificial intelligence is transforming software development and user experiences.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ route('blog.details', 'agile-methodology') }}">
                            <img src="https://images.unsplash.com/photo-1531545514256-b1400bc00f31?w=600&h=400&fit=crop" alt="Blog Post">
                        </a>
                        <div class="tag">Project Management</div>
                    </div>
                    <div class="content">
                        <span><i class='bx bx-time'></i> {{ date('d F, Y', strtotime('-10 days')) }}</span>
                        <h3><a href="{{ route('blog.details', 'agile-methodology') }}">Mastering Agile Methodology</a></h3>
                        <p>Practical tips for implementing agile practices in your development team.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="blog-card">
                    <div class="blog-img">
                        <a href="{{ route('blog.details', 'ui-ux-trends') }}">
                            <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=600&h=400&fit=crop" alt="Blog Post">
                        </a>
                        <div class="tag">Design</div>
                    </div>
                    <div class="content">
                        <span><i class='bx bx-time'></i> {{ date('d F, Y', strtotime('-12 days')) }}</span>
                        <h3><a href="{{ route('blog.details', 'ui-ux-trends') }}">UI/UX Design Trends for 2025</a></h3>
                        <p>Explore the latest design trends that are shaping user interfaces and experiences.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->
@endsection
