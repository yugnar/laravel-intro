<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomepageController extends Controller
{
    // public function index(){
    //     return 'hello-world';
    // }
        public function index(){

            /* $account = \App\Models\Account::find(1);
            //ddd($account); */
            if(Auth::check()){
                $id = auth()->user()->id;
                $account = Account::all()->where('user_id', $id);

                return view('homepage.index', ['accounts' => $account]);
            }
            else{
                return view('homepage.index');
            }
        }
}
