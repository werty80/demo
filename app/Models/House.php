<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{
    use HasFactory;

    protected $fillable = [
        'village_id',
        'name',
        'house_number',

    ];

    public function village(): belongsTo
    {
        return $this->belongsTo(Village::class);
    }
    public function peoples()
    {
        return $this->hasMany(People::class);
    }

}
