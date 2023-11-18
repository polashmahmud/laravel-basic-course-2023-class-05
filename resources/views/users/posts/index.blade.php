<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Posts') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="mt-6">
                        @if($posts->count())
                            @foreach($posts as $post)
                                <div class="mb-4">
                                    <a href="" class="font-medium">{{ $post->user->name }}</a>
                                    <span class="text-sm text-gray-600">Data</span>
                                    <p class="mb-2">{{ $post->body }}</p>
                                    @can('delete', $post)
                                        <form action="{{ route('posts.destroy', $post) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="text-red-600">Delete</button>
                                        </form>
                                    @endcan
                                </div>
                            @endforeach
                            <div>
                                {{ $posts->links() }}
                            </div>
                        @else
                            <p>There are no post!</p>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
