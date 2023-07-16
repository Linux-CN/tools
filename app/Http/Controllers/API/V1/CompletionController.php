<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Completion;
use Illuminate\Http\Request;
use Gioni06\Gpt3Tokenizer\Gpt3TokenizerConfig;
use Gioni06\Gpt3Tokenizer\Gpt3Tokenizer;
use Illuminate\Support\Facades\Blade;
use OpenAI;
use App\Http\Resources\V1\CompletionResource;


class CompletionController extends Controller
{
    public function createCompletion(Request $request)
    {
        $source = $request->source;
        $user = auth()->user();

        if(!$request->user()->tokenCan('completion:create')){
            return $this->errorResponse("don't have enough scope for this action",[],3,403);
        }

        $config = new Gpt3TokenizerConfig();
        $tokenizer = new Gpt3Tokenizer($config);
        $numberOfTokens = $tokenizer->count($source);
        if($user->llm_tokens < $numberOfTokens){
            return  $this->errorResponse("don't have enough tokens",[],2,402);
        }


        $client = OpenAI::client(config('services.openai.key'));
        $prompt = view('prompt.translator',compact('source'))->render();
        $result = $client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $prompt,
            'max_tokens' => 2048,
        ]);

        $completion =  Completion::create([
            "user_id"=>$user->id,
            "source" => $source,
            "target" =>$result->choices[0]->text,
            "token" => $result->usage->totalTokens,
        ]);

        $user->llm_tokens = $user->llm_tokens - $result->usage->totalTokens;
        $user->save();

        return $this->successResponse(new CompletionResource($completion));
    }
}
