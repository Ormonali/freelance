<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\User;
use Illuminate\Http\Request;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function index(){

        return view('index');
    
    }

    public function auth(){

        return view('auth');
    
    }

    public function verify(Request $request){

        $user = User::where('name',$request->get('name'))->first();
       if($user==NULL){
            return redirect()->back();
        }
      
       
    }
}
