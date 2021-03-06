<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     * Show the register page.
     *
     * @return \Illuminate\Http\Response
     */
    public function register(Request $req)
    {
        return view('auth.register');
    }

     /**
     * Shows the login page
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $req)
    {
        return view('auth.login');
    }

   /**
     * Logins the user
     *
     * @return \Illuminate\Http\Response
     */
    public function loginUser(Request $req)
    {
        $credentials = $req->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $req->session()->regenerate();
            return redirect()->route('homepage');
        }

        return back()->withErrors([
            'email' => 'Las credenciales provistas no son correctas',
        ]);
    }

    /**
     * Save the user
     *
     * @return \Illuminate\Http\Response
     */
    public function saveUser(Request $req){

        $data = $req->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed'
        ]);
        //$all = $req->all();
        //También se podría entonces: req->input('email');
        //dd($data);;
        // return view('app.views-folder.name');
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

        Auth::login($user);

        // return response()->json($user);
        return redirect()->route('homepage');
    }

    /**
     * Logs the user out.
     *
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $req)
    {
        Auth::logout();
        $req->session()->invalidate();
        $req->session()->regenerateToken();
        return redirect()->route('homepage');
    }

    /**
     * Show the register bank account page.
     *
     * @return \Illuminate\Http\Response
     */
    public function registerBankAccount(Request $req)
    {
        return view('auth.register-bank-account');
    }



    /**
     * Save a new bank account.
     *
     * @return \Illuminate\Http\Response
     */
    public function saveBankAccount(Request $req)
    {
        $data = $req->validate([
            'name' => 'required'
        ]);

        $id = auth()->user()->id;

        $user = Account::create([
            'user_id' => $id,
            'name' => $data['name']
        ]);

        /* // Para que el usuario inicie sesión en el sistema

        Auth::login($user); */

        // Regresa a la página principal
        return redirect()->route('homepage');

        // return view('app.views-folder.name');
    }
}
