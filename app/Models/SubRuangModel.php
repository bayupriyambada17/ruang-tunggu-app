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
    ];

    public function ruang()
    {
        return $this->belongsTo(RuangModel::class, 'ruang_id', 'id');
    }
}
