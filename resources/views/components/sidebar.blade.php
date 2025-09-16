<div id="sidebarMenu" class="sidebar shadow-lg">
    {{-- Brand & Toggle Button --}}
    <div class="d-flex align-items-center justify-content-between p-4">
        <a class="navbar-brand fw-bold fs-4" href="{{ route('admin.home') }}">
            <i class="fas fa-crown text-warning me-2"></i>Admin
        </a>
        <button id="sidebarClose" 
                class="btn btn-sm btn-outline-primary d-lg-none btn-close-sidebar">
            <i class="bi bi-chevron-double-left"></i>
        </button>
    </div>
    
    {{-- Sidebar Content --}}
    <div class="position-sticky">
        <div class="list-group list-group-flush mx-3">
            {{-- Dashboard --}}
            <a href="{{ route('admin.home') }}" 
               class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2 
               @if(Request::routeIs('admin.home')) active @endif">
                <i class="fas fa-tachometer-alt fa-fw me-3"></i><span>Dashboard</span>
            </a>
            
            {{-- Menu Makanan --}}
            <a href="{{ route('admin.menu') }}" 
               class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2 
               @if(Request::routeIs('admin.menu')) active @endif">
                <i class="fas fa-utensils fa-fw me-3"></i><span>Manajemen Menu</span>
            </a>

            {{-- Galeri --}}
            <a href="{{ route('admin.galleries.index') }}" 
               class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2 
               @if(Request::routeIs('admin.menu')) active @endif">
                <i class="fas fa-utensils fa-fw me-3"></i><span>Manajemen Menu</span>
            </a>
            
            {{-- Laporan --}}
            <a href="{{ route('admin.report') }}" 
               class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2
               @if(Request::routeIs('admin.report')) active @endif">
                <i class="fas fa-chart-line fa-fw me-3"></i><span>Laporan</span>
            </a>

        </div>
    </div>
    
    {{-- Logout --}}
    <div class="list-group list-group-flush mx-3 mt-auto">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" 
                    class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2 text-danger">
                <i class="fas fa-sign-out-alt fa-fw me-3"></i><span>Logout</span>
            </button>
        </form>
    </div>
</div>