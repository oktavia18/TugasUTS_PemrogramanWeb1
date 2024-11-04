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