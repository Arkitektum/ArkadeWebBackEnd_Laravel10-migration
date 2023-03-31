<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-3 font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('Oversikt') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul class="list-none space-y-4">
                        <li>
                            <a class="p-4 block shadow rounded hover:bg-gray-50" title="Statistikk"
                               href="{{ route('statistics.index') }}">Arkade-nedlastingsstatistikk
                                <x-list-link-arrow/>
                            </a>
                        </li>
                        <li>
                            <a class="p-4 block shadow rounded hover:bg-gray-50" title="Arkade-bygg"
                               href="{{ route('builds.index') }}"> Arkade-bygg
                                <x-list-link-arrow/>
                            </a>
                        </li>
                        <li>
                            <a class="p-4 block shadow rounded hover:bg-gray-50" title="Arkade-nyhetsinteressenter"
                               href="{{ route('newsReceivers') }}"> Arkade-nyhetsinteressenter
                                <x-list-link-arrow/>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
