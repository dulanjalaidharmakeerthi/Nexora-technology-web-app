<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Designing Services | IslandTech Ventures PVT LTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(120deg, #f3f4f6 0%, #e0e7ef 100%);
            min-height: 100vh;
        }
        .section-title {
            color: #4f46e5;
            font-weight: 800;
            margin-top: 40px;
            letter-spacing: 1.5px;
            text-shadow: 0 2px 8px #fff6, 0 1px 0 #e0e7ef;
        }
        .creative-card {
            border: none;
            border-radius: 24px;
            background: rgba(255,255,255,0.85);
            box-shadow: 0 8px 32px rgba(99,102,241,0.10), 0 2px 8px #a5b4fc33;
            transition: transform 0.2s, box-shadow 0.2s;
            position: relative;
            overflow: hidden;
            backdrop-filter: blur(2px);
        }
        .creative-card:before {
            content: '';
            position: absolute;
            top: -40px; left: -40px;
            width: 120px; height: 120px;
            background: radial-gradient(circle, #a5b4fc 0%, #f3f4f6 80%, transparent 100%);
            opacity: 0.12;
            z-index: 0;
        }
        .creative-card:after {
            content: '';
            position: absolute;
            bottom: -40px; right: -40px;
            width: 120px; height: 120px;
            background: radial-gradient(circle, #f472b6 0%, #a5b4fc 80%, transparent 100%);
            opacity: 0.10;
            z-index: 0;
        }
        .creative-card:hover {
            transform: translateY(-8px) scale(1.03);
            box-shadow: 0 16px 48px #a5b4fc55, 0 4px 16px #f472b655;
        }
        .creative-card .card-body {
            position: relative;
            z-index: 2;
        }
        .creative-list li {
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #6366f1;
            background: none;
        }
        .booking-form {
            background: rgba(236, 239, 255, 0.85);
            border-radius: 20px;
            box-shadow: 0 4px 24px #a5b4fc33, 0 0 16px #f472b633;
            padding: 2rem 2.5rem;
            backdrop-filter: blur(2px);
        }
        .booking-form label {
            color: #6366f1;
            font-weight: 600;
        }
        .booking-form .btn-primary {
            background: linear-gradient(90deg,#6366f1,#a5b4fc,#f472b6);
            color: #fff;
            border: none;
            font-size: 1.15rem;
            box-shadow: 0 2px 12px #a5b4fc55;
            border-radius: 32px;
            padding-left: 2rem;
            padding-right: 2rem;
            transition: background 0.3s, box-shadow 0.3s, transform 0.2s;
        }
        .booking-form .btn-primary:hover {
            background: linear-gradient(90deg,#f472b6,#a5b4fc,#6366f1);
            box-shadow: 0 8px 32px #a5b4fc, 0 0 32px #f472b6;
            transform: scale(1.06);
        }
        .footer {
            background: #6366f1;
            color: #fff;
            padding: 20px 0;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
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
                    <li class="nav-item"><a class="nav-link active" href="/software/designing">Creative Design</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/photograph">Photo & Drone Studio</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/story">Our Story</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/contact">Get in Touch</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <h1 class="section-title text-center mb-5">Designing Services</h1>
        <div class="row g-5 align-items-stretch mb-5">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <div class="creative-card p-5 h-100">
                    <div class="card-body">
                        <h2 class="mb-4" style="color:#06b6d4;font-weight:800;letter-spacing:1px;">Creative Design Solutions</h2>
                        <p style="font-size:1.15rem;color:#6366f1;font-weight:500;">At IslandTech Ventures PVT LTD, we offer a full range of design services to help your business stand out. Our team specializes in:</p>
                        <ul class="creative-list ps-3">
                        <li><span style="font-size:1.2em; color:#6366f1; font-weight:700;"><i class="bi bi-easel"></i> Poster, Banner & Flyer Design</span><br><span style="font-size:0.98em; color:#444;">Eye-catching visuals for events, promotions, and advertising.</span></li>
                        <li><span style="font-size:1.2em; color:#6366f1; font-weight:700;"><i class="bi bi-brush"></i> Photo Editing & Retouching</span><br><span style="font-size:0.98em; color:#444;">Professional enhancement and creative edits for your images.</span></li>
                        <li><span style="font-size:1.2em; color:#6366f1; font-weight:700;"><i class="bi bi-palette"></i> Branding & Logo Creation</span><br><span style="font-size:0.98em; color:#444;">Unique brand identities and memorable logos for your business.</span></li>
                        <li><span style="font-size:1.2em; color:#6366f1; font-weight:700;"><i class="bi bi-globe"></i> Web & Social Media Graphics</span><br><span style="font-size:0.98em; color:#444;">Modern graphics tailored for websites and social platforms.</span></li>
                        <li><span style="font-size:1.2em; color:#6366f1; font-weight:700;"><i class="bi bi-stars"></i> Custom Creative Solutions</span><br><span style="font-size:0.98em; color:#444;">Personalized, innovative designs to match your unique needs.</span></li>
    <!-- Bootstrap Icons CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
                        </ul>
                        <p class="mt-3" style="color:#f472b6;font-weight:600;">We combine creativity with the latest design trends to deliver visually stunning results that elevate your brand identity.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="booking-form shadow-lg">
                    <h3 class="mb-3 text-center" style="color:#fbbf24;font-weight:800;">Book a Design Service</h3>
                    <form method="POST" action="/designing/book">
                        <div class="mb-3">
                            <label for="name" class="form-label">Your Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="service" class="form-label">Service Type</label>
                            <select class="form-select" id="service" name="service" required>
                        <option value="Poster Design">Poster Design</option>
                        <option value="Banner Design">Banner Design</option>
                        <option value="Photo Editing">Photo Editing</option>
                        <option value="Branding">Branding</option>
                        <option value="Other">Other</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="details" class="form-label">Project Details</label>
                    <textarea class="form-control" id="details" name="details" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Book Now</button>
            </form>
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
