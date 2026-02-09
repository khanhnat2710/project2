<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class screeningRoom extends Model
{
    protected $table = 'screeningRoom';
    protected $primaryKey = 'roomID';
    public $timestamps = false;

    public function screenType() {
        return $this->belongsTo(ScreenType::class, 'screenTypeID');
    }

    public function seats() {
        return $this->hasMany(Seat::class, 'roomID');
    }

    public function showTimes() {
        return $this->hasMany(ShowTime::class, 'roomID');
    }
}
