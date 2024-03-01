<?php


namespace App\Actions\Fortify;

use App\Models\ProfileUmkm;
use App\Models\ProfileUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Spatie\Permission\Models\Role;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        $customMessages = [
            'user_type.required' => 'Wajib pilih tipe pengguna wajib diisi.',
            'name.required' => 'Nama lengkap wajib diisi.',
            'name.string' => 'Nama lengkap harus berupa huruf dan karakter lain yang diizinkan.',
            'name.max' => 'Nama lengkap maksimal 255 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Email harus berupa format email yang valid.',
            'email.max' => 'Email maksimal 255 karakter.',
            'email.unique' => 'Email ini sudah terdaftar.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal 8 karakter.',
            'password.confirmed' => 'Konfirmasi password tidak sesuai dengan password.',
            'nik.required' => 'NIK wajib diisi.',
            'tanggal_lahir.required' => 'Tanggal Lahir wajib diisi.',

        ];

        Validator::make($input, [
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'user_type' => [
                'required'
            ],
            'nik' => [
                'required'
            ],
            'tanggal_lahir' => [
                'required'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ], $customMessages)->validate();

        $user = User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'email_verified_at' => now(),
        ]);

        $roleName = ($input['user_type'] === 'penjual') ? 'Penjual' : 'Pengguna';
        $role = Role::where('name', $roleName)->first();
        $user->assignRole($role);

        if ($roleName == 'Penjual') {
            ProfileUser::create([
                'id_user' => $user->id,
            ]);
            ProfileUmkm::create([
                'id_user' => $user->id,
                'nik' => $input['nik'],
            ]);
        } elseif ($roleName == 'Pengguna') {
            ProfileUser::create([
                'id_user' => $user->id,
            ]);
        } else {
            //
        }
        return $user;
    }
}
