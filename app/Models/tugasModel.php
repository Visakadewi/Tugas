<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugasModel extends Model
{
    use HasFactory;
    protected $table = 'tb_tugas';
    protected $fillable = [
        'id',
        'nama',
        'nip',
        'alamat',
        'created_at',
        'updated_at'
    ];
}
