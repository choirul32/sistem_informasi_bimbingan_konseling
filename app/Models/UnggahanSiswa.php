<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnggahanSiswa extends Model
{
    protected $table = 'unggahan_siswa';
    protected $guarded = ['id'];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
}
