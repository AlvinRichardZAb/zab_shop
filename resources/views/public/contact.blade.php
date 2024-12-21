@extends('layouts.master')

@section('content')
    <div class="container py-5">
        <h1 class="text-center mb-4">Contact Us</h1>
        <p class="text-center mb-4">
            We'd love to hear from you! Fill out the form below or email us at <b>support@bookshop.com</b>.
        </p>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea id="message" class="form-control" rows="5" placeholder="Write your message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Send Message</button>
                </form>
            </div>
        </div>
    </div>
@endsection
