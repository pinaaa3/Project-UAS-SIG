@extends('layouts.main')

@section('content')
    <!-- Loading Screen -->
    <div class="loading-screen" id="loadingScreen">
        <div class="loader">
            <div class="map-icon">
                <i class="fas fa-map-marked-alt"></i>
            </div>
            <div class="loading-text">Loading GIS Sulteng...</div>
        </div>
    </div>

    <!-- Hero Section dengan Animated Map Background -->
    <div id="hero" class="hero-section position-relative overflow-hidden">
        <!-- Map Background dengan overlay gradient -->
        <div class="hero-bg"
            style="background: linear-gradient(135deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.7) 100%), url('/images/map-pattern.svg') repeat center center; background-size: 300px; height: 85vh;">
            <!-- Animated Particles dengan opacity rendah -->
            <div id="particles-js" class="position-absolute w-100 h-100" style="opacity: 0.3;"></div>

            <!-- Map Animation Overlay -->
            <div class="map-animation">
                <div class="map-point point-1"></div>
                <div class="map-point point-2"></div>
                <div class="map-point point-3"></div>
                <div class="map-line line-1"></div>
                <div class="map-line line-2"></div>
            </div>

            <div class="container h-100 position-relative">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-7 col-md-10 text-white">
                        <!-- Badge dengan efek glow -->
                        <div class="animate__animated animate__fadeIn">
                            <span class="badge badge-glow px-3 py-2 mb-4">
                                <i class="fas fa-satellite me-2"></i>Geographic Information System
                            </span>
                        </div>

                        <!-- Heading dengan efek modern -->
                        <h1 class="hero-title fw-bold mb-4 animate__animated animate__fadeInUp">
                            <span class="d-block mb-2">Pemetaan Digital</span>
                            <span class="highlight-text">Sulawesi Tengah</span>
                        </h1>

                        <!-- Stats mini -->
                        <div class="hero-stats d-flex gap-4 mb-4 animate__animated animate__fadeIn animate__delay-1s">
                            <div class="stat-item">
                                <div class="stat-value">13</div>
                                <div class="stat-label">Kabupaten</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">171</div>
                                <div class="stat-label">Kecamatan</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-value">2.9M</div>
                                <div class="stat-label">Penduduk</div>
                            </div>
                        </div>

                        <!-- Description dengan icon -->
                        <p class="lead mb-5 fw-light animate__animated animate__fadeIn animate__delay-1s">
                            <i class="fas fa-map-marked-alt me-2 text-primary"></i>
                            Eksplorasi data geospasial dan informasi wilayah melalui visualisasi interaktif
                        </p>

                        <!-- Action Buttons dengan efek modern -->
                        <div class="hero-buttons d-flex gap-3 flex-wrap">
                            <a href="#explore-section" class="btn btn-primary btn-lg px-4 d-flex align-items-center">
                                <i class="fas fa-compass me-2"></i>
                                Eksplorasi Peta
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                            <a href="#data-section" class="btn btn-glass btn-lg px-4">
                                <i class="fas fa-database me-2"></i>
                                Lihat Data
                            </a>
                        </div>
                    </div>

                    <!-- Interactive Map Preview -->
                    <div class="col-lg-5 d-none d-lg-block">
                        <div class="map-preview-container animate__animated animate__fadeInRight">
                            <div id="mini-map" class="rounded-4 shadow-lg"></div>
                            <div class="map-overlay-controls">
                                <div class="control-item">
                                    <i class="fas fa-layer-group"></i>
                                </div>
                                <div class="control-item">
                                    <i class="fas fa-location-dot"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modern Scroll Indicator -->
            <div class="scroll-indicator animate__animated animate__fadeIn animate__delay-2s">
                <div class="scroll-line">
                    <div class="scroll-dot"></div>
                </div>
                <span class="scroll-text">Scroll untuk eksplorasi</span>
            </div>

            <!-- Tambahkan Wave Animation di bawah hero -->
            <div class="wave-container">
                <svg class="waves" xmlns="http://www.w3.org/2000/svg" viewBox="0 24 150 28" preserveAspectRatio="none">
                    <defs>
                        <path id="wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
                    </defs>
                    <g class="parallax">
                        <use href="#wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
                        <use href="#wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
                        <use href="#wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
                        <use href="#wave" x="48" y="7" fill="#fff" />
                    </g>
                </svg>
            </div>
        </div>
    </div>


    <!-- Features Section dengan Modern Cards -->
    <section id="explore-section" class="py-6 position-relative bg-light">
        <!-- Background Pattern -->
        <div class="section-pattern"></div>

        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5">
                <span class="badge bg-primary px-3 py-2 mb-3">
                    <i class="fas fa-compass me-2"></i>Eksplorasi Data
                </span>
                <h2 class="display-5 fw-bold mb-3">Fitur Utama</h2>
                <p class="lead text-muted">Jelajahi berbagai fitur untuk menganalisis data Sulawesi Tengah</p>
                <div class="divider mx-auto"></div>
            </div>

            <div class="row g-4">
                <!-- Peta Tematik Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="modern-card h-100">
                        <div class="card-content p-4">
                            <div class="feature-icon-wrapper mb-4">
                                <div class="icon-circle">
                                    <i class="fas fa-map-marked-alt"></i>
                                </div>
                            </div>
                            <h4 class="card-title mb-3">Peta Tematik</h4>
                            <p class="card-text text-muted mb-4">
                                Visualisasi data demografis dan sosial ekonomi dalam bentuk peta interaktif dengan berbagai
                                layer.
                            </p>
                            <div class="feature-list mb-4">
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Peta Kepadatan Penduduk
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Analisis Spasial
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-check-circle text-success me-2"></i>
                                    Multi Layer
                                </div>
                            </div>
                            <a href="{{ route('maps.population') }}" class="btn btn-primary btn-lg w-100 rounded-pill">
                                <i class="fas fa-map me-2"></i>
                                Lihat Peta
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                        <div class="card-blur"></div>
                    </div>
                </div>

                <!-- Data Statistik Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="modern-card h-100">
                        <div class="card-content p-4">
                            <div class="feature-icon-wrapper mb-4">
                                <div class="icon-circle bg-success">
                                    <i class="fas fa-chart-bar"></i>
                                </div>
                            </div>
                            <h4 class="card-title mb-3">Data Statistik</h4>
                            <p class="card-text text-muted mb-4">
                                Akses dan analisis data statistik kabupaten/kota dengan visualisasi interaktif.
                            </p>
                            <div class="feature-list mb-4">
                                <div class="feature-item">
                                    <i class="fas fa-chart-line text-success me-2"></i>
                                    Tren Data
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-chart-pie text-success me-2"></i>
                                    Visualisasi Grafik
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-download text-success me-2"></i>
                                    Export Data
                                </div>
                            </div>
                            <a href="{{ route('sulteng.regencies') }}" class="btn btn-success btn-lg w-100 rounded-pill">
                                <i class="fas fa-table me-2"></i>
                                Lihat Data
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                        <div class="card-blur"></div>
                    </div>
                </div>

                <!-- Info Wilayah Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="modern-card h-100">
                        <div class="card-content p-4">
                            <div class="feature-icon-wrapper mb-4">
                                <div class="icon-circle bg-info">
                                    <i class="fas fa-info-circle"></i>
                                </div>
                            </div>
                            <h4 class="card-title mb-3">Info Wilayah</h4>
                            <p class="card-text text-muted mb-4">
                                Informasi detail dan komprehensif tentang kabupaten/kota di Sulawesi Tengah.
                            </p>
                            <div class="feature-list mb-4">
                                <div class="feature-item">
                                    <i class="fas fa-map-marker-alt text-info me-2"></i>
                                    Profil Wilayah
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-building text-info me-2"></i>
                                    Data Administratif
                                </div>
                                <div class="feature-item">
                                    <i class="fas fa-image text-info me-2"></i>
                                    Galeri Foto
                                </div>
                            </div>
                            <a href="{{ route('sulteng.map') }}"
                                class="btn btn-info btn-lg w-100 rounded-pill text-white">
                                <i class="fas fa-info me-2"></i>
                                Lihat Info
                                <i class="fas fa-arrow-right ms-2"></i>
                            </a>
                        </div>
                        <div class="card-blur"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Interactive Map Preview -->
    <section id="map-view" class="map-preview-section py-6 position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="section-pattern"></div>

        <div class="container">
            <div class="row align-items-center g-4">
                <!-- Content Column -->
                <div class="col-md-6 mb-4 mb-md-0" data-aos="fade-right">
                    <!-- Section Header -->
                    <div class="section-header mb-4">
                        <span class="badge bg-primary px-3 py-2 mb-3">
                            <i class="fas fa-map-marked-alt me-2"></i>Peta Digital
                        </span>
                        <h2 class="display-5 fw-bold text-gradient mb-3">
                            Peta Interaktif
                            <span class="highlight-text d-block">Sulawesi Tengah</span>
                        </h2>
                        <p class="lead text-muted">
                            Jelajahi data spasial Sulawesi Tengah melalui peta interaktif yang informatif dengan berbagai
                            fitur analisis.
                        </p>
                    </div>

                    <!-- Quick Stats -->
                    <div class="stats-row mb-4">
                        <div class="stat-item">
                            <div class="stat-value">13</div>
                            <div class="stat-label">Kabupaten</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">171</div>
                            <div class="stat-label">Kecamatan</div>
                        </div>
                        <div class="stat-item">
                            <div class="stat-value">2.9M</div>
                            <div class="stat-label">Penduduk</div>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="d-grid gap-3 d-md-flex">
                        <a href="{{ route('sulteng.map') }}" class="btn btn-primary btn-lg px-4 rounded-pill">
                            <span class="btn-content">
                                <i class="fas fa-map me-2"></i>
                                Buka Peta
                                <i class="fas fa-arrow-right ms-2"></i>
                            </span>
                        </a>
                        <a href="{{ route('sulteng.thematic') }}" class="btn btn-glass btn-lg px-4 rounded-pill">
                            <i class="fas fa-chart-bar me-2"></i>
                            Lihat Data
                        </a>
                    </div>
                </div>

                <!-- Map Preview Column -->
                <div class="col-md-6" data-aos="fade-left">
                    <div class="map-preview-wrapper">
                        <div class="map-container">
                            <div id="preview-map" class="rounded-4 shadow-lg"></div>

                            <!-- Map Controls -->
                            <div class="map-controls">
                                <button class="control-btn" onclick="zoomIn()">
                                    <i class="fas fa-plus"></i>
                                </button>
                                <button class="control-btn" onclick="zoomOut()">
                                    <i class="fas fa-minus"></i>
                                </button>
                                <button class="control-btn" onclick="toggleLayer()">
                                    <i class="fas fa-layer-group"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Data Categories Section -->
    <section id="data-categories" class="data-categories-section py-6 position-relative overflow-hidden">
        <!-- Background Pattern -->
        <div class="section-pattern"></div>

        <div class="container">
            <!-- Section Header -->
            <div class="text-center mb-5" data-aos="fade-up">
                <span class="badge bg-primary px-3 py-2 mb-3">
                    <i class="fas fa-database me-2"></i>Data Categories
                </span>
                <h2 class="display-5 fw-bold text-gradient mb-3">Kategori Data</h2>
                <p class="lead text-muted">Eksplorasi berbagai kategori data Sulawesi Tengah</p>
                <div class="divider mx-auto"></div>
            </div>

            <!-- Categories Grid -->
            <div class="row g-4">
                <!-- Kependudukan Card -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="category-card">
                        <div class="card-body">
                            <div class="icon-wrapper mb-4">
                                <div class="category-icon">
                                    <i class="fas fa-users"></i>
                                </div>
                                <div class="icon-ring"></div>
                            </div>
                            <h5 class="card-title mb-3">Kependudukan</h5>
                            <p class="card-text mb-4">Data jumlah dan kepadatan penduduk</p>
                            <div class="category-stats">
                                <div class="stat">
                                    <span class="value">2.9M</span>
                                    <span class="label">Penduduk</span>
                                </div>
                                <div class="stat">
                                    <span class="value">171</span>
                                    <span class="label">Kecamatan</span>
                                </div>
                            </div>
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-overlay"></div>
                    </div>
                </div>

                <!-- Ekonomi Card -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="category-card">
                        <div class="card-body">
                            <div class="icon-wrapper mb-4">
                                <div class="category-icon bg-success">
                                    <i class="fas fa-hand-holding-usd"></i>
                                </div>
                                <div class="icon-ring success"></div>
                            </div>
                            <h5 class="card-title mb-3">Ekonomi</h5>
                            <p class="card-text mb-4">Data kemiskinan dan pengangguran</p>
                            <div class="category-stats">
                                <div class="stat">
                                    <span class="value">GDP</span>
                                    <span class="label">Ekonomi</span>
                                </div>
                                <div class="stat">
                                    <span class="value">13</span>
                                    <span class="label">Kabupaten</span>
                                </div>
                            </div>
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-overlay success"></div>
                    </div>
                </div>

                <!-- Fasilitas Card -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="category-card">
                        <div class="card-body">
                            <div class="icon-wrapper mb-4">
                                <div class="category-icon bg-info">
                                    <i class="fas fa-tree"></i>
                                </div>
                                <div class="icon-ring info"></div>
                            </div>
                            <h5 class="card-title mb-3">Fasilitas</h5>
                            <p class="card-text mb-4">Data taman dan ruang terbuka</p>
                            <div class="category-stats">
                                <div class="stat">
                                    <span class="value">50+</span>
                                    <span class="label">Taman</span>
                                </div>
                                <div class="stat">
                                    <span class="value">100+</span>
                                    <span class="label">Fasilitas</span>
                                </div>
                            </div>
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-overlay info"></div>
                    </div>
                </div>

                <!-- Pendidikan Card -->
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="category-card">
                        <div class="card-body">
                            <div class="icon-wrapper mb-4">
                                <div class="category-icon bg-warning">
                                    <i class="fas fa-school"></i>
                                </div>
                                <div class="icon-ring warning"></div>
                            </div>
                            <h5 class="card-title mb-3">Pendidikan</h5>
                            <p class="card-text mb-4">Data sekolah dan fasilitas pendidikan</p>
                            <div class="category-stats">
                                <div class="stat">
                                    <span class="value">500+</span>
                                    <span class="label">Sekolah</span>
                                </div>
                                <div class="stat">
                                    <span class="value">50K+</span>
                                    <span class="label">Siswa</span>
                                </div>
                            </div>
                            <a href="#" class="stretched-link"></a>
                        </div>
                        <div class="card-overlay warning"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Custom CSS -->
    <style>
        .hero-bg {
            position: relative;
            overflow: hidden;
        }

        .hover-card {
            transition: transform 0.3s ease-in-out;
        }

        .hover-card:hover {
            transform: translateY(-5px);
        }

        .feature-icon {
            transition: all 0.3s ease;
        }

        .card:hover .feature-icon {
            transform: scale(1.1);
        }

        .data-category {
            background: #fff;
            border: 1px solid #eee;
            transition: all 0.3s ease;
        }

        .data-category:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-5px);
        }

        /* Tambahan style baru */
        .scroll-down {
            position: absolute;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            color: white;
            font-size: 24px;
            cursor: pointer;
        }

        .bounce {
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        /* Styling untuk buttons */
        .btn {
            transition: all 0.3s ease;
            border-radius: 50px;
            padding: 10px 25px;
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Styling untuk cards */
        .card {
            border-radius: 15px;
            overflow: hidden;
        }

        .feature-icon {
            width: 70px !important;
            height: 70px !important;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Styling untuk data categories */
        .data-category {
            border-radius: 15px;
            padding: 25px !important;
        }

        .data-category i {
            transition: all 0.3s ease;
        }

        .data-category:hover i {
            transform: scale(1.2) rotate(5deg);
        }

        /* Styling untuk map preview */
        .map-preview {
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            border: 3px solid #fff;
        }

        /* Gradient overlays untuk cards */
        .card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.1), rgba(255, 255, 255, 0));
            pointer-events: none;
        }

        /* Pulse effect untuk feature icons */
        .feature-icon::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
                opacity: 0.8;
            }

            70% {
                transform: scale(1.1);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 0;
            }
        }

        /* Text Gradient */
        .text-gradient {
            background: linear-gradient(to right, #fff, #ccc);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .highlight-text {
            color: var(--bs-primary);
            position: relative;
            display: inline-block;
        }

        .highlight-text::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 30%;
            bottom: 0;
            left: 0;
            background: rgba(var(--bs-primary-rgb), 0.2);
            z-index: -1;
            transform: skewX(-15deg);
        }

        /* Mouse Scroll Animation */
        .mouse {
            width: 26px;
            height: 40px;
            border: 2px solid #fff;
            border-radius: 20px;
            position: relative;
            margin: 0 auto 10px;
        }

        .wheel {
            width: 4px;
            height: 8px;
            background: #fff;
            border-radius: 2px;
            position: absolute;
            top: 6px;
            left: 50%;
            transform: translateX(-50%);
            animation: mouse-wheel 1.5s infinite;
        }

        @keyframes mouse-wheel {
            0% {
                top: 6px;
                opacity: 1;
            }

            100% {
                top: 20px;
                opacity: 0;
            }
        }

        /* Arrows Animation */
        .arrows span {
            display: block;
            width: 10px;
            height: 10px;
            border-bottom: 2px solid #fff;
            border-right: 2px solid #fff;
            transform: rotate(45deg);
            margin: -5px auto;
            animation: arrows 2s infinite;
        }

        .arrows span:nth-child(2) {
            animation-delay: -0.2s;
        }

        .arrows span:nth-child(3) {
            animation-delay: -0.4s;
        }

        @keyframes arrows {
            0% {
                opacity: 0;
                transform: rotate(45deg) translate(-20px, -20px);
            }

            50% {
                opacity: 1;
            }

            100% {
                opacity: 0;
                transform: rotate(45deg) translate(20px, 20px);
            }
        }

        /* Floating Shapes */
        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            pointer-events: none;
        }

        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            border-radius: 50%;
            animation: float 15s infinite;
        }

        .shape-1 {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 0s;
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            animation-delay: 5s;
        }

        .shape-3 {
            width: 70px;
            height: 70px;
            bottom: 20%;
            left: 30%;
            animation-delay: 10s;
        }

        @keyframes float {
            0% {
                transform: translate(0, 0) rotate(0deg);
            }

            33% {
                transform: translate(30px, -50px) rotate(120deg);
            }

            66% {
                transform: translate(-30px, 50px) rotate(240deg);
            }

            100% {
                transform: translate(0, 0) rotate(360deg);
            }
        }

        /* Stat Cards */
        .stat-card {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .stat-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.1), transparent);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-10px);
        }

        .stat-card:hover::before {
            opacity: 1;
        }

        .stat-icon {
            font-size: 2.5rem;
            color: var(--bs-primary);
            transition: all 0.3s ease;
        }

        .stat-card:hover .stat-icon {
            transform: scale(1.2) rotate(10deg);
        }

        /* Modern Hero Styling */
        .hero-section {
            position: relative;
            background: #0a0a0a;
        }

        /* Badge Styling */
        .badge-glow {
            background: rgba(var(--bs-primary-rgb), 0.2);
            border: 1px solid rgba(var(--bs-primary-rgb), 0.4);
            backdrop-filter: blur(4px);
            animation: glow 2s infinite;
        }

        @keyframes glow {

            0%,
            100% {
                box-shadow: 0 0 5px rgba(var(--bs-primary-rgb), 0.5);
            }

            50% {
                box-shadow: 0 0 20px rgba(var(--bs-primary-rgb), 0.8);
            }
        }

        /* Hero Title */
        .hero-title {
            font-size: 3.5rem;
            line-height: 1.2;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        /* Stats Styling */
        .hero-stats {
            padding: 1rem 0;
        }

        .stat-item {
            position: relative;
            padding-right: 2rem;
        }

        .stat-item:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 1rem;
            top: 50%;
            height: 70%;
            width: 1px;
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-50%);
        }

        .stat-value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--bs-primary);
        }

        .stat-label {
            font-size: 0.875rem;
            opacity: 0.8;
        }

        /* Map Animation */
        .map-animation {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            pointer-events: none;
        }

        .map-point {
            position: absolute;
            width: 10px;
            height: 10px;
            background: var(--bs-primary);
            border-radius: 50%;
            animation: pulse 2s infinite;
        }

        .map-line {
            position: absolute;
            height: 2px;
            background: linear-gradient(90deg, var(--bs-primary), transparent);
            animation: line-flow 3s infinite;
        }

        /* Mini Map */
        .map-preview-container {
            position: relative;
            height: 400px;
            perspective: 1000px;
        }

        #mini-map {
            height: 100%;
            transform: rotateY(-10deg) rotateX(5deg);
            transition: transform 0.3s ease;
        }

        #mini-map:hover {
            transform: rotateY(0) rotateX(0);
        }

        .map-overlay-controls {
            position: absolute;
            top: 1rem;
            right: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .control-item {
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .control-item:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Modern Scroll Indicator */
        .scroll-indicator {
            position: absolute;
            bottom: 2rem;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .scroll-line {
            width: 2px;
            height: 50px;
            background: rgba(255, 255, 255, 0.2);
            margin: 0 auto 0.5rem;
            position: relative;
        }

        .scroll-dot {
            width: 6px;
            height: 6px;
            background: var(--bs-primary);
            border-radius: 50%;
            position: absolute;
            left: -2px;
            animation: scroll-dot 2s infinite;
        }

        .scroll-text {
            font-size: 0.875rem;
            opacity: 0.7;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @keyframes scroll-dot {
            0% {
                top: 0;
                opacity: 1;
            }

            100% {
                top: 100%;
                opacity: 0;
            }
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
            .hero-title {
                font-size: 2.5rem;
            }

            .hero-stats {
                flex-wrap: wrap;
            }
        }

        /* Section Pattern */
        .section-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
            opacity: 0.5;
            pointer-events: none;
        }

        /* Modern Cards */
        .modern-card {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border-radius: 20px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease;
        }

        .modern-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        /* Icon Circle */
        .icon-circle {
            width: 80px;
            height: 80px;
            background: linear-gradient(135deg, var(--bs-primary), #0099ff);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: white;
            margin: 0 auto;
            transform: rotate(-10deg);
            transition: all 0.3s ease;
        }

        .modern-card:hover .icon-circle {
            transform: rotate(0deg) scale(1.1);
        }

        /* Feature List */
        .feature-list {
            padding: 0;
            list-style: none;
        }

        .feature-item {
            padding: 0.8rem;
            margin-bottom: 0.5rem;
            border-radius: 10px;
            transition: all 0.3s ease;
            font-size: 0.95rem;
        }

        .feature-item:hover {
            background: rgba(var(--bs-primary-rgb), 0.1);
            transform: translateX(10px);
        }

        /* Section Divider */
        .divider {
            width: 60px;
            height: 4px;
            background: var(--bs-primary);
            border-radius: 2px;
            margin: 1rem auto;
        }

        /* Button Hover Effects */
        .btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .btn::after {
            content: '';
            position: absolute;
            width: 0;
            height: 100%;
            top: 0;
            left: 0;
            background: rgba(255, 255, 255, 0.2);
            transition: width 0.3s ease;
        }

        .btn:hover::after {
            width: 100%;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .modern-card {
                margin-bottom: 1.5rem;
            }

            .icon-circle {
                width: 60px;
                height: 60px;
                font-size: 1.5rem;
            }
        }

        /* Loading Screen */
        .loading-screen {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, #0a0a0a, #1a1a1a);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            transition: opacity 0.5s ease, visibility 0.5s ease;
        }

        .loader {
            text-align: center;
        }

        .map-icon {
            font-size: 3rem;
            color: var(--bs-primary);
            animation: pulse-grow 2s infinite;
        }

        .loading-text {
            color: white;
            margin-top: 1rem;
            font-size: 1.2rem;
            letter-spacing: 2px;
        }

        @keyframes pulse-grow {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.2);
            }
        }

        /* Navigation Dots */
        .section-nav {
            position: fixed;
            right: 2rem;
            top: 50%;
            transform: translateY(-50%);
            z-index: 100;
        }

        .section-nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .section-nav li {
            margin: 1rem 0;
        }

        .section-nav a {
            display: flex;
            align-items: center;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .dot {
            width: 12px;
            height: 12px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .label {
            color: white;
            margin-right: 1rem;
            font-size: 0.875rem;
            opacity: 0;
            transform: translateX(10px);
            transition: all 0.3s ease;
        }

        .section-nav a:hover .dot,
        .section-nav a.active .dot {
            background: var(--bs-primary);
            box-shadow: 0 0 10px var(--bs-primary);
        }

        .section-nav a:hover .label,
        .section-nav a.active .label {
            opacity: 1;
            transform: translateX(0);
        }

        /* Wave Animation */
        .wave-container {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            overflow: hidden;
            line-height: 0;
        }

        .waves {
            width: 100%;
            height: 100px;
        }

        .parallax>use {
            animation: wave 25s cubic-bezier(.55, .5, .45, .5) infinite;
        }

        .parallax>use:nth-child(1) {
            animation-delay: -2s;
        }

        .parallax>use:nth-child(2) {
            animation-delay: -3s;
        }

        .parallax>use:nth-child(3) {
            animation-delay: -4s;
        }

        .parallax>use:nth-child(4) {
            animation-delay: -5s;
        }

        @keyframes wave {
            0% {
                transform: translate3d(-90px, 0, 0);
            }

            100% {
                transform: translate3d(85px, 0, 0);
            }
        }

        /* Update existing styles */
        .modern-card {
            border: 1px solid rgba(255, 255, 255, 0.1);
            background: rgba(255, 255, 255, 0.95);
        }

        .modern-card::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, transparent, rgba(255, 255, 255, 0.1));
            transition: opacity 0.3s ease;
            opacity: 0;
        }

        .modern-card:hover::before {
            opacity: 1;
        }

        /* Hover Effects Enhancement */
        .feature-item {
            position: relative;
            z-index: 1;
        }

        .feature-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 0;
            height: 100%;
            width: 0;
            background: linear-gradient(90deg, rgba(var(--bs-primary-rgb), 0.1), transparent);
            z-index: -1;
            transition: width 0.3s ease;
        }

        .feature-item:hover::before {
            width: 100%;
        }

        /* Section Styling */
        .map-preview-section {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
        }

        .py-6 {
            padding: 5rem 0;
        }

        .section-pattern {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        }

        /* Text Styling */
        .text-gradient {
            background: linear-gradient(45deg, #2b2d42, #0066ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .highlight-text {
            position: relative;
            color: var(--bs-primary);
        }

        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 30%;
            background: rgba(var(--bs-primary-rgb), 0.1);
            z-index: -1;
            transform: skewX(-15deg);
        }

        /* Stats Row */
        .stats-row {
            display: flex;
            gap: 2rem;
            padding: 1.5rem 0;
        }

        .stat-item {
            text-align: center;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: 700;
            color: var(--bs-primary);
            line-height: 1;
            margin-bottom: 0.5rem;
        }

        .stat-label {
            font-size: 0.875rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Map Container */
        .map-preview-wrapper {
            position: relative;
        }

        .map-container {
            position: relative;
            height: 450px;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        #preview-map {
            height: 100%;
            width: 100%;
        }

        /* Map Controls */
        .map-controls {
            position: absolute;
            top: 1rem;
            right: 1rem;
            display: flex;
            flex-direction: column;
            gap: 0.5rem;
        }

        .control-btn {
            width: 40px;
            height: 40px;
            border: none;
            border-radius: 10px;
            background: white;
            color: var(--bs-primary);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .control-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            background: var(--bs-primary);
            color: white;
        }

        /* Button Styling */
        .btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s ease;
        }

        .btn-glass {
            background: rgba(var(--bs-primary-rgb), 0.1);
            color: var(--bs-primary);
            border: none;
        }

        .btn-glass:hover {
            background: rgba(var(--bs-primary-rgb), 0.2);
            color: var(--bs-primary);
            transform: translateY(-2px);
        }

        .btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .stats-row {
                flex-wrap: wrap;
                gap: 1rem;
            }

            .stat-item {
                flex: 1 1 calc(33.333% - 1rem);
            }

            .map-container {
                height: 350px;
            }
        }

        /* Category Section Styling */
        .data-categories-section {
            background: linear-gradient(135deg, #f8f9fa, #ffffff);
            padding: 5rem 0;
        }

        /* Category Card */
        .category-card {
            position: relative;
            background: white;
            border-radius: 20px;
            overflow: hidden;
            transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            height: 100%;
        }

        .category-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            padding: 2rem;
            position: relative;
            z-index: 2;
        }

        /* Icon Styling */
        .icon-wrapper {
            position: relative;
            width: 70px;
            height: 70px;
            margin-bottom: 1.5rem;
        }

        .category-icon {
            width: 100%;
            height: 100%;
            background: var(--bs-primary);
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            color: white;
            position: relative;
            z-index: 2;
            transition: all 0.3s ease;
        }

        .icon-ring {
            position: absolute;
            top: -5px;
            left: -5px;
            right: -5px;
            bottom: -5px;
            border: 2px solid var(--bs-primary);
            border-radius: 18px;
            opacity: 0.5;
            transition: all 0.3s ease;
        }

        /* Color Variants */
        .bg-success+.icon-ring.success {
            border-color: var(--bs-success);
        }

        .bg-info+.icon-ring.info {
            border-color: var(--bs-info);
        }

        .bg-warning+.icon-ring.warning {
            border-color: var(--bs-warning);
        }

        /* Stats Styling */
        .category-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 1.5rem;
            padding-top: 1.5rem;
            border-top: 1px solid rgba(0, 0, 0, 0.1);
        }

        .stat {
            text-align: center;
        }

        .stat .value {
            display: block;
            font-size: 1.25rem;
            font-weight: 700;
            color: var(--bs-primary);
            margin-bottom: 0.25rem;
        }

        .stat .label {
            font-size: 0.875rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        /* Hover Effects */
        .category-card:hover .category-icon {
            transform: scale(1.1) rotate(-5deg);
        }

        .category-card:hover .icon-ring {
            transform: scale(1.2);
            opacity: 0.2;
        }

        .card-overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(135deg, rgba(var(--bs-primary-rgb), 0.05), transparent);
            opacity: 0;
            transition: all 0.3s ease;
        }

        .category-card:hover .card-overlay {
            opacity: 1;
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .category-card {
                margin-bottom: 1rem;
            }

            .card-body {
                padding: 1.5rem;
            }

            .icon-wrapper {
                width: 60px;
                height: 60px;
            }

            .category-icon {
                font-size: 1.5rem;
            }
        }
    </style>

    @push('scripts')
        <!-- Particles.js -->
        <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
        <script>
            // Initialize particles.js
            particlesJS('particles-js', {
                particles: {
                    number: {
                        value: 80
                    },
                    color: {
                        value: '#ffffff'
                    },
                    shape: {
                        type: 'circle'
                    },
                    opacity: {
                        value: 0.5
                    },
                    size: {
                        value: 3
                    },
                    move: {
                        enable: true,
                        speed: 2,
                        direction: 'none',
                        random: false,
                        straight: false,
                        out_mode: 'out',
                        bounce: false,
                    }
                },
                interactivity: {
                    detect_on: 'canvas',
                    events: {
                        onhover: {
                            enable: true,
                            mode: 'repulse'
                        },
                        onclick: {
                            enable: true,
                            mode: 'push'
                        },
                        resize: true
                    }
                }
            });

            // Counter Animation
            const counters = document.querySelectorAll('.counter');

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                let count = 0;
                const increment = target / 100;

                const updateCount = () => {
                    if (count < target) {
                        count += increment;
                        counter.innerText = Math.ceil(count).toLocaleString();
                        requestAnimationFrame(updateCount);
                    } else {
                        counter.innerText = target.toLocaleString();
                    }
                };

                updateCount();
            };

            // Intersection Observer
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            });

            counters.forEach(counter => observer.observe(counter));

            // Initialize preview map
            const previewMap = L.map('preview-map').setView([-1.4300, 121.4456], 7);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(previewMap);

            // Add some sample markers
            const regencies = @json($regencies ?? []);

            regencies.forEach(function(regency) {
                if (regency.latitude && regency.longitude) {
                    L.marker([regency.latitude, regency.longitude])
                        .bindPopup(`<b>${regency.name}</b>`)
                        .addTo(previewMap);
                }
            });

            // Tambahkan smooth scroll yang lebih halus
            document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    const headerOffset = 80;
                    const elementPosition = target.getBoundingClientRect().top;
                    const offsetPosition = elementPosition - headerOffset;

                    window.scrollBy({
                        top: offsetPosition,
                        behavior: 'smooth'
                    });
                });
            });

            // Initialize mini map
            const miniMap = L.map('mini-map', {
                zoomControl: false,
                dragging: false,
                scrollWheelZoom: false
            }).setView([-1.4300, 121.4456], 7);

            L.tileLayer('https://{s}.basemaps.cartocdn.com/dark_all/{z}/{x}/{y}{r}.png', {
                attribution: '©OpenStreetMap, ©CartoDB'
            }).addTo(miniMap);

            // Add hover interaction
            document.querySelector('.map-preview-container').addEventListener('mouseover', () => {
                miniMap.dragging.enable();
                miniMap.scrollWheelZoom.enable();
            });

            document.querySelector('.map-preview-container').addEventListener('mouseout', () => {
                miniMap.dragging.disable();
                miniMap.scrollWheelZoom.disable();
            });
        </script>

        <!-- Loading Screen -->
        <script>
            // Loading Screen
            window.addEventListener('load', () => {
                const loadingScreen = document.getElementById('loadingScreen');
                setTimeout(() => {
                    loadingScreen.style.opacity = '0';
                    setTimeout(() => {
                        loadingScreen.style.display = 'none';
                    }, 500);
                }, 1500);
            });

            // Section Navigation
            const sections = document.querySelectorAll('section[id]');
            const navItems = document.querySelectorAll('.section-nav a');

            window.addEventListener('scroll', () => {
                let current = '';
                sections.forEach(section => {
                    const sectionTop = section.offsetTop;
                    const sectionHeight = section.clientHeight;
                    if (scrollY >= (sectionTop - sectionHeight / 3)) {
                        current = section.getAttribute('id');
                    }
                });

                navItems.forEach(item => {
                    item.classList.remove('active');
                    if (item.getAttribute('href').slice(1) === current) {
                        item.classList.add('active');
                    }
                });
            });

            // Smooth Scroll Enhancement
            navItems.forEach(item => {
                item.addEventListener('click', (e) => {
                    e.preventDefault();
                    const targetId = item.getAttribute('href');
                    const targetSection = document.querySelector(targetId);
                    const offset = 80;
                    const targetPosition = targetSection.offsetTop - offset;

                    window.scrollTo({
                        top: targetPosition,
                        behavior: 'smooth'
                    });
                });
            });
        </script>
    @endpush
@endsection
