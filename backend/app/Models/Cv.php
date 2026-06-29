<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cv extends Model
{
    protected $fillable = [
        'name', 'email', 'phone',
        'address', 'linkedin', 'github', 'summary'
    ];

    public function sections()
    {
        return $this->hasMany(CvSection::class)->orderBy('order');
    }
}
