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
<li class="nav-item active">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<li class="nav-item">
    <a class="nav-link {{ Request::is('candidate') ? 'active' : '' }}" href="/candidate">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Candidate</span></a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Request::is('value-weight') ? 'active' : '' }}" href="/value-weight">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Value Weight</span></a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Request::is('criteria') ? 'active' : '' }}" href="/criteria">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Criteria</span></a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Request::is('calculate') ? 'active' : '' }}" href="/calculate">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Calculate</span></a>
</li>

<li class="nav-item">
    <a class="nav-link {{ Request::is('report') ? 'active' : '' }}" href="/report">
        <i class="fas fa-fw fa-table"></i>
        <span>Report</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>
<!-- End of Sidebar -->