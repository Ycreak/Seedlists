<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    
                    <b>Add plant</b>
                    <div style='padding:0.2em'></div>

{{--                    <form method="POST" action="{{ route('chirps.store') }}">
            @csrf
            <textarea
                name="message"
                placeholder="{{ __('What\'s on your mind?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Chirp') }}</x-primary-button>
        </form> --}}



                    <form 
                        style='padding-bottom:0.2em'    
                        method="POST" 
                        action="{{ route('plants.add')}}"
                        accept-charset="UTF-8"
                    >         
                        @csrf
                        <input 
                            type="search" 
                            class="form-control" 
                            placeholder="Title" 
                            name="title" 
                        >
                        <div style='padding:0.2em'></div>
                        <input 
                            type="search" 
                            class="form-control" 
                            placeholder="Genus" 
                            name="genus" 
                        >
                        <div style='padding:0.2em'></div>
                        <input 
                            type="search" 
                            class="form-control" 
                            placeholder="Species" 
                            name="species" 
                        >
                        <div style='padding:0.2em'></div>
                        <input 
                            type="search" 
                            class="form-control" 
                            placeholder="Author" 
                            name="author" 
                        >
                        <div style='padding:0.2em'></div>
                        <input 
                            type="search" 
                            class="form-control" 
                            placeholder="Published place" 
                            name="published_place" 
                        >
                        <div style='padding:0.2em'></div>
                        <input 
                            type="search" 
                            class="form-control" 
                            placeholder="Published year" 
                            name="published_year" 
                        >
                        <div style='padding:0.2em'></div>
                        <input 
                            type="search" 
                            class="form-control" 
                            placeholder="Published in" 
                            name="published_in" 
                        >
                        <div style='padding:0.2em'></div>
                        <input 
                            type="search" 
                            class="form-control" 
                            placeholder="Original in" 
                            name="original_in" 
                        >
                        <div style='padding:0.2em'></div>
                        <input 
                            type="search" 
                            class="form-control" 
                            placeholder="Notes" 
                            name="notes" 
                        >
                        <div style='padding:0.2em'></div>
                        <button type="submit" class="btn btn-primary">Apply</button>
                    </form>                
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
