<x-layout>
    <x-slot:title>{{ $title }}</x-slot>
    {{-- <section class="bg-white dark:bg-gray-900"> --}}
    <div class="py-4 px-4 mx-auto max-w-screen-xl lg:py-8 lg:px-0">
        <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
            @foreach ($posts as $post)
                <article
                    class="p-6 bg-white rounded-lg border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
                    <div class="flex justify-between items-center mb-5 text-gray-500">
                        <a href="/categories/{{ $post->category->slug }}" class="hover:underline">
                            <span
                                class="bg-{{ $post->category->color }}-100 text-primary-800 text-xs font-medium inline-flex items-center px-2.5 py-0.5 rounded dark:bg-primary-200 dark:text-primary-800">
                                {{ $post->category->name }}
                            </span>
                        </a>
                        <span class="text-sm">
                            {{ \Illuminate\Support\Carbon::parse($post['created_at'])->diffForHumans() }}
                        </span>
                    </div>
                    <h2 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><a
                            href="/posts/{{ $post['slug'] }}"
                            class="hover:underline hover:text-blue-900">{{ $post['title'] }}</a></h2>
                    <p class="mb-5 font-light text-gray-500 dark:text-gray-400">{{ Str::limit($post['body'], 150) }}</p>
                    <div class="flex justify-between items-center">
                        {{-- <div class="flex items-center space-x-3">
                            <img class="w-7 h-7 rounded-full"
                                src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                alt="{{ $post->author->name }}" />
                            <span class="font-medium text-xs dark:text-white">
                                {{ $post->author->name }}
                            </span>
                        </div> --}}
                        <div class="flex items-center space-x-3">
                            <a href="/authors/{{ $post->author->username }}" class="flex items-center space-x-3">
                                <img class="w-7 h-7 rounded-full"
                                    src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/jese-leos.png"
                                    alt="{{ $post->author->name }}" />
                                <span class=" hover:underline font-medium text-sm dark:text-white">
                                    {{ Str::limit($post->author->name, 27, '...') }}
                                </span>
                            </a>
                        </div>
                        <a href="/posts/{{ $post['slug'] }}"
                            class="inline-flex items-center font-medium text-primary-600 dark:text-primary-500 hover:underline">
                            <a href="/posts/{{ $post['slug'] }}"
                                class="font-medium text-blue-500 hover:underline text-sm">Read
                                more &raquo;
                            </a>
                        </a>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
    {{-- </section> --}}

</x-layout>
