<x-frontend-layout title="Home" description="Nawaaawaj विश्वसनीय अनलाइन समाचार पोर्टल हो जहाँ तपाईंले ताजा खबर, राजनीति, अर्थतन्त्र, खेलकुद, मनोरञ्जन र राष्ट्रिय तथा अन्तर्राष्ट्रिय समाचार पाउन सक्नुहुन्छ। " keywords="Nawaaawaj समाचार, Nawaaawaj न्युज, ताजा खबर, ब्रेकिङ न्यूज, अनलाइन समाचार, नेपाल समाचार, राजनीति समाचार, अर्थतन्त्र, खेलकुद समाचार, मनोरञ्जन खबर, राष्ट्रिय समाचार, अन्तर्राष्ट्रिय समाचार" image="{{asset('frontend/images/logo.png')}}">

    <section class="py-10">
        <div class="container grid md:grid-cols-3 gap-6">
            <div class="md:col-span-2 shadow bg-white p--4 rounded-md overflow-hidden ">
                <a href="{{ route('article', $latest->id) }}">
                    <img class="w-full" src="{{asset($latest->image)}}" alt="{{ $latest->title }}">
                    <br>
                    <div >
                        <h1 class="text-3xl mt-2"> {{$latest->title}}</h1>
                        <br>
                        <div class="line-clamp-2">
                            {!!  $latest->description !!}
                        </div>
                    </div>
                </a>

            </div>
            <div class="space-y-4">
                <h2 class="text-2xl text-(--primary-color) p-3 bg-(--primary-color)/20 border-l-4 border-(--primary-color)">Most viewed</h2>
                @foreach ($most_views as $most)
                    <div>
                        <a href="{{ route('article', $most->id) }}" class="grid grid-cols-3 items-center gap-2 bg-grey p-2 rounded-md">
                            <img class="w-full h-[120px] object-cover" src="{{ asset($most->image) }}"
                                alt="{{ $most->title }}">
                            <div class="col-span-2">
                                <h3 class="line-clamp-1 text-lg font-bold">
                                    {{ $most->title }}
                                </h3>
                                <div class="line-clamp-2 text-base leading-relaxed">
                                    {{ Str::limit(strip_tags($most->description), 200) }}
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <section class="py-10 ">
        <div class="container space-y-10">
            @foreach($categories as $category)
                @if(count($category->articles) > 0)
                    <div>
                        <h2 class="text-2xl text-(--primary-color) p-3 bg-(--primary-color)/20 border-l-4 border-(--primary-color)">{{ $category->title }}</h2>
                        <div class=" grid grid-cols-3 gap-4 mt-">
                            @foreach ($category->articles as $article)
                                <div>
                                    <a href="{{ route('article', $article->id) }}" class="grid grid-cols-3 items-center gap-2 bg-grey p-2 rounded-md">
                                        <img class="w-full h-[120px] object-cover" src="{{ asset($article->image) }}"
                                            alt="{{ $article->title }}">
                                        <div class="col-span-2">
                                            <h3 class="line-clamp-1 text-lg font-bold">
                                                {{ $article->title }}
                                            </h3>
                                            <div class="line-clamp-2 text-base leading-relaxed">
                                                {{ Str::limit(strip_tags($article->description), 200) }}
                                            </div>
        
                                        </div>
                                    </a>
                                </div>
                            @endforeach 
                        </div>
                    </div>
                    @foreach ($home_advertises as $ad)
                        <div>
                            <a href="{{ $ad->redirect_url }}" target="_blank">
                                <img class="h-14 md:h-20" src="{{ asset($ad->image) }}" alt="">
                            </a>
                        </div>
                    @endforeach
                @endif
            @endforeach
            
        </div>
    </section>
</x-frontend-layout>
