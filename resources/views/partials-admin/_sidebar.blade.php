<ul class="navbar-nav bg-gradient-light sidebar sidebar-primary accordion m-0" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon" style="color: #1265B8;">
            <img src="{{ asset('img/circle-logo.png') }}" alt="" srcset="" style="height: 3.5rem; width: 3.5rem;">
        </div>
        <div class="sidebar-brand-text mx-3" style="color: #1265B8;">{{ config('app.name') }}</div>
    </a>
    <!-- Divider -->

    <hr class="sidebar-divider my-0">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item" >
        <a class="nav-link" href="{{ route('dashboard.index') }}" style="color: #1265B8">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('employees.index') }}" style="color: #1265B8">
        <i class="fas fa-users"></i>
        <span>Employees</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('filter.personal') }}"  style="color: #1265B8">
            <i class="fas fa-search"></i>
            <span>Filter Search</span>
        </a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('announcement.index') }}"  style="color: #1265B8">
            <i class="fas fa-fw fa-bullhorn"></i>
            <span>Announcements</span>
        </a>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->


    <li class="nav-item" >
        <a class="nav-link" href="{{ route('message.index') }}" style="color: #1265B8">
            <i class="fas fa-fw fa-envelope"></i>
            <span>Message</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="{{ route('register.index') }}" style="color: #1265B8">
            <i class="fas fa-user"></i>
            <span>Manage Accounts</span>
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('admin.logout') }}" style="color: #1265B8">
            <i class="fas fa-sign-out-alt"></i>
            <span>Logout</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-flex justify-content-center">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>
</ul>