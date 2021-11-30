<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function show(){
        return view('auth.register');
    }
    public function store(Request $request){
        if ($request->isMethod('post')) {
            $validator = Validator::make($request->all(),[
                'name' => 'required|min:6|max:30|alpha',
                'email' => 'required|email',
                'password' => 'required|min:6|max:16',
            ]);
        if ($validator->fails()){
            return redirect()->back()
                    ->withErrors($validator)
                    ->withInput();
        }
        $user = DB::table('users')->where('email',$request->email)->first();
        if(!$user){
            $newUser = new User();
            $newUser->name = $request->name;
            $newUser->email = $request->email;
            $newUser->password = $request->password;
            $newUser->role = $request->role;
            $newUser->save();
            return redirect()->route('auth.show')->with('message','Bạn đã tạo tài khoản thành công, mời bạn đăng nhập');
        }else{
            return redirect()->route('auth.showLogin')->with('message','Tài khoản này đã tồn tại, mời bạn đăng nhập');
        }

        }
    }
    public function showLogin(){
        return view('auth.login');
    }
    public function login(Request $request){
        $validator = Validator::make($request->all(),[
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if($validator->fails()){
            return redirect()->back()
                        ->withErrors($validator)
                        ->withInput();
        }
            if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                if(Auth::user()->role==1){
                    return view('admin');
                }
            }
    }
    public function logout(){
        Auth::logout();
        return view('auth.login');
    }
}
