@extends('layouts.main')

@section('content')
    <!-- Hero Section dengan Parallax Effect -->
    <div class="about-hero position-relative overflow-hidden">
        <div class="hero-bg parallax"
            style="background: linear-gradient(135deg, rgba(0,0,0,0.8), rgba(0,0,0,0.7)), url('/images/sulteng-bg.jpg') no-repeat center center fixed; background-size: cover; height: 50vh;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-md-12 text-center text-white animate__animated animate__fadeIn">
                        <span class="badge bg-primary px-3 py-2 mb-3">
                            <i class="fas fa-info-circle me-2"></i>About Us
                        </span>
                        <h1 class="display-3 fw-bold mb-4 text-gradient">
                            GIS Sulawesi Tengah
                        </h1>
                        <p class="lead mb-4 fw-light">Sistem Informasi Geografis untuk Visualisasi Data Sulawesi Tengah</p>
                        <div class="scroll-indicator">
                            <i class="fas fa-chevron-down bounce"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Animated Shapes -->
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
        </div>
    </div>

    <!-- About Content with Modern Cards -->
    <section class="py-5 position-relative">
        <div class="section-pattern"></div>
        <div class="container">
            <!-- Stats Counter -->
            <div class="row mb-5">
                <div class="col-md-3 col-6">
                    <div class="stat-card text-center p-4">
                        <div class="stat-icon mb-3">
                            <i class="fas fa-map-location-dot"></i>
                        </div>
                        <h3 class="counter" data-target="13">0</h3>
                        <p>Kabupaten/Kota</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card text-center p-4">
                        <div class="stat-icon mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h3 class="counter" data-target="2800000">0</h3>
                        <p>Total Penduduk</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card text-center p-4">
                        <div class="stat-icon mb-3">
                            <i class="fas fa-chart-pie"></i>
                        </div>
                        <h3 class="counter" data-target="5">0</h3>
                        <p>Kategori Data</p>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="stat-card text-center p-4">
                        <div class="stat-icon mb-3">
                            <i class="fas fa-database"></i>
                        </div>
                        <h3 class="counter" data-target="1000">0</h3>
                        <p>Data Point</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modern Styling -->
    <style>
        /* Parallax Effect */
        .parallax {
            background-attachment: fixed;
            position: relative;
        }

        /* Animated Shapes */
        .shape {
            position: absolute;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s infinite;
        }

        .shape-1 {
            width: 100px;
            height: 100px;
            top: 20%;
            left: 10%;
            animation-delay: 1s;
        }

        .shape-2 {
            width: 150px;
            height: 150px;
            top: 60%;
            right: 15%;
            animation-delay: 2s;
        }

        .shape-3 {
            width: 70px;
            height: 70px;
            bottom: 20%;
            left: 30%;
            animation-delay: 3s;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-20px);
            }
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
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .card-blur {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: linear-gradient(45deg, rgba(255, 255, 255, 0.2), transparent);
            pointer-events: none;
        }

        /* Feature Icons */
        .feature-icon-wrapper {
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

        .modern-card:hover .feature-icon-wrapper {
            transform: rotate(0deg) scale(1.1);
        }

        /* Stats Cards */
        .stat-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
        }

        .stat-icon {
            font-size: 2.5rem;
            color: var(--bs-primary);
        }

        /* Contact Boxes */
        .contact-box {
            text-align: center;
            padding: 2rem;
            border-radius: 15px;
            background: white;
            transition: all 0.3s ease;
        }

        .contact-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        }

        /* Custom List */
        .custom-list {
            list-style: none;
            padding: 0;
        }

        .custom-list li {
            padding: 0.8rem;
            margin-bottom: 0.5rem;
            border-radius: 10px;
            transition: all 0.3s ease;
        }

        .custom-list li:hover {
            background: rgba(var(--bs-primary-rgb), 0.1);
            transform: translateX(10px);
        }
    </style>

    <!-- Interactive Scripts -->
    @push('scripts')
        <script>
            // Counter Animation
            const counters = document.querySelectorAll('.counter');

            const animateCounter = (counter) => {
                const target = +counter.getAttribute('data-target');
                let count = 0;
                const increment = target / 200;

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

            // Intersection Observer for counters
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        animateCounter(entry.target);
                        observer.unobserve(entry.target);
                    }
                });
            });

            counters.forEach(counter => observer.observe(counter));

            // Parallax Effect
            window.addEventListener('scroll', () => {
                const parallax = document.querySelector('.parallax');
                let scrollPosition = window.pageYOffset;
                parallax.style.backgroundPositionY = scrollPosition * 0.5 + 'px';
            });
        </script>
    @endpush
@endsection
