<div id="sidebarMenu" class="sidebar shadow-lg justify-content-between d-flex flex-column">

    
    {{-- Sidebar Content --}}
    <div class="position-sticky">
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
        <div class="list-group list-group-flush mx-3">
            {{-- Dashboard --}}
            <a href="{{ route('admin.home') }}" 
               class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2 d-flex gap-3
               @if(Request::routeIs('admin.home')) active @endif">
                <i class="bi bi-house-door-fill"></i><span>Dashboard</span>
            </a>
            
            {{-- Menu Makanan --}}
            <a href="{{ route('admin.menu') }}" 
               class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2 d-flex gap-3
               @if(Request::routeIs('admin.menu')) active @endif">
                <i class="bi bi-journal"></i><span>Manajemen Menu</span>
            </a>

            {{-- Galeri --}}
            <a href="{{ route('admin.galleries.index') }}" 
               class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2 d-flex gap-3
               @if(Request::routeIs('admin.galleries.index')) active @endif">
                <i class="bi bi-image-alt"></i><span>Galeri</span>
            </a>
            
            {{-- Laporan --}}
            <a href="{{ route('admin.report') }}" 
               class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2 d-flex gap-3
               @if(Request::routeIs('admin.report')) active @endif">
                <i class="bi bi-chat-square-text"></i><span>Laporan</span>
            </a>

        </div>
    </div>
    
    {{-- Logout --}}
    <div class="list-group list-group-flush mx-3 mt-auto mb-5">
        <form action="{{ route('admin.logout') }}" method="POST">
            @csrf
            <button type="submit" 
                    class="list-group-item list-group-item-action py-3 ripple rounded-3 mb-2 text-danger d-flex gap-3">
                <i class="bi bi-box-arrow-left"></i><span>Logout</span>
            </button>
        </form>
    </div>
</div>