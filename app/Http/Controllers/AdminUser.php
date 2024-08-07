<?php

namespace App\Http\Controllers;

use App\Models\User;

class AdminUser extends Controller
{
    public function index()
    {
        return view('Admin.Users', [
            'users' => User::latest()->get()
        ]);
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/Admin/Customers')->with('message', 'User has been Terminated successfully');
    }
}
