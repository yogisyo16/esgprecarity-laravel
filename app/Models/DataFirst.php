<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataFirst extends Model
{
    protected $table = 'data_first';
    protected $primaryKey = 'id';

    protected $fillable = [
        'responden_id',
        'data_que_one',
        'data_que_two',
        'data_que_three',
        'data_que_four',
        'data_que_five',
        'data_que_six',
        'data_que_seven',
        'data_que_eight',
        'data_que_nine',
        'data_que_ten',
        'data_que_eleven',
        'data_que_twelve',
        'data_que_thirteen',
        'data_que_fourteen',
        'data_que_fifteen',
        'data_que_sixteen',
        'data_que_seventeen',
        'data_que_eighteen',
        'data_que_nineteen',
        'data_que_twenty',
        'data_que_twentyone',
    ];

    public function responden(): BelongsTo
    {
        return $this->belongsTo(Responden::class);
    }

}
