
<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('admin.products.list') }}">
    <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-tree"></i>
    </div>
    <div class="sidebar-brand-text mx-3">TimberHub</div>
</a>

<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<li class="nav-item active">
    <a class="nav-link" href="{{ route('admin.products.list') }}">
        <i class="fas fa-fw fa-table"></i>
        <span>Products</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
    Actions
</div>


<!-- Nav Item - Tables -->
<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.products.create') }}">
        <i class="fas fa-fw fa-plus-square"></i>
        <span>New Product</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider d-none d-md-block">

<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

