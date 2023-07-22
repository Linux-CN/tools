<div>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                        <tr>
                            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6 lg:pl-8">序号</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">消耗 Tokens</th>
                            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">时间</th>

                        </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                        @foreach ($records as $record)
                            <tr>
                                <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6 lg:pl-8">1{{$record->id}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$record->token}}</td>
                                <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">{{$record->created_at->diffForHumans()}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
   <div class="mx-2 my-3">
       {{$records->links()}}
   </div>

</div>
