
<x-app-layout>

<article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="{{ url('images/'.$post->image) }}" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>1 day ago</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src=" {{ url('images/lary-avatar.svg') }}" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{ $post->user->name }}</h5>
                            <h6>Mascot at Laracasts</h6>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="{{url('/')}}"
                            class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                        d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                        @foreach($post->tags as $tag)
                        <a href="#"
                            class="px-3 py-1 border border-{{$tag->color}}-300 rounded-full text-{{$tag->color}}-300 text-xs uppercase font-semibold"
                            style="font-size: 10px">{{$tag->name}}</a>
                            @endforeach
                        </div>
                    </div>

                    <div class="text-pink-300 border-pink-300 text-fuchsia-300 border-fuchsia-300 text-rose-300 border-rose-300 text-purple-300 border-purple-300 text-violet-300 border-violet-300 text-indigo-300 border-indigo-300 text-cyan-300 border-cyan-300 text-teal-300 border-teal-300 text-emerald-300 border-emerald-300 text-green-300 border-green-300 text-lime-300 border-lime-300 text-sky-300 border-sky-300 text-amber-300 border-amber-300 text-orange-300 border-orange-300 "></div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                    {{$post->title}}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                       <p> {{$post->head}}</p>
                       <p> {{$post->body}}</p>

                        
                    </div>
                </div>
            </article>

</x-app-layout>


