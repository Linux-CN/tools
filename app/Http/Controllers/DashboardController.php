<?php

namespace App\Http\Controllers;

use App\Models\Completion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
        $user = Auth::user();
        $count = Completion::where("user_id",$user->id)->count();
        $sum = Completion::where("user_id",$user->id)->sum('token');
        return view('dashboard',compact('user','count','sum'));
    }

    public function faucet(Request $request){
        return view('dashboard.faucet');
    }
}
