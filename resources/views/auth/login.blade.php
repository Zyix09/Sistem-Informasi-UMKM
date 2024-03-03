@extends('layouts.app-auth')
@section('pageAuth')
    <div class="col-md-6 col-sm-6 col-lg-6 full-height-card">
        <div style="background-color:#597dd8;">
            <div class="card-body">
                <div class="col mt-1">
                    {{-- <h5>GuruLink</h5> --}}
                    <img src="{{ asset('assets/img/avatar/logo.png') }}" alt="" srcset="" style="width: 20%">
                </div>
                <div class="col mt-5">
                    <img src="{{ asset('assets/img/avatar/login.png') }}" alt="" srcset="" style="width: 100%">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-sm-6 col-lg-6 full-height-card">
        <div style="background-color:#fff;">
            <div class="card-body">
                <div class="col mt-5 welcome-text">
                    <h3>Selamat datang di <img src="{{ asset('assets/img/avatar/GuruLink.png') }}" alt=""
                            srcset="" style="width: 25%"></h3>
                </div>
                <div class="col mt-4 welcome-text">
                    <p>Temukan mentor terbaikmu disini</p>
                </div>

                <div class="input-container">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST" class="needs-validation" novalidate="">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                class="form-control @error('email') is-invalid @enderror"
                                placeholder="Masukkan Alamat Email">
                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="password" class="control-label">Password</label>
                            <div style="position: relative;">
                                <input id="password-field" type="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror"
                                    placeholder="Masukkan Password" style="padding-right: 40px;">
                                <a href="#" id="toggle-password-visibility"
                                    style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
                                    <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                </a>
                            </div>
                            @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <div class="mt-2 text-right">
                                <a href="/forgot-password" class="text-small">Lupa Password?</a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4"
                                style="width: 627px">
                                Masuk
                            </button>
                        </div>
                    </form>
                    <div class="mt-5 text-muted text-center">
                        <a href="" class="text-link">Belum punya akun?</a> <a href="/register"
                            class="text-link-register">REGISTRASI</a>
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
@endpush
@push('customScriptAuth')
    <script>
        document.getElementById('toggle-password-visibility').addEventListener('click', function(e) {
            e.preventDefault();
            var passwordField = document.getElementById('password-field');
            if (passwordField.type === 'password') {
                passwordField.type = 'text';
            } else {
                passwordField.type = 'password';
            }
        });
    </script>
@endpush
