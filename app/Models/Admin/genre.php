<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class genre extends Model
{
    protected $table = 'genre';
    protected $primaryKey = 'genreID';
    public $timestamps = false;

    public function movies() {
        return $this->belongsToMany(
            Movie::class,
            'genreDetail',
            'genreID',
            'movieID'
        );
    }
}
