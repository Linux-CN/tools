<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Laravel\Jetstream\Jetstream;

class MarkdownPageController extends Controller
{
    public function contributor_term(Request $request){
        $policyFile = Jetstream::localizedMarkdownPath('contributor_term.md');

        return view('contributor_term', [
            'contributor_term' => Str::markdown(file_get_contents($policyFile)),
        ]);
    }
}
