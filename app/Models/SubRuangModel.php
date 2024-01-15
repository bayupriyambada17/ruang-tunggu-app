<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubRuangModel extends Model
{
    protected $table = 'sub_ruang';
    protected $guarded = ['id'];
    use HasFactory;

    protected $casts = [
        'fas_ac' => 'integer',
        'fas_komp' => 'integer',
        'fas_lcd' => 'integer',
        'fas_inet' => 'integer',
        'fas_audio' => 'integer',
        'kap' => 'integer',
        'kap_ujian' => 'integer',
        'ukuran_panjang' => 'integer',
        'ukuran_lebar' => 'integer',
        'ukuran_tinggi' => 'integer',
        'ukuran_luas' => 'integer',
    ];

    public function ruang()
    {
        return $this->belongsTo(RuangModel::class, 'ruang_id', 'id');
    }
}
