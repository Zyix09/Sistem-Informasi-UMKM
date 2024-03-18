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
    <link rel="stylesheet" href="assets/css/landing-page.css">
    @stack('customStyle')
</head>

<body>
    <section class="header">
        <div class="overlay">
            <div class="row">
                <div class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <div class="navlogo">
                                <a class="navbar-brand" href="#">Logoipsum</a>
                            </div>
                            <ul class="nav navbar-nav nav-links">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Tentang Kami</a></li>
                                <li><a href="#">Beli Produk</a></li>
                                <li><a href="#">Kontak</a></li>
                            </ul>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <div class="col-lg-8">
                                <ul class="nav navbar-nav nav-links">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Tentang Kami</a></li>
                                    <li><a href="#">Beli Produk</a></li>
                                    <li><a href="#">Kontak</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-2 right">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#"><i class="fa fa-search fa-2x"></i></a></li>
                                    <li><a href="#"><i class="fa fa-shopping-cart fa-2x"></i></a></li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="container title-middle">
                        <div class="row justify-content-center">
                            <div class="col-md-8 text-center">
                                <h4>Selamat Datang</h4>
                                <h1 class="font-weight-bold">Desa Wisata Wiringinsongo</h1>
                                <p>Selamat datang di layanan penjualan produk UMKM Desa Wringinsongo. Kami memberikan
                                    pelayanan terbaik untuk memudahkan anda membeli produk kami.</p>
                                <a href="{{ route('homepage.index') }}"><button class="btn btn-primary"> Lihat
                                        Produk</button> </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <div class="col middle-about">
        <div class="row">
            <div class="col-md-6">
                <div class="mt-4">
                    <img src="assets/img/gambar/Gallery of Apartment of Vergalhões _ Casa100 Arquitetura  - 21 1.png"
                        class="img-fluid" alt="Responsive image" style="background-color: #1111">
                </div>
            </div>

            <div class="col-md-5 text-tentang">
                <div class="my-4">
                    <h2>Tentang Kami</h2>
                    <p>Desa Wringinsongo yang terletak di Tumpang, Kabupaten Malang, Jawa Timur, Indonesia, merupakan
                        desa
                        yang
                        menarik dengan pemandangan alamnya yang indah. Tumpang sendiri adalah sebuah kecamatan di
                        Kabupaten
                        Malang, Jawa Timur.</p>
                </div>
            </div>
        </div>

        <div class="my-4">
            <h2>Objek Desa</h2>
            <p>Kami menyediakan layanan pembuatan loster berbagai macam model yang mencakup rumah, apartemen,
                kondominium,
                dan properti tinggal lainnya. Tim kami akan membantu Anda dengan semua tahap proses penjualan, termasuk
                pemasaran, negosiasi, dan penyelesaian transaksi.</p>
        </div>

        <div class="row">

            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="assets/img/gambar/shops 1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">UMKM</h5>
                        <p class="card-text text-center">Produk UMKM yang sangat berkualitas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="assets/img/gambar/shops 1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">Tempat Wisata</h5>
                        <p class="card-text text-center">Tempat Wisata yang masih alami.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card">
                    <img class="card-img-top" src="assets/img/gambar/shops 1.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title text-center">Budaya</h5>
                        <p class="card-text text-center">Kebudayaan Desa yang unik</p>
                    </div>
                </div>
            </div>

        </div>

        <div class="my-4 text-center font-weight-bold">
            <h2>Best Selling</h2>
            <div class="row mt-5">
                <div class="col-md-4 mb-3">
                    <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Jemblem</h5>
                        <p class="card-text">Jemblem siap goreng
                            rasa mantap</p>
                        <button type="button" class="btn btn-primary">Beli | Rp 10.000 </button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Kripik Pepaya</h5>
                        <p class="card-text">Kripik Pepaya rasa mantap</p>
                        <button type="button" class="btn btn-primary">Beli | Rp 10.000 </button>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Kunir Asem</h5>
                        <p class="card-text">Minuman kunir asem yang menyegarkan</p>
                        <button type="button" class="btn btn-primary">Beli | Rp 10.000 </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="my-4">
            <h2>Lokasi UMKM</h2>
            <p class="card-title mt-4">Kami memiliki UMKM yang tersebar di Desa Wringinsongo.</p>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <img class="card-img-top" src="assets/img/gambar/lokasi.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">UMKM Jemblem</h5>
                        <p class="card-text">Jl. Pahlawan no 26 B Surabaya Jawa Timur</p>
                        <p class="card-text">Telp : 08776542198</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <img class="card-img-top" src="assets/img/gambar/lokasi.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">UMKM Kripik Pepaya</h5>
                        <p class="card-text">Cengkareng, Pergudangan 2A, Jakarta</p>
                        <p class="card-text">Telp : 08776542198</p>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <img class="card-img-top" src="assets/img/gambar/lokasi.png" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">UMKM Kunyit Asem</h5>
                        <p class="card-text">Jl. Cililin, Bogor, Jawa Barat</p>
                        <p class="card-text">Telp : 08776542198</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card person-profile">
                    <div class="col column-profile">
                        <p>
                            "Sensasi luar biasa ketika mencoba produk makanan jemblem ini! Rasa unik yang terpadu dengan
                            sempurna, menciptakan pengalaman kuliner yang tak terlupakan. Kombinasi bahan-bahan pilihan
                            memberikan sentuhan kenikmatan yang sesungguhnya.”
                        </p>
                        <h5 class="card-title title-profile">Customer 1</h5>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-4 person-img"> <img src="assets/img/gambar/person.png" class="card-img"
                            alt="client1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                            <p class="card-text">4.9/5.0</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 mb-3">
                <div class="card person-profile">
                    <div class="col column-profile">
                        <p>
                            "Sensasi luar biasa ketika mencoba produk makanan jemblem ini! Rasa unik yang terpadu dengan
                            sempurna, menciptakan pengalaman kuliner yang tak terlupakan. Kombinasi bahan-bahan pilihan
                            memberikan sentuhan kenikmatan yang sesungguhnya.”
                        </p>
                        <h5 class="card-title title-profile">Customer 1</h5>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-4 person-img"> <img src="assets/img/gambar/person.png" class="card-img"
                            alt="client1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                            <p class="card-text">4.9/5.0</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4 mb-3">
                <div class="card person-profile">
                    <div class="col column-profile">
                        <p>
                            "Sensasi luar biasa ketika mencoba produk makanan jemblem ini! Rasa unik yang terpadu dengan
                            sempurna, menciptakan pengalaman kuliner yang tak terlupakan. Kombinasi bahan-bahan pilihan
                            memberikan sentuhan kenikmatan yang sesungguhnya.”
                        </p>
                        <h5 class="card-title title-profile">Customer 1</h5>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-md-4 person-img"> <img src="assets/img/gambar/person.png" class="card-img"
                            alt="client1">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">

                            <p class="card-text">4.9/5.0</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>

<br>
<br>
<br>
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4">
                <img src="assets/img/avatar/logobiru.png" alt="logo" class="img-fluid" >
                <h5>Penjualan Produk UMKM Desa Wringinsongo</h5>
            </div>
            <div class="col-md-4">
                <h4 class="font-weight-bold">Kontak</h4>
                <ul>
                    <li>Alamat</li>
                    <li>081375439087</li>
                    <li>umkm@gmail.com</li>
                </ul>


            </div>

            <div class="col-md-4">
                <h4 class="font-weight-bold">Instagram</h4>
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <img src="" alt="" srcset="">

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <img src="" alt="" srcset="">

                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col text-center">
                    <p>&copy; 2022 All Right Reserved. Design by Mr.Hehe</p>
                </div>
            </div>
        </div>
    </div>


    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    @stack('customScript')
</body>

</html>
