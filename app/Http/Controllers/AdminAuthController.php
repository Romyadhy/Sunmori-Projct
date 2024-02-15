<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin; // Pastikan menggunakan model User yang benar
use App\Models\Anggota;

class AdminAuthController extends Controller
{

public function adminPage()
{
    $anggotas = Anggota::where('status_approval', 0)->get();
    return view('adminpage', ['anggotas' => $anggotas]);
}

public function approveAnggota($id)
{
    $anggota = Anggota::find($id);

    if ($anggota) {
        // Setujui anggota dengan mengubah status_approval menjadi 1
        $anggota->status_approval = 1;
        $anggota->save();

        return redirect()->route('adminpage')->with('message', 'Anggota disetujui.');
    } else {
        return redirect()->route('adminpage')->with('error', 'Anggota tidak ditemukan.');
    }
}

    public function login(Request $request)
    {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        $user = auth()->user();

        // Cek apakah user memiliki role admin
        if ($user->is_admin) {
            // Cek apakah admin memiliki kode unik
            if ($user->unique_code) {
                // Tambahkan logika kode unik di sini sesuai kebutuhan
                // Contoh: Validasi kode unik
                $enteredCode = $request->input('unique_code');
                $adminCode = $user->unique_code;

                if ($enteredCode == $adminCode) {
                    return redirect()->intended('/admin/dashboard');
                } else {
                    return redirect()->route('admin.login')->withErrors(['message' => 'Kode unik tidak valid.']);
                }
            } else {
                // Jika admin tidak memiliki kode unik, langsung redirect ke dashboard
                return redirect()->intended('/admin/dashboard');
            }
        } else {
            // Redirect jika user bukan admin
            return redirect()->route('admin.login')->withErrors(['message' => 'Anda bukan admin.']);
        }
    }

    return redirect()->route('admin.login')->withErrors(['message' => 'Kombinasi email dan password tidak valid.']);
}

    

    public function showLoginForm()
    {
        return view('admin.login');
    }

    public function showRegistrationForm()
    {
        return view('admin.register');
    }

    public function register(Request $request)
{
    // Validasi input form registrasi
    $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:admins',
        'password' => 'required|string|confirmed',
        'unique_code' => 'required|unique:admins',
    ]);

    // Buat instance model Admin
    $admin = new Admin();
    $admin->name = $request->input('name');
    $admin->email = $request->input('email');
    $admin->password = bcrypt($request->input('password'));
    $admin->is_admin = true;
    $admin->unique_code = $request->input('unique_code');
    $admin->save();

    // Redirect ke halaman login setelah registrasi berhasil
    return redirect()->route('Sunmori.Home')->with('success', 'Registrasi admin berhasil. Silakan login.');
}

}
