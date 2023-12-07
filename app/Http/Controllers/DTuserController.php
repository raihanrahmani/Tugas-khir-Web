<?php

// namespace App\Http\Controllers;
// use App\Models\DTuser;

// use Illuminate\Http\Request;

// class DTuserController extends Controller
// {
//     public function index(){
//         return "Tabel user di sini";
//     }
//     public function create(){
//         return view('registrasi');
//     }
//     public function store(Request $request)
//     {
//         $validatedData = $request->validate([
//             'nama' => 'required|string',
//             'email' => 'required|email|unique:users,email',
//             'nomor_hp' => 'nullable|string',
//             'negara' => 'nullable|string',
//             'password' => 'required|string|min:6',
//         ]);
    
//         $DTuser = new DTuser();
//         $DTuser->nama = $validatedData['nama'];
//         $DTuser->email = $validatedData['email'];
//         $DTuser->nomor_hp = $validatedData['nomor_hp'];
//         $DTuser->negara = $validatedData['negara'];
//         $DTuser->password = bcrypt($validatedData['password']); // Menggunakan bcrypt untuk mengenkripsi password sebelum disimpan
//         $DTuser->save();
        
//         return "Data berhasil diinput ke database";

//         //dump($validatedData);
    
//         // Lakukan apa yang diperlukan setelah penyimpanan data, misalnya, redirect ke halaman lain
//         //return redirect()->route('home');
//     }
    
// }
