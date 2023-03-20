<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Arkadenedlastere') }}
        </h2>
        <div class="w-full text-right inline-flex"><a href="{{ route('statistics.index') }}">Tilbake til oversikt</a></div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="overflow-hidden">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="w-full text-left text-sm font-light">
                        <thead class="border-b font-medium dark:border-neutral-500">
                        <tr>
                            <th scope="col" class="px-6 py-4">E-post</th>
                            <th scope="col" class="px-6 py-4">Erfaring fra Arkade 1.x</th>
                            <th scope="col" class="px-6 py-4">Ønsker Arkade-nyheter</th>
                            <th scope="col" class="px-6 py-4">Nedlastinger</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($downloaders as $downloader)
                        <tr class="border-b dark:border-neutral-500">
                            <td class="whitespace-nowrap px-6 py-4 font-medium">{{ $downloader->email }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $downloader->has_arkade_v1_experience ? 'Ja' : '' }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $downloader->wants_news ? 'Ja' : '' }}</td>
                            <td class="whitespace-nowrap px-6 py-4">{{ $downloader->downloads->count() }}</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="h-16"> {{ $downloaders->links() }} </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
