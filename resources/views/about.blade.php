<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-900">

        <div class="bg-gray-800 p-8 rounded-xl w-[400px] text-white shadow-lg">

            <h2 class="text-xl font-bold mb-4 text-center">
                Biodata Mahasiswa
            </h2>

            <div class="space-y-2 text-sm">
                <p><span class="font-semibold">Nama:</span> {{ $nama }}</p>
                <p><span class="font-semibold">NIM:</span> {{ $nim }}</p>
                <p><span class="font-semibold">Program Studi:</span> {{ $prodi }}</p>
                <p><span class="font-semibold">Hobi:</span> {{ $hobi }}</p>
            </div>

        </div>

    </div>
</x-app-layout>