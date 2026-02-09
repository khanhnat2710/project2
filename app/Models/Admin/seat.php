<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class seat extends Model
{
    protected $table = 'seat';
    protected $primaryKey = 'seatID';
    public $timestamps = false;

    public function room() {
        return $this->belongsTo(ScreeningRoom::class, 'roomID');
    }

    public function seatType() {
        return $this->belongsTo(SeatType::class, 'seatTypeID');
    }

    public function tickets() {
        return $this->hasMany(Ticket::class, 'seatID');
    }
}
