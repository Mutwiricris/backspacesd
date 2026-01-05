@extends('layouts.app')

@section('title', 'Home - Backspace Software Developers')

@section('content')
<!-- Banner Area -->
<div class="banner-area">
    <div class="container">
        <div class="banner-content">
            <span>Innovative Software Solutions</span>
            <h1>Digital Excellence</h1>
            <p>Powered by African Talent</p>
            <a href="{{ route('contact') }}" class="get-btn">Get Started</a>
        </div>
    </div>
    <div class="banner-bottom">
        <img src="{{ asset('assets/images/home-one-bottom.png') }}" class="banner-bottom1" alt="Images">
        <img src="{{ asset('assets/images/home-one-bottom2.png') }}" class="banner-bottom2" alt="Images">
    </div>

    <div class="play-btn-area">
        <div class="play-btn-area-into">
            <a href="#" class="play-btn">
                <i class='bx bx-play'></i>
            </a>
        </div>
        <div class="title"> Play Video Now</div>
    </div>

    <div class="social-link">
        <ul>
            <li class="active"><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
            <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            <li><a href="https://www.linkedin.com/" target="_blank">LinkedIn</a></li>
        </ul>
    </div>
    <div class="lines">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="lines2">
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- Banner Area End -->

<!-- What Did Area -->
<div class="what-did-area pb-70">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="what-did-content">
                    <div class="section-title">
                        <span class="sp-color1">What we do</span>
                        <h2>Enterprise Solutions for African Markets</h2>
                        <p>We develop powerful, locally-relevant software solutions for schools, churches, financial groups, and businesses across Kenya. With flagship products like SomaPlus (serving 100+ schools), we're transforming how institutions operate.</p>
                    </div>
                    <ul>
                        <li><i class='bx bx-check'></i> Education Management Systems</li>
                        <li><i class='bx bx-check'></i> Mobile Payment Solutions</li>
                        <li><i class='bx bx-check'></i> Community Finance (Chamas & SACCOs)</li>
                        <li><i class='bx bx-check'></i> Church Management Systems</li>
                    </ul>
                    <div class="what-did-profile">
                        <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=100&h=100&fit=crop&q=80" alt="Team Leader">
                        <p>Delivering exceptional software solutions with a commitment to quality and innovation in every line of code we write.</p>
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
                                    <h3>Years Of Experience</h3>
                                </div>
                                <div class="what-did-right-img">
                                    <img src="https://images.unsplash.com/photo-1664575602276-acd073f104c1?w=400&h=300&fit=crop&q=80" alt="Professional Team">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6 col-md-6">
                            <div class="what-did-right">
                                <div class="what-did-right-img">
                                    <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=400&h=300&fit=crop&q=80" alt="Development Excellence">
                                </div>

                                <div class="content">
                                    <img src="{{ asset('assets/images/what-did/text11.png') }}" alt="Success">
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

<!-- Services Area -->
<div class="services-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Our Solutions</span>
            <h2>Featured Products</h2>
            <p>Enterprise-grade software solutions designed for African businesses and institutions.</p>
        </div>

        <div class="services-slider owl-carousel owl-theme pt-45">
            <div class="services-item">
                <i class="flaticon-education"></i>
                <h3><a href="https://somaplus.net" target="_blank">SomaPlus School Management</a></h3>
                <p>Complete school administration platform with 100+ schools, 50,000+ students, and 98% satisfaction rate.</p>
            </div>

            <div class="services-item">
                <i class="flaticon-branding"></i>
                <h3><a href="{{ route('services.details', 'iremit') }}">iRemit Mobile Payments</a></h3>
                <p>Secure and efficient mobile payment solutions for seamless digital transactions.</p>
            </div>

            <div class="services-item">
                <i class="flaticon-research-1"></i>
                <h3><a href="{{ route('services.details', 'e-chama') }}">Backspace E-Chama</a></h3>
                <p>Comprehensive management system for chamas, welfare groups, and savings cooperatives (SACCOs).</p>
            </div>

            <div class="services-item">
                <i class="flaticon-rocket"></i>
                <h3><a href="{{ route('services.details', 'faith-central') }}">Faith Central</a></h3>
                <p>Modern church management system for member administration, events, and financial tracking.</p>
            </div>

            <div class="services-item">
                <i class="flaticon-operator"></i>
                <h3><a href="{{ route('services.index') }}">Custom Software Development</a></h3>
                <p>Bespoke software solutions tailored to your unique business requirements.</p>
            </div>
        </div>
    </div>
</div>
<!-- Services Area End -->

