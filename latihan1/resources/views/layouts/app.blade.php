<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>{{ config('app.name', 'Laravel') }}</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <div class="min-h-screen">            

            {{-- ====== HEADER / NAVBAR ATAS ====== --}}
            @include('layouts.navigation')
            {{-- navigation.blade.php bawaan Breeze/Jetsream --}}

            {{-- ====== BODY: Sidebar + Konten ====== --}}
            <div class="flex">
                {{-- SIDEBAR di kiri, tepat di bawah header --}}
                <aside class="w-64 bg-white border-r shadow-sm min-h-screen">
                    <nav class="p-4 space-y-1">
                        <a href="{{ route('dashboard') }}"
                        class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->routeIs('dashboard') ? 'bg-gray-200 font-semibold' : '' }}">
                        Dashboard
                    </a>
                    <a href="{{ route('mahasiswa.index') }}"
                        class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->routeIs('mahasiswa.*') ? 'bg-gray-200 font-semibold' : '' }}">
                        Mahasiswa
                    </a>
                    <a href="{{ route('kelas.index') }}"
                        class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->routeIs('kelas.*') ? 'bg-gray-200 font-semibold' : '' }}">
                        Kelas
                    </a>
                    <a href="{{ route('matakuliah.index') }}"
                        class="block px-4 py-2 rounded hover:bg-gray-200 {{ request()->routeIs('matakuliah.*') ? 'bg-gray-200 font-semibold' : '' }}">
                        Matakuliah
                    </a>
                </nav>
            </aside>

                {{-- KONTEN UTAMA di kanan --}}
                <main class="flex-1 p-6">
                    {{ $slot ?? '' }}
                    @yield('conten')
                </main>
            </div>
                    
        </div>      
    </body>
</html>
