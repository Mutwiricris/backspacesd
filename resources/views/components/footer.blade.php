<!-- Footer Area -->
<footer class="footer-area footer-bg">
    <div class="footer-top pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="{{ route('home') }}">
                                <img src="{{ asset('assets/images/logos/logo-1.png') }}" alt="Backspace Software Developers" style="max-height: 60px; width: auto;">
                            </a>
                        </div>
                        <p>
                            Backspace Software Developers - Your trusted partner for innovative software solutions and digital transformation.
                        </p>
                        <div class="social-link-content">
                            <h3 class="title">Follow Us On</h3>
                            <ul class="social-footer-link">
                                <li>
                                    <a href="https://www.facebook.com/" target="_blank">
                                        <i class='bx bxl-facebook'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/" target="_blank">
                                        <i class='bx bxl-linkedin'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/" target="_blank">
                                        <i class='bx bxl-twitter'></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/" target="_blank">
                                        <i class='bx bxl-instagram'></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 col-md-6">
                    <div class="footer-widget ps-2">
                        <h3>Quick Links</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="{{ route('home') }}">
                                    Home
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('about') }}">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('blog.index') }}">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services.index') }}">
                                    Services
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('portfolio.case-studies') }}">
                                    Case Studies
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget ps-2">
                        <h3>Top Categories</h3>
                        <ul class="footer-list">
                            <li>
                                <a href="{{ route('services.index') }}">
                                    Branding
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services.index') }}">
                                    Web Development
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services.index') }}">
                                    Digital Marketing
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services.index') }}">
                                    Web Designing
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services.index') }}">
                                    SEO & Marketing
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('services.index') }}">
                                    Product Designing
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3>Get In Touch</h3>
                        <ul class="footer-list-two">
                            <li>
                                <i class="flaticon-placeholder"></i>
                                <div class="title">Address: </div>
                                Eens Business Park 2nd Floor, Mombasa Road, Nairobi
                            </li>

                            <li>
                                <i class="flaticon-call"></i>
                                <div class="title">Phone:</div>
                                <a href="tel:+254717966966"> 0717 966 966 </a>
                            </li>

                            <li>
                                <i class="flaticon-email"></i>
                                <div class="title">Mail:</div>
                                <a href="mailto:info@backspace.co.ke">info@backspace.co.ke</a>
                            </li>
                        </ul>

                        <form class="newsletter-form" data-toggle="validator" method="POST">
                            @csrf
                            <input type="email" class="form-control" placeholder="Email Address" name="EMAIL" required autocomplete="off">
                            <button type="submit" class="submit-btn btn-bg1">
                                Subscribe
                            </button>
                            <div id="validator-newsletter" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="copy-right-area">
            <div class="copy-right-text">
                <p>
                   Copyright &copy;{{ date('Y') }} Backspace Software Developers. All Rights Reserved.
                </p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer Area End -->
