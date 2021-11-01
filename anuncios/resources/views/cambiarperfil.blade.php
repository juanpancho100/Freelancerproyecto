<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Bienvenido a su perfil {{ Auth::user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="container">
                <div class="p-10 bg-white">
                        Anuncios 1
                        <div class="col">
                        foto
                        </div>
                        <div class="col">
                        nombre
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div> 
</x-app-layout>
