<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class invoice extends Model
{
    protected $table = 'invoice';
    protected $primaryKey = 'invoiceID';
    public $timestamps = false;

    public function admin() {
        return $this->belongsTo(Admin::class, 'adminID');
    }

    public function customer() {
        return $this->belongsTo(\App\Models\Customer::class, 'customerID');
    }

    public function paymentMethod() {
        return $this->belongsTo(PaymentMethod::class, 'paymentID');
    }
}
