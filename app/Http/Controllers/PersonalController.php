<?php

namespace App\Http\Controllers;

use App\Models\Personal;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    public function index(){
        return "Tabel user di sini";
    }
    public function create(){
        return view('registrasi');
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'nomor_hp' => 'required|string',
            'negara' => 'required|string',
            'password' => 'required|string|min:6',
        ]);
        dump($validatedData);
        // Personal::insert();
        $data = Personal::create([
            'nama' => $request -> nama,
            'email' => $request -> email,
            'nomor_hp' => $request -> nomor_hp,
            'negara' => $request -> negara,
            'password' => $request-> password,
        ]);

        
    }
}
