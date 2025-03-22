<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataThird extends Model
{
    protected $table = 'data_third';
    protected $primaryKey = 'id';

    protected $fillable = [
        'responden_id',
        'data_que_number_third',
    ];

    public function responden(): BelongsTo
    {
        return $this->belongsTo(Responden::class);
    }
}
