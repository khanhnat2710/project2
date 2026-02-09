<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $table = 'admin';
    protected $primaryKey = 'adminID';
    public $timestamps = false;

    protected $fillable = [
        'fullName',
        'email',
        'password',
        'role'
    ];

    public function invoices() {
        return $this->hasMany(Invoice::class, 'adminID');
    }

    public function foodInvoices()
    {
        return $this->hasMany(FoodInvoice::class, 'adminID');
    }
}
