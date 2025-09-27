<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Data Kelas') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            {{-- Form Tambah Kelas --}}
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg mb-4">Tambah Kelas</h3>
                    <form method="POST" action="{{ route('kelas.store') }}" class="space-y-4">
                        @csrf
                        <input type="text" name="nama_kelas" placeholder="Kelas"
                                class="border-gray-300 rounded-md w-full">
                        <input type="text" name="kapasitas" placeholder="Kapasitas"
                                class="border-gray-300 rounded-md w-full">
                        <button type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                            Simpan
                        </button>
                    </form>
                </div>
            </div>

            {{-- List Kelas --}}
            <div class="bg-white dark:bg-gray-8000 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h3 class="font-semibold text-lg mb-4">List Kelas</h3>
                    <table class="table-auto w-full border">
                        <thead class="bg-gray-200 text-gray-700">
                            <tr>
                                <th class="px-4 py-2 border">Kelas</th>
                                <th class="px-4 py-2 border">Kapasitas</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $kelas )
                                <tr>
                                    <td class="border px-4 py-2">{{ $kelas->nama_kelas }}</td>
                                    <td class="border px-4 py-2">{{ $kelas->kapasitas }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>