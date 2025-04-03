<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Island extends Model
{
    use Hasfactory;

    protected $guarded = [];

    public function villages()
    {
        return $this->hasMany(Village::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'name',
        'code',
        'country',
        'island_id',
    ];
}
