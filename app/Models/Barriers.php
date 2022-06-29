<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Barriers extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[

        'category_id',
        'barrier_name',
    ];

    public function barriercategory(){

        return $this->belongsTo(BarrierCategories::class,'category_id','id');
    }
}
