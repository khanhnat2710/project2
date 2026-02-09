<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;

class payment_method extends Model
{
    protected $table = 'payment_method';
    protected $primaryKey = 'paymentID';
    public $timestamps = false;

    public function invoices() {
        return $this->hasMany(Invoice::class, 'paymentID');
    }
}
