<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customerl;
use Hash;
use Session;


class CustomerController extends Controller
{
    public function login()
    {
        return view('0905a.login');
    }
    public function loginProsses(Request $request){
        $cus = Customer::where('customerID', '=',$request->username)->first();
        if($cus){
            if(Has::check($request->password,$cus->customerPass)){
                $request->session()->put('loginID',$cus->customerID);
                return redirect('prouducts');
            }
        } else {
            return back()->with('fail', 'Password does not match!!!');
        }
        else {
            return back()->with('fail', 'Password does not match!!!');
        }
    }
}