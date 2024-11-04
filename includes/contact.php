<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Information</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet">
    <!-- AOS CSS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        /* Custom CSS */
        :root {
            --primary-color: #4e54c8;
            --secondary-color: #8f94fb;
        }

        body {
            margin: 0;
            padding: 0;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(-45deg, #ee7752, #e73c7e, #23a6d5, #23d5ab);
            background-size: 400% 400%;
            animation: gradient 15s ease infinite;
        }

        @keyframes gradient {
            0% {
                background-position: 0% 50%;
            }
            50% {
                background-position: 100% 50%;
            }
            100% {
                background-position: 0% 50%;
            }
        }

        .contact-section {
            padding: 80px 0;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .contact-info {
            backdrop-filter: blur(10px);
            background: rgba(255, 255, 255, 0.9) !important;
            border: 1px solid rgba(255, 255, 255, 0.2);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .contact-info::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(
                120deg,
                transparent,
                rgba(255, 255, 255, 0.3),
                transparent
            );
            transition: 0.5s;
        }

        .contact-info:hover::before {
            left: 100%;
        }

        .contact-info:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .contact-icon {
            width: 50px;
            height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .contact-icon:hover {
            transform: rotate(360deg) scale(1.1);
        }

        .title-animate {
            animation: float 3s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-10px);
            }
            100% {
                transform: translateY(0px);
            }
        }

        .info-item {
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.5s ease forwards;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .info-item:nth-child(1) { animation-delay: 0.2s; }
        .info-item:nth-child(2) { animation-delay: 0.4s; }
        .info-item:nth-child(3) { animation-delay: 0.6s; }
        .info-item:nth-child(4) { animation-delay: 0.8s; }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .contact-section {
                padding: 40px 0;
            }
        }
    </style>
</head>
<body>

<div class="contact-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-8 col-sm-10">
                <div class="contact-info p-4 rounded-3 shadow-lg">
                    <h4 class="mb-4 text-center title-animate">Informasi Kontak</h4>

                    <!-- Alamat -->
                    <div class="d-flex mb-4 info-item">
                        <div class="flex-shrink-0">
                            <div class="contact-icon bg-primary text-white rounded-circle p-3">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Alamat</h5>
                            <p class="text-muted mb-0">Jl. Contoh No.123, Kota Contoh<br>Indonesia 12345</p>
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="d-flex mb-4 info-item">
                        <div class="flex-shrink-0">
                            <div class="contact-icon bg-success text-white rounded-circle p-3">
                                <i class="bi bi-envelope"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Email</h5>
                            <p class="text-muted mb-0">info@example.com<br>support@example.com</p>
                        </div>
                    </div>

                    <!-- Telepon -->
                    <div class="d-flex mb-4 info-item">
                        <div class="flex-shrink-0">
                            <div class="contact-icon bg-info text-white rounded-circle p-3">
                                <i class="bi bi-telephone"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Telepon</h5>
                            <p class="text-muted mb-0">(123) 456-7890<br>(098) 765-4321</p>
                        </div>
                    </div>

                    <!-- Jam Operasional -->
                    <div class="d-flex info-item">
                        <div class="flex-shrink-0">
                            <div class="contact-icon bg-warning text-white rounded-circle p-3">
                                <i class="bi bi-clock"></i>
                            </div>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h5>Jam Operasional</h5>
                            <p class="text-muted mb-0">Senin - Jumat: 09:00 - 17:00<br>Sabtu: 09:00 - 14:00</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>

</body>
</html>