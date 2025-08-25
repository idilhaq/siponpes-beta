<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('PSB | Registrasi') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="nama_calon_peserta_didik" :value="__('Name')" />
                            <x-text-input id="nama_calon_peserta_didik" class="block mt-1 w-full" type="text" name="nama_calon_peserta_didik" :value="old('nama_calon_peserta_didik')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('nama_calon_peserta_didik')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ms-4">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>