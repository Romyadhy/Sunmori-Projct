<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    use HasFactory;

    protected $table = 'anggotas'; // Nama tabel di database

    protected $fillable = [
        'photo',
        'name',
        'email',
        'id_card',
        'gender',
        'birthdate',
        'address',
        'phone',
        'shirt',
        'is_approved', 
    ];
}
