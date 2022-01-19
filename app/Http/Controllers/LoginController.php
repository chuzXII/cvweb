<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LoginModel;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function indexlog(){
        if(session('log')){
            return abort(404);
        }
        else{
            return view('welcome.login');
        }
        
    }
    public function indexregis(){
        if(session('log')){
            return abort(404);
        }else{
            return view('welcome.register');
        }
        
    }
    public function register(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' =>'required|confirmed|min:8'

        ]);
        


        $data = LoginModel::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'create_at' => now(),
            'updated_at' => now()
        ]);

        return redirect('/login');
    }
    public function login(Request $request){
            $request->validate([
                'email' => 'required|email',
                'password' =>'required|min:8'
            ]);
    
            $email = $request->email;
            $password = $request->password;
            
            $a = LoginModel::where('email',$email)->first();
            $b = LoginModel::where('email',$email)->pluck('password')->first();
            if($a){
                if (Hash::check($password, $b))
                {
                    session()->put([
                        'username' => $a->name,
                        'imgname' => $a->img,
                        'log' => true
                    ]);
                    return redirect('/dashboard');
                }
                else{
                    return redirect('/login')->with('gagal','password salah');
                } 
            }
            else{
                return redirect('/login')->with('gagal','email tidak ada');
            }
        }
    public function logout(){
        session()->flush();
        return redirect('/login');
    }
}
