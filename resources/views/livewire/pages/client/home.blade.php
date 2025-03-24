<x-guest-layout>
    <div class=" bg-white shadow border border-gray-100 rounded">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 ">
            <section class="relative">
                <div class="mb-5">
                    @include('livewire.pages.client.widget.header-title', [
                        'data' => 'Statistik Kunjungan Portofolio',
                    ])
                </div>
                <canvas id="myChart" width="400" height="300"></canvas>
            </section>
        </div>
    </div>
    <div class="flex ml-auto justify-end">
        <a href="{{ route('about') }}" wire:navigate
            class="py-2.5 px-5  rounded-full inline-flex bg-indigo-600 items-center shadow-sm shadow-transparent transition-all duration-500 hover:bg-indigo-700 text-white mt-3">
            Lanjutkan Tentang Saya
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                class="lucide lucide-chevron-right">
                <path d="m9 18 6-6-6-6" />
            </svg>
        </a>
    </div>


</x-guest-layout>
