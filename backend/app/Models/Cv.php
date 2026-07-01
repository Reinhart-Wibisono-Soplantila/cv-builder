<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = [
        'name', 'email', 'phone',
        'linkedin', 'github', 'summary',
        'country_id', 'state_id', 'city_id'
    ];

    public function sections()
    {
        return $this->hasMany(CvSection::class)->orderBy('order');
    }
}
