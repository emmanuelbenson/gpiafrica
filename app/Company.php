<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'name', 'user_id', 'industry_id', 'country_id', 'avatar', 'address', 'city', 'phone', 'email',
        'website', 'date_of_incorporation', 'country_of_incorporation', 'registration_number', 'type'
    ];

    protected $date = ['date_of_incorporation'];

    public function setDateOfIncorporationAttribute($date)
    {
        $this->attributes['date_of_incorporation'] = Carbon::parse($date);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function countryOfIncorporation()
    {
        $country = Country::find($this->country_of_incorporation);
        if($country){

            return $country->name;
        }
        return '';
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }

    public function suppliers()
    {
        return $this->hasMany(Supplier::class);
    }

    public function countriesWhereProductsAreOffered()
    {
        return $this->hasMany(ConsumerCountry::class);
    }

    public function shareholders()
    {
        return $this->hasMany(Shareholder::class);
    }

    public function boardMembers()
    {
        return $this->hasMany(BoardMember::class);
    }

    public function signatories()
    {
        return $this->hasMany(Signatory::class);
    }

    public function legalAdvisors()
    {
        return $this->hasMany(LegalAdvisors::class);
    }

    public function auditors()
    {
        return $this->hasMany(Auditor::class);
    }

    public function reference()
    {
        return $this->hasOne(Reference::class);
    }

    public function affiliates()
    {
        return $this->hasMany(Affiliate::class);
    }

    public function subsidiaries()
    {
        return $this->hasMany(Subsidiary::class);
    }


}
