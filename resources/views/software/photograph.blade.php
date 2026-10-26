<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Photography | IslandTech Ventures PVT LTD</title>
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
                    <li class="nav-item"><a class="nav-link" href="/software/business">Business Solutions</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/designing">Creative Design</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/software/photograph">Photo & Drone Studio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/story">Our Story</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/contact">Get in Touch</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <h1 class="section-title mb-4 text-center" style="font-size:2.5rem;letter-spacing:1px;text-shadow:0 2px 8px #06b6d4;">Photography & Drone Shoots</h1>
        <div class="row mb-4 g-4">
            <div class="col-md-4">
                <div class="card h-100 p-4 text-center">
                    <div style="font-size:2.2rem;color:#6366f1;"><i class="bi bi-camera"></i></div>
                    <h5 class="fw-bold mb-2" style="color:#6366f1;">Professional Photoshoots</h5>
                    <p>We offer creative and professional photoshoots for portraits, events, businesses, and more. Every session is tailored to your unique style and requirements, ensuring you get the perfect shot every time.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 p-4 text-center">
                    <div style="font-size:2.2rem;color:#06b6d4;"><i class="bi bi-airplane"></i></div>
                    <h5 class="fw-bold mb-2" style="color:#06b6d4;">Drone Photography & Videography</h5>
                    <p>Capture breathtaking aerial views for real estate, events, marketing, and more. Our drone services deliver stunning, high-resolution photos and videos from unique perspectives.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 p-4 text-center">
                    <div style="font-size:2.2rem;color:#f472b6;"><i class="bi bi-magic"></i></div>
                    <h5 class="fw-bold mb-2" style="color:#f472b6;">Editing & Retouching</h5>
                    <p>Enhance your images with our expert editing and retouching services. We ensure every photo looks flawless, vibrant, and ready to impress—perfect for personal or business use.</p>
                </div>
            </div>
        </div>
        <div class="mb-5 p-4 rounded-4 text-center" style="background:linear-gradient(90deg,#fbbf24 0%,#f472b6 100%);color:#fff;font-weight:600;box-shadow:0 2px 16px #fbbf2444;font-size:1.18rem;">
            <span><i class="bi bi-lightbulb"></i> Book your session today and capture your best moments with IslandTech Ventures PVT LTD!</span>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="card p-4">
                    <h4 class="mb-3" style="color:#f472b6;font-weight:700;">Book a Photography Session</h4>
                    <form method="POST" action="{{ url('/software/photograph/book') }}">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">{{ session('success') }}</div>
                        @endif
                        @if(session('error'))
                            <div class="alert alert-danger">{{ session('error') }}</div>
                        @endif
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Type of Photography Service</label>
                            <select class="form-select" id="service" name="service" required>
                                <option value="">-- Please choose an option --</option>
                                <option value="photoshoot">Professional Photoshoot</option>
                                <option value="drone">Drone Photography & Videography</option>
                                <option value="editing">Editing & Retouching</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="details" class="form-label">Session Details</label>
                            <textarea class="form-control" id="details" name="details" rows="3" required></textarea>
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
