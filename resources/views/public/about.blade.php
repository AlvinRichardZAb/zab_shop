@extends('layouts.master')

@section('content')
    <!-- About Section -->
    <section class="about-area py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{ asset('assets/img/about-us.jpg') }}" alt="About Us" class="img-fluid rounded">
                </div>
                <div class="col-md-6">
                    <h2 class="text-primary mb-4">About Us</h2>
                    <p class="mb-3">
                        Welcome to <b>Book Shop</b>, your number one source for all things books. We're dedicated to giving you the very best of literature, engineering, and discount books, with a focus on quality, affordability, and variety.
                    </p>
                    <p class="mb-3">
                        Founded in 2023, <b>Book Shop</b> has come a long way from its beginnings as a small store. When we first started out, our passion for promoting literacy and making books accessible drove us to turn hard work and inspiration into a booming online store.
                    </p>
                    <p class="mb-3">
                        We now serve customers all over the world and are thrilled to be a part of the literary industry.
                    </p>
                    <p class="mb-3">
                        We hope you enjoy our products as much as we enjoy offering them to you. If you have any questions or comments, please don't hesitate to contact us.
                    </p>
                    <a href="{{ route('contact') }}" class="btn btn-primary">Contact Us</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-area py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary">Meet Our Team</h2>
                <p class="text-muted">The people behind Book Shop's success.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow">
                        <img src="{{ asset('assets/img/team1.jpeg') }}" alt="Team Member" class="card-img-top rounded-top">
                        <div class="card-body">
                            <h5 class="card-title">ALVIN  RICHARD</h5>
                            <p class="card-text text-muted">Founder & CEO</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow">
                        <img src="{{ asset('assets/img/team2.jpg') }}" alt="Team Member" class="card-img-top rounded-top">
                        <div class="card-body">
                            <h5 class="card-title">NAVEED ASAD LI</h5>
                            <p class="card-text text-muted">Marketing Manager</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card text-center shadow">
                        <img src="{{ asset('assets/img/team3.jpeg') }}" alt="Team Member" class="card-img-top rounded-top">
                        <div class="card-body">
                            <h5 class="card-title">sheikh</h5>
                            <p class="card-text text-muted">Head of Operations</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="mission-area py-5">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="text-primary">Our Mission</h2>
                <p class="text-muted">Empowering readers through affordable and quality books.</p>
            </div>
            <p>
                At <b>Book Shop</b>, we believe in the power of books to change lives. Our mission is to provide a platform where readers can access a wide range of books, from classic literature to modern engineering texts, at prices everyone can afford.
            </p>
        </div>
    </section>
@endsection
