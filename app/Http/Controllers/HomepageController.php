<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageController extends Controller
{
    // public function index(){
    //     return 'hello-world';
    // }
        public function index(){
            return view('welcome');
        }
}