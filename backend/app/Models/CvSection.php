<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CvSection extends Model
{
    protected $fillable = [
        'cv_id', 'title', 'order'
    ];

    public function cv(){
        return $this->belongsTo(Cv::class);
    }

    public function items(){
        return $this->hasMany(CvSectionItem::class)->orderBy('order');
    }
}
