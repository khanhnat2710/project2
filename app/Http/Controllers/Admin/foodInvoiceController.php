<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\FoodInvoice;
use App\Models\Admin\Customer;
use App\Models\Admin\Admin;
use App\Models\Admin\payment_method;

class FoodInvoiceController extends Controller
{

    // LIST
    public function index()
    {
        $customers = Customer::all();
        $invoice = FoodInvoice::with(['customer','admin','payment'])->get();

        return view('admins.foodInvoice.index',compact('invoice', 'customers'));
    }

    // FORM CREATE
    public function create()
    {
        $customers = Customer::all();
        $admins = Admin::all();
        $payments = payment_method::all();

        return view('admins.foodInvoice.create',
            compact('customers','admins','payments'));
    }

    // STORE
    public function store(Request $request)
    {
        $request->validate([
            'orderDate'=>'required',
            'total'=>'required|numeric',
            'customerID'=>'required',
            'adminID'=>'required',
            'paymentID'=>'required'
        ]);

        FoodInvoice::create($request->all());

        return redirect()->route('foodInvoice.index')
            ->with('success','Invoice created');
    }

    // EDIT FORM
    public function edit($id)
    {
        $invoice = FoodInvoice::findOrFail($id);

        $customers = Customer::all();
        $admins = Admin::all();
        $payments = payment_method::all();

        return view('admins.foodInvoice.edit',
            compact('invoice','customers','admins','payments'));
    }

    // UPDATE
    public function update(Request $request,$id)
    {
        $invoice = FoodInvoice::findOrFail($id);

        $invoice->update($request->all());

        return redirect()->route('foodInvoice.index')
            ->with('success','Invoice updated');
    }

    // DELETE
    public function destroy($id)
    {
        FoodInvoice::destroy($id);

        return redirect()->route('foodInvoice.index')
            ->with('success','Invoice deleted');
    }
}
