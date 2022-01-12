<?php

namespace App\Http\Controllers;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\Admin as ModelsAdmin;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{
    public function show(){
        return view('auth.register');
    }
    public function store(RegisterRequest $request){
        if ($request->isMethod('post')) {
        $user = ModelsAdmin::all()->where('email',$request->email)->first();
        if(!$user){
            $newUser = new ModelsAdmin();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = bcrypt($request->password);
            $newUser->role = $request->role;
            $newUser->save();
            return redirect()->route('get.login')->with('message',__('messages.account_successfull_created'));
        }else{
            return redirect()->route('get.register')->with('message',__('messages.this_account_already_exists'));
        }

        }
    }
    public function showlogin(){
        return view('auth.login');
    }
    public function login(LoginRequest $request){
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                if(Auth::user()->role==1){
                    return view('admin');
                }
            }
        }
    public function logout(){
        Auth::logout();
        return redirect()->route('get.login');
    }
}
