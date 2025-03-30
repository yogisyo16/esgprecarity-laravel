<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataSecond extends Model
{
    protected $table = 'data_second';
    protected $primaryKey = 'id';

    protected $fillable = [
        'responden_id',
        'answer_yes',
        'answer_no',
        'nominal_answer',
    ];

    public function responden(): BelongsTo
    {
        return $this->belongsTo(Responden::class);
    }
}
