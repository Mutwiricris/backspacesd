@extends('layouts.app')

@section('title', 'Our Team - Backspace Software Developers')

@section('content')
@include('components.inner-banner', ['title' => 'Our Team'])

<!-- Team Area -->
<div class="team-area pt-100 pb-70">
    <div class="container">
        <div class="section-title text-center">
            <span class="sp-color1">Meet The Team</span>
            <h2>Talented Professionals</h2>
            <p>Our team of skilled developers, designers, and strategists</p>
        </div>

        <div class="row pt-45">
            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=400&h=500&fit=crop" alt="Amina Okafor">
                    <div class="content">
                        <h3>Amina Okafor</h3>
                        <span>CEO & Founder</span>
                        <ul class="social-link">
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?w=400&h=500&fit=crop" alt="Kwame Asante">
                    <div class="content">
                        <h3>Kwame Asante</h3>
                        <span>Lead Developer</span>
                        <ul class="social-link">
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1580489944761-15a19d654956?w=400&h=500&fit=crop" alt="Zainab Musa">
                    <div class="content">
                        <h3>Zainab Musa</h3>
                        <span>UX/UI Designer</span>
                        <ul class="social-link">
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=400&h=500&fit=crop" alt="Ibrahim Diop">
                    <div class="content">
                        <h3>Ibrahim Diop</h3>
                        <span>Project Manager</span>
                        <ul class="social-link">
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1594744803329-e58b31de8bf5?w=400&h=500&fit=crop" alt="Fatima Nkosi">
                    <div class="content">
                        <h3>Fatima Nkosi</h3>
                        <span>Backend Developer</span>
                        <ul class="social-link">
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?w=400&h=500&fit=crop" alt="Chidi Okonkwo">
                    <div class="content">
                        <h3>Chidi Okonkwo</h3>
                        <span>Frontend Developer</span>
                        <ul class="social-link">
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1573497019236-17f8177b81e8?w=400&h=500&fit=crop" alt="Aisha Kamara">
                    <div class="content">
                        <h3>Aisha Kamara</h3>
                        <span>QA Engineer</span>
                        <ul class="social-link">
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-card">
                    <img src="https://images.unsplash.com/photo-1519085360753-af0119f7cbe7?w=400&h=500&fit=crop" alt="Kofi Mensah">
                    <div class="content">
                        <h3>Kofi Mensah</h3>
                        <span>DevOps Engineer</span>
                        <ul class="social-link">
                            <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#"><i class='bx bxl-linkedin'></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team Area End -->
@endsection
