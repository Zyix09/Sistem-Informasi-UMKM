<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfilesRequest;
use App\Models\ProfileUser;
use App\Models\User;
use Auth;
use DB;
use Hash;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Storage;

class HomeController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:homepage.index')->only('index');
        $this->middleware('permission:homepage.update')->only('update');
        $this->middleware('permission:homepage.detail')->only('detail');
        $this->middleware('permission:homepage.profile')->only('profile');

    }



    public function index(Request $request)
    {
        return view('homepage.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail()
    {

        $permissions = Permission::all();
        return view('menu.menu-group.create', compact('permissions'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function serach(Request $request)
    {
        return view('homepage.index');
    }

    public function profile()
    {
        $user = Auth::id();
        $users = DB::table('users')->select('id', 'name', 'email')->where('id', $user)->first();
        $profile = DB::table('profile_user')->join('users', 'profile_user.id_user', 'users.id')
            ->select(
                'profile_user.id_user',
                'profile_user.foto_user',
                'profile_user.telepon_user',
                'profile_user.jenis_kelamin',
                'profile_user.alamat_user',
                'users.name',
                'users.email'
            )->where('profile_user.id_user', $user)
            ->first();
        return view('homepage.profile', ['users' => $users, 'profile' => $profile]);
    }

    public function update(UpdateProfilesRequest $request)
    {

        $user = Auth::user();


        if ($request->filled('password_current')) {
            if (!\Hash::check($request->input('password_current'), $user->password)) {
                return redirect()->back()->withErrors(['password_current' => 'Password saat ini salah.'])->withInput();
            }

            $request->validate([
                'password_new' => 'required|min:8',
                'password_confirm' => 'required|same:password_new',
            ], [
                'password_new.required' => 'Kata sandi baru diperlukan.',
                'password_new.min' => 'Kata sandi baru harus memiliki minimal 8 karakter.',
                'password_confirm.required' => 'Konfirmasi kata sandi baru diperlukan.',
                'password_confirm.same' => 'Konfirmasi kata sandi tidak sesuai dengan kata sandi baru.',
            ]);

            $user->password = Hash::make($request->input('password_new'));
        }


        $profile = ProfileUser::updateOrCreate(
            ['id_user' => $user->id],
            [
                'alamat_user' => $request->filled('address') ? $request->input('address') : null,
                'telepon_user' => $request->filled('phone_number') ? $request->input('phone_number') : null,
                'jenis_kelamin' => $request->filled('gender') ? $request->input('gender') : null,
            ]
        );

        $profiless = User::updateOrCreate(
            ['id' => $user->id],
            [
                'name' => $request->input('username'),
                'email' => $request->input('email'),
            ]
        );


        if ($request->hasFile('foto_user')) {

            if ($profile->foto_user) {
                Storage::disk('public')->delete($profile->foto_user);
            }


            $filename = time() . '.' . $request->file('foto_user')->getClientOriginalExtension();
            $imagePath = $request->file('foto_user')->storeAs('foto_user', $filename, 'public');


            $profile->foto_user = $imagePath;
        }

        $profile->save();
        $profiless->save();

        return redirect()->back()->with('success', 'Profil berhasil diperbarui.');
    }
}
