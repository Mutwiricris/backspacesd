@extends('layouts.app')

@section('title', 'Contact Us - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Contact Us'])

<!-- Contact Area -->
<div class="contact-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Get In Touch</span>
            <h2>Let's Start a Conversation</h2>
            <p>Have a project in mind? We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>

        <div class="row pt-45">
            <div class="col-lg-4">
                <div class="contact-info">
                    <i class="flaticon-placeholder"></i>
                    <h3>Our Location</h3>
                    <p>Eens Business Park 2nd Floor<br>Mombasa Road, Nairobi, Kenya</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact-info">
                    <i class="flaticon-email"></i>
                    <h3>Email Address</h3>
                    <p><a href="mailto:info@backspace.co.ke">info@backspace.co.ke</a><br>
                    <a href="mailto:support@backspace.co.ke">support@backspace.co.ke</a></p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="contact-info">
                    <i class="flaticon-call"></i>
                    <h3>Phone Number</h3>
                    <p><a href="tel:+254717966966">0717 966 966</a><br>
                    <a href="tel:+254717966966">+254 717 966 966</a></p>
                </div>
            </div>
        </div>

        <div class="row pt-45">
            <div class="col-lg-6">
                <div class="contact-img">
                    <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?w=800&h=600&fit=crop&q=80" alt="Contact Us">
                </div>
            </div>

            <div class="col-lg-6">
                <div class="contact-form">
                    <h3>Ready to Get Started?</h3>
                    <form id="contactForm" method="POST" action="{{ route('contact.submit') }}">
                        @csrf

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" class="form-control" required placeholder="Your Name">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control" required placeholder="Your Email">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone_number" class="form-control" placeholder="Your Phone">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <input type="text" name="subject" id="msg_subject" class="form-control" required placeholder="Subject">
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="message" class="form-control" id="message" cols="30" rows="8" required placeholder="Your Message"></textarea>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <button type="submit" class="default-btn btn-bg1 border-radius-5">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact Area End -->

<!-- Map Area -->
<div class="map-area">
    <div class="container-fluid p-0">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.8536825487574!2d36.89164507496854!3d-1.2644453987033203!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f17361b4b1e85%3A0x7b8b0b3b1e1e1e1e!2sMombasa%20Road%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1566999372443!5m2!1sen!2ske" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
    </div>
</div>
<!-- Map Area End -->
@endsection
