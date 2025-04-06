<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'village_id',
        'name',

    ];

    // Relation: House belongs to a village
    public function village()
    {
        return $this->belongsTo(Village::class);
    }
}
