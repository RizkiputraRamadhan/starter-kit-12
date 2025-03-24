@section('title', 'Project Real')
<x-guest-layout>
    @php
        $cards = \App\Services\Project::get();
    @endphp

    <section class="relative" id="content">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                @foreach ($cards as $card)
                    <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg">
                        <div class="p-4">
                            <div class="mb-4">
                                <a href="{{ $card['main_image'] }}" data-lightbox="{{ $card['title'] }}">
                                    <img class="h-auto w-full rounded-lg object-cover object-center md:h-[300px]"
                                        src="{{ $card['main_image'] }}" alt="Main image" />
                                </a>
                            </div>
                            <div
                                class="flex space-x-2 overflow-x-auto whitespace-nowrap scrollbar-hide scrollbar-thin scrollbar-thumb-slate-400 scrollbar-track-transparent">
                                @foreach ($card['thumbnails'] as $index => $thumbnail)
                                    <a href="{{ $thumbnail }}" data-lightbox="{{ $card['title'] }}"
                                        data-title="{{ $card['title'] }}"
                                        class="flex-shrink-0 h-16 w-20 box-border rounded-sm cursor-pointer">
                                        <img class="h-16 w-20 object-cover object-center rounded-sm border border-gray-200"
                                            src="{{ $thumbnail }}" alt="Thumbnail {{ $index + 1 }}" />
                                    </a>
                                @endforeach
                            </div>
                        </div>
                        <div class="p-4">
                            <h6 class="text-slate-800 text-xl font-semibold mb-2">
                                {{ $card['title'] }}
                            </h6>
                            <div class="flex flex-wrap gap-2 ">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-2">
                                    <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z" />
                                    <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2" />
                                    <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2" />
                                    <path d="M10 6h4" />
                                    <path d="M10 10h4" />
                                    <path d="M10 14h4" />
                                    <path d="M10 18h4" />
                                </svg> :
                                <span class="font-medium  rounded-full">
                                    @if ($card['to'])
                                        {{ $card['to'] }}
                                    @else
                                        <small class="italic">__private</small>
                                    @endif
                                </span>
                            </div>
                            <div class="flex flex-wrap gap-2 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe">
                                    <circle cx="12" cy="12" r="10" />
                                    <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                    <path d="M2 12h20" />
                                </svg> :
                                @if ($card['web'])
                                    <a href="{{ $card['web'] }}" class="font-medium  rounded-full text-blue-700">
                                        {{ $card['web'] }}
                                    </a>
                                @else
                                    <small class="italic">__private</small>
                                @endif

                            </div>
                            <div class="group my-3 inline-flex flex-wrap justify-center items-center gap-2">
                                @foreach ($card['icons'] as $icon)
                                    <button
                                        class="rounded-full pointer-events-none border border-slate-300 p-2.5 text-center text-sm transition-all shadow-sm hover:shadow-lg text-slate-600 hover:text-white hover:bg-slate-800 hover:border-slate-800 focus:text-white focus:bg-slate-800 focus:border-slate-800 active:border-slate-800 active:text-white active:bg-slate-800 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
                                        type="button">
                                        {!! $icon !!}
                                    </button>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>
