@extends('layouts.app')

@section('title', 'About Us - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'About Us'])

<!-- What Did Area -->
<div class="what-did-area pt-100 pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="what-did-content">
                    <div class="section-title">
                        <span class="sp-color1">Who We Are</span>
                        <h2>Empowering Businesses Through Technology</h2>
                        <p>Backspace Software Developers is a leading software development company driven by talented African professionals. We combine technical excellence with innovative thinking to deliver solutions that transform businesses and drive growth.</p>
                    </div>
                    <ul>
                        <li><i class='bx bx-check'></i> Award-Winning Solutions</li>
                        <li><i class='bx bx-check'></i> Expert Development Team</li>
                        <li><i class='bx bx-check'></i> Cutting-Edge Technology</li>
                        <li><i class='bx bx-check'></i> Client-Focused Approach</li>
                    </ul>
                    <div class="what-did-profile">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&q=80" alt="Team Leader">
                        <p>Our mission is to deliver world-class software solutions while showcasing the exceptional talent and innovation from Africa.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="what-did-right-area">
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <div class="what-did-right">
                                <div class="content">
                                    <img src="{{ asset('assets/images/what-did/text16.png') }}" alt="Experience">
                                    <h3>Years Of Excellence</h3>
                                </div>
                                <div class="what-did-right-img">
                                    <img src="https://images.unsplash.com/photo-1664575602276-acd073f104c1?w=400&h=300&fit=crop&q=80" alt="Professional Team">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="what-did-right">
                                <div class="what-did-right-img what-did-right-img-bg">
                                    <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=400&h=300&fit=crop&q=80" alt="Innovation">
                                    <a href="https://www.youtube.com/watch?v=Zd00oIDAt60" class="play-btn play-on">
                                        <i class='bx bx-play'></i>
                                    </a>
                                </div>

                                <div class="content">
                                    <img src="{{ asset('assets/images/what-did/text11.png') }}" alt="Projects">
                                    <h3>Successful Projects</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- What Did Area End -->

<!-- Choose Area -->
<div class="choose-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Our Values</span>
            <h2>What Makes Us Different</h2>
        </div>

        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=400&h=300&fit=crop&q=80" alt="Innovation">
                    <h3>Innovation First</h3>
                    <p>We embrace cutting-edge technologies and innovative approaches to solve complex challenges.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=300&fit=crop&q=80" alt="Excellence">
                    <h3>Excellence in Execution</h3>
                    <p>Every project is delivered with meticulous attention to detail and commitment to quality.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=400&h=300&fit=crop&q=80" alt="Trust">
                    <h3>Building Trust</h3>
                    <p>We foster long-term partnerships built on transparency, reliability, and mutual success.</p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=400&h=300&fit=crop&q=80" alt="Growth">
                    <h3>Continuous Growth</h3>
                    <p>We invest in our team's development and stay ahead of industry trends.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Choose Area End -->

<!-- Timeline Area -->
<div class="timeline-area">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Our Process</span>
            <h2>How We Work</h2>
        </div>

        <div class="timeline">
            <ol>
                <li>
                    <div class="timeline-content">
                        <div class="time-line-top">Research</div>
                        <div class="time-bottom-icon">
                            <i class="flaticon-research"></i>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-content">
                        <div class="time-top-icon">
                            <i class="flaticon-keywords"></i>
                        </div>
                        <div class="time-line-bottom">Discovery</div>
                    </div>
                </li>

                <li>
                    <div class="timeline-content">
                        <div class="time-line-top">Planning</div>
                        <div class="time-bottom-icon">
                            <i class="flaticon-content"></i>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-content">
                        <div class="time-top-icon">
                            <i class="flaticon-prototype"></i>
                        </div>
                        <div class="time-line-bottom">Prototype</div>
                    </div>
                </li>

                <li>
                    <div class="timeline-content">
                        <div class="time-line-top">Development</div>
                        <div class="time-bottom-icon">
                            <i class="flaticon-web-programming"></i>
                        </div>
                    </div>
                </li>

                <li>
                    <div class="timeline-content">
                        <div class="time-top-icon">
                            <i class="flaticon-complete"></i>
                        </div>
                        <div class="time-line-bottom">Delivery</div>
                    </div>
                </li>
            </ol>
        </div>
    </div>
</div>
<!-- Timeline Area End -->

<!-- Team Area -->

<!-- Team Area End -->
@endsection
