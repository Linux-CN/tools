<?php

namespace App\Http\Livewire;

use App\Models\Completion;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class CompletionRecordsTable extends Component
{
    use WithPagination;
    public function render()
    {

        return view('livewire.completion-records-table',[
            "records" => Completion::where("user_id",Auth::id())->select('id','token','created_at')->paginate(10)
        ]);
    }
}
