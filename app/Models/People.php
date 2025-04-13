<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class People extends Model
{

    protected $table = 'peoples';

    protected $fillable =[
        'name',
        'house_id',
        'id_number',
        'email',
        'phone',
        'gender',
        'date_of_birth',
        'address',
        'nationality',
        'status'

    ];
    public function house(): BelongsTo
    {
        return $this->belongsTo(House::class);
    }

}
