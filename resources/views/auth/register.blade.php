@extends('layouts.app-auth')
@section('pageAuth')
    <div class="col-md-6 col-sm-6 col-lg-6 full-height-card">
        <div style="background-color:#d2d8e7;">
            <div class="card-body">
                <div class="col mt-1">
                    <img src="{{ asset('assets/img/avatar/logo.png') }}" alt="" srcset="" style="width: 20%">
                </div>
                <div class="col mt-5">
                    <img src="{{ asset('assets/img/avatar/regis.png') }}" alt="" srcset="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 full-height-card">
        <div style="background-color:#fff;">
            <div class="card-body">
                <div class="col mt-5 welcome-text">
                    <h3>Registrasi</h3>
                </div>
                <div class="input-container">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="form-group user-type">
                            <label for="user_type">Pilih role sebelum melakukan registrasi!</label><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="user-penjual-card" data-role="penjual"
                                        @if (old('user_type') == 'penjual') class="card role-card active"
                                        @else
                                        onclick="selectRole('penjual')"
                                        class="card role-card" @endif>
                                        <div class="card-body">
                                            <img src="{{ asset('assets/img/avatar/seller.png') }}" alt="Pengajar">
                                            <h4 class="card-title">Penjual</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="user-pengguna-card" data-role="pengguna"
                                        @if (old('user_type') == 'pengguna') class="card role-card active"
                                        @else
                                        onclick="selectRole('pengguna')"
                                        class="card role-card" @endif>
                                        <div class="card-body">
                                            <img src="{{ asset('assets/img/avatar/buyer.png') }}" alt="User">
                                            <h4 class="card-title">Pengguna</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="user_type" name="user_type" value="{{ old('user_type') }}"
                                data-role="{{ old('user_type') }}">
                            @error('user_type')
                                <div class="invalid-feedback d-block">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="d-flex flex-column">
                            <div class="form-group">
                                <label for="first_name">Full Name</label>
                                <input id="first_name" type="text" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror"
                                    placeholder="Masukkan Nama Lengkap" autofocus>
                                @error('name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input id="email" type="email"
                                    class="form-control @error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" placeholder="Masukkan Alamat Email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password" class="d-block">Password</label>
                                <input id="password" type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Masukkan Password" data-indicator="pwindicator">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="password_confirmation" class="d-block">Password Confirmation</label>
                                <input id="password_confirmation" name="password_confirmation" type="password"
                                    class="form-control" placeholder="Masukkan Konfirmasi Password">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group" id="penjual-tanggal" style="display: none;">
                                <label for="tanggal_lahir" class="d-block">tanggal lahir</label>
                                <input id="tanggal_lahir" name="tanggal_lahir" type="date"
                                    value="{{ old('tanggal_lahir') }}"
                                    class="form-control @error('tanggal_lahir') is-invalid @enderror"
                                    placeholder="Masukkan Tanggal Lahir">
                                <div class="invalid-feedback">
                                    Tanggal lahir tidak sesuai dengan NIK
                                </div>
                                @error('tanggal_lahir')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group" id="penjual-nik" style="display: none;">
                                <label for="nik" class="d-block">NIK</label>
                                <input id="nik" name="nik" type="text" value="{{ old('nik') }}"
                                    class="form-control
                                    @error('nik') is-invalid @enderror"
                                    placeholder="Masukkan NIK">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">
                                    Registrasi
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="mt-5 text-muted text-center">
                        <a href="" class="text-link">Sudah punya akun?</a> <a href="/login"
                            class="text-link-register">MASUK</a>
                    </div>
                    <div class="simple-footer">
                        Copyright &copy; Stisla 2018
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('customStyleAuth')
    <style>
        .role-card {
            border: 1px solid #ddd;
            border-radius: 4px;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .role-card:hover,
        .role-card:focus {
            border-color: #990033;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
        }

        .role-card.active {
            border-color: #990033;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.2);
        }
    </style>
@endpush
@push('customScriptAuth')
    <script>
        var role = '';
        const oldValueUserType = document.getElementById("user_type");

        if (oldValueUserType.value !== '') {
            role = oldValueUserType.value;
        }

        document.getElementById('user_type').addEventListener('change', function() {
            role = this.value;
        });
        selectRole(role);


        function selectRole(role) {
            const nikInput = document.getElementById("penjual-nik");
            const dateInput = document.getElementById("penjual-tanggal");

            var cards = document.getElementsByClassName('role-card');

            for (var i = 0; i < cards.length; i++) {
                cards[i].classList.remove('active');
            }

            if (role === 'penjual') {
                nikInput.style.display = 'block';
                dateInput.style.display = 'block';
                const selectedCard = document.getElementById('user-' + role + '-card');
                selectedCard.classList.add('active');
                document.getElementById('user_type').value = 'penjual';
            } else if (role === 'pengguna') {
                nikInput.style.display = 'none';
                dateInput.style.display = 'none';
                const selectedCard = document.getElementById('user-' + role + '-card');
                selectedCard.classList.add('active');
                document.getElementById('user_type').value = 'pengguna';
            }
        }
    </script>
    <script>
        const nikInput = document.getElementById('nik');
        const tanggalLahirInput = document.getElementById('tanggal_lahir');
        var tanggalLahirBaruElement = '';
        var tanggalLahirBaru = '';

        tanggalLahirInput.addEventListener('change', function() {
            const tanggalLahir = this.value;

            if (tanggalLahir !== '') {
                const parts = tanggalLahir.split('');
                const dd = parts[8] + parts[9];
                const mm = parts[5] + parts[6];
                const yyyy = parts[2] + parts[3];

                tanggalLahirBaru = dd + mm + yyyy;
            } else {}
        });

        nikInput.addEventListener('change', function() {
            const nik = this.value;
            const tanggalLahirDariNik = nik.substring(6, 12);
            console.log('nik_tanggal', tanggalLahirDariNik);
            if (tanggalLahirDariNik !== tanggalLahirBaru) {
                tanggalLahirInput.classList.add('is-invalid');
                tanggalLahirInput.setCustomValidity('Tanggal lahir tidak sesuai dengan NIK');
            } else {
                tanggalLahirInput.classList.remove('is-invalid');
                tanggalLahirInput.setCustomValidity('');
            }
        });
    </script>
@endpush
