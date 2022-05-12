<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kas extends Model
{
    use HasFactory;

    protected $table = 'kaskantor';
    protected $primarykey = 'id';
    protected $fillable = [
        'tanggal',
        'saldo',
        'pemasukan',
        'pembayaran'
    ];
}