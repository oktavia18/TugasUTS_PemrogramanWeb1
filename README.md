# UTS { Pertemuan ke 8}
## PROFIL
| Variable           |             Isi            |
| -------------------|----------------------------|
| **Nama**           |        Oktavia Rizkha kurniawati       |
| **NIM**            |          312310509         |
| **Kelas**          |          TI.23.A.5         |
| **Mata Kuliah**    |      Pemrograman Web 1     |
| **Dosen Pengampu** | Eko Budiarto s.kom, m.kom  |

# Membuat Website-Dinamis

## Langkah-Langkah

## 1. Menjalankan MySQL Server
Menjalankan MySQL dari menu **XAMPP Control.**

### Mengakses Apache Client menggunakan 'website-dinamis'.

Pastikan webserver Apache sudah dijalankan. Kemudian untuk mengakses direktory tersebut pada web server dengan mengakses URL : http://localhost/website-dinamis/?page=home/

## 3. Membuat index : membuat website-dinamis

### Membuat tampilan didalam
```
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Website Dinamis</title>

  <!-- Bootstrap CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <!-- DataTables CSS -->
  <link href="assets/datatables/dataTables.dataTables.css" rel="stylesheet">
</head>

<body>

    <?php include "includes/navbar.php"; ?>


  

  <!-- Main Container -->
  <?php include "konten.php"; ?>

  <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang lembut */
        }
        .form-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Tambah bayangan */
            border-radius: 10px;
        }
        .form-label {
            font-weight: bold;
            color: #495057;
        }
        input[type="email"], input[type="password"] {
            height: 50px; /* Tinggi input */
            border-radius: 8px; /* Sudut melengkung */
            border: 1px solid #ced4da;
            padding: 10px;
        }
        .btn-primary {
            width: 100%; /* Tombol memenuhi lebar */
            height: 50px;
            border-radius: 8px;
            font-size: 18px;
        }
    </style>



</head>
<body>


  <footer class="bg-dark text-white text-center py-3 mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <h5>Kontak Kami</h5>
          <p>Email: info@example.com</p>
          <p>Telepon: (123) 456-7890</p>
        </div>
        <div class="col-md-4">
          <h5>Ikuti Kami</h5>
          <a href="#" class="text-white me-2"><i class="bi bi-facebook"></i></a>
          <a href="#" class="text-white me-2"><i class="bi bi-twitter"></i></a>
          <a href="#" class="text-white"><i class="bi bi-instagram"></i></a>
        </div>
        <div class="col-md-4">
          <h5>Lokasi</h5>
          <p>Jl. Contoh No.123, Kota Contoh</p>
          <p>Indonesia</p>
        </div>
      </div>
      <div class="text-center mt-3">
        <small>&copy; 2024 Pemrograman Web 1. All rights reserved.</small>
      </div>
    </div>
  </footer>


  <!-- JavaScript -->
  <script src="assets/jquery-3.7.1.js"></script>
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/datatables/dataTables.js"></script>

  <!-- Initialize DataTable -->
  <script>
  // Initialize DataTables when the DOM content is fully loaded
  document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector("#example")) {
      new DataTable("#example"); // Default zero configuration
    }
  });
  </script>
</body>

</html>
```

### Menambahkan Data navabar

