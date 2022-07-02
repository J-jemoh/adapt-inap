<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Participants extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable =[

        'study_id',
        'participant_name',
        'UPN',
        'age',
        'gender',
        'study_site',
        'participant_nickname',
        'caregiver_name',
        'caregiver_contact_phone',
        'caregiver_alt_phone',
        'relationship_with_participant',
        'location',
        'location_description',
        'barrier_category',
        'barriers',

    ];
}
