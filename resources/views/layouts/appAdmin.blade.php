<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'CineMax Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Icons --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
        }
        .sidebar {
            width: 260px;
            min-height: 100vh;
            background: linear-gradient(180deg, #6f2dbd, #4c1d95);
            color: #fff;
            position: fixed;
        }
        .sidebar a {
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            display: block;
            border-radius: 10px;
            margin: 4px 10px;
        }
        .sidebar a.active,
        .sidebar a:hover {
            background: rgba(255,255,255,0.15);
        }
        .content {
            margin-left: 260px;
            padding: 24px;
        }
        .topbar {
            background: #fff;
            padding: 16px 24px;
            border-radius: 12px;
            margin-bottom: 24px;
        }
    </style>

    @stack('css')
</head>
<body>

{{-- Sidebar --}}
<div class="sidebar d-flex flex-column justify-content-between">
    <div>
        <div class="p-4 fw-bold fs-4">
            🎬 CineMax<br>
            <small class="fs-6 opacity-75">Admin Portal</small>
        </div>

        <nav>
            <a href="{{ route('admin.index') }}">
                <i class="bi bi-ticket"></i> Admin
            </a>
        </nav>

        <nav>
            <a href="{{ route('customer.index') }}">
                <i class="bi bi-ticket"></i> Khách hàng
            </a>
        </nav>

        <nav>
            <a href="{{ route('paymentMethod.index') }}">
                <i class="bi bi-ticket"></i> phương thức thanh toán
            </a>
        </nav>
    </div>

    {{-- User --}}
    <div class="p-3 border-top border-light">
        <div class="d-flex align-items-center mb-2">
            <div class="rounded-circle bg-light text-dark fw-bold d-flex align-items-center justify-content-center"
                 style="width:40px;height:40px;">
                {{ strtoupper(substr(auth()->user()->name ?? 'A',0,1)) }}
            </div>
            <div class="ms-2">
                <div class="fw-semibold">{{ auth()->user()->name ?? 'Admin' }}</div>
                <small>{{ auth()->user()->email ?? 'admin@cinema.com' }}</small>
            </div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-light w-100 btn-sm">Đăng xuất</button>
        </form>
    </div>
</div>

{{-- Main content --}}
<div class="content">
    <div class="topbar d-flex justify-content-between align-items-center">
        <h5 class="mb-0">@yield('page-title', 'Tổng quan')</h5>
        <span>{{ now()->format('l, d/m/Y') }}</span>
    </div>

    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
@stack('js')
</body>
</html>
