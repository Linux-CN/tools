<div class="text-center my-8">
    @if(!$hasTodayRecords)
    <button type="button"
            wire:click="AddToken"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
       {{__('Give me 5000 Credits')}}
    </button>
    @endif

    @if($hasTodayRecords && !$successRequestNewCredit)
    <button type="button"
            class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
        {{__('You have already claim today Credits. Try again tomorrow.')}}
    </button>
    @endif
    @if($hasTodayRecords && $successRequestNewCredit)
        <button type="button"
                class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-green-600">
            {{__('Success! You can use LCTT Tools help you translate article.')}}
        </button>
    @endif
</div>