```
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3">
  <div class="container">
    <!-- Navbar Brand -->
    <a class="navbar-brand d-flex align-items-center" href="?page=home">
      <i class="bi bi-code-square me-2"></i>
      <span class="fw-bold">WebDev</span>
    </a>

    <!-- Toggler for mobile view -->
    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse"
      data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
      aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
        <!-- Home link -->
        <li class="nav-item">
          <a class="nav-link px-3 position-relative" aria-current="page" href="?page=home">
            <i class="bi bi-house-door me-1"></i>Home
            <span class="active-indicator"></span>
          </a>
        </li>
        <!-- About link -->
        <li class="nav-item">
          <a class="nav-link px-3 position-relative" href="?page=about">
            <i class="bi bi-info-circle me-1"></i>About
            <span class="active-indicator"></span>
          </a>
        </li>
        <!-- Contact link -->
        <li class="nav-item">
          <a class="nav-link px-3 position-relative" href="?page=contact">
            <i class="bi bi-envelope me-1"></i>Contact
            <span class="active-indicator"></span>
          </a>
        </li>
        <!-- Dropdown for "Belajar" -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle px-3" href="#" id="belajarDropdown" role="button" data-bs-toggle="dropdown"
            aria-expanded="false">
            <i class="bi bi-journal-text me-1"></i>Belajar
          </a>
          <ul class="dropdown-menu border-0 shadow-sm" aria-labelledby="belajarDropdown">
            <li>
              <a class="dropdown-item py-2" href="?page=datatables">
                <i class="bi bi-table me-2"></i>Datatables
              </a>
            </li>
            <li>
              <a class="dropdown-item py-2" href="?page=form">
                <i class="bi bi-ui-checks me-2"></i>Form
              </a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li>
              <a class="dropdown-item py-2" href="?page=404">
                <i class="bi bi-three-dots me-2"></i>Something else
              </a>
            </li>
          </ul>
        </li>
      </ul>
      <!-- Search Form -->
      <form class="d-flex position-relative" role="search">
        <div class="input-group">
          <input class="form-control border-end-0 rounded-start" type="search" placeholder="Search..."
            aria-label="Search">
          <button class="btn btn-primary rounded-end px-4" type="submit">
            <i class="bi bi-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</nav>

<style>
/* Navbar Styles */
.navbar {
  transition: all 0.3s ease;
  backdrop-filter: blur(10px);
  background-color: rgba(255, 255, 255, 0.9);
}

.navbar-scrolled {
  box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
  background-color: rgba(255, 255, 255, 0.95);
}

/* Brand Styles */
.navbar-brand {
  font-size: 1.5rem;
  color: var(--primary-color) !important;
}

/* Nav Links */
.nav-link {
  font-weight: 500;
  color: #1a1a1a !important;
  transition: all 0.3s ease;
}

.nav-link:hover {
  color: var(--primary-color) !important;
}

/* Active Indicator */
.active-indicator {
  position: absolute;
  bottom: 0;
  left: 50%;
  width: 0;
  height: 2px;
  background-color: var(--primary-color);
  transition: all 0.3s ease;
  transform: translateX(-50%);
}

.nav-link:hover .active-indicator,
.nav-link.active .active-indicator {
  width: 20px;
}

/* Dropdown Styles */
.dropdown-menu {
  border-radius: 10px;
  margin-top: 10px;
  background: rgba(255, 255, 255, 0.95);
  backdrop-filter: blur(10px);
}

.dropdown-item {
  font-weight: 500;
  transition: all 0.3s ease;
}

.dropdown-item:hover {
  background-color: rgba(37, 99, 235, 0.1);
  color: var(--primary-color);
}

/* Search Form */
.form-control {
  border: 1px solid #e5e7eb;
  padding: 0.6rem 1rem;
  transition: all 0.3s ease;
}

.form-control:focus {
  border-color: var(--primary-color);
  box-shadow: none;
}

.btn-primary {
  background-color: var(--primary-color);
  border-color: var(--primary-color);
  transition: all 0.3s ease;
}

.btn-primary:hover {
  background-color: var(--secondary-color);
  border-color: var(--secondary-color);
}

/* Mobile Responsive */
@media (max-width: 991.98px) {
  .navbar-collapse {
    background: rgba(255, 255, 255, 0.95);
    padding: 1rem;
    border-radius: 10px;
    margin-top: 1rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  }

  .nav-link {
    padding: 0.5rem 1rem;
  }

  .active-indicator {
    display: none;
  }

  .dropdown-menu {
    margin-top: 0;
    background: transparent;
    border: none;
    box-shadow: none;
  }
}
</style>

<script>
// Add shadow to navbar on scroll
window.addEventListener('scroll', function() {
  const navbar = document.querySelector('.navbar');
  if (window.scrollY > 50) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }
});

// Set active nav item based on current page
document.addEventListener('DOMContentLoaded', function() {
  const currentPage = new URLSearchParams(window.location.search).get('page') || 'home';
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach(link => {
    const href = link.getAttribute('href');
    if (href && href.includes(currentPage)) {
      link.classList.add('active');
    }
  });
});
</script>
```

***Output Ketika Berhasil :***

