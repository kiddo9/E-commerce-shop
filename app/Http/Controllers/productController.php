<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class productController extends Controller
{
    public function index()
    {
        $address_status = null;

        if (auth::check()) {
            $address_status = auth()->user()->addresses()->get();
        }

        return view('today.index', [
            'product' => product::latest()->get(),
            'address' => $address_status
        ],);
    }

    public function show($id)
    {
        return view('today.show', [
            'product' => product::find($id)
        ]);
    }

    public function create()
    {

        return view('today.admin');
    }

    public function store(Request $request)
    {
        $formField = $request->validate([
            'brand' => 'required',
            'fame' => 'required',
            'description' => 'required',
            'Pname' => 'required',
            'price' => 'required',
            'category' => 'required',
            'type' => 'required'

        ]);
        if ($request->hasFile('Pimg')) {
            $formField['Pimg'] = $request->file('Pimg')->store('image', 'public');
        }

        product::create($formField);

        return redirect('/Admin/ProductsUpdate')->with('message', 'Product uploaded successfully');
    }


    public function search(Request $request)
    {
        $search = $request->input('search');
        $product = Product::where('Pname', 'like', "%$search%")
            ->orWhere('description', 'like', "%$search%")
            ->get();
        $message = null;

        if ($product->isEmpty()) {
            // No products found, so set a message to display
            $message = "'$search' Was not found";
        }

        return view('shop', compact('product', 'message'));
    }
}
