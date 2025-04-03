<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\factories\Hasfactory;

class Job extends Model {
    use Hasfactory;
    protected $table = 'job_listings';
    protected $guarded = [];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
