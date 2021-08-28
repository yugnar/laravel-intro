<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use App\Models\Account;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function getHistory(Request $req, $balance) {

        $movementsHistory = Balance::all()->where('account_id', $balance);

        return view('history.history', ["movementsHistory" => $movementsHistory]);
    }
}
