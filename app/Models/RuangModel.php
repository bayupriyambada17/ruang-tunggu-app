<?php

namespace App\Models;

use App\Models\SubRuangModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RuangModel extends Model
{
    use HasFactory;

    protected $table = 'ruang';
    protected $guarded = ['id'];

    public function subsRuang()
    {
        return $this->hasMany(SubRuangModel::class, 'ruang_id', 'id');
    }
}
