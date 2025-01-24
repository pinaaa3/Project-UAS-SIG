<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peta Tematik Indonesia</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <!-- Leaflet CSS -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css">

    <!-- Custom CSS -->
    <style>
        #map {
            height: 75vh;
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .legend {
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .info {
            background: white;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        /* Navbar styling */
        .navbar {
            padding: 1rem 0;
            background: linear-gradient(135deg, #0d6efd, #0099ff) !important;
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.5rem;
            padding: 0.5rem 1rem;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .navbar-brand i {
            margin-right: 0.5rem;
        }

        .navbar-brand:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
            border-radius: 8px;
            transition: all 0.3s ease;
            color: #fff
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            border-radius: 12px;
            padding: 1rem 0;
        }

        .dropdown-item {
            padding: 0.7rem 1.5rem;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .dropdown-item i {
            margin-right: 0.5rem;
            width: 20px;
            text-align: center;
        }

        .dropdown-item:hover {
            background: rgba(13, 110, 253, 0.1);
            padding-left: 2rem;
        }

        .nav-btn {
            padding: 0.5rem 1.5rem;
            border-radius: 50px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .nav-btn:hover {
            transform: translateY(-2px);
        }

        .nav-btn i {
            margin-right: 0.5rem;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="{{ route('maps.index') }}">
                <i class="fas fa-map-marked-alt"></i>GIS Sulteng
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto">
                    <!-- Home Menu -->
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('maps.index') }}">
                            <i class="fas fa-home"></i> Home
                        </a>
                    </li>

                    <!-- Quick Links -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="quickLinksDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fas fa-link"></i> Quick Links
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="#explore-section">
                                    <i class="fas fa-compass"></i>Eksplorasi
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#map-view">
                                    <i class="fas fa-map"></i>Peta Preview
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#data-categories">
                                    <i class="fas fa-th-large"></i>Kategori Data
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Dropdown Peta Tematik -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="themesDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fas fa-layer-group"></i> Peta Tematik
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('maps.population') }}">
                                    <i class="fas fa-users"></i>Jumlah Penduduk
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('maps.poverty') }}">
                                    <i class="fas fa-hand-holding-usd"></i>Tingkat Kemiskinan
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('maps.unemployment') }}">
                                    <i class="fas fa-briefcase"></i>Tingkat Pengangguran
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('maps.parks') }}">
                                    <i class="fas fa-tree"></i>Taman
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('maps.schools') }}">
                                    <i class="fas fa-school"></i>Sekolah
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- Dropdown Data Sulteng -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="sultengDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <i class="fas fa-database"></i> Data Sulteng
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="{{ route('sulteng.map') }}">
                                    <i class="fas fa-map"></i>Peta Sulteng
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('sulteng.regencies') }}">
                                    <i class="fas fa-city"></i>Data Kabupaten
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="{{ route('sulteng.thematic') }}">
                                    <i class="fas fa-chart-pie"></i>Data Tematik
                                </a>
                            </li>
                        </ul>
                    </li>

                    <!-- About Menu -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">
                            <i class="fas fa-info-circle"></i> About
                        </a>
                    </li>
                </ul>

                <!-- Login Button -->
                <div class="d-flex align-items-center">
                    <a href="/admin" class="btn btn-light nav-btn">
                        <i class="fas fa-sign-in-alt"></i>Login Admin
                    </a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Content -->
    @yield('content')

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    @stack('scripts')

    <!-- Modern Footer -->
    <footer class="footer-section">
        <div class="footer-top">
            <div class="container">
                <div class="row g-4">
                    <!-- About Column -->
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-widget">
                            <div class="footer-logo">
                                <i class="fas fa-map-marked-alt"></i>
                                <span>GIS Sulteng</span>
                            </div>
                            <p class="footer-desc">
                                Platform Sistem Informasi Geografis untuk visualisasi dan analisis data wilayah Sulawesi
                                Tengah.
                            </p>
                            <div class="social-links">
                                <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                                <a href="#" class="social-link"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <!-- Quick Links -->
                    <div class="col-lg-2 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Quick Links</h4>
                            <ul class="footer-links">
                                <li><a href="{{ route('maps.index') }}"><i class="fas fa-chevron-right"></i>Home</a>
                                </li>
                                <li><a href="{{ route('about') }}"><i class="fas fa-chevron-right"></i>About</a></li>
                                <li><a href="{{ route('sulteng.map') }}"><i class="fas fa-chevron-right"></i>Peta</a>
                                </li>
                                <li><a href="{{ route('sulteng.thematic') }}"><i
                                            class="fas fa-chevron-right"></i>Data</a></li>
                                <li><a href="#contact"><i class="fas fa-chevron-right"></i>Contact</a></li>
                            </ul>
                        </div>
                    </div>

                    <!-- Data Categories -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Kategori Data</h4>
                            <ul class="footer-links">
                                <li><a href="{{ route('maps.population') }}"><i
                                            class="fas fa-users"></i>Kependudukan</a></li>
                                <li><a href="{{ route('maps.poverty') }}"><i
                                            class="fas fa-hand-holding-usd"></i>Ekonomi</a></li>
                                <li><a href="{{ route('maps.parks') }}"><i class="fas fa-tree"></i>Fasilitas</a></li>
                                <li><a href="{{ route('maps.schools') }}"><i class="fas fa-school"></i>Pendidikan</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!-- Contact Info -->
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h4 class="widget-title">Kontak Kami</h4>
                            <div class="contact-info">
                                <div class="contact-item">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Kota Palu, Sulawesi Tengah<br>Indonesia</p>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-envelope"></i>
                                    <p>info@gissulteng.com<br>support@gissulteng.com</p>
                                </div>
                                <div class="contact-item">
                                    <i class="fas fa-phone-alt"></i>
                                    <p>+62 123 4567 890<br>+62 098 7654 321</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <p class="copyright">
                            © 2024 GIS Sulteng. All rights reserved.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <ul class="footer-bottom-links">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Service</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Scroll to Top Button -->
        <button id="scrollToTop" class="scroll-top-btn">
            <i class="fas fa-arrow-up"></i>
        </button>
    </footer>

    <style>
        /* Footer Styling */
        .footer-section {
            background: linear-gradient(135deg, #1a1a1a, #2b2d42);
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .footer-top {
            padding: 5rem 0 3rem;
            position: relative;
        }

        /* Footer Logo */
        .footer-logo {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .footer-logo i {
            font-size: 2.5rem;
            color: var(--bs-primary);
        }

        .footer-logo span {
            font-size: 1.5rem;
            font-weight: 700;
        }

        .footer-desc {
            color: rgba(255, 255, 255, 0.7);
            margin-bottom: 1.5rem;
            line-height: 1.6;
        }

        /* Social Links */
        .social-links {
            display: flex;
            gap: 1rem;
        }

        .social-link {
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            transition: all 0.3s ease;
        }

        .social-link:hover {
            background: var(--bs-primary);
            color: white;
            transform: translateY(-3px);
        }

        /* Widget Styling */
        .footer-widget {
            margin-bottom: 2rem;
        }

        .widget-title {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 1.5rem;
            padding-bottom: 1rem;
            position: relative;
        }

        .widget-title::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 50px;
            height: 2px;
            background: var(--bs-primary);
        }

        /* Footer Links */
        .footer-links {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-links li {
            margin-bottom: 1rem;
        }

        .footer-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
        }

        .footer-links a i {
            font-size: 0.875rem;
            transition: all 0.3s ease;
        }

        .footer-links a:hover {
            color: white;
            transform: translateX(5px);
        }

        .footer-links a:hover i {
            color: var(--bs-primary);
        }

        /* Contact Info */
        .contact-info {
            display: flex;
            flex-direction: column;
            gap: 1.5rem;
        }

        .contact-item {
            display: flex;
            gap: 1rem;
        }

        .contact-item i {
            color: var(--bs-primary);
            font-size: 1.25rem;
        }

        .contact-item p {
            color: rgba(255, 255, 255, 0.7);
            margin: 0;
            line-height: 1.4;
        }

        /* Footer Bottom */
        .footer-bottom {
            padding: 1.5rem 0;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
        }

        .copyright {
            color: rgba(255, 255, 255, 0.7);
            margin: 0;
        }

        .footer-bottom-links {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
            gap: 2rem;
        }

        .footer-bottom-links a {
            color: rgba(255, 255, 255, 0.7);
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .footer-bottom-links a:hover {
            color: var(--bs-primary);
        }

        /* Scroll to Top Button */
        .scroll-top-btn {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 45px;
            height: 45px;
            background: var(--bs-primary);
            color: white;
            border: none;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 99;
        }

        .scroll-top-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(var(--bs-primary-rgb), 0.3);
        }

        .scroll-top-btn.show {
            display: flex;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .footer-bottom-links {
                justify-content: center;
                margin-top: 1rem;
            }

            .copyright {
                text-align: center;
            }
        }
    </style>

    <script>
        // Scroll to Top Button
        window.addEventListener('scroll', () => {
            const scrollBtn = document.getElementById('scrollToTop');
            if (window.scrollY > 300) {
                scrollBtn.classList.add('show');
            } else {
                scrollBtn.classList.remove('show');
            }
        });

        document.getElementById('scrollToTop').addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>
</body>

</html>
