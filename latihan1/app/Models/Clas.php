<?php

namespace App\Models;
use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Model;

class Clas extends Model
{
    protected $table = 'clas';

    protected $fillable = [
        'nama_kelas'
    ];
    public function mahasiswa()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}
