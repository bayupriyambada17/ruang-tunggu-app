<?php

namespace App\Models;

use App\Models\User;
use App\Models\SubRuangModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class LaporanRuangModel extends Model
{
    use HasFactory;

    protected $table = 'laporan_ruang';
    protected $guarded = ['id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subRuang()
    {
        return $this->belongsTo(SubRuangModel::class);
    }
}
