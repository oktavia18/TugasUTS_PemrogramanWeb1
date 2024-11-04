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