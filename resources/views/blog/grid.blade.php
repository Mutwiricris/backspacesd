@extends('layouts.app')

@section('title', 'Blog Grid - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Blog Grid'])

<!-- Blog Grid Area -->
<div class="blog-grid-area pt-100 pb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="row">
                    @foreach(range(1, 6) as $i)
                    <div class="col-md-6">
                        <div class="blog-grid-card">
                            <img src="https://images.unsplash.com/photo-{{ 1498050108023 + ($i * 1000) }}-c5249f4df085?w=500&h=350&fit=crop" alt="Blog Post {{ $i }}">
                            <div class="content">
                                <span class="category">Technology</span>
                                <span class="date"><i class='bx bx-time'></i> {{ date('d M, Y', strtotime("-{$i} days")) }}</span>
                                <h3><a href="{{ route('blog.details', 'post-' . $i) }}">Essential Tips for Software Development</a></h3>
                                <p>Explore best practices and innovative approaches to modern software development challenges.</p>
                                <a href="{{ route('blog.details', 'post-' . $i) }}" class="read-more">Read More <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-4">
                <div class="blog-sidebar">
                    <div class="sidebar-widget search-widget">
                        <form>
                            <input type="text" class="form-control" placeholder="Search...">
                            <button type="submit"><i class='bx bx-search'></i></button>
                        </form>
                    </div>

                    <div class="sidebar-widget">
                        <h3>Categories</h3>
                        <ul class="category-list">
                            <li><a href="#">Web Development (12)</a></li>
                            <li><a href="#">Mobile Apps (8)</a></li>
                            <li><a href="#">Cloud Computing (6)</a></li>
                            <li><a href="#">AI & ML (10)</a></li>
                            <li><a href="#">Design (7)</a></li>
                        </ul>
                    </div>

                    <div class="sidebar-widget">
                        <h3>Recent Posts</h3>
                        <div class="recent-post">
                            <img src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=100&h=80&fit=crop" alt="Post">
                            <h4><a href="#">Modern Web Development</a></h4>
                            <span>{{ date('d M, Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Grid Area End -->
@endsection
