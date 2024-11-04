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