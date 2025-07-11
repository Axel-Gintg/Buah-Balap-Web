    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        .modern-navbar {
            background: #fff;
            box-shadow: 0 2px 8px rgba(44, 62, 80, 0.07);
            font-family: 'Poppins', sans-serif;
            padding: 0.5rem 0;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .modern-navbar .navbar-logo img {
            height: 40px;
            width: auto;
        }
        .modern-navbar .navbar-menu {
            display: flex;
            align-items: center;
            justify-content: flex-end;
            gap: 1.5rem;
            margin-bottom: 0;
        }
        .modern-navbar .navbar-menu a {
            color: #473C33;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            transition: color 0.2s;
            padding: 6px 12px;
            border-radius: 6px;
        }
        .modern-navbar .navbar-menu a:hover, .modern-navbar .navbar-menu .active {
            background: #ABC270;
            color: #fff;
        }
        .modern-navbar .navbar-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-left: 1.5rem;
        }
        .modern-navbar .btn-round {
            background: #ABC270;
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            transition: background 0.2s;
        }
        .modern-navbar .btn-round:hover {
            background: #FEC868;
            color: #473C33;
        }
        .modern-navbar .user-dropdown {
            position: relative;
        }
        .modern-navbar .user-dropdown-menu {
            display: none;
            position: absolute;
            right: 0;
            top: 110%;
            background: #fff;
            box-shadow: 0 2px 8px rgba(44, 62, 80, 0.07);
            border-radius: 8px;
            min-width: 160px;
            z-index: 10;
        }
        .modern-navbar .user-dropdown:hover .user-dropdown-menu {
            display: block;
        }
        @media (max-width: 991px) {
            .modern-navbar .navbar-menu {
                display: none;
            }
            .modern-navbar .navbar-toggle {
                display: block;
            }
        }
        @media (min-width: 992px) {
            .modern-navbar .navbar-toggle {
                display: none;
            }
        }
    </style>
    <nav class="modern-navbar">
        <div class="container d-flex align-items-center justify-content-between">
            <a href="/" class="navbar-logo"><img src="/dist/img/logoweb.png" alt="Logo Buah Balap" style="height:40px;width:40px;border-radius:50%;object-fit:cover;"></a>
            <!-- Search Bar Tengah -->
            <form action="{{ route('shop') }}" method="get" class="d-none d-md-block flex-grow-1 mx-4" style="max-width:420px;">
                <input type="text" name="q" class="form-control" placeholder="Search products..." style="border-radius:24px;padding:8px 20px;font-size:1rem;">
            </form>
            <ul class="navbar-menu list-unstyled d-flex mb-0">
                <li><a href="{{ route('home') }}" class="{{ Request::is('home') ? 'active' : '' }}">Beranda</a></li>
                <li><a href="{{ route('shop') }}" class="{{ Request::is('shop') ? 'active' : '' }}">Toko</a></li>
                <li><a href="{{ route('contact') }}" class="{{ Request::is('contact') ? 'active' : '' }}">Hubungi Kami</a></li>
                <li><a href="{{ route('about') }}" class="{{ Request::is('about') ? 'active' : '' }}">Tentang</a></li>
            </ul>
            <div class="navbar-actions">
                <a href="/shop/keranjang" class="btn-round position-relative"><i class="fa fa-shopping-bag"></i><span class="cart-count" style="position:absolute;top:4px;right:4px;background:#FDA769;color:#fff;border-radius:50%;font-size:0.8rem;padding:2px 6px;">{{ $totalCart }}</span></a>
                @if (auth()->check())
                    <div class="user-dropdown">
                        <a href="#" class="btn-round"><i class="fa fa-user"></i></a>
                        <div class="user-dropdown-menu">
                            @if (auth()->user()->role != 1)
                            <a class="dropdown-item text-dark" href="{{ route('profile') }}">Profil Saya</a>
                            @endif
                            @if (auth()->user()->role == 2)
                            <a class="dropdown-item text-dark" href="{{ route('seller.dashboard') }}">Beranda Seller</a>
                            @endif
                            @if (auth()->user()->role == 1)
                            <a class="dropdown-item text-dark" href="{{ route('admin.dashboard') }}">Beranda Admin</a>
                            @endif
                            @if (auth()->user()->role != 1)
                            <a class="dropdown-item text-dark" href="/pesanan-saya">Pesanan Saya</a>
                            @endif
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="dropdown-item text-dark" style="font-size: 14px !important;">Keluar</button>
                            </form>
                        </div>
                    </div>
                @else
                    <a href="/login" class="btn-round"><i class="fa fa-user"></i></a>
                @endif
            </div>
            <button class="navbar-toggle btn btn-link d-lg-none"><i class="fa fa-bars"></i></button>
        </div>
    </nav>
    <!-- Header Section End -->