<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{

    public function store(Request $request)
    {
        $dataArray = $request->input('arrayData');

        $list = [];

        function generateTrackingId($length)
        {
            $characters = '1234567890';
            $Tracking_id = '';
            for ($i = 0; $i < $length; $i++) {
                $Tracking_id .= $characters[rand(0, strlen($characters) - 1)];
            }
            return $Tracking_id;
        }

        $TokenGenerated = generateTrackingId(10);

        foreach ($dataArray as $data) {
            $list[] = [
                'user_id' => $data['userid'],
                'Product_id' => $data['id'],
                'Productname' => $data['productname'],
                'productImg' => $data['productimg'],
                'productprice' => $data['productprice'],
                'quantity' =>  $data['quantity'],
                'total' => $data['total'],
                'Address_id' => $data['AddressId'],
                'payment_status' => 'paid',
                'Delivery_status' => 'pending...',
                'Tracking_id' => $TokenGenerated
            ];
        }

        // Assuming Order is your model and you want to insert multiple records
        Order::insert($list);

        return response()->json(['message' => 'Data inserted successfully', 'data' => $list]);
    }

    public function index()
    {

        return view('Admin.Orders', [
            'orders' => Order::latest()->get()
        ]);
    }

    public function Usersorders()
    {
        $user = Auth::user();
        // Get the orders for the authenticated user
        $orders = Order::where('user_id', $user->id)->latest()->get();
        $groupedOrder = $orders->groupBy('Tracking_id')->map(function ($orders, $Tracking_id) {

            $details = $orders->first();

            return [
                'Tracking_id' => $Tracking_id,
                'address' => $details->Address_id,
                'pay' => $details->payment_status,
                'deliver' => $details->Delivery_status,
                'date' => $details->created_at,
                'orders' => $orders,
            ];
        });
        $userHasOrders = $orders->isNotEmpty();

        return view('order', [
            'groupedOrders' => $groupedOrder,
            'userHasOrders' => $userHasOrders
        ]);
    }
}
