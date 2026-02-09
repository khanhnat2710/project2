<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class screenType extends Model
{
    protected $table = 'screenType';
    protected $primaryKey = 'screenTypeID';
    public $timestamps = false;

    public function rooms() {
        return $this->hasMany(ScreeningRoom::class, 'screenTypeID');
    }
}
