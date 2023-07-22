<div class="text-center my-8">
    @if(!$hasTodayRecords)
    <button type="button"
            wire:click="AddToken"
            class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
       {{__('Give me 5000 Tokens')}}
    </button>

        @else
    <button type="button"
            class="rounded-md bg-gray-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-gray-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-600">
        {{__('You have claim today\'s token')}}
    </button>
    @endif
</div>


