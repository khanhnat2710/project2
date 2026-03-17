<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\foodInvoice;
use App\Models\Admin\foodInvoiceDetail;
use App\Models\Admin\Food;

class foodInvoiceDetailController extends Controller
{
    public function index($id)
    {
        $invoice = foodInvoice::with('customer')->findOrFail($id);
        $foods = Food::all();

        return view('admin.foodInvoice.detail', compact('invoice','foods'));
    }

    public function store(Request $request, $id)
    {
        $invoice = foodInvoice::findOrFail($id);

        $total = 0;

        foreach($request->foods as $foodID => $qty)
        {
            if($qty > 0)
            {
                $food = Food::find($foodID);

                foodInvoiceDetail::create([
                    'foodInvoiceID' => $id,
                    'foodID' => $foodID,
                    'quantity' => $qty
                ]);

                $total += $food->price * $qty;
            }
        }

        $invoice->update(['total'=>$total]);

        return redirect()
            ->route('foodInvoice.index')
            ->with('invoice', foodInvoice::with('customer')->find($id));
    }
}
