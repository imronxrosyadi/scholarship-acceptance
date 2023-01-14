<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Scholarship Acceptance</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a class="nav-link" href="/dashboard">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <li class="nav-item {{ Request::is('alternative') ? 'active' : '' }}">
        <a class="nav-link" href="/alternative">
            <i class="fas fa-user-friends"></i>
            <span>Alternative</span></a>
    </li>

    <li class="nav-item {{ Request::is('value-weight') ? 'active' : '' }}">
        <a class="nav-link" href="/value-weight">
            <i class="fas fa-balance-scale"></i>
            <span>Value Weight</span></a>
    </li>

    <li class="nav-item  {{ Request::is('criteria') ? 'active' : '' }}">
        <a class="nav-link" href="/criteria">
            <i class="fas fa-splotch"></i>
            <span>Criteria</span></a>
    </li>

    <li class="nav-item {{ $active == 'calculate' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-calculator"></i>
            <span>Calculate</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="/calculate/criteria-comparison">Criteria Comparison</a>
                <a class="collapse-item" href="/calculate/alternative-comparison">Alternative Comparison</a>
                <a class="collapse-item" href="/calculate/result">Result</a>
            </div>
        </div>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
