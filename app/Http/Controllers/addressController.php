<?php

namespace App\Http\Controllers;

use App\Models\address;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


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

        $id = auth()->id();
        $check = DB::table('addresses')->where('userid', $id)->exists();

        if ($check) {

            return redirect('/address')->with('message', 'you have an address');
        } else {
            $deliveryAddressFelid['userid'] = auth()->id();

            address::create($deliveryAddressFelid);

            return redirect('/')->with('message', 'Delivery address Updated');
        }
    }

    public function pay()
    {
        return view('pay');
    }

    public function ShowAddress()
    {
        return view('today.profile', ['address' => auth()->user()->addresses()->get()]);
    }


    public function listAddresses()
    {
        return view('Admin.Staff', [
            'Addresses' => address::latest()->get()
        ]);
    }
}
