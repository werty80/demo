<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Village extends Model
{
    protected $guarded = [];

    use Hasfactory;

    protected $fillable = [
        'name',
        'code',
        'island_id',
    ];
    public function house()
    {
        return $this->hasMany(House::class);
    }

}
