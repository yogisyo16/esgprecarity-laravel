<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    public function DataFirst(): HasMany
    {
        return $this->hasMany(DataFirst::class, 'responden_id');
    }
    public function DataSecond(): HasMany
    {
        return $this->hasMany(DataSecond::class, 'responden_id');
    }
}
