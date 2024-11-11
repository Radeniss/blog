<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="/posts/{{ $post['slug'] }} " class="hover:underline hover:text-blue-900">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-grey-900 ">{{ $post['title'] }}</h2>
            </a>
            <div>
                By
                <a href="/authors/{{ $post->author->username }}"
                    class="hover:underline text-base text-gray-500">{{ $post->author->name }}</a> In
                <a href="/categories/{{ $post->category->slug }}"
                    class="hover:underline  text-base text-gray-500">{{ $post->category->name }}</a> |
                {{ \Illuminate\Support\Carbon::parse($post['created_at'])->diffForHumans() }}
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 300) }}</p>
            <a href="/posts/{{ $post['slug'] }}" class="font-medium text-blue-500 hover:underline">Read more &raquo;</a>
        </article>
    @endforeach


</x-layout>
