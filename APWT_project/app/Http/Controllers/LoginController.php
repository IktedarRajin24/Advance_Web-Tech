<?php

namespace App\Http\Controllers;

use App\Models\login;
use App\Models\deliveryman;
use App\Http\Requests\StoreloginRequest;
use App\Http\Requests\UpdateloginRequest;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public Function login(){
        return view('User.login');
    }

    public Function loginSubmitted(Request $request){
        $validate = $request->validate([
            'email'=>'required|max:50',
            'password'=> 'required'
        ],
        [
            'email.max'=>'E-mail can not be greater than 50 charcters',
            'password.required'=> 'Please put a password'
        ]);
        $deliveryman = deliveryman::where('email',$request->email)
                            ->where('password',$request->password)
                            ->first();
        if($deliveryman){
            $request->session()->put('deliveryman',$deliveryman->name);
            //return view('pages.customer.customerDashboard')->with('deliveryman', $deliveryman);

            return "done";
        }
        return back();
    }
}