![image](https://github.com/user-attachments/assets/656184f5-7e37-4f66-94e0-ed14633dee3c)


## 3. Menambahkan Home

![image](https://github.com/user-attachments/assets/52367e8b-7f8b-4fce-9ad4-391065fb0548)
![image](https://github.com/user-attachments/assets/e9361b96-e96e-4748-9fbc-fc5bac09748e)
![image](https://github.com/user-attachments/assets/0c03c7a0-8486-4085-8d30-4177bf4cf292)


```
<?php
// home.php 
?>

<!-- Add required CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<style>
.hero-section {
    padding: 100px 0;
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    position: relative;
    overflow: hidden;
}

.hero-particles {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    animation: particles 20s linear infinite;
}

@keyframes particles {
    0% { transform: translateY(0); }
    100% { transform: translateY(-100%); }
}

.profile-image {
    width: 250px;
    height: 250px;
    border-radius: 50%;
    border: 5px solid white;
    box-shadow: 0 0 25px rgba(0,0,0,0.3);
    margin: 0 auto 30px;
    overflow: hidden;
    animation: float 3s ease-in-out infinite;
}

@keyframes float {
    0% { transform: translateY(0px); }
    50% { transform: translateY(-20px); }
    100% { transform: translateY(0px); }
}

.profile-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.section-title {
    font-size: 2.5rem;
    font-weight: bold;
    margin-bottom: 1rem;
    position: relative;
    padding-bottom: 15px;
}

.section-title::after {
    content: '';
    position: absolute;
    left: 50%;
    bottom: 0;
    transform: translateX(-50%);
    width: 50px;
    height: 3px;
    background: #fff;
}

.service-card {
    background: white;
    border-radius: 15px;
    padding: 30px;
    margin: 20px 0;
    transition: transform 0.3s ease;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.service-card:hover {
    transform: translateY(-10px);
}

.service-icon {
    font-size: 3rem;
    margin-bottom: 20px;
    color: #667eea;
}

.counter-box {
    background: rgba(255, 255, 255, 0.1);
    border-radius: 10px;
    padding: 20px;
    backdrop-filter: blur(5px);
    margin: 20px 0;
}

.counter-number {
    font-size: 2.5rem;
    font-weight: bold;
    margin: 10px 0;
}

.skill-bar {
    background: rgba(255, 255, 255, 0.2);
    height: 10px;
    border-radius: 5px;
    margin: 15px 0;
    position: relative;
}

.skill-progress {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    border-radius: 5px;
    background: #fff;
    transition: width 1.5s ease;
}

.timeline-item {
    background: white;
    border-radius: 10px;
    padding: 20px;
    margin: 20px 0;
    position: relative;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.timeline-item::before {
    content: '';
    position: absolute;
    width: 2px;
    height: 100%;
    background: #667eea;
    left: -20px;
    top: 0;
}

.social-links {
    margin-top: 30px;
}

.social-links a {
    display: inline-block;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
    border-radius: 50%;
    background: rgba(255, 255, 255, 0.2);
    color: white;
    margin: 0 10px;
    transition: all 0.3s ease;
}

.social-links a:hover {
    background: white;
    color: #667eea;
    transform: translateY(-5px);
}

</style>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-particles"></div>
    <div class="container text-center">
        <div class="row justify-content-center">
            <div class="col-md-8" data-aos="fade-up">
                <div class="profile-image">
                    <img src="assets/img/tata.jpg" alt="Profile Picture">
                </div>
                <h1 class="section-title">Selamat Datang di Website Saya</h1>
                <p class="lead mb-4">Editing | Designer | UI/UX</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/Taaryzka/"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="py-5">
    <div class="container">
        <h2 class="text-center mb-5" data-aos="fade-up">Layanan Kami</h2>
        <div class="row">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                <div class="service-card text-center">
                    <div class="service-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>Web Development</h3>
                    <p>Membuat website modern dan responsif sesuai kebutuhan Anda</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="service-card text-center">
                    <div class="service-icon">
                        <i class="fas fa-mobile-alt"></i>
                    </div>
                    <h3>Mobile Friendly</h3>
                    <p>Website yang optimal untuk semua ukuran layar</p>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="service-card text-center">
                    <div class="service-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>SEO Optimization</h3>
                    <p>Optimasi website untuk meningkatkan peringkat di mesin pencari</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Stats Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-3 text-center" data-aos="fade-up">
                <div class="counter-box">
                    <i class="fas fa-project-diagram fa-2x mb-3"></i>
                    <div class="counter-number" data-target="150">0</div>
                    <p>Proyek Selesai</p>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="100">
                <div class="counter-box">
                    <i class="fas fa-users fa-2x mb-3"></i>
                    <div class="counter-number" data-target="50">0</div>
                    <p>Klien Puas</p>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="200">
                <div class="counter-box">
                    <i class="fas fa-clock fa-2x mb-3"></i>
                    <div class="counter-number" data-target="5">0</div>
                    <p>Tahun Pengalaman</p>
                </div>
            </div>
            <div class="col-md-3 text-center" data-aos="fade-up" data-aos-delay="300">
                <div class="counter-box">
                    <i class="fas fa-award fa-2x mb-3"></i>
                    <div class="counter-number" data-target="15">0</div>
                    <p>Penghargaan</p>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Add required JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script>
// Initialize AOS
AOS.init({
    duration: 1000,
    once: true
});

// Counter animation
const counters = document.querySelectorAll('.counter-number');
counters.forEach(counter => {
    const target = parseInt(counter.getAttribute('data-target'));
    const increment = target / 200;
    
    function updateCount() {
        const count = parseInt(counter.innerText);
        if (count < target) {
            counter.innerText = Math.ceil(count + increment);
            setTimeout(updateCount, 10);
        } else {
            counter.innerText = target;
        }
    }
    
    updateCount();
});
</script>
```
## 4. Menambahkan About

![image](https://github.com/user-attachments/assets/751c0953-acae-4aed-bfc9-050c838a3b8c)
![image](https://github.com/user-attachments/assets/bf820f22-0d93-45cd-a5c2-dccb17a29571)

dengan memasukan code berikut
```
<!-- ABOUT PAGE (about.php) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.2/font/bootstrap-icons.min.css">

<style>
/* Modern Background Effect */
.about-page {
    background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
    position: relative;
    overflow: hidden;
}

.about-page::before {
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%239C92AC' fill-opacity='0.1'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
}

/* Enhanced Header Section */
.display-4 {
    background: linear-gradient(45deg, #2c3e50, #3498db);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    font-size: 3.5rem;
    position: relative;
    margin-bottom: 2rem;
}

.display-4::after {
    content: '';
    position: absolute;
    bottom: -10px;
    left: 0;
    width: 80px;
    height: 4px;
    background: linear-gradient(45deg, #3498db, #2ecc71);
    border-radius: 2px;
}

/* Enhanced Buttons */
.btn-primary {
    background: linear-gradient(45deg, #3498db, #2ecc71);
    border: none;
    padding: 12px 25px;
    border-radius: 25px;
    transition: all 0.3s ease;
    box-shadow: 0 5px 15px rgba(52, 152, 219, 0.3);
}

.btn-primary:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(52, 152, 219, 0.4);
}

.btn-outline-primary {
    border: 2px solid #3498db;
    padding: 12px 25px;
    border-radius: 25px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
    z-index: 1;
}

.btn-outline-primary::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 0;
    height: 100%;
    background: linear-gradient(45deg, #3498db, #2ecc71);
    transition: all 0.3s ease;
    z-index: -1;
}

.btn-outline-primary:hover::before {
    width: 100%;
}

.btn-outline-primary:hover {
    color: white;
    border-color: transparent;
}

/* Enhanced Team Cards */
.card {
    border-radius: 20px;
    overflow: hidden;
    transition: all 0.3s ease;
    background: rgba(255, 255, 255, 0.9);
    backdrop-filter: blur(10px);
}

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
}

.card-body {
    position: relative;
    z-index: 1;
}

.card-body::before {
    content: '';
    position: absolute;
    top: -50%;
    left: -50%;
    width: 200%;
    height: 200%;
    background: linear-gradient(
        45deg,
        transparent,
        rgba(52, 152, 219, 0.1),
        transparent
    );
    transform: rotate(45deg);
    transition: all 0.6s ease;
    z-index: -1;
}

.card:hover .card-body::before {
    animation: shine 1.5s infinite;
}

@keyframes shine {
    0% {
        transform: translateX(-100%) rotate(45deg);
    }
    100% {
        transform: translateX(100%) rotate(45deg);
    }
}

/* Enhanced Team Member Images */
.card img.rounded-circle {
    width: 120px;
    height: 120px;
    border: 5px solid rgba(52, 152, 219, 0.1);
    padding: 5px;
    transition: all 0.3s ease;
}

.card:hover img.rounded-circle {
    transform: scale(1.1);
    border-color: rgba(52, 152, 219, 0.3);
}

/* Enhanced Social Links */
.social-links a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    background: #f8f9fa;
    transition: all 0.3s ease;
    margin: 0 5px;
}

.social-links a:hover {
    background: linear-gradient(45deg, #3498db, #2ecc71);
    color: white !important;
    transform: translateY(-3px);
}

/* Section Title Animation */
h3.text-center {
    position: relative;
    padding-bottom: 15px;
    color: #2c3e50;
}

h3.text-center::after {
    content: '';
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    width: 60px;
    height: 3px;
    background: linear-gradient(45deg, #3498db, #2ecc71);
    border-radius: 2px;
}

/* Enhanced Text Styles */
.lead {
    font-size: 1.25rem;
    line-height: 1.8;
    color: #34495e;
}

.text-muted {
    color: #7f8c8d !important;
}

/* Responsive Adjustments */
@media (max-width: 768px) {
    .display-4 {
        font-size: 2.5rem;
    }
    
    .card {
        margin-bottom: 20px;
    }
}
</style>

<section class="about-page py-5">
  <div class="container">
    <!-- About Header -->
    <div class="row mb-5">
      <div class="col-lg-6" data-aos="fade-right">
        <h2 class="display-4 fw-bold">Tentang Kami</h2>
        <p class="lead">Kami adalah tim pengembang web yang berkomitmen untuk memberikan solusi terbaik bagi
          kebutuhan digital Anda.</p>
        <hr class="my-4">
        <p class="mb-4">Dengan pengalaman lebih dari 5 tahun dalam industri pengembangan web, kami telah membantu
          berbagai bisnis dan organisasi untuk membangun presence online mereka.</p>
        <div class="d-flex gap-3">
          <a href="?page=contact" class="btn btn-primary">
            <i class="bi bi-envelope-fill me-2"></i>Hubungi Kami
          </a>
          <a href="#team" class="btn btn-outline-primary">
            <i class="bi bi-people-fill me-2"></i>Tim Kami
          </a>
        </div>
      </div>
    </div>

    <!-- Team Section -->
    <div id="team" class="mt-5">
      <h3 class="text-center mb-5" data-aos="fade-up">Tim Kami</h3>
      <div class="row g-4">
        <!-- Team Member 1 -->
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
          <div class="card border-0 shadow-sm text-center">
            <div class="card-body p-4">
              <img src="/api/placeholder/150/150" alt="Team Member" class="rounded-circle mb-3">
              <h5 class="card-title">John Doe</h5>
              <p class="text-muted">CEO & Founder</p>
              <div class="social-links">
                <a href="#" class="text-muted"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-muted"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-muted"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
          <div class="card border-0 shadow-sm text-center">
            <div class="card-body p-4">
              <img src="/api/placeholder/150/150" alt="Team Member" class="rounded-circle mb-3">
              <h5 class="card-title">Kim Yuri</h5>
              <p class="text-muted">Lead Developer</p>
              <div class="social-links">
                <a href="#" class="text-muted"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-muted"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-muted"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Team Member 3 -->
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
          <div class="card border-0 shadow-sm text-center">
            <div class="card-body p-4">
              <img src="/api/placeholder/150/150" alt="Team Member" class="rounded-circle mb-3">
              <h5 class="card-title">Mike Johnson</h5>
              <p class="text-muted">UI/UX Designer</p>
              <div class="social-links">
                <a href="#" class="text-muted"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-muted"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-muted"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
        </div>

        <!-- Team Member 4 -->
        <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
          <div class="card border-0 shadow-sm text-center">
            <div class="card-body p-4">
              <img src="/api/placeholder/150/150" alt="Team Member" class="rounded-circle mb-3">
              <h5 class="card-title">Sarah Wilson</h5>
              <p class="text-muted">Marketing Lead</p>
              <div class="social-links">
                <a href="#" class="text-muted"><i class="bi bi-linkedin"></i></a>
                <a href="#" class="text-muted"><i class="bi bi-twitter"></i></a>
                <a href="#" class="text-muted"><i class="bi bi-github"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
```

## 5. Menambahkan Contanct
dengan memasukan kode halaman contact 

![image](https://github.com/user-attachments/assets/7c5c6bed-f7d3-4c88-a3b6-43a4b3b93873)

```
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
```
## Membuat Datatables di belajar

![image](https://github.com/user-attachments/assets/3b3dfdf5-5d75-474b-90ce-59acba9776a1)
![image](https://github.com/user-attachments/assets/e293bb49-35e9-4c1f-96e4-2b963fc11af4)

dengan memasukan kode halaman datatables

```
<h2>Datatables</h2>
<!-- Example DataTable -->
<table id="example" class="table table-striped" style="width:100%">
  <thead>
    <tr>
      <th>Name</th>
      <th>Position</th>
      <th>Office</th>
      <th>Age</th>
      <th>Start date</th>
      <th>Salary</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td>Choisan Ateez</td>
      <td>System Architect</td>
      <td>Tokyo</td>
      <td>20</td>
      <td>2003/04/25</td>
      <td>$999,999</td>
    </tr>
    <tr>
      <td>Ethan Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011/07/25</td>
      <td>$300,750</td>
    </tr>
    <tr>
      <td>Tiger Nixon</td>
      <td>System Architect</td>
      <td>Edinburgh</td>
      <td>61</td>
      <td>2011-04-25</td>
      <td>$320,800</td>
    </tr>
    <tr>
      <td>Garrett Winters</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>63</td>
      <td>2011-07-25</td>
      <td>$170,750</td>
    </tr>
    <tr>
      <td>Ashton Cox</td>
      <td>Junior Technical Author</td>
      <td>San Francisco</td>
      <td>66</td>
      <td>2009-01-12</td>
      <td>$86,000</td>
    </tr>
    <tr>
      <td>Cedric Kelly</td>
      <td>Senior Javascript Developer</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2012-03-29</td>
      <td>$433,060</td>
    </tr>
    <tr>
      <td>Airi Satou</td>
      <td>Accountant</td>
      <td>Tokyo</td>
      <td>33</td>
      <td>2008-11-28</td>
      <td>$162,700</td>
    </tr>
    <tr>
      <td>Brielle Williamson</td>
      <td>Integration Specialist</td>
      <td>New York</td>
      <td>61</td>
      <td>2012-12-02</td>
      <td>$372,000</td>
    </tr>
    <tr>
      <td>Herrod Chandler</td>
      <td>Sales Assistant</td>
      <td>San Francisco</td>
      <td>59</td>
      <td>2012-08-06</td>
      <td>$137,500</td>
    </tr>
    <tr>
      <td>Rhona Davidson</td>
      <td>Integration Specialist</td>
      <td>Tokyo</td>
      <td>55</td>
      <td>2010-10-14</td>
      <td>$327,900</td>
    </tr>
    <tr>
      <td>Colleen Hurst</td>
      <td>Javascript Developer</td>
      <td>San Francisco</td>
      <td>39</td>
      <td>2009-09-15</td>
      <td>$205,500</td>
    </tr>
    <tr>
      <td>Sonya Frost</td>
      <td>Software Engineer</td>
      <td>Edinburgh</td>
      <td>23</td>
      <td>2008-12-13</td>
      <td>$103,600</td>
    </tr>
    <tr>
      <td>Jena Gaines</td>
      <td>Office Manager</td>
      <td>London</td>
      <td>30</td>
      <td>2008-12-19</td>
      <td>$90,560</td>
    </tr>
    <tr>
      <td>Quinn Flynn</td>
      <td>Support Lead</td>
      <td>Edinburgh</td>
      <td>22</td>
      <td>2013-03-03</td>
      <td>$342,000</td>
    </tr>
    <tr>
      <td>Charde Marshall</td>
      <td>Regional Director</td>
      <td>San Francisco</td>
      <td>36</td>
      <td>2008-10-16</td>
      <td>$470,600</td>
    </tr>
    <tr>
      <td>Haley Kennedy</td>
      <td>Senior Marketing Designer</td>
      <td>London</td>
      <td>43</td>
      <td>2012-12-18</td>
      <td>$313,500</td>
    </tr>
  </tbody>
</table>
```

## Membuat form di belajar

![image](https://github.com/user-attachments/assets/0624aee6-f306-4129-a5b1-58da4efff630)




<img src=https://pngimg.com/uploads/google_drive/google_drive_PNG9.png width="110px" >

- [ini adalah penjelasan yang lebih lengkap](https://drive.google.com/file/d/15CXc0FVemHqMzBvTEPF-s8iPX5zmoW1H/view?usp=drivesdk)

## SELESAI <img align="center" alt="Ikhsan-Python" height="40" width="45" src="https://em-content.zobj.net/source/microsoft-teams/337/student_1f9d1-200d-1f393.png"> <img align="center" alt="Ikhsan-Python" height="40" width="45" src="https://em-content.zobj.net/thumbs/160/twitter/348/flag-indonesia_1f1ee-1f1e9.png">
