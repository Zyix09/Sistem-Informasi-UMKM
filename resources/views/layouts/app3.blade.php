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

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-2">
                <a class="navbar-brand" href="#">Logoipsum</a>
            </div>
            <div class="col-md-6 mt-2">
                <input type="text" placeholder="coba cari disini" style="max-width: 100%">
            </div>
            <div class="col-md-4">
                <button class="btn btn-secondary"> Keranjang</button>
                <button class="btn btn-outline-primary"> Daftar</button>
                <button class="btn btn-primary"> Login</button>
            </div>
        </div>
    </div>
    <!-- Main Content -->
    <div class="main-content">
        @yield('landingpage')
    </div>

    <footer class="main-footer">
        @include('layouts.footer')
    </footer>
    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <script>
        $('.carousel').carousel()
    </script>
    @stack('customScript')
</body>

</html>
