@extends('layouts.app')

@section('title', 'Testimonials - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Client Testimonials'])

<!-- Testimonials Area -->
<div class="testimonials-page-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">What Clients Say</span>
            <h2>Client Success Stories</h2>
            <p>Read what our clients have to say about working with us</p>
        </div>

        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=100&h=100&fit=crop" alt="Amara Johnson">
                    </div>
                    <div class="testimonial-content">
                        <i class='bx bxs-quote-right'></i>
                        <p>"Backspace Software Developers delivered an exceptional e-commerce platform that exceeded our expectations. Their attention to detail and technical expertise is unmatched. Sales increased by 150% within three months!"</p>
                        <h3>Amara Johnson</h3>
                        <span>CEO, TechVenture Ltd</span>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&h=100&fit=crop" alt="Kwame Mensah">
                    </div>
                    <div class="testimonial-content">
                        <i class='bx bxs-quote-right'></i>
                        <p>"Working with Backspace was a game-changer for our business. They transformed our digital presence and helped us reach new markets effectively. The team was professional and delivered ahead of schedule."</p>
                        <h3>Kwame Mensah</h3>
                        <span>Founder, Digital Solutions Hub</span>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop" alt="Zara Williams">
                    </div>
                    <div class="testimonial-content">
                        <i class='bx bxs-quote-right'></i>
                        <p>"The team's professionalism and commitment to quality is outstanding. They delivered our mobile app ahead of schedule with zero compromises on quality. Highly recommend their services!"</p>
                        <h3>Zara Williams</h3>
                        <span>Product Manager, InnovateCo</span>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop" alt="Omar Hassan">
                    </div>
                    <div class="testimonial-content">
                        <i class='bx bxs-quote-right'></i>
                        <p>"Excellent communication, brilliant developers, and a results-driven approach. Backspace is our go-to partner for all software development needs. They've become an extension of our team."</p>
                        <h3>Omar Hassan</h3>
                        <span>CTO, FutureTech Systems</span>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?w=100&h=100&fit=crop" alt="Fatima Nkosi">
                    </div>
                    <div class="testimonial-content">
                        <i class='bx bxs-quote-right'></i>
                        <p>"Their innovative solutions and strategic insights helped us modernize our entire IT infrastructure. The project was complex but they handled it with expertise and professionalism."</p>
                        <h3>Fatima Nkosi</h3>
                        <span>Director of IT, Enterprise Solutions</span>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="testimonial-card">
                    <div class="testimonial-img">
                        <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?w=100&h=100&fit=crop" alt="David Osei">
                    </div>
                    <div class="testimonial-content">
                        <i class='bx bxs-quote-right'></i>
                        <p>"From concept to deployment, Backspace guided us through every step. Their technical knowledge and business acumen helped us create a product that our customers love."</p>
                        <h3>David Osei</h3>
                        <span>Founder, StartupCo</span>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonials Area End -->
@endsection
