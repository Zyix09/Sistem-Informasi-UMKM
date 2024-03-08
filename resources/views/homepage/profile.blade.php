@extends('layouts.app3')

@section('landingpage')
    <main class="bg-light">
        <div class="col-md-6 mx-auto text-center ">
            <h1 class="font-weight-bold contact-header">Profile User</h1>
        </div>
        <section class="centered-section-1">
            <div class="container">
                <div class="row justify-content-center">
                    <form action="{{ route('homepage.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-lg-12 col-md-10 col-sm-6">

                            <div class="bg-primary-section card py-1 card-profile1 mb-4">
                                @if (session('success'))
                                    <div class="alert alert-scs" role="alert">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="profile-widget-description m-4 text-center">
                                            <h5 class="card-title font-weight-bold d-block mx-2 profile-title-card1">Profile
                                            </h5>
                                            @php
                                                $defaultImagePath = asset('assets/img/avatar/avatar-1.png');
                                                if (!is_null($profile)) {
                                                    $storageImagePath = $profile->foto_user
                                                        ? Storage::url($profile->foto_user)
                                                        : null;
                                                } else {
                                                    $storageImagePath = null;
                                                }

                                                $imagePath = $storageImagePath ?: $defaultImagePath;
                                            @endphp
                                            <div class="col-12 d-flex justify-content-center">
                                                <div class="col-md-5 d-flex justify-content-end">
                                                    <img alt="image" src="{{ $imagePath }}"
                                                        class="profile-widget-picture img-fluid card-profile-img"
                                                        style=" height: auto; border-radius:15px; object-fit: cover;">
                                                    <label for="profile-picture-upload" class="upload-icon">
                                                        <i class="fas fa-plus-circle"></i>
                                                    </label>
                                                    <input type="file" id="profile-picture-upload"
                                                        accept="image/jpeg, image/jpg, image/png" style="display: none;"
                                                        name="foto_user">
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="profile-widget-description ml-4 mr-4 mt-4"
                                            style="display: flex; flex-direction: column;">
                                            <h5 class="card-title font-weight-bold d-block mx-2 profile-title-card2">Ubah
                                                Kata Sandi</h5>

                                            @if ($errors->has('password_current'))
                                                <div class="alert custom-alert alert-dismissible fade show" role="alert">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <span>Password Sekarang Salah</span>
                                                        <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                            aria-label="Close"></button>
                                                    </div>
                                                </div>
                                            @endif


                                            <div class="mb-3" style="margin-left: 30px;">
                                                <label class="small mb-1" for="inputPassword">Password Sekarang</label>
                                                <input class="form-control" id="inputPassword" type="password"
                                                    name="password_current" style="width: 90%;">
                                            </div>

                                            <div class="mb-3" style="margin-left: 30px;">
                                                <label class="small mb-1" for="inputNewPassword">Kata Sandi Baru</label>
                                                <input class="form-control" id="inputNewPassword" type="password"
                                                    name="password_new" style="width: 90%;">
                                                @if ($errors->has('password_new'))
                                                    <span class="text-danger">{{ $errors->first('password_new') }}</span>
                                                @endif
                                            </div>

                                            <div class="mb-3" style="margin-left: 30px;">
                                                <label class="small mb-1" for="inputConfirmPassword">Konfirmasi Kata
                                                    Sandi</label>
                                                <input class="form-control" id="inputConfirmPassword" type="password"
                                                    name="password_confirm" style="width: 90%;">
                                                @if ($errors->has('password_confirm'))
                                                    <span
                                                        class="text-danger">{{ $errors->first('password_confirm') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="bg-primary-section card py-1 mt-4">
                                <div class="card-body">
                                    <h5 class="card-title font-weight-bold d-block mx-2 profile-title-card3">Informasi
                                        Pengguna</h5>



                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <label class="small mb-1 mr-2" for="inputUsername"
                                            style="min-width: 150px;">Username</label>
                                        <input class="form-control" id="inputUsername" type="text" name="username"
                                            value="@if (is_null($profile)) {{ $users->name }}@else{{ $profile->name }} @endif"
                                            pattern="^[A-Za-z\s]+$" maxlength="30" oninput="validateUsername(this)"
                                            style="width: 70%;" required>
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <label class="small mb-1 mr-2" for="inputEmailAddress"
                                            style="min-width: 150px;">Email</label>
                                        <input class="form-control" id="inputEmailAddress" type="email" name="email"
                                            value="@if (is_null($profile)) {{ $users->email }}@else{{ $profile->email }} @endif"
                                                style="width: 70%;"
                                            required>
                                    </div>


                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <label class="small mb-1 mr-2" for="inputAddress"
                                            style="min-width: 150px;">Alamat</label>
                                        <input type="text" class="form-control" id="inputAddress" name="address"
                                            rows="3" style="width: 70%;" maxlength="50"
                                            value="{{ $profile->alamat_user ?? old('address') }}" required
                                            oninvalid="this.setCustomValidity('Harap masukkan alamat terlebih dahulu.')"
                                            oninput="this.setCustomValidity('')">
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <label class="small mb-1 mr-2" for="inputPhoneNumber"
                                            style="min-width: 150px;">Nomor Telepon</label>
                                        <input class="form-control" id="inputPhoneNumber" type="tel"
                                            name="phone_number"
                                            title="Harap masukkan nomor telepon yang valid, 10-13 digit angka."
                                            value="{{ $profile->telepon_user ?? old('phone_number') }}"
                                            pattern="^\d{11,13}$" style="width: 70%;" required
                                            oninvalid="this.setCustomValidity('Harap masukkan nomor telepon yang valid. 11-13 digit angka.')"
                                            oninput="this.setCustomValidity('')">
                                    </div>

                                    <div class="d-flex justify-content-center align-items-center mb-3">
                                        <label class="small mb-1 mr-2" for="inputGender" style="min-width: 150px;">Jenis
                                            Kelamin</label>
                                        <select class="form-control" id="inputGender" name="gender" style="width: 70%;"
                                            required
                                            oninvalid="this.setCustomValidity('Harap pilih jenis kelamin terlebih dahulu.')"
                                            oninput="this.setCustomValidity('')">
                                            <option value="">Pilih Jenis Kelamin...</option>
                                            <option value="Laki-laki"
                                                {{ isset($profile) && $profile->jenis_kelamin === 'Laki-laki' ? 'selected' : '' }}>
                                                Laki-laki
                                            </option>
                                            <option value="Perempuan"
                                                {{ isset($profile) && $profile->jenis_kelamin === 'Perempuan' ? 'selected' : '' }}>
                                                Perempuan
                                            </option>
                                        </select>
                                    </div>

                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-profile ">Simpan</button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <br />
        </section>
    </main>


    <script>
        document.getElementById('profile-picture-upload').addEventListener('change', function(event) {
            var file = event.target.files[0];

            var imageUrl = URL.createObjectURL(file);

            var profileImage = document.querySelector('.profile-widget-picture');

            profileImage.src = imageUrl;
        });
    </script>
    <script>
        var closeButtons = document.querySelectorAll('.btn-close');

        closeButtons.forEach(function(button) {
            button.addEventListener('click', function() {
                var alert = this.closest('.alert');
                alert.style.display = 'none';
            });
        });
    </script>
    <script>
        document.getElementById('inputPhoneNumber').addEventListener('input', function(e) {
            let inputValue = e.target.value;
            let sanitizedValue = inputValue.replace(/\D/g, '');

            sanitizedValue = sanitizedValue.slice(0, 13);

            e.target.value = sanitizedValue;
        });

        function validateUsername(input) {
            const regex = /^[A-Za-z\s]+$/;
            if (!regex.test(input.value)) {
                input.setCustomValidity('Harap masukkan hanya huruf.');
            } else {
                input.setCustomValidity('');
            }
        }

        function validateEmail(input) {
            const regex = /.+@gmail\.com$/;
            if (!regex.test(input.value)) {
                input.setCustomValidity('Harap masukkan alamat email dengan format @gmail.com.');
            } else {
                input.setCustomValidity('');
            }
        }
    </script>
@endsection
