<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use Livewire\Component;
use App\Models\Faucet as FaucetModel;
use DB;
use Illuminate\Support\Facades\Auth;

class Faucet extends Component
{
    public $hasTodayRecords = false;

    public function AddToken(){
        $this->hasTodayRecords = true;

        DB::transaction(function ()
        {
            $user = Auth::user();
            $user->llm_tokens = $user->llm_tokens + 5000;
            $user->save();
            FaucetModel::create([
                "user_id" => $user->id
            ]);
        });

    }

    public function booted()
    {
        $count = FaucetModel::whereDate("created_at",Carbon::today())->where("user_id",Auth::id())->count();
        if($count != 0){
            $this->hasTodayRecords = true;
        }
    }
    public function render()
    {
        return view('livewire.faucet');
    }
}
