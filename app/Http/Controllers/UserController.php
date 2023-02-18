<?php

namespace App\Http\Controllers;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create(){
        return view('users.register');
    }

    public function store(Request $request){

        $formValid = $request->validate([

            'name'=>['required','min:3'],
            'email'=>['required',Rule::unique('users','email')],
            'password'=>'required|confirmed|min:6'
        ]);

         $formValid['password'] = bcrypt($formValid['password']);

         $user = User::create($formValid);

         auth()->login($user);
         return redirect('/')->with('message','User created');

    }

    public function logout(Request $request){

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('message','You are logout');
    }

    public function login(){
        return view('users.login');
    }

    public function authenticate(Request $request){
        $loginValid = $request->validate([
            'email'=>'required','email',
            'password'=>'required'
        ]);

        if(auth()->attempt($loginValid)){
            $request->session()->regenerate();
            return redirect('/')->with('message','You now logged in');
        }
        return back()->withErrors(['email'=>'Invalid Credentials'])->onlyInput('email');
    }
}
