<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kehadiran extends Model
{
    protected $table = 'siswa_absensi';
    protected $guarded = ['id'];

    public function siswa(){
        return $this->belongsTo(Siswa::class, 'siswa_id', 'id');
    }
}
