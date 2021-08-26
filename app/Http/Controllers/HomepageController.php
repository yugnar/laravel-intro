<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    // public function index(){
    //     return 'hello-world';
    // }
        public function index(){

            /* $account = \App\Models\Account::find(1);
            //ddd($account); */

            return view('homepage.index');
        }
}
