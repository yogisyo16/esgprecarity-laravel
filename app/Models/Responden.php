<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responden extends Model
{
    protected $table = 'responden_data';
    protected $primaryKey = 'id';

    protected $fillable = [
        'email_responden',
        'name_responden',
        'gender_responden',
        'age_responden',
        'affiliation_responden',
        'job_responden',
        'education_responden'
    ];
}
