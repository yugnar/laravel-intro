<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    // public function index(){
    //     return 'hello-world';
    // }
        public function index(){

            /* $account = \App\Models\Account::find(1);
            //ddd($account); */
            $account = Account::all();

            return view('homepage.index', ['accounts' => $account]);
        }
}
