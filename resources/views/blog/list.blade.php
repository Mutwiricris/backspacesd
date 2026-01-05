@extends('layouts.app')

@section('title', 'Blog List - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Blog'])

<!-- Blog List Area -->
<div class="blog-list-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="blog-list-item">
                    <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=900&h=500&fit=crop" alt="Blog Post">
                    <div class="content">
                        <div class="meta">
                            <span><i class='bx bx-calendar'></i> {{ date('d F, Y') }}</span>
                            <span><i class='bx bx-user'></i> Admin</span>
                            <span><i class='bx bx-folder'></i> Technology</span>
                        </div>
                        <h2><a href="{{ route('blog.details', 'modern-web-development') }}">The Future of Web Development</a></h2>
                        <p>Web development is evolving rapidly with new frameworks, tools, and methodologies emerging constantly. In this comprehensive guide, we explore the trends that will shape the future of web development.</p>
                        <a href="{{ route('blog.details', 'modern-web-development') }}" class="read-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>

                <div class="blog-list-item">
                    <img src="https://images.unsplash.com/photo-1551650975-87deedd944c3?w=900&h=500&fit=crop" alt="Blog Post">
                    <div class="content">
                        <div class="meta">
                            <span><i class='bx bx-calendar'></i> {{ date('d F, Y', strtotime('-3 days')) }}</span>
                            <span><i class='bx bx-user'></i> Admin</span>
                            <span><i class='bx bx-folder'></i> Mobile</span>
                        </div>
                        <h2><a href="{{ route('blog.details', 'mobile-development') }}">Mobile App Development Best Practices</a></h2>
                        <p>Building successful mobile applications requires more than just coding skills. Learn the essential best practices for creating apps that users love.</p>
                        <a href="{{ route('blog.details', 'mobile-development') }}" class="read-btn">Read More <i class='bx bx-right-arrow-alt'></i></a>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="sidebar-widget">
                        <h3>Categories</h3>
                        <ul class="category-list">
                            <li><a href="#">Web Development (12)</a></li>
                            <li><a href="#">Mobile Apps (8)</a></li>
                            <li><a href="#">Cloud Computing (6)</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog List Area End -->
@endsection
