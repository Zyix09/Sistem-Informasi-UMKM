@extends('layouts.app3')

@section('landingpage')
    <section class="mt-5">
        <div class="container">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0">Pembayaran</h5>
                    </div>
                    <div class="card-body">
                        <!-- Ringkasan Produk -->
                        <h6 class="card-title">{{ $keranjang->nama_barang }}</h6>
                        <div class="d-flex justify-content-between">
                            <span>Harga:</span>
                            <strong> Rp.{{ number_format($keranjang->total_harga, 0, ',') }}</strong>
                        </div>
                        <hr>

                        <h6 class="card-title">Pilih Metode Pembayaran</h6>
                        <div class="col-12">
                            @foreach ($channels as $channel)
                                <form action="{{ route('pembayaran.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        @csrf
                                        <input type="hidden" name="id" value="{{ $keranjang->keranjangsId }}">
                                        <input type="hidden" name="method" value="{{ $channel->code }}">

                                        <div class="card">
                                            <img src="{{ asset('assets/img/bank/' . $channel->code . '.png') }}"
                                                style="width: 25%; height: 100px; padding: 15px;"
                                                class="card-img-top equal-image" alt="{{ $channel->name }}">
                                            <div class="card-body text-center" style="padding: 0px;">
                                                <p class="card-text"
                                                    style="color: #000000; font-size: 14px; margin-top: -60px;">
                                                    {{ $channel->name }}</p>
                                                <button type="submit" class="btn btn-primary"
                                                    style="margin-left: 550px; margin-top: -80px">Bayar</button>
                                            </div>
                                        </div>

                                    </div>

                                </form>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
