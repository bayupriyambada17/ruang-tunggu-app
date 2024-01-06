<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TransaksiRuang extends Model
{
    use HasFactory;

    protected $table = 'transaksi_ruang';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subRuang()
    {
        return $this->belongsTo(SubRuangModel::class);
    }
    // public function ruang()
    // {
    //     return $this->belongsTo(RuangModel::class);
    // }
}
