<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- RemixIcon -->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('admin/style.css') }}">
    @yield('styles')
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="logo">
            <i class="ri-dashboard-3-line logo-icon"></i>
            <span class="logo-text">Dashboard</span>
        </div>
        
        <ul class="nav flex-column px-2">
            <li class="nav-item">
                <a class="nav-link active" href="{{route('admin-home')}}">
                    <i class="ri-dashboard-line"></i>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin-consults')}}">
                    <i class="ri-user-line"></i>
                    <span class="nav-link-text">Inquiries</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="ri-shopping-bag-line"></i>
                    <span class="nav-link-text">Products</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="ri-file-chart-line"></i>
                    <span class="nav-link-text">Reports</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="ri-settings-3-line"></i>
                    <span class="nav-link-text">Settings</span>
                </a>
            </li>
        </ul>
    </div>
    
    <!-- Header (Simplified without dropdown) -->
    <header class="header">
        <i class="ri-menu-line header-icon"></i>
        <span class="header-title">Dashboard Overview</span>
        
        <div class="header-actions">
            <i class="ri-search-line header-icon" title="Search"></i>
            <i class="ri-notification-3-line header-icon" title="Notifications"></i>
            <i class="ri-mail-line header-icon" title="Messages"></i>
        </div>
    </header>
    
    <!-- Main Content -->
    <main class="main-content">
        @yield('content')
    </main>

</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
@yield('scripts')