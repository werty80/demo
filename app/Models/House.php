<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class House extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'village_id',
        'name',
        'house_number',

    ];

    // Relation: House belongs to a village
    public function village(): belongsTo
    {
        return $this->belongsTo(Village::class);
    }
}
