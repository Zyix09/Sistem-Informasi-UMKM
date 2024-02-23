@extends('layouts.app')

@section('content')
    <!-- Main Content -->
    <section class="section">
        <div class="section-header">
            <h1>Tambah Produk</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Components</a></div>
                <div class="breadcrumb-item">Table</div>
            </div>
        </div>
        <div class="section-body">
            <h2 class="section-title">Master Management</h2>

            <div class="row">
                <div class="col-12">
                    @include('layouts.alert')
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <h4>Produk List</h4>

                        </div>
                        <div class="card-body">
                            {{-- <div class="show-import" style="display: none">
                                <div class="custom-file">
                                    <form action="{{ route('menu-group.import') }}" method="post"
                                        enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        <label class="custom-file-label" for="file-upload">Choose File</label>
                                        <input type="file" id="file-upload" class="custom-file-input" name="import_file">
                                        <br /> <br />
                                        <div class="footer text-right">
                                            <button class="btn btn-primary">Import File</button>
                                        </div>
                                    </form>
                                </div>
                            </div> --}}
                            <div class="show-search mb-3" style="display: none">
                                <form id="search" method="GET" action="{{ route('menu-group.index') }}">
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="role">Group</label>
                                            <input type="text" name="name" class="form-control" id="name"
                                                placeholder="Group Name">
                                        </div>
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-primary mr-1" type="submit">Submit</button>
                                        <a class="btn btn-secondary" href="{{ route('menu-group.index') }}">Reset</a>
                                    </div>
                                </form>
                            </div>
                            <div class="table-responsive">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>Nama Produk <span class="badge badge-primary ml-4">wajib</span></h5>
                                                Nama produk minimal 8 karakter
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>Kategori <span class="badge badge-primary ml-4">wajib</span></h5>
                                                Nama produk minimal 8 karakter
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>Foto Produk <span class="badge badge-primary ml-4">wajib</span></h5>
                                                Format gambar .jpg .jpeg .png dan
                                                ukuran minimal 300 x 300px
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>Harga Produk <span class="badge badge-primary ml-4">wajib</span></h5>

                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>Stok Produk <span class="badge badge-primary ml-4">wajib</span></h5>

                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-body">
                                                <h5>Berat Produk <span class="badge badge-primary ml-4">wajib</span></h5>
                                                Masukkan berat produk setelah
                                                dikemas.Pastikan berat sesuai agar
                                                tidak terjadi selisih ongkir dengan kurir.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <form>
                                            <div class="form-group">
                                                <label class="required">Nama Produk</label>
                                                <input type="text" class="form-control" placeholder="Nama Produk">
                                            </div>
                                            <div class="form-group">
                                                <label class="required">Kategori</label>
                                                <select class="form-control">
                                                    <option>Pilih Kategori</option>
                                                    <!-- Other options -->
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="required">Foto Produk</label>
                                                <div class="image-upload">
                                                    <label for="file-input">
                                                        <img src="upload-icon.png" alt="Upload Icon" />
                                                    </label>
                                                    <input id="file-input" type="file" multiple />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="required">Harga Produk</label>
                                                <input type="text" class="form-control" placeholder="Masukkan Harga">
                                            </div>
                                            <div class="form-group">
                                                <label class="required">Stok Produk</label>
                                                <input type="number" class="form-control"
                                                    placeholder="Masukkan Jumlah Stok">
                                            </div>
                                            <div class="form-group">
                                                <label class="required">Berat Produk</label>
                                                <input type="text" class="form-control" placeholder="Berat Produk">
                                            </div>
                                            <button type="button" class="btn btn-secondary">Batal</button>
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                        </form>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@push('customScript')
    <script>
        $(document).ready(function() {
            $('.import').click(function(event) {
                event.stopPropagation();
                $(".show-import").slideToggle("fast");
                $(".show-search").hide();
            });
            $('.search').click(function(event) {
                event.stopPropagation();
                $(".show-search").slideToggle("fast");
                $(".show-import").hide();
            });
            //ganti label berdasarkan nama file
            $('#file-upload').change(function() {
                var i = $(this).prev('label').clone();
                var file = $('#file-upload')[0].files[0].name;
                $(this).prev('label').text(file);
            });
        });
    </script>
@endpush

@push('customStyle')
@endpush
