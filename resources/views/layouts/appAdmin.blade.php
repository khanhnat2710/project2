<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'CineMax Admin')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: #f5f6fa;
            font-family: system-ui;
        }

        /* SIDEBAR */

        .sidebar {
            width: 260px;
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            background: linear-gradient(180deg, #6f2dbd, #4c1d95);
            color: #fff;
            z-index: 1000;

            display: flex;
            flex-direction: column;
            justify-content: space-between;

            overflow-y: auto;
            transition: 0.3s;
        }

        /* SCROLLBAR */

        .sidebar::-webkit-scrollbar {
            width: 6px;
        }

        .sidebar::-webkit-scrollbar-track {
            background: rgba(255, 255, 255, 0.08);
        }

        .sidebar::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.35);
            border-radius: 10px;
        }

        .sidebar::-webkit-scrollbar-thumb:hover {
            background: rgba(255, 255, 255, 0.55);
        }

        /* LOGO */

        .sidebar .logo {
            padding: 20px;
            font-size: 22px;
            font-weight: bold;
        }

        /* MENU */

        .sidebar nav a {
            color: #fff;
            text-decoration: none;
            padding: 12px 20px;
            display: flex;
            align-items: center;
            gap: 10px;
            /* border-radius: 8px;
            margin: 4px 10px;
            transition: 0.2s; */
        }

        /* .sidebar nav a:hover {
            background: rgba(255, 255, 255, 0.15);
        } */

        .sidebar nav a i {
            font-size: 18px;
        }

        /* SUBMENU */

        .submenu a {
            padding-left: 45px;
            font-size: 14px;
        }

        /* USER */

        .sidebar-user {
            padding: 15px;
            border-top: 1px solid rgba(255, 255, 255, 0.2);
        }

        /* CONTENT */

        .content {
            margin-left: 260px;
            padding: 24px;
        }

        /* TOPBAR */

        .topbar {
            background: #fff;
            padding: 14px 20px;
            border-radius: 12px;
            margin-bottom: 20px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05);
        }

        /* MOBILE */

        .toggle-btn {
            display: none;
            font-size: 22px;
            cursor: pointer;
        }

        @media (max-width:991px) {

            .sidebar {
                left: -260px;
            }

            .sidebar.active {
                left: 0;
            }

            .content {
                margin-left: 0;
            }

            .toggle-btn {
                display: block;
            }

        }
    </style>

    @stack('css')
</head>

<body>

<!-- SIDEBAR -->

<div class="sidebar" id="sidebar">

    <div>

        <div class="logo">
            🎬 CineMax
            <div style="font-size:13px;opacity:0.7">Admin Portal</div>
        </div>

        <nav>

            <!-- DASHBOARD -->

            <a href="{{ route('admin.index') }}">
                <i class="bi bi-speedometer2"></i>
                Dashboard
            </a>

            <!-- USER -->

            <a data-bs-toggle="collapse" href="#userMenu">
                <i class="bi bi-people"></i>
                Quản lý người dùng
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <div class="collapse submenu" id="userMenu">

                <a href="{{ route('admin.index') }}">
                    <i class="bi bi-person-badge"></i>
                    Admin
                </a>

                <a href="{{ route('customer.index') }}">
                    <i class="bi bi-person"></i>
                    Khách hàng
                </a>

            </div>

            <!-- MOVIE -->

            <a data-bs-toggle="collapse" href="#movieMenu">
                <i class="bi bi-film"></i>
                Quản lý phim
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <div class="collapse submenu" id="movieMenu">

                <a href="{{ route('movies.index') }}">
                    <i class="bi bi-camera-reels"></i>
                    Phim
                </a>

                <a href="{{ route('genre.index') }}">
                    <i class="bi bi-tags"></i>
                    Thể loại
                </a>

                <a href="{{ route('studio.index') }}">
                    <i class="bi bi-building"></i>
                    Hãng sản xuất
                </a>

                <a href="{{ route('ageRating.index') }}">
                    <i class="bi bi-shield-check"></i>
                    Kiểm duyệt
                </a>

            </div>

            <!-- CINEMA -->

            <a data-bs-toggle="collapse" href="#cinemaMenu">
                <i class="bi bi-camera-video"></i>
                Rạp chiếu
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <div class="collapse submenu" id="cinemaMenu">

                <a href="{{ route('screeningRoom.index') }}">
                    <i class="bi bi-camera-reels"></i>
                    Phòng chiếu
                </a>

                <a href="{{ route('seat.index') }}">
                    <i class="bi bi-grid"></i>
                    Ghế
                </a>

                <a href="{{ route('seatType.index') }}">
                    <i class="bi bi-grid-3x3"></i>
                    Loại ghế
                </a>

                <a href="{{ route('screenType.index') }}">
                    <i class="bi bi-badge-3d"></i>
                    Định dạng phòng
                </a>

            </div>

            <!-- FOOD -->

            <a data-bs-toggle="collapse" href="#foodMenu">
                <i class="bi bi-cup-straw"></i>
                Đồ ăn
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>

            <div class="collapse submenu" id="foodMenu">

                <a href="{{ route('food.index') }}">
                    <i class="bi bi-cup"></i>
                    Đồ ăn
                </a>

                <a href="{{ route('foodInvoice.index') }}">
                    <i class="bi bi-receipt"></i>
                    Hóa đơn đồ ăn
                </a>

            </div>

            <!-- PAYMENT -->

            <a href="{{ route('paymentMethod.index') }}">
                <i class="bi bi-credit-card"></i>
                Thanh toán
            </a>

        </nav>

    </div>

    <!-- USER -->

    <div class="sidebar-user">

        <div class="d-flex align-items-center mb-2">

            <div class="rounded-circle bg-light text-dark fw-bold d-flex align-items-center justify-content-center"
                 style="width:40px;height:40px;">
                {{ strtoupper(substr(auth()->user()->name ?? 'A',0,1)) }}
            </div>

            <div class="ms-2">

                <div class="fw-semibold">
                    {{ auth()->user()->name ?? 'Admin' }}
                </div>

                <small>
                    {{ auth()->user()->email ?? 'admin@cinema.com' }}
                </small>

            </div>

        </div>

        <form action="{{ route('login') }}" method="POST">
            @csrf
            <button class="btn btn-light w-100 btn-sm">
                <i class="bi bi-box-arrow-right"></i> Đăng xuất
            </button>
        </form>

    </div>

</div>


<!-- CONTENT -->

<div class="content">

    <div class="topbar d-flex justify-content-between align-items-center">

        <div class="d-flex align-items-center gap-3">

            <i class="bi bi-list toggle-btn" onclick="toggleSidebar()"></i>

            <h5 class="mb-0">@yield('page-title','Dashboard')</h5>

        </div>

        <span>{{ now()->format('d/m/Y') }}</span>

    </div>

    @yield('content')

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('active')
    }
</script>

@stack('js')

</body>

</html>
