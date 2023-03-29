<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Arkadenedlastinger') }} ({{ $totalCount }})
        </h2>
        <div class="pt-2">
            <a class="p-2 rounded hover:bg-gray-50 text-sm" href="{{ route('statistics.index') }}">&#x2190 Til statistikkoversikt</a>
        </div>
    </x-slot>

    <div class="py-6 max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-4 text-gray-900 dark:text-gray-100">
                <table class="w-full text-left text-sm">
                    <thead class="border-b dark:border-neutral-500">
                    <tr>
                        <th class="p-4">Tidspunkt</th>
                        <th class="p-4">Bruker - Organisasjon</th>
                        <th class="p-4">Utgivelse</th>
                        <th class="p-4" title="Automatisert nedlasting">Auto. &#x2699</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($downloads as $download)
                    <tr class="border-b dark:border-neutral-500">
                        <td class="p-4">{{ $download->downloaded_at->format('d.m.y - H:i') }}</td>
                        <td class="p-4">{{ $download->arkadeDownloader->email }}
                        </td>
                        <td class="p-4">{{ $download->arkadeRelease->version_number }}
                            - {{ $download->arkadeRelease->user_interface }}
                        </td>
                        <td class="p-4">
                            <b title="Automatisert nedlasting">{!! $download->is_automated ? '&#x2699;' : '' !!}</b>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="p-4 pt-6">{{ $downloads->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>
