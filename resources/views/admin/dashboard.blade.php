<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                {{-- Tag <x-jet-welcome /> dalam kode tersebut berfungsi untuk menyertakan dan merender komponen Blade jet-welcome. Komponen ini merupakan bagian dari Laravel Jetstream dan digunakan untuk menampilkan konten standar, seperti pesan selamat datang atau informasi lainnya, dalam aplikasi Laravel. Komponen Blade membantu memodularisasi dan mengorganisir tampilan aplikasi dengan cara yang lebih rapi dan dapat digunakan kembali. --}}
                <x-jet-welcome />
            </div>
        </div>
    </div>
</x-app-layout>
