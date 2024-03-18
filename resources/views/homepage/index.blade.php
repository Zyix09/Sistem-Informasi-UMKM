@extends('layouts.app3')

@section('landingpage')
    <div class="container mt-4">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="assets/img/carousel/1.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carousel/2.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="assets/img/carousel/3.png" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#carouselExampleIndicators" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleIndicators" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>

<br>
<br>
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/icon/kategori1.png" alt="Card image cap">
                    </div>
                    <p class="text-title">Makanan</p>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/icon/kategori1.png" alt="Card image cap">
                    </div>
                    <p class="text-title">Minuman</p>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/icon/kategori1.png" alt="Card image cap">
                    </div>
                    <p class="text-title">Kripik</p>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/icon/kategori1.png" alt="Card image cap">
                    </div>
                    <p class="text-title">Kerajinan</p>
                </div>

            </div>
        </div>

        <div class="container mt-2">
            <div class="row">
                <div class="col-md-1">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/icon/sub.png" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-title">Produk Unggulan</h4>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">UMKM</h5>
                            <p class="card-text">Produk UMKM yang sangat berkualitas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tempat Wisata</h5>
                            <p class="card-text">Tempat Wisata yang masih alami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Budaya</h5>
                            <p class="card-text">Kebudayaan Desa yang unik</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Budaya</h5>
                            <p class="card-text">Kebudayaan Desa yang unik</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container mt-2">
            <div class="row">
                <div class="col-md-1">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/icon/sub.png" alt="Card image cap">
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="text-title">Produk Sedang Diskon</h4>
                </div>
            </div>

            <div class="row mt-2">
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">UMKM</h5>
                            <p class="card-text">Produk UMKM yang sangat berkualitas</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Tempat Wisata</h5>
                            <p class="card-text">Tempat Wisata yang masih alami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Budaya</h5>
                            <p class="card-text">Kebudayaan Desa yang unik</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mb-3">
                    <div class="card">
                        <img class="card-img-top" src="assets/img/gambar/product.png" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Budaya</h5>
                            <p class="card-text">Kebudayaan Desa yang unik</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>
@endsection
@push('customStyle')
@endpush
@push('customScript')
@endpush
