<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div>
                <h3 class="text-base font-semibold leading-6 text-gray-900">AI 模块</h3>
                <dl class="mt-5 grid grid-cols-1 divide-y divide-gray-200 overflow-hidden rounded-lg bg-white shadow md:grid-cols-3 md:divide-x md:divide-y-0">
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-base font-normal text-gray-900">总使用次数</dt>
                        <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                            <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                                {{$count}}
                            </div>

                            <a href="{{ route('dashboard.completions') }}" class="inline-flex items-baseline rounded-full px-2.5 py-0.5 text-sm font-medium text-indigo-800 md:mt-2 lg:mt-0">
                                查看记录 <x-heroicon-o-chevron-right class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-indigo-800"  />
                            </a>
                        </dd>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-base font-normal text-gray-900">总消耗 Credit</dt>
                        <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                            <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                              {{$sum}}
                            </div>

                            <a href="{{ route('dashboard.completions') }}" class="inline-flex items-baseline rounded-full px-2.5 py-0.5 text-sm font-medium text-indigo-800 md:mt-2 lg:mt-0">
                                查看记录 <x-heroicon-o-chevron-right class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-indigo-800"  />
                            </a>
                        </dd>
                    </div>
                    <div class="px-4 py-5 sm:p-6">
                        <dt class="text-base font-normal text-gray-900">可用 Credit</dt>
                        <dd class="mt-1 flex items-baseline justify-between md:block lg:flex">
                            <div class="flex items-baseline text-2xl font-semibold text-indigo-600">
                               {{$user->llm_tokens}}
                            </div>

                            <a  href="{{ route('dashboard.faucet') }}" : class="inline-flex items-baseline rounded-full px-2.5 py-0.5 text-sm font-medium text-indigo-800 md:mt-2 lg:mt-0">
                                {{__("Get More Credit")}} <x-heroicon-o-chevron-right class="-ml-1 mr-0.5 h-5 w-5 flex-shrink-0 self-center text-indigo-800"  />
                            </a>
                        </dd>
                    </div>
                </dl>
            </div>


        </div>
    </div>
</x-app-layout>
