<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Arkade-nedlastingsstatistikk') }}
        </h2>
        <div class="pt-2">
            <a class="p-2 rounded hover:bg-gray-50 text-sm" href="{{ route('dashboard') }}">&#x2190 Til hovedmeny</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <ul class="list-none hover:list-disc space-y-6">
                    @foreach($links as $linkName => $href)
                    <li class="py-4 shadow rounded hover:bg-gray-50">
                        <a class="px-4" href="{{ $href }}">{{ ucfirst($linkName) }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
