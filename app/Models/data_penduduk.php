<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_penduduk extends Model
{
    use HasFactory;
    protected $fillable = ['NIK','Nama','Jenis Kelamin','Tanggal Lahir','Provinsi','Kota','Alamat','RT','RW'];
    protected $table = 'data_penduduk';
    public $timestamps = false;
}
