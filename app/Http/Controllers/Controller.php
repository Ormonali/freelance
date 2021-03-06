<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use App\Orders;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(){

        return view('orders');
    
    }

    public function auth(){

        return view('auth');
    
    }

    public function activate(Request $request){

        $user = User::where('name',$request->get('name'))->first();
       if($user==NULL){
            return redirect()->back();
        }
        if($user->role == 0){
            return redirect()->back();
        }

      
       
    }
}
