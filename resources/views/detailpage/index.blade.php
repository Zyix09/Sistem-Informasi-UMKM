@extends('layouts.app3')

@section('landingpage')
    <div class="content-page mt-4">
        <div class="content-page mt-3">
            <div class="row">

                <div class="col-md-4">

                    <img src="assets/img/gambar/product.png" class="img-fluid mb-3" alt="Product">

                    <div class="d-flex justify-content-around">

                        <img src="assets/img/gambar/product.png" class="img-thumbnail w-25" alt="Thumbnail">
                        <img src="assets/img/gambar/product.png" class="img-thumbnail w-25" alt="Thumbnail">
                        <img src="assets/img/gambar/product.png" class="img-thumbnail w-25" alt="Thumbnail">
                    </div>
                </div>

                <div class="col-md-4">
                    <h2>Kripik Pepaya</h2>
                    <p>Terjual 8 • 4.5 rating</p>
                    <h3>Rp 25.000</h3>
                    <p>Kripik pepaya ala wringinso terbuat dari pepaya pilihan yang cocok bagi pecinta gurih dan kriuk.</p>

                    <div class="d-flex mt-5">
                        <img src="assets/img/gambar/product.png" class="img-thumbnail w-25" alt="Thumbnail">
                        <div class="col">
                            <h5>Umkm Kripik Jaya</h5>
                            <p>Online 1 jam lalu</p>
                        </div>
                        <p class="card-text">🌟🌟🌟🌟🌟</p>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Informasi Pesanan</h5>
                            <input type="text" class="form-control mb-3" placeholder="Catatan untuk penjual (opsional)">

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span>Stok Total: 253</span>
                                <div class="quantity-selector">

                                </div>
                            </div>
                            <h5>Sub Total</h5>
                            <h3>Rp 25.000</h3>
                            <button class="btn btn-primary btn-block mb-2">Keranjang</button>
                            <button class="btn btn-secondary btn-block">Beli Langsung</button>
                        </div>
                    </div>
                </div>
            </div>


            <div class="mt-4">
                <div class="col">
                    <h4>Ulasan Terakhir</h4>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text"><strong>D**n</strong> <small class="text-muted">Hari ini</small>
                                    </p>
                                    <p class="card-text">🌟🌟🌟🌟🌟</p>
                                    <div class="card">
                                        <p class="card-text">Respon penjual cepat</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text"><strong>D**n</strong> <small class="text-muted">Hari ini</small>
                                    </p>
                                    <p class="card-text">🌟🌟🌟🌟🌟</p>
                                    <div class="card">
                                        <p class="card-text">Respon penjual cepat</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-text"><strong>D**n</strong> <small class="text-muted">Hari ini</small>
                                    </p>
                                    <p class="card-text">🌟🌟🌟🌟🌟</p>
                                    <div class="card">
                                        <p class="card-text">Respon penjual cepat</p>
                                    </div>

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
