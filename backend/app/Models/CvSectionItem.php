<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvSectionItem extends Model
{
    protected $fillable = [
        'section_id', 'title', 'subtitle',
        'date_start', 'date_end', 'description', 'order'
    ];

    public function section(){
        return $this->belongsTo(CvSection::class);
    }
}
