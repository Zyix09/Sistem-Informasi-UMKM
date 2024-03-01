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
                        <div class="form-group">
                            <label for="user_type">Pilih role sebelum melakukan registrasi!</label><br>
                            <div class="row">
                                <div class="col-md-6">
                                    <div id="user-penjual-card" onclick="selectRole('penjual')"
                                        @if (old('user_type') == 'penjual') class="card role-card active"
                                        @else
                                        class="card role-card" @endif>
                                        <div class="card-body">
                                            <img src="{{ asset('assets/img/avatar/seller.png') }}" alt="Pengajar">
                                            <h4 class="card-title">Penjual</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id="user-pengguna-card" onclick="selectRole('pengguna')"
                                        @if (old('user_type') == 'pengguna') class="card role-card active"
                                        @else
                                        class="card role-card" @endif>
                                        <div class="card-body">
                                            <img src="{{ asset('assets/img/avatar/buyer.png') }}" alt="User">
                                            <h4 class="card-title">Pengguna</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" id="user_type" name="user_type" value="{{ old('user_type') }}">
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
                            <div class="form-group" id="penjual-nik" style="display: none;">
                                <label for="nik" class="d-block">NIK</label>
                                <input id="nik" name="nik" type="text" class="form-control"
                                    placeholder="Masukkan NIK">
                                @error('nik')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group" id="penjual-tanggal" style="display: none;">
                                <label for="tanggal_lahir" class="d-block">tanggal lahir</label>
                                <input id="tanggal_lahir" name="tanggal_lahir" type="text" class="form-control"
                                    placeholder="Masukkan Tanggal Lahir">
                                @error('tanggallahir')
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
        function selectRole(role) {
            const nikInput = document.getElementById("penjual-nik");
            const dateInput = document.getElementById("penjual-tanggal");

            var cards = document.getElementsByClassName('role-card');

            // Remove active state from all cards
            for (var i = 0; i < cards.length; i++) {
                cards[i].classList.remove('active');
            }

            // Handle role selection and styling
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
@endpush
