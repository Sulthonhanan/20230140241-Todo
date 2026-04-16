<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-900">
        
        <div class="bg-gray-800 p-8 rounded-xl w-[400px] text-white shadow-lg">
            
            <h2 class="text-lg font-semibold mb-1">
                {{ $nama }}
            </h2>

            <p class="text-gray-400 text-sm mb-6">
                {{ $nim }}
            </p>

            <a href="#" 
               class="bg-gray-200 text-black px-4 py-2 rounded-md text-sm hover:bg-gray-300 transition">
                Modul Pertemuan 1
            </a>

        </div>

    </div>
</x-app-layout>