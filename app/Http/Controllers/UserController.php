<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use function Laravel\Prompts\confirm;

class UserController extends Controller
{
    public function create()
    {
        return view('today/signup');
    }

    public function store(Request $request)
    {
        $signupFeild = $request->validate([
            'Last_name' => 'required',
            'First_name' => 'required',
            'email' => ['email', 'required', Rule::unique('users', 'email',)],
            'mobile' => 'required',
            'password' => 'required|confirmed|min:10',
        ]);

        $signupFeild['password'] = bcrypt($signupFeild['password']);

        $user = User::create($signupFeild);

        auth()->login($user);

        return redirect('/')->with('message', 'New User Created');
    }
    public function logout(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'you Have Been Logged out');
    }

    public function login()
    {
        return view('today.login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (auth()->attempt($credentials)) {
            $request->session()->regenerate();

            $id = auth()->user()->id;
            $check = DB::table('addresses')->where('userid', $id)->exists();

            if ($check) {
                return redirect('/')->with('message', 'You are logged in.');
            } else {
                return redirect('/address');
            }

            //return redirect('/')->with('message', 'You are logged in.');
        }

        return back()->withErrors(['email' => 'Invalid credentials'])->withInput($request->only('email'));
    }
}
