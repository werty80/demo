<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Peoples extends Model
{
    protected $guarded = [];

    protected $fillable =[
        'name',
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
