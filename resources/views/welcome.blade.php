<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Welcome | IslandTech Ventures PVT LTD</title>
            <!-- Bootstrap CSS -->
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <style>
                body {
                    background: linear-gradient(135deg, #f8fafc 0%, #e0e7ff 100%);
                    min-height: 100vh;
                }
                .navbar {
                    background: linear-gradient(90deg, #6366f1 0%, #06b6d4 100%);
                }
                .navbar-brand, .nav-link {
                    color: #fff !important;
                    font-weight: 500;
                }
                .nav-link:hover {
                    color: #fbbf24 !important;
                }
                .hero-section {
                    padding: 60px 0 40px 0;
                    text-align: center;
                    background: linear-gradient(120deg, #fbbf24 0%, #f472b6 100%);
                    color: #fff;
                }
                .hero-section img {
                    max-width: 320px;
                    border-radius: 20px;
                    box-shadow: 0 8px 32px rgba(0,0,0,0.15);
                    margin-bottom: 20px;
                }
                .section-title {
                    color: #6366f1;
                    font-weight: 700;
                    margin-top: 40px;
                }
                .card {
                    border: none;
                    border-radius: 16px;
                    box-shadow: 0 4px 16px rgba(99,102,241,0.08);
                    transition: transform 0.2s;
                }
                .card:hover {
                    transform: translateY(-8px) scale(1.03);
                    box-shadow: 0 8px 32px rgba(6,182,212,0.15);
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
                            <li class="nav-item"><a class="nav-link" href="/software/designing">Creative Design</a></li>
                            <li class="nav-item"><a class="nav-link" href="/software/photograph">Photo & Drone Studio</a></li>
                            <li class="nav-item"><a class="nav-link" href="#about">Our Story</a></li>
                            <li class="nav-item"><a class="nav-link" href="/software/contact">Get in Touch</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Hero Section -->
            <section class="hero-section">
    <div class="container position-relative py-5">
        <!-- Animated Robot SVG -->
        <div id="robot-anim" style="position:absolute;z-index:3;left:10%;top:60%;width:64px;height:64px;pointer-events:none;transition:left 1.5s cubic-bezier(.4,2,.6,1),top 1.5s cubic-bezier(.4,2,.6,1);">
            <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="16" y="24" width="32" height="24" rx="8" fill="#6366f1" stroke="#222" stroke-width="2"/>
                <rect x="24" y="16" width="16" height="16" rx="8" fill="#06b6d4" stroke="#222" stroke-width="2"/>
                <circle cx="28" cy="36" r="3" fill="#fff"/>
                <circle cx="36" cy="36" r="3" fill="#fff"/>
                <rect x="20" y="48" width="8" height="8" rx="3" fill="#fbbf24" stroke="#222" stroke-width="2"/>
                <rect x="36" y="48" width="8" height="8" rx="3" fill="#fbbf24" stroke="#222" stroke-width="2"/>
                <rect x="30" y="8" width="4" height="8" rx="2" fill="#f472b6" stroke="#222" stroke-width="2"/>
            </svg>
        </div>
        <style>
            /* Robot animation: optional hover effect */
            #robot-anim:hover { filter: brightness(1.2) drop-shadow(0 0 8px #06b6d4); }
        </style>
        <div style="position:absolute;top:0;left:0;width:100%;height:100%;background:linear-gradient(120deg, #6366f1 0%, #06b6d4 40%, #fbbf24 100%);opacity:0.18;z-index:0;"></div>
        <div class="row align-items-center justify-content-center flex-lg-row flex-column-reverse" style="position:relative;z-index:2;">
            <div class="col-lg-6 text-center text-lg-start mt-4 mt-lg-0">
                <h1 class="display-2 fw-bold mb-4" style="color:#fff;letter-spacing:1px;text-shadow:0 2px 8px rgba(0,0,0,0.10);">
                    Welcome to <span style="color:#fff;font-weight:900;">IslandTech Ventures PVT LTD</span>
                </h1>
                <p class="lead mb-4" style="color:#fff;font-size:1.35rem;text-shadow:0 1px 2px rgba(0,0,0,0.10);">
                    Empowering your business with innovative software, creative photography, and stunning design solutions.
                </p>
                <a href="#contact" class="btn btn-lg px-5 py-2 fw-bold hero-btn-glow">Get Started</a>
            </div>
            <div class="col-lg-6 text-center mb-4 mb-lg-0">
                <div class="position-relative d-inline-block">
                    <img src="/image/stock-photo-young-woman-headset-pointing-fingers-glowing-cyber-illustration-dark-background.jpeg" alt="Young Woman with Headset - Cyber Illustration" class="img-fluid rounded-4 hero-img-neon" style="max-width:480px; min-width:260px; width:100%;box-shadow:0 0 48px 16px #06b6d4, 0 0 96px 32px #f472b6, 0 8px 32px rgba(99,102,241,0.18);">
                </div>
            </div>
        </div>
    </div>
    <style>
    .hero-img-neon {
        border: none;
        animation: heroGlow 2.5s infinite alternate;
        background:rgba(255,255,255,0.10);
        transition: box-shadow 0.3s;
    }
    @keyframes heroGlow {
        0% { box-shadow: 0 0 32px 8px #06b6d4, 0 0 64px 16px #f472b6, 0 8px 32px rgba(99,102,241,0.25); }
        100% { box-shadow: 0 0 48px 24px #fbbf24, 0 0 80px 32px #06b6d4, 0 8px 32px rgba(251,191,36,0.18); }
    }
    .hero-btn-glow {
        background: linear-gradient(90deg,#fbbf24,#f472b6,#06b6d4);
        color: #fff;
        border: none;
        font-size: 1.3rem;
        box-shadow: 0 4px 24px #06b6d4, 0 0 16px #fbbf24;
        transition: background 0.3s, box-shadow 0.3s, transform 0.2s;
        border-radius: 32px;
        padding-left: 2.5rem;
        padding-right: 2.5rem;
    }
    .hero-btn-glow:hover {
        background: linear-gradient(90deg,#06b6d4,#fbbf24,#f472b6);
        box-shadow: 0 8px 32px #f472b6, 0 0 32px #06b6d4;
        transform: scale(1.06);
    }
    @media (max-width: 768px) {
        #robot-anim { display: none; }
    }
    </style>
    <script>
    // Animate the robot to follow the mouse cursor in the hero section
    document.addEventListener('DOMContentLoaded', function() {
        var robot = document.getElementById('robot-anim');
        var container = robot && robot.parentElement;
        if (!robot || !container) return;
        var w = 0, h = 0;
        function updateSize() {
            w = container.offsetWidth - 64;
            h = container.offsetHeight - 64;
        }
        updateSize();
        window.addEventListener('resize', updateSize);
        // Move robot to a position (x, y) in container
        function moveRobotTo(x, y) {
            robot.style.left = x + 'px';
            robot.style.top = y + 'px';
        }
        // Move robot randomly
        function moveRobotRandom() {
            var left = Math.random() * 0.7 * w + 0.05 * w;
            var top = Math.random() * 0.5 * h + 0.3 * h;
            moveRobotTo(left, top);
        }
        // Mouse move handler
        var mouseActive = false;
        var mouseTimeout;
        container.addEventListener('mousemove', function(e) {
            var rect = container.getBoundingClientRect();
            var x = e.clientX - rect.left - 32; // center robot
            var y = e.clientY - rect.top - 32;
            // Clamp to container
            x = Math.max(0, Math.min(w, x));
            y = Math.max(0, Math.min(h, y));
            moveRobotTo(x, y);
            mouseActive = true;
            clearTimeout(mouseTimeout);
            mouseTimeout = setTimeout(function() { mouseActive = false; }, 2000);
        });
        // Fallback to random movement if mouse is not active
        setInterval(function() {
            if (!mouseActive) moveRobotRandom();
        }, 2200);
        moveRobotRandom();
    });
    </script>
            </section>

            <!-- Main Content -->
            <div class="container">
                <div class="row mt-5 g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-4 h-100" id="software">
                            <h3 class="section-title">Software Business</h3>
                            <p><strong>We can create all your customized software, websites, mobile apps, and blogs.</strong> Our team delivers robust, scalable, and custom solutions to help your business grow and succeed in the digital era.</p>
                        </div>
                    </div>
                
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-4 h-100" id="designing">
                            <h3 class="section-title">Designing</h3>
                            <p>We create and edit posters, banners, and photos for all your needs. Get creative, modern design solutions for web, print, and branding to elevate your business identity.</p>
                        </div>
                    </div>
                                            <div class="col-md-6 col-lg-4">
                                                <div class="card p-4 h-100">
                                                    <h3 class="section-title">Photoshoot & Drone Shoot</h3>
                                                    <p><strong>We provide all types of videography and photoshoot services, including creative drone shoots.</strong> Get professional shoots tailored to your needs and budget—quality at a price that's worth it!</p>
                                                </div>
                                            </div>

                                            
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-4 h-100" id="about">
                            <h3 class="section-title">About Us</h3>
                            <p>IslandTech Ventures PVT LTD delivers custom software, websites, mobile apps, photography, videography, drone shoots, and creative design. We combine technology and creativity to help your business stand out.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-4 h-100" id="contact">
                            <h3 class="section-title">Contact Us</h3>
                            <p>Email: <a href="mailto:info@islandtech.com">info@islandtech.com</a><br>Phone: +94 77 123 4567</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="card p-4 h-100" id="software">
                            <h3 class="section-title">Our Gallery</h3>
                            <p><strong>Explore our diverse portfolio showcasing our expertise in software development, photography, and design.</strong> Our team is dedicated to delivering high-quality, customized solutions that meet your unique needs.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->
            <footer class="footer mt-5">
                <div class="container text-center py-3" style="background: #6366f1; color: #fff; border-radius: 12px 12px 0 0;">
                    &copy; 2025 IslandTech Ventures PVT LTD. All rights reserved.
                </div>
            </footer>

            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
        </body>
        </html>
                       
        
