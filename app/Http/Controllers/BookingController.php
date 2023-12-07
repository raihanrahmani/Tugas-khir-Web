<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking; // Pastikan model Booking telah didefinisikan
use App\Models\booking2;

class BookingController extends Controller
{
    // Method untuk menyimpan data booking baru
    public function create2(){
        return view('reservasi');
    }
    
    public function store2(Request $request)
    {
       
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email',
            'nomor_hp' => 'required|string',
            'kota' => 'required|string'            // Tambahkan validasi untuk kolom-kolom lain di sini sesuai kebutuhan
        ]);
        dump($validatedData);

        // Simpan data booking baru ke dalam basis data
        // Booking::create($validatedData);
        $data = Booking::create([
            'nama' => $request -> nama,
            'email' => $request -> email,
            'nomor_hp' => $request -> nomor_hp ?? "0",
            'kota' => $request -> kota,
            'country' => $request -> country,
            'depart' => $request -> depart,
            'tipe_ruangan'=> $request -> tipe_ruangan,
            'jangka_waktu'=> $request -> jangka_waktu,
            'keterangan' => $request-> keterangan,  
        ]);
        
        // Redirect atau tindakan lainnya setelah berhasil menyimpan
        //return redirect('/booking')->with('success', 'Booking berhasil disimpan!');
    }
    public function showBookingData()
    {
        $data = booking2::select('nama','tipe_ruangan', 'jangka_waktu')->get();
        //dd($data); // Tambahkan ini untuk debugging
        return view('reservasi', compact('data2'));
    }
}
