<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Account;
use Illuminate\Http\Request;

class MovementsController extends Controller
{
    public function getMovements(Request $req, $account) {
        return view('movements.movements', ["account" => $account]);
    }

    public function createMovement(Request $req, $account) {
        $data = $req->all();
        $user_id = auth()->user()->id;

        $fkn_key = Account::where('user_id', $user_id)
            ->where('name', $account)
            ->first()
            ->id;

        $income = Balance::create([
            'account_id' => $fkn_key,
            "mnt_type" => $data["mnt_type"],
            "mnt_description" => $data["desc"],
            "amount" => $data["amount"]
        ]);

        return redirect()->route('homepage');
    }
}