<!-- Case Studies Area -->
<div class="case-studies-area pb-70">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-3">
                <div class="section-title">
                    <span class="sp-color1">Portfolio</span>
                    <h2>Case Studies</h2>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="case-studies-text">
                    <p>Innovative software solutions transforming businesses across Kenya and beyond.</p>
                </div>
            </div>

            <div class="col-lg-3">
                <div class="case-studies-btn">
                    <a href="{{ route('portfolio.case-studies') }}" class="projects-btn">View All Products</a>
                </div>
            </div>
        </div>

        <div class="row pt-45">
            <div class="col-lg-8">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="case-studies-img-item">
                            <a href="{{ route('portfolio.case-study.details', 'project-1') }}">
                                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=600&h=400&fit=crop&q=80" alt="Team Collaboration">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="case-studies-img-item">
                            <a href="{{ route('portfolio.case-study.details', 'project-2') }}">
                                <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=600&h=400&fit=crop&q=80" alt="Strategic Planning">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="case-studies-img-item">
                            <a href="{{ route('portfolio.case-study.details', 'project-3') }}">
                                <img src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?w=600&h=400&fit=crop&q=80" alt="Professional Development">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-6 col-sm-6">
                        <div class="case-studies-img-item">
                            <a href="{{ route('portfolio.case-study.details', 'project-4') }}">
                                <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?w=600&h=400&fit=crop&q=80" alt="Innovation Workshop">
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="row">
                    <div class="col-lg-12 col-sm-6">
                        <div class="case-studies-list">
                            <i class="flaticon-education"></i>
                            <h3><a href="https://somaplus.net" target="_blank">SomaPlus</a></h3>
                            <p>Comprehensive school management system trusted by 100+ institutions.</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-6">
                        <div class="case-studies-list">
                            <i class="flaticon-branding"></i>
                            <h3><a href="{{ route('portfolio.case-study.details', 'iremit') }}">iRemit</a></h3>
                            <p>Seamless mobile payment solutions for modern transactions.</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-6">
                        <div class="case-studies-list">
                            <i class="flaticon-research-1"></i>
                            <h3><a href="{{ route('portfolio.case-study.details', 'e-chama') }}">Backspace E-Chama</a></h3>
                            <p>Complete management system for chamas, welfare groups, and SACCOs.</p>
                        </div>
                    </div>

                    <div class="col-lg-12 col-sm-6">
                        <div class="case-studies-list">
                            <i class="flaticon-rocket"></i>
                            <h3><a href="{{ route('portfolio.case-study.details', 'faith-central') }}">Faith Central</a></h3>
                            <p>Modern church management system for growing congregations.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Case Studies Area End -->

<!-- Choose Area -->
<div class="choose-area pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Why Choose Us</span>
            <h2>Why We Are The Best</h2>
        </div>

        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1531482615713-2afd69097998?w=400&h=300&fit=crop&q=80" alt="Vision and Strategy">
                    <h3>Clear Vision And Target</h3>
                    <p>
                        We align our development process with your business goals to deliver measurable results.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=300&fit=crop&q=80" alt="High Performance">
                    <h3>High Performance Capabilities</h3>
                    <p>
                        Leveraging the latest technologies to build fast, scalable, and reliable solutions.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1573497019940-1c28c88b4f3e?w=400&h=300&fit=crop&q=80" alt="Security">
                    <h3>Maintain Security And Trust</h3>
                    <p>
                        Security-first approach ensuring your data and systems are always protected.
                    </p>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="choose-card">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?w=400&h=300&fit=crop&q=80" alt="Quality Work">
                    <h3>Better Strategy And Quality Work</h3>
                    <p>
                        Combining strategic thinking with exceptional execution for outstanding results.
                    </p>
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
            <span class="sp-color1">Step By Step</span>
            <h2>Work Process</h2>
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
                        <div class="time-line-top">Content</div>
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
                        <div class="time-line-bottom">Finalization</div>
                    </div>
                </li>
            </ol>
        </div>
    </div>
</div>
<!-- Timeline Area End -->

