<x-app-layout>
    <x-slot name="header">
        <h2 class="pl-3 font-semibold text-xl text-gray-800 dark:text-gray-200">
            {{ __('Arkade-bygg') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <ul class="list-none space-y-4">
                    @foreach($buildTypes as $buildType)
                    <li>
                        <a class="p-4 block shadow rounded hover:bg-gray-50"
                           href="{{ route('builds.buildList', $buildType) }}">{{ ucfirst($buildType) }}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</x-app-layout>
