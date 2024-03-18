<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desa Wisata Wiringinsongo</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.11.3/datatables.min.css" />
    <link rel="stylesheet" href="assets/css/detail.css">
    @stack('customStyle')

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary-nav sticky-top card">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('assets/img/avatar/logobiru.png') }}" style="max-content">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <div class="search">
                        <span class="fa fa-search"></span>
                        <input type="text" class="searchinput" placeholder="cari" aria-label="cari"
                            aria-describedby="basic-addon1">
                    </div>

                </ul>
                <ul class="navbar-nav ml-auto navbar-atas">
                    <li class="nav-item active mr-4">
                        <a class="nav-link text-primary" href="{{ route('homepage.index') }}">Home</a>
                    </li>
                    <li class="nav-item dropdown mr-4">
                        <a class="nav-link text-primary dropdown-toggle" href="#" data-toggle="dropdown">
                            Keranjang
                            {{-- <span class="badge badge-pill badge-dark cart-count">{{ $totalItemCount }}</span> --}}

                        </a>
                        <ul class="dropdown-menu dropdown-menus dropdown-menu-right">
                            <li>
                                <div class="dropdown-header">
                                    Keranjang Belanja Anda
                                </div>
                            </li>
                            {{-- @if ($keranjangItems)
                                <li class="dropdown-body">
                                    @foreach ($keranjangItems as $item)
                                        <div class="cart-item">
                                            <div class="cart-item-name">{{ $item->nama_barang }}</div>
                                            <div class="cart-item-price">Rp
                                                {{ number_format($item->harga_barang, 0, ',', '.') }}</div>

                                            <div class="cart-item-quantity">x{{ $cartItem->quantity }}</div>
                                            <div class="cart-item-quantity">
                                                <button class="btn btn-sm btn-danger btn-icon confirm-delete">
                                                    <i class="fas fa-times"></i> Delete </button>
                                            </div>
                                        </div>
                                    @endforeach
                                </li>
                                <li class="dropdown-body">
                                    <div class="cart-item">
                                        <div class="cart-item-lihat-keranjang">
                                            <button class="btn btn-sm btn-primary btn-icon">
                                                <i class="fas fa-times"></i> keranjang </button>
                                        </div>
                                        <div class="cart-item-lihat-checkout">
                                            <a href="{{ route('pembayaran.index') }}"
                                                class="btn btn-sm btn-warning btn-icon">
                                                <i class="fas fa-times"></i> Checkout </a>
                                        </div>
                                    </div>
                                </li>
                            @else
                                <li class="dropdown-body text-center">
                                    Keranjang Anda kosong
                                </li>
                            @endif --}}
                        </ul>
                    </li>
                </ul>

                <ul class="navbar-nav ml-auto navbar-button">
                    @if (!auth()->user())
                        <li class="nav-item">
                            <a class="px-4 py-1 btn text-primary mr-2 btn-login" href="{{ route('login') }}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="px-4 py-1 btn btn-regis" href="{{ route('register') }}">Daftar</a>
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a href="#" data-toggle="dropdown"
                                class="nav-link dropdown-toggle nav-link-lg nav-link-user text-primary authVerifikasi">
                                @if (Auth::user()->profile && Auth::user()->profile->foto != '')
                                    <img alt="image" src="{{ Storage::url(Auth::user()->profile->foto) }}"
                                        class="rounded-circle mr-1" style="width: 35px; height: 35px;">
                                @else
                                    <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                                        class="rounded-circle mr-1" style="width: 35px; height: 35px;">
                                @endif
                                <div class="d-sm-none d-lg-inline-block">
                                    Hai, {{ auth()->user()->name }}
                                </div>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right">
                                @if (auth()->user()->hasRole('pembeli'))
                                    <a href="{{ route('homepage.profile') }}" class="dropdown-item has-icon">
                                        <i class="far fa-user mx-1 mr-2"></i> Profile
                                    </a>
                                    <a href="" class="dropdown-item has-icon">
                                        <i class="fas fa-info mx-1 mr-2"></i> Histori
                                    </a>
                                @endif
                                <hr class="my-0" style="background-color: rgba(249, 249, 249, 0.2);">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="dropdown-item has-icon text-danger">
                                    <i class="fas fa-sign-out-alt mx-1 mr-2"></i> Keluar
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar -->


    <!-- Main Content -->
    <div class="main-content">
        @yield('landingpage')
    </div>

    <footer class="main-footer">
        @include('layouts.footer')
    </footer>
    <!-- General JS Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="/assets/js/stisla.js"></script>

    <!-- JS Libraies -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/assets/js/page/modules-sweetalert.js"></script>

    <!-- Template JS File -->
    <script src="/assets/js/scripts.js"></script>
    <script src="/assets/js/custom.js"></script>

    <!-- Page Specific JS File -->
    @stack('customScript')
</body>

</html>
