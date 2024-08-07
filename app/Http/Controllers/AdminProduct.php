<?php

namespace  App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class AdminProduct extends Controller
{
    public function index()
    {
        return view('Admin.Products',  [
            'product' => product::latest()->get()
        ],);
    }

    public function destroy($id)
    {
        $product = product::find($id);
        $product->delete();

        return redirect('/Admin/ProductsUpdate')->with('message', 'product deleted');
    }
}
