<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?= base_url(); ?>">
        <div class="sidebar-brand-icon">
            <i class="fas fa-university"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Kampus</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="<?= base_url(); ?>">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Home</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - mahasiswa -->
    <li class="nav-item">
        <a class="nav-link" href="<?= base_url('mahasiswa'); ?>">
            <i class="fas fa-users"></i>
            <span>Mahasiswa</span></a>
    </li>

    <!-- Nav Item - jurusan -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-laptop"></i>
            <span>Jurusan</span></a>
    </li>
    <!-- Nav Item - mata kuliah -->
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-book"></i>
            <span>Mata Kuliah</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
