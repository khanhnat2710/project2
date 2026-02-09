<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class showTime extends Model
{
    protected $table = 'showTime';
    protected $primaryKey = 'showTimeID';
    public $timestamps = false;

    public function movie() {
        return $this->belongsTo(Movie::class, 'movieID');
    }

    public function room() {
        return $this->belongsTo(ScreeningRoom::class, 'roomID');
    }

    public function tickets() {
        return $this->hasMany(Ticket::class, 'showTimeID');
    }
}
