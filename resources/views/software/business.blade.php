<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Software Business | IslandTech Ventures PVT LTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); min-height: 100vh; }
        .section-title { color: #6366f1; font-weight: 700; margin-top: 40px; }
        .card { border-radius: 16px; box-shadow: 0 4px 16px rgba(99,102,241,0.08); }
        .btn-primary { background: linear-gradient(90deg, #6366f1 0%, #06b6d4 100%); border: none; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark shadow" style="background: linear-gradient(90deg, #6366f1 0%, #06b6d4 100%);">
        <div class="container">
            <a class="navbar-brand fw-bold" style="font-size:1.7rem;letter-spacing:1px;" href="/">
                <span style="color:#fbbf24;">IslandTech</span> <span style="color:#fff;">Ventures PVT LTD</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto fw-semibold" style="font-size:1.13rem;">
                    <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/software/business">Business Solutions</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/designing">Creative Design</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/photograph">Photo & Drone Studio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/story">Our Story</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/contact">Get in Touch</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <h1 class="section-title mb-4 text-center" style="font-size:2.7rem;letter-spacing:1.5px;text-shadow:0 2px 12px #06b6d4;">Empowering Your Business with Technology</h1>
        <div class="mb-4 p-4 rounded-4" style="background:rgba(99,102,241,0.10);box-shadow:0 6px 32px #06b6d422;">
            <div class="mb-4 p-3 rounded-3 text-center" style="background:linear-gradient(90deg,#06b6d4 0%,#6366f1 100%);color:#fff;font-weight:600;box-shadow:0 2px 16px #06b6d444;font-size:1.2rem;">
                <span><i class="bi bi-currency-rupee"></i> <strong>Affordable Packages:</strong> Starting from <strong>Rs. 5,000</strong>. Fast, secure hosting included!</span>
            </div>
            <h4 class="mb-4 text-center" style="color:#06b6d4;font-weight:800;letter-spacing:1px;">Our Core Services</h4>
            <div class="row g-4 justify-content-center">
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-3" style="background:linear-gradient(120deg,#e0e7ff 60%,#f8fafc 100%);">
                        <div class="mb-3" style="font-size:2.5rem;color:#6366f1;"><i class="bi bi-gear-wide-connected"></i></div>
                        <h5 class="fw-bold mb-2" style="color:#6366f1;">Custom Software Systems</h5>
                        <p style="font-size:1.08rem;">Tailored solutions for business management, inventory, CRM, POS, and more. We listen to your needs and deliver software that fits your workflow, with ongoing support and updates.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-3" style="background:linear-gradient(120deg,#e0e7ff 60%,#f8fafc 100%);">
                        <div class="mb-3" style="font-size:2.5rem;color:#06b6d4;"><i class="bi bi-window"></i></div>
                        <h5 class="fw-bold mb-2" style="color:#06b6d4;">Website Development</h5>
                        <p style="font-size:1.08rem;">Modern, responsive websites for any purpose—personal, business, e-commerce, or portfolio. Fast delivery, easy management, and free minor updates included.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card h-100 shadow-sm border-0 text-center p-3" style="background:linear-gradient(120deg,#e0e7ff 60%,#f8fafc 100%);">
                        <div class="mb-3" style="font-size:2.5rem;color:#f472b6;"><i class="bi bi-phone"></i></div>
                        <h5 class="fw-bold mb-2" style="color:#f472b6;">Mobile App Development</h5>
                        <p style="font-size:1.08rem;">Custom mobile apps for Android and iOS. Clean design, high accuracy, and smooth performance—perfect for businesses, startups, or personal projects.</p>
                    </div>
                </div>
            </div>
            <div class="mt-4 p-3 rounded-3 text-center" style="background:linear-gradient(90deg,#fbbf24 0%,#f472b6 100%);color:#fff;font-weight:600;box-shadow:0 2px 16px #fbbf2444;font-size:1.18rem;">
                <span><i class="bi bi-lightbulb"></i> <strong>Let us turn your vision into reality!</strong> Creative solutions, fast delivery, and friendly support—your success is our priority.</span>
            </div>
        </div>
        <p class="mb-4" style="font-size:1.1rem;color:#6366f1;font-weight:500;">Contact us for a free consultation or book your project below!</p>
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card p-4">
                    <h4 class="mb-3" style="color:#f472b6;font-weight:700;">Book a Service</h4>
                    <form>
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        <form method="POST" action="{{ url('/software/business/book') }}">
                        @csrf
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                                <label for="service" class="form-label">Which service are you interested in?</label>
                                <select class="form-select" id="service" name="service" required>
                                    <option value="">-- Please choose an option --</option>
                                    <option value="custom_software">Custom Software System (Business management, inventory, CRM, POS, or unique solutions)</option>
                                    <option value="website_development">Website Development (Personal, business, e-commerce, portfolio, etc.)</option>
                                    <option value="mobile_app">Mobile App Development (Android or iOS, fully customized for your needs)</option>
                                    <option value="blog_creation">Blog Creation (Modern, easy-to-manage blog setup)</option>
                                </select>
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label">Project Details</label>
                            <textarea class="form-control" id="details" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Book Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <footer class="footer mt-5">
        <div class="container text-center py-3" style="background: #6366f1; color: #fff; border-radius: 12px 12px 0 0;">
            &copy; 2025 IslandTech Ventures PVT LTD. All rights reserved.
        </div>
    </footer>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
