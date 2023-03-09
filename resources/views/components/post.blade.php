<article
        class="transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl">
        <div class="py-6 px-5 @if($leading) lg:flex @endif">
            <div @if($leading) class="flex-1 lg:mr-8"@endif>
                <img src="{{ url('images/'.$post->image) }}" alt="Blog Post illustration" class="rounded-xl">
            </div>

            <div class="@if($leading) flex-1 @else mt-8 @endif flex flex-col justify-between">
                <header @if($leading) class="mt-8 lg:mt-0" @endif>
                    <div class="space-x-2">
                    @foreach($post->tags as $tag)
                        <a href="#"
                            class="px-3 py-1 border border-{{$tag->color}}-300 rounded-full text-{{$tag->color}}-300 text-xs uppercase font-semibold"
                            style="font-size: 10px">{{$tag->name}}</a>
                            @endforeach
                    </div>

                    <div class="mt-4">
                        <a href=" {{ url('post/' .$post->id) }} ">
                        <h1 class="text-3xl">
                        {{ $post->title }}
                        </h1>
</a>

                        <span class="mt-2 block text-gray-400 text-xs">
                            Published <time>1 day ago</time>
                        </span>
                    </div>
                </header>

                <div class="text-sm mt-4">
                    <p>
                    {{ $post->head }}
                    </p>
                    <!--
                    <p class="mt-4">
                        Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                    </p>
                    -->
                </div>

                <footer class="flex justify-between items-center mt-8">
                    <div class="flex items-center text-sm">
                        <img src="./images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3">
                            <h5 class="font-bold">{{ $post->user->name }}</h5>
                            <h6>Mascot at Laracasts</h6>
                        </div>
                    </div>

                    <div @if($leading) class="hidden lg:block" @endif>
                        <a href="{{ url('post/' .$post->id) }}"
                            class="transition-colors duration-300 text-xs font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8"
                        >Read More</a>
                    </div>
                </footer>
            </div>
        </div>
</article>