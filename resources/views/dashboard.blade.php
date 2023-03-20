<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Kontrollpanel') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <ul class="list-none hover:list-disc">
                        <li class="">
                            <div class="">Arkade-nedlastingsstatistikk</div>
                            <a class="" title="Statistikk" href="{{ route('statistics.index') }}">HTML</a>
                        </li>
                        <li class="">
                            <div class="">Arkade-bygg</div>
                            <a class="" title="Arkade-bygg" href="{{ route('builds.index') }}">HTML</a>
                        </li>
                        <li class="">
                            <div class="">Arkade-nyhetsinteressenter</div>
                            <a class="" title="Arkade-nyhetsinteressenter" href="{{ route('newsReceivers') }}">HTML</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
