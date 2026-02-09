<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ageRating extends Model
{
    protected $table = 'ageRating';
    protected $primaryKey = 'ageRatingID';
    public $timestamps = false;

    public function movies() {
        return $this->hasMany(Movie::class, 'ageRatingID');
    }
}
