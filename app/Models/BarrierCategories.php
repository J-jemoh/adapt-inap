<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;
class BarrierCategories extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[
        'category_name'
    ];
    public function barriers(){

        return $this->belongsTo(Barriers::class,'id');
    }
}
