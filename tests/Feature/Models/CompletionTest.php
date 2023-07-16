<?php


test("Completion should has required attributes",function (){
    // Prepare
    $completion = \App\Models\Completion::factory()->create();

    // Assert
    expect($completion->user_id)->not->toBeEmpty();
    expect($completion->user_id)->toBeInt();

    expect($completion->source)->not->toBeEmpty();
    expect($completion->target)->not->toBeEmpty();

    expect($completion->token)->not->toBeEmpty();
    expect($completion->token)->toBeInt();
});
