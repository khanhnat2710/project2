<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class ticket extends Model
{
    protected $table = 'ticket';
    protected $primaryKey = 'ticketID';
    public $timestamps = false;

    public function showTime() {
        return $this->belongsTo(ShowTime::class, 'showTimeID');
    }

    public function seat() {
        return $this->belongsTo(Seat::class, 'seatID');
    }
}
