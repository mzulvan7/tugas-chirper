<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Chirp') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-6">Edit Chirp</h1>

                    <form action="{{ route('chirps.update', $chirp) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <label for="content" class="block text-sm font-medium text-gray-700 dark:text-gray-300">
                                Chirp Content
                            </label>
                            <textarea name="content" id="content" rows="3"
                                class="mt-1 block w-full rounded-md shadow-sm border-gray-300 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 focus:ring-blue-500">{{ $chirp->content }}</textarea>
                        </div>
                        <button type="submit" 
                                class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                            Update Chirp
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
