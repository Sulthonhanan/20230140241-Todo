<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Daftar Todo') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">

                @forelse ($todos as $todo)
                    <div class="mb-4 p-4 border rounded-lg shadow-sm">
                        <h3 class="text-lg font-bold text-gray-800">
                            {{ $todo->title }}
                        </h3>
                        <p class="text-gray-600">
                            {{ $todo->description }}
                        </p>
                    </div>
                @empty
                    <p class="text-gray-500">Tidak ada todo.</p>
                @endforelse

            </div>

        </div>
    </div>
</x-app-layout>