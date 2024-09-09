@extends('templates.master')
@section('title', 'About Us')

@section('content')
    <div class="container mt-5">
        <!-- About Us Header Section -->
        <div class="bg-light p-5 rounded shadow-sm mb-4 text-center">
            <h1 class="display-4">About Us</h1>
            <p class="lead text-muted">Empowering developers with seamless web application development tools and frameworks.</p>
        </div>

        <!-- Mission and Vision Section -->
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h2 class="fs-2 text-primary">Our Mission</h2>
            <p>Our mission is to deliver a user-friendly, efficient, and secure web application platform that empowers developers to create high-quality applications. We are committed to continuous improvement, ensuring that our system evolves with the ever-changing technological landscape.</p>

            <h2 class="fs-2 text-primary">Our Vision</h2>
            <p>We strive to be at the forefront of web application development by continuously innovating and integrating the latest technologies. Our vision is to create a platform that not only meets but exceeds the expectations of our users, providing them with the tools they need to succeed in the digital world.</p>
        </div>

        <!-- Framework Overview Section -->
        <div class="bg-light p-4 rounded shadow-sm mb-4">
            <h2 class="fs-2 text-primary">Our Framework</h2>
            <p>We have built our system using the Laravel framework, a leading PHP framework known for its elegant syntax, powerful tools, and ease of use. Laravel allows us to deliver a highly functional, secure, and scalable web application that meets the diverse needs of our users.</p>

            <h3 class="fs-3">Key Features</h3>
            <ul class="list-unstyled">
                <li><i class="bi bi-check-circle-fill text-success"></i> <strong>MVC Architecture:</strong> Ensures our application is well-structured for easy development and scalability.</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Eloquent ORM:</strong> Enables seamless database interactions and data integrity.</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Blade Templating Engine:</strong> Allows dynamic, responsive pages with clean syntax.</li>
                <li><i class="bi bi-check-circle-fill text-success"></i> <strong>Security and Authentication:</strong> Offers secure user authentication and authorization mechanisms.</li>
            </ul>
        </div>

        <!-- Values Section -->
        <div class="bg-white p-4 rounded shadow-sm mb-4">
            <h2 class="fs-2 text-primary">Our Values</h2>
            <ul class="list-unstyled">
                <li><i class="bi bi-gem text-warning"></i> <strong>Innovation:</strong> Pushing the boundaries of technology to deliver cutting-edge solutions.</li>
                <li><i class="bi bi-star text-warning"></i> <strong>Quality:</strong> Providing high-quality tools and services that our users can trust.</li>
                <li><i class="bi bi-people text-warning"></i> <strong>Collaboration:</strong> Fostering a collaborative environment where teamwork drives success.</li>
                <li><i class="bi bi-shield-lock text-warning"></i> <strong>Integrity:</strong> Operating with transparency and trust in all our actions.</li>
            </ul>
        </div>

        <!-- Footer Message -->
        <div class="text-center mt-5">
            <p class="text-muted">Join us on our journey to create better web applications!</p>
        </div>
    </div>
@endsection
