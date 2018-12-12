<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConsumerCountry extends Model
{
    protected $fillable = [ 'company_id', 'country_id', 'product_id'];

    public function countries()
    {
        return $this->hasMany('App\Country', 'id', 'country_id');
    }
}
