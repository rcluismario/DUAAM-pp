<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.dashboard') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-tree"></i>
        </div>
        <div class="sidebar-brand-text mx-3">DUAAMin</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.dashboard') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Activismo
    </div>

    <li class="nav-item">
        <a href="{{ route('admin.counter.index') }}" class="nav-link">
            <i class="fas fa-child" aria-hidden="true"></i>
            <span>Administrar grupos</span></a> 

    </li>
    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Donaciones
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.donation.index') }}">
            <i class="fas fa-hand-holding-heart"></i>
            <span>Donaciones</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Árboles
    </div>
    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.tree.index') }}">
            <i class="fas fa-tree"></i>
            <span>Árboles</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.tree.index', ['not_photo'=>true]) }}">
            <i class="fas fa-camera"></i>
            <span>Árboles sin foto</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Ajustes
    </div>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.admins.index') }}">
            <i class="fas fa-user-friends"></i>
            <span>Administradores</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->