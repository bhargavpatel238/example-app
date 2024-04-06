<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    function custom_login()
    {
        return view('login');
    }

    function login(Request $request)
    {

    $customer = Customer::where(['email'=>$request->email])->first();

    if(!$customer || hash::check($request->password,$customer->password))
    {
        return "Username or Password is not matched";
    }
    else
    {
        $request->session()->put('customer',$customer);
        return redirect('home');  

    }
    }
}
