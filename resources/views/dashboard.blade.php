<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h1 class="text-2xl font-bold mb-6">Chirps</h1>

                    <!-- Tombol Add Chirp -->
                    <a href="{{ route('chirps.create') }}" 
                    class="inline-block mb-6 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                        Add Chirp
                    </a>

                    @foreach ($chirps as $chirp)
                        <div class="mb-4 border-b border-gray-700 pb-4">
                            <p><strong>{{ $chirp->user->name }}</strong></p>
                            <p>{{ $chirp->content }}</p>
                            <p class="text-sm text-gray-500">Posted {{ $chirp->created_at->diffForHumans() }}</p>
                    
                            @if (Auth::id() === $chirp->user_id)
                                <div class="flex space-x-2">
                                    <!-- Tombol Edit -->
                                    <a href="{{ route('chirps.edit', $chirp) }}" 
                                        class="text-blue-500 hover:underline">Edit</a>
                                    
                                    <!-- Tombol Delete -->
                                    <form action="{{ route('chirps.destroy', $chirp) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline"
                                                onclick="return confirm('Are you sure you want to delete this chirp?')">
                                            Delete
                                        </button>
                                    </form>
                                </div>
                            @endif
                        </div>
                    @endforeach
                

                    @if ($chirps->isEmpty())
                        <p class="text-gray-500">No chirps yet. Be the first to post one!</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
