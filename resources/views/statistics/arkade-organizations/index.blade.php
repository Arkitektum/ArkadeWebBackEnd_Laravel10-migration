<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Arkadenedlaster-organisasjoner') }} ({{ $totalCount }})
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
                        <th class="p-4">Navn</th>
                        <th class="p-4">Organisasjonsform</th>
                        <th class="p-4">Organisasjonsnummer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($organizations as $organization)
                    <tr class="border-b dark:border-neutral-500">
                        <td class="p-4">{{ $organization->name }}</td>
                        <td class="p-4">{{ $organization->org_form }}</td>
                        <td class="p-4">{{ $organization->org_number }}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="p-4 pt-6">{{ $organizations->links() }}</div>
            </div>
        </div>
    </div>
</x-app-layout>