<!-- Testimonials Area -->
<div class="testimonials-area testimonials-bg ptb-100">
    <div class="container">
        <div class="testimonials-slider owl-carousel owl-theme" data-slider-id="1">
            <div class="testimonials-item">
                <i class='bx bxs-quote-right'></i>
                 <p>
                    Backspace Software Developers delivered an exceptional e-commerce platform that exceeded our expectations. Their attention to detail and technical expertise is unmatched.
                </p>

                <h3>Amara Johnson</h3>
                <span>CEO, TechVenture Ltd</span>
            </div>

            <div class="testimonials-item">
                <i class='bx bxs-quote-right'></i>
                 <p>
                    Working with Backspace was a game-changer for our business. They transformed our digital presence and helped us reach new markets effectively.
                </p>

                <h3>Kwame Mensah</h3>
                <span>Founder, Digital Solutions Hub</span>
            </div>

            <div class="testimonials-item">
                <i class='bx bxs-quote-right'></i>
                 <p>
                    The team's professionalism and commitment to quality is outstanding. They delivered our mobile app ahead of schedule with zero compromises on quality.
                </p>

                <h3>Zara Williams</h3>
                <span>Product Manager, InnovateCo</span>
            </div>

            <div class="testimonials-item">
                <i class='bx bxs-quote-right'></i>
                 <p>
                    Excellent communication, brilliant developers, and a results-driven approach. Backspace is our go-to partner for all software development needs.
                </p>

                <h3>Omar Hassan</h3>
                <span>CTO, FutureTech Systems</span>
            </div>

            <div class="testimonials-item">
                <i class='bx bxs-quote-right'></i>
                 <p>
                    Their innovative solutions and strategic insights helped us modernize our entire IT infrastructure. Highly recommended!
                </p>

                <h3>Fatima Nkosi</h3>
                <span>Director of IT, Enterprise Solutions</span>
            </div>
        </div>
    </div>

    <!-- Start Carousel Thumbs -->
    <div class="thumbs-wrap">
        <div class="owl-thumbs testimonials-area-thumb" data-slider-id="1">
            <div class="owl-thumb-item">
                <img src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?w=100&h=100&fit=crop&q=80" alt="Amara Johnson">
            </div>

            <div class="owl-thumb-item">
                <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=100&h=100&fit=crop&q=80" alt="Kwame Mensah">
            </div>

            <div class="owl-thumb-item">
                <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=100&h=100&fit=crop&q=80" alt="Zara Williams">
            </div>

            <div class="owl-thumb-item">
                <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=100&h=100&fit=crop&q=80" alt="Omar Hassan">
            </div>

            <div class="owl-thumb-item">
                <img src="https://images.unsplash.com/photo-1531123897727-8f129e1688ce?w=100&h=100&fit=crop&q=80" alt="Fatima Nkosi">
            </div>
        </div>
    </div>
    <!-- End Carousel Thumbs -->

    <div class="testimonials-lines">
        <div class="line"></div>
        <div class="line"></div>
    </div>

    <div class="testimonials-lines2">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- Testimonials Area End -->

<!-- Blog Area -->
<div class="blog-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Insights</span>
            <h2>Latest From Our Blog</h2>
        </div>

        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="blog-card">
                    <div class="blog-card-img">
                        <a href="{{ route('blog.details', 'security-best-practices') }}">
                            <img src="https://images.unsplash.com/photo-1556761175-4b46a572b786?w=800&h=500&fit=crop&q=80" alt="Security Best Practices">
                        </a>
                        <div class="tag">
                            Web Development
                        </div>
                    </div>
                    <div class="content">
                        <span><i class='bx bx-time'></i> {{ date('d F, Y') }}</span>
                        <h3><a href="{{ route('blog.details', 'security-best-practices') }}">Security Best Practices for Modern Applications</a></h3>
                        <p>Learn essential security practices to protect your web applications from common vulnerabilities and threats.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="blog-side-item">
                            <img src="https://images.unsplash.com/photo-1664575602276-acd073f104c1?w=400&h=250&fit=crop&q=80" alt="Innovation Trends">
                            <span><i class='bx bx-time'></i> {{ date('d F, Y', strtotime('-1 day')) }}</span>
                            <h3><a href="{{ route('blog.details', 'innovation-trends') }}">Top Tech Trends Shaping 2026</a></h3>
                            <p>Discover the emerging technologies that are transforming the software development landscape.</p>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="blog-side-item">
                            <img src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?w=400&h=250&fit=crop&q=80" alt="Agile Development">
                            <span><i class='bx bx-time'></i> {{ date('d F, Y', strtotime('-2 days')) }}</span>
                            <h3><a href="{{ route('blog.details', 'agile-development') }}">Mastering Agile Development Methodologies</a></h3>
                            <p>Practical tips for implementing agile practices in your development team.</p>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="blog-side-item">
                            <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?w=400&h=250&fit=crop&q=80" alt="Cloud Architecture">
                            <span><i class='bx bx-time'></i> {{ date('d F, Y', strtotime('-3 days')) }}</span>
                            <h3><a href="{{ route('blog.details', 'cloud-architecture') }}">Building Scalable Cloud Architectures</a></h3>
                            <p>Best practices for designing and deploying applications in the cloud.</p>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="blog-side-item">
                            <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?w=400&h=250&fit=crop&q=80" alt="Project Management">
                            <span><i class='bx bx-time'></i> {{ date('d F, Y', strtotime('-4 days')) }}</span>
                            <h3><a href="{{ route('blog.details', 'project-management') }}">Effective Project Management in Tech</a></h3>
                            <p>Strategies for managing software projects successfully from start to finish.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Blog Area End -->

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
