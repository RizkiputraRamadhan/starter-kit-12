@section('title', 'Education')
<x-guest-layout>
    <section class="py-5 relative" id="content">
        <div class="w-full max-w-7xl  md:px-2 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                <img src="{{ asset('assets/gif/education.gif') }}" class="lg:w-100 w-50 m-auto lg:hidden" alt="">
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start  gap-3 flex">
                            @include('livewire.pages.client.widget.header-title', [
                                'data' => 'Pendidikan',
                            ])
                        </div>
                        <div class="w-full lg:justify-start justify-center ">
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/ma.png') }}" alt="Logo UBSI" class="w-10" width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">MA Alfalah Jatilawang</h3>
                                    <p class=" text-gray-600">Desain Grafis </p>
                                    <p class=" text-gray-600">Jatilawang Kab Banyumas, ( 2019 - 2022 )</p>
                                    <p class=" text-blue-800 hover:text-blue-600 mt-1 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-globe pt-1">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                                <path d="M2 12h20" />
                                            </svg>
                                        <a href="https://www.maalfalahjatilawang.sch.id/" class="ms-1" target="_blank"
                                            rel="noopener noreferrer">
                                             www.maalfalahjatilawang.sch.id
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/univ.png') }}" alt="Logo UBSI" class="w-10 h-10"
                                    width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Universitas Bina Sarana Informatika
                                    </h3>
                                    <p class=" text-gray-600">D3 Fakultas Teknologi Infromatika, Prodi System
                                        Informasi</p>
                                    <p class=" text-gray-600">Kota Tegal, ( 2022 - 2026 )</p>
                                    <p class=" text-gray-600">IPK: 3.8</p>
                                    <p class=" text-blue-800 hover:text-blue-600 mt-1 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-globe pt-1">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                                <path d="M2 12h20" />
                                            </svg>
                                        <a href="https://www.bsi.ac.id/" class="ms-1" target="_blank"
                                            rel="noopener noreferrer">
                                            www.bsi.ac.id
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/infinit.png') }}" alt="Logo UBSI"
                                    class="w-10 h-10 rounded" width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Studi Independen ( MSIB )
                                    </h3>
                                    <p class=" text-gray-600">Web Development </p>
                                    <p class=" text-gray-600">Infinite Learning ( Februari 2024 – Juni 2024 )</p>
                                    <p class=" text-blue-800 hover:text-blue-600 mt-1 flex">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                class="lucide lucide-globe pt-1">
                                                <circle cx="12" cy="12" r="10" />
                                                <path d="M12 2a14.5 14.5 0 0 0 0 20 14.5 14.5 0 0 0 0-20" />
                                                <path d="M2 12h20" />
                                            </svg>
                                        <a href="https://www.infinitelearning.id/" class="ms-1" target="_blank"
                                            rel="noopener noreferrer">
                                            www.infinitelearning.id
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/gif/education.gif') }}" class="lg:w-100 w-50 m-auto lg:block hidden" alt="">
            </div>
        </div>
    </section>
</x-guest-layout>
