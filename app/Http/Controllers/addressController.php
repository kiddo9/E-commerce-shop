<?php

namespace App\Http\Controllers;

use App\Models\address;
use Illuminate\Http\Request;

class addressController extends Controller
{
    public function create()
    {
        return view('address');
    }

    public function store(Request $request)
    {
        $deliveryAddressFelid = $request->validate([
            'country' => 'required',
            'state' => 'required',
            'LGA' => 'required',
            'pLOCATION' => 'required'
        ]);

        address::create($deliveryAddressFelid);

        return redirect('/pay')->with('message', 'Delivery address Updated');
    }

    public function pay()
    {
        return view('pay');
    }
}
