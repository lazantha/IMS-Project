@extends('templates.master')
@section('title', 'Contact Us')

@section('content')
    <div class="container mt-5">
        <!-- Contact Section Header -->
        <div class="text-center mb-5">
            <h1 class="display-4">Contact Us</h1>
            <p class="lead text-muted">We’re here to assist you. Let’s get in touch!</p>
        </div>

        <!-- Contact Information Section -->
        <div class="row mb-4">
            <!-- Contact Details -->
            <div class="col-md-6">
                <h2 class="fs-2">Get in Touch</h2>
                <p class="fs-5">We'd love to hear from you! Whether you have a question, feedback, or need assistance, contact us:</p>
                
                <ul class="list-unstyled">
                    <li><i class="bi bi-envelope-fill text-primary"></i> <strong>Email:</strong> <a href="mailto:sglasanthapradeep@gmail.com" class="text-decoration-none">sglasanthapradeep@gmail.com</a></li>
                    <li class="mt-2"><i class="bi bi-telephone-fill text-primary"></i> <strong>Phone:</strong> <a href="tel:+94775746738" class="text-decoration-none">077 574 6738</a></li>
                </ul>
            </div>

            <!-- Our Location -->
            <div class="col-md-6">
                <h2 class="fs-2">Our Location</h2>
                <p class="fs-5">We are based in [Your Location]. Feel free to visit or contact us for inquiries or support.</p>
                <div class="mt-3">
                    <i class="bi bi-geo-alt-fill text-primary"></i> <strong>Address:</strong> [Your Address]
                </div>
            </div>
        </div>

        <!-- Business Hours Section -->
        <div class="row mb-4">
            <div class="col-md-6">
                <h2 class="fs-2">Business Hours</h2>
                <p class="fs-5">We are available Monday to Friday, 9:00 AM to 5:00 PM. For urgent matters, contact us via email or phone.</p>
            </div>

            <!-- Social Media Section -->
            <div class="col-md-6">
                <h2 class="fs-2">Follow Us</h2>
                <p class="fs-5">Stay connected with us on social media:</p>
                <ul class="list-unstyled">
                    <li><i class="bi bi-linkedin text-primary"></i> <strong>LinkedIn:</strong> <a href="[Your LinkedIn Profile Link]" class="text-decoration-none">Your LinkedIn</a></li>
                    <li class="mt-2"><i class="bi bi-github text-dark"></i> <strong>GitHub:</strong> <a href="[Your GitHub Profile Link]" class="text-decoration-none">Your GitHub</a></li>
                </ul>
            </div>
        </div>

        <!-- Footer Message -->
        <div class="text-center mt-5">
            <p class="text-muted">We look forward to connecting with you!</p>
        </div>
    </div>
@endsection
