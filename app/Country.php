<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = [
        'name', 'country_code', 'dial_code', 'time_zone', 'region', 'currency_symbol', 'edu_index', 'status'
    ];

    public function companies()
    {
        return $this->hasMany(Company::class);
    }
}
