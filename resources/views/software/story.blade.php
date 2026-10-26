<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Story | IslandTech Ventures PVT LTD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
        body { background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%); min-height: 100vh; }
        .section-title { color: #6366f1; font-weight: 700; margin-top: 40px; }
        .gallery-img { border-radius: 16px; box-shadow: 0 4px 16px rgba(99,102,241,0.10); margin-bottom: 24px; }
        .gallery-video { border-radius: 16px; box-shadow: 0 4px 16px rgba(99,102,241,0.10); margin-bottom: 24px; width: 100%; }
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
                    <li class="nav-item"><a class="nav-link" href="/software/photograph">Photo & Drone Studio</a></li>
                    <li class="nav-item"><a class="nav-link active" href="/software/story">Our Story</a></li>
                    <li class="nav-item"><a class="nav-link" href="/software/contact">Get in Touch</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container py-5">
        <h1 class="section-title mb-4 text-center" style="font-size:2.5rem;letter-spacing:1px;text-shadow:0 2px 8px #06b6d4;">Our Story & Gallery</h1>
        <div class="row g-4">
            <div class="col-md-6">
                <img src="/image/stock-photo-young-woman-headset-pointing-fingers-glowing-cyber-illustration-dark-background.jpeg" alt="Sample Photo 1" class="img-fluid gallery-img">
            </div>
            <div class="col-md-6">
                <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80" alt="Sample Photo 2" class="img-fluid gallery-img">
            </div>
            <div class="col-md-6">
                <video class="gallery-video" controls poster="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=600&q=80">
                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="col-md-6">
                <video class="gallery-video" controls poster="/image/stock-photo-young-woman-headset-pointing-fingers-glowing-cyber-illustration-dark-background.jpeg">
                    <source src="https://www.w3schools.com/html/movie.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
        </div>
    </div>
    <footer class="footer mt-5">
        <div class="container text-center py-3" style="background: #6366f1; color: #fff; border-radius: 12px 12px 0 0;">
            &copy; 2025 IslandTech Ventures PVT LTD. All rights reserved.
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
