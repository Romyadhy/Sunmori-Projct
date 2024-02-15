<?php

namespace App\Http\Controllers;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Anggota;

class AnggotaController extends Controller
{
    
    public function Home()
    {
        // Logika untuk menampilkan halaman anggota
        return view('Sunmori.Home');
    }
    
    public function Pendaftaran()
    {
        // Logika untuk menampilkan halaman anggota
        return view('Sunmori.Pendaftaran');
    }

    public function Form()
    {
        // Logika untuk menampilkan halaman anggota
        return view('Sunmori.Form');
    }

    public function adminpage()
    {
        // Logika untuk menampilkan halaman anggota
        // $anggotas = Anggota::where('is_approved', false)->get();
        $anggotas = Anggota::all();
        // dd($anggotas);
        return view('Sunmori.adminpage', compact('anggotas'));
    }

    public function approveMember(Request $request, $id)
    {
        // Cari anggota berdasarkan ID
        $anggota = Anggota::findOrFail($id);
    
        // Setujui anggota dengan mengubah status is_approved menjadi true
        $anggota->update(['is_approved' => true]);
    
        // Redirect kembali ke adminpage
        return redirect()->route('Sunmori.adminpage')->with('success', 'Anggota berhasil disetujui!');
    }
    

    public function rejectMember(Request $request, $id)
    {
        // Cari anggota berdasarkan ID
        $anggota = Anggota::findOrFail($id);

        // Hapus anggota dari database
        $anggota->delete();

        return redirect()->back()->with('success', 'Anggota berhasil ditolak dan dihapus!');
    }

    
    // public function create()
    // {
    //     return view('Sunmori.Pendaftaran');
    // }
    public function store(Request $request): RedirectResponse
    {
        // Validasi data
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'required',
            'email' => 'required|email|unique:anggotas,email',
            'id_card' => 'required',
            'gender' => 'required',
            'birthdate' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'shirt' => 'required|in:S,M,L,XL',
            // 'is_approved' => 'null'
        ]);
    
        // Handle file upload
        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->move(public_path('img'), $imageName);
    
            // Simpan path foto ke dalam database
            $photoPath = 'img/' . $imageName;
        }
    
        // Simpan anggota ke dalam database
        Anggota::create([
            'photo' => $photoPath ?? null, // Jika foto diunggah, gunakan path; jika tidak, gunakan null
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'id_card' => $validatedData['id_card'],
            'gender' => $validatedData['gender'],
            'birthdate' => $validatedData['birthdate'],
            'address' => $validatedData['address'],
            'phone' => $validatedData['phone'],
            'shirt' => $validatedData['shirt'],
            'is_approved' => false,
            
            
        ]);
    
        return redirect()->route('Sunmori.Anggota')->with('success', 'Anggota berhasil ditambahkan!, harap tunggu admin untuk menerima');
    }
    




    public function index()
    {
       // Hanya tampilkan anggota yang telah disetujui oleh admin
        $anggotas = Anggota::where('is_approved', true)->get();
        return view('Sunmori.Anggota', compact('anggotas'));
    }
    
}
