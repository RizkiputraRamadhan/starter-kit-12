@section('title', 'Project Real')
<x-guest-layout>
    @php
        $cards = \App\Services\Project::get();
    @endphp

    <section class="relative py-5" id="content">
        <div class="container mx-auto">
            
            <div class="mb-10 p-8 rounded-2xl bg-slate-900 text-white flex flex-col md:flex-row items-center justify-between gap-6 shadow-xl border border-slate-800">
                <div class="max-w-2xl text-center md:text-left">
                    <h2 class="text-2xl md:text-3xl font-bold mb-2">Punya Ide Proyek Digital?</h2>
                    <p class="text-slate-400">Siap membantu Anda membangun sistem informasi, aplikasi web, atau digitalisasi bisnis dengan standar profesional dan teknologi terkini.</p>
                </div>
                <div class="flex-shrink-0">
                    <a href="https://wa.me/6281329995238?text=Halo%20Partner%20Coding%20Lunaray,%20saya%20ingin%20konsultasi%20mengenai%20proyek%20IT." 
                       target="_blank" 
                       class="inline-flex items-center gap-2 bg-emerald-500 hover:bg-emerald-600 text-white font-bold py-3 px-8 rounded-full transition-all duration-300 transform hover:scale-105 shadow-lg shadow-emerald-500/20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-message-circle">
                            <path d="M7.9 20A9 9 0 1 0 4 16.1L2 22Z"/>
                        </svg>
                        Konsultasi Gratis
                    </a>
                </div>
            </div>

            <div class="mb-8 border-l-4 border-blue-600 pl-4 py-2">
                <h3 class="text-2xl font-bold text-slate-800">Daftar Project Realisasi Client</h3>
                <p class="text-slate-500 text-sm italic">
                    Menampilkan sebagian sistem yang telah diimplementasikan. Masih banyak project lainnya yang tidak dipublikasikan karena kebijakan privasi client.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                @foreach ($cards as $card)
                    <div class="flex flex-col bg-white shadow-sm border border-slate-200 rounded-lg hover:shadow-md transition-shadow">
                        <div class="p-4">
                            <div class="mb-4">
                                <a href="{{ $card['main_image'] }}" data-lightbox="{{ $card['title'] }}">
                                    <img class=""
                                         src="{{ $card['main_image'] }}" alt="Main image" />
                                </a>
                            </div>
                        </div>
                        <div class="p-4 flex-grow flex flex-col">
                            <h6 class="text-slate-800 text-xl font-semibold mb-3">
                                {{ $card['title'] }}
                            </h6>
                            
                            <div class="space-y-2 mb-4">
                                <div class="flex items-center gap-2 text-slate-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-building-2">
                                        <path d="M6 22V4a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v18Z" />
                                        <path d="M6 12H4a2 2 0 0 0-2 2v6a2 2 0 0 0 2 2h2" />
                                        <path d="M18 9h2a2 2 0 0 1 2 2v9a2 2 0 0 1-2 2h-2" />
                                        <path d="M10 6h4" /><path d="M10 10h4" /><path d="M10 14h4" /><path d="M10 18h4" />
                                    </svg>
                                    <span class="text-sm">
                                        @if ($card['to'])
                                            {{ $card['to'] }}
                                        @else
                                            <span class="italic text-slate-400">__Private Project</span>
                                        @endif
                                    </span>
                                </div>

                                <div class="flex items-center gap-2 text-slate-600">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-globe">
                                        <circle cx="12" cy="12" r="10" />
                                        <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                        <path d="M2 12h20" />
                                    </svg>
                                    <span class="text-sm">
                                        @if ($card['web'] && $card['web'] !== '-')
                                            <a href="https://{{ $card['web'] }}" target="_blank" class="text-blue-600 hover:underline">
                                                {{ $card['web'] }}
                                            </a>
                                        @else
                                            <span class="italic text-slate-400">Internal System / Private Project</span>
                                        @endif
                                    </span>
                                </div>
                            </div>

                            <div class="mt-auto pt-4 border-t border-slate-100 flex flex-wrap gap-2">
                                @foreach ($card['icons'] as $icon)
                                    <div class="rounded-lg border border-slate-200 p-2 text-slate-600 bg-slate-50">
                                        {!! $icon !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-guest-layout>