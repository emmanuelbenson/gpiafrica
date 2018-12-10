<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    protected $fillable = [
        'title', 'description', 'status'
    ];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
