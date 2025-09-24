<nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top py-3">
    <div class="container">
        <!-- Brand / Logo -->
        <a class="navbar-brand fw-bold text-uppercase" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/logos.png') }}" alt="Crab n Co Logo" class="img-fluid" style="max-height:50px;">
        </a>

        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
<li class="nav-item">
    <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="{{ url('/') }}">Home</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('aboutus') ? 'active' : '' }}" href="{{ url('/aboutus') }}">About Us</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('meeting&event') ? 'active' : '' }}" href="{{ url('/meeting&event') }}">Meeting & Event</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('menu') ? 'active' : '' }}" href="{{ url('/menu') }}">Menu</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('gallery') ? 'active' : '' }}" href="{{ url('/gallery') }}">Gallery</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('promotion') ? 'active' : '' }}" href="{{ url('/promotion') }}">Promotions</a>
</li>
<li class="nav-item">
    <a class="nav-link {{ Request::is('contact') ? 'active' : '' }}" href="{{ url('/contact') }}">Contact Us</a>
</li>

                <li class="nav-item">
                    <a class="btn reservasi-btn ms-3" 
                       href="https://api.whatsapp.com/send/?phone=6282140098833&text&type=phone_number&app_absent=0" 
                       target="_blank">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Reservasi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<style>
/* Navbar Base */
#mainNavbar {
    background: rgba(250, 237, 212, 0.87); /* hijau calm transparan */
    backdrop-filter: blur(12px);
    padding: 1rem 0;
    transition: all 0.3s ease;
}

/* Saat di-scroll */
#mainNavbar.scrolled {
    background: rgba(250, 237, 212, 0.55); /* lebih pekat */
    padding: 0.5rem 0;
}

/* Navbar Brand */
#mainNavbar .navbar-brand {
    font-size: 1.25rem;
    font-weight: bold;
    letter-spacing: 1px;
}
.nav-link.active {
    font-weight: bold;
    color: #8e3c20 !important; /* warna sesuai branding */
    border-bottom: 2px solid #8e3c20; /* underline */
}

/* Navbar Links */
#mainNavbar .nav-link {
    color: #75311a !important; /* cream */
    font-weight: 500;
    transition: color 0.3s, transform 0.2s;
}

#mainNavbar .nav-link:hover {
    color: #8e3c20 !important; /* maroon elegan */
    transform: translateY(-2px);
}

/* Reservasi Button */
.reservasi-btn {
    color: #faedd4;
    background-color: #8e3c20;
    border-radius: 30px;
    padding: 0.5rem 1rem;
    font-weight: 600;
    transition: all 0.3s ease;
}

.reservasi-btn:hover {
    background-color: #373405;
    color: #faedd4;
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById('mainNavbar');
    window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    });
});
</script>
