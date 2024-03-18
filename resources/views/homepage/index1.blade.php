@extends('layouts.app3')

@section('landingpage')
    <div class="container mt-4">
        <div class="d-flex justify-content-center">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="your-image.jpg" alt="Card image cap">
                    </div>
                    <p class="text-title">Makanan</p>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="your-image.jpg" alt="Card image cap">
                    </div>
                    <p class="text-title">Minuman</p>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="your-image.jpg" alt="Card image cap">
                    </div>
                    <p class="text-title">Kripik</p>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="your-image.jpg" alt="Card image cap">
                    </div>
                    <p class="text-title">Kerajinan</p>
                </div>

            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-md-3">
                    <div class="d-flex justify-content-between mb-3">
                        <h5>Filter</h5>
                        <button class="btn btn-outline-secondary btn-sm">Reset</button>
                    </div>


                    <div class="mb-3">
                        <label for="priceRange">Harga</label>
                        <input type="text" id="priceRange" class="form-control" placeholder="Rp">
                    </div>
                    <div class="mb-3">
                        <label for="priceRange">Harga</label>
                        <input type="text" id="priceRange" class="form-control" placeholder="Rp">
                    </div>
                    <div class="mb-3">

                        <div class="btn-group">
                            <button class="btn btn-secondary btn-md dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Rating
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3">

                        <div class="btn-group">
                            <button class="btn btn-secondary btn-md dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-expanded="false">
                                Rating
                            </button>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-9">

                    <div class="row">
                        <div class="col-md-4">
                            <div class="d-flex justify-content-between mb-3">
                                <h5>produk</h5>
                                <h5>Toko</h5>

                            </div>
                        </div>

                    </div>

                    <div class="row">

                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="assets/img/gambar/product.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kripik Pepaya</h5>
                                    <p class="card-text">Rp 20.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">4.8 | 50 Terjual</small>
                                        <small class="text-muted">UMKM Kripik Jaya</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="assets/img/gambar/product.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kripik Pepaya</h5>
                                    <p class="card-text">Rp 20.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">4.8 | 50 Terjual</small>
                                        <small class="text-muted">UMKM Kripik Jaya</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="assets/img/gambar/product.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kripik Pepaya</h5>
                                    <p class="card-text">Rp 20.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">4.8 | 50 Terjual</small>
                                        <small class="text-muted">UMKM Kripik Jaya</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 mb-4">
                            <div class="card">
                                <img src="assets/img/gambar/product.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Kripik Pepaya</h5>
                                    <p class="card-text">Rp 20.000</p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted">4.8 | 50 Terjual</small>
                                        <small class="text-muted">UMKM Kripik Jaya</small>
                                    </div>
                                </div>
                            </div>
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
