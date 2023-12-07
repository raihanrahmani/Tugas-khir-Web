<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $attributes = [];
    protected $fillable = [
        'nama', 'email', 'nomor_hp', 'kota', 'country', 'depart', 'tipe_ruangan', 'jangka_waktu', 'keterangan'
    ];

    

}
class booking2 extends Model{
    use HasFactory;
    protected $table = 'booking'; // Nama tabel yang diwakili oleh model ini

    protected $fillable = [ // Kolom-kolom yang dapat diisi massal
        'nama',
        'tipe_ruangan',
        'jangka_waktu',
        // Kolom lain yang ada dalam tabel 'booking'
    ];
}

