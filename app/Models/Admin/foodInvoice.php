<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class foodInvoice extends Model
{
    protected $table = 'foodInvoice';
    protected $primaryKey = 'foodInvoiceID';
    public $timestamps = false;

    public function admin() {
        return $this->belongsTo(Admin::class, 'adminID');
    }

    public function customer() {
        return $this->belongsTo(\App\Models\Customer::class, 'customerID');
    }

    public function foods() {
        return $this->belongsToMany(
            Food::class,
            'foodInvoiceDetail',
            'foodInvoiceID',
            'foodID'
        )->withPivot('quantity');
    }
}
