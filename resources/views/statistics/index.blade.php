<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Arkade-nedlastingsstatistikk') }}
        </h2>
        <div class="w-full text-right inline-flex"><a href="{{ route('statistics.index') }}">Tilbake til oversikt</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul class="list-none hover:list-disc">
                        @foreach($links as $linkName => $href)
                            <li class="list-group-item"><a class="text-blue-600 visited:text-purple-600" href="{{ $href }}">{{ ucfirst($linkName) }}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
