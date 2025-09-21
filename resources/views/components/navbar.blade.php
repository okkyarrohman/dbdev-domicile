<nav id="mainNavbar" class="navbar navbar-expand-lg navbar-dark fixed-top py-3" style="transition: background 0.3s, padding 0.3s;">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            <img src="{{ asset('assets/img/domicile.png') }}" alt="Logo" class="img-fluid" style="max-height:40px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/gallery') }}">Gallery</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/menu') }}">Menu</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/aboutus') }}">About Us</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                <li class="nav-item">
                    <a class="btn ms-3" 
                    href="https://api.whatsapp.com/send/?phone=62811358998&text&type=phone_number&app_absent=0" 
                    target="_blank"
                    style="color:#efefef; background-color: #ffffff11;">
                        <i class="bi bi-box-arrow-in-right me-1"></i> Reservasi
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<style>
#mainNavbar {
    background: rgba(27,27,27,0.5);
    backdrop-filter: blur(10px);
    padding: 1rem 0;
    transition: all 0.3s ease;
}
#mainNavbar.scrolled {
    background: rgba(27,27,27,0.85);
    padding: 0.5rem 0;
}

/* Navbar link styling */
#mainNavbar .nav-link {
    color: #fff !important;
    font-weight: 500;
    transition: color 0.3s;
}

#mainNavbar .nav-link:hover {
    color: #ffc107 !important;
}
</style>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const navbar = document.getElementById('mainNavbar');

window.addEventListener('scroll', function() {
    console.log(window.scrollY);
    if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
});
</script>
