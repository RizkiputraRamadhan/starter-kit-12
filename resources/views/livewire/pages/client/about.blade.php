@section('title', 'About Us')
<x-guest-layout>
    <section class="py-10 relative" id="content">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                <div
                    class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                    <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                        <img class=" rounded-xl object-cover" src="{{ asset('assets/img/apotosa.jpg') }}"
                            alt="about Us image" />
                    </div>
                    <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="{{ asset('assets/img/photo.jpg') }}"
                        alt="about Us image" />
                </div>
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start  gap-3 flex">
                            @include('livewire.pages.client.widget.header-title', [
                                'data' => 'Tentang Saya',
                            ])
                            <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start ">
                                Saya adalah Rizki Putra Ramadhan, seorang web developer yang berpengalaman dalam
                                membangun solusi digital di bidang teknologi. Sejak tahun 2020, saya telah mengembangkan
                                keahlian dalam JavaScript, PHP, Go, serta framework seperti React JS, Laravel, Tailwind
                                CSS dan masih banyak lagi. Saya telah dipercaya oleh lebih dari 30 klien untuk
                                mengerjakan proyek-proyek web,
                                mulai dari kebutuhan skala menengah hingga sistem yang kompleks.
                            </p>
                        </div>
                        <div class="w-full lg:justify-start justify-center sm:gap-10 gap-5 inline-flex flex-col">
                            <table class="table-fixed text-left w-full">
                                <tbody>
                                    <tr class="align-top">
                                        <td class="pr-4 flex items-center gap-2 w-1/3 min-w-[100px]">
                                            <!-- Icon calendar -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2">
                                                <rect x="3" y="4" width="18" height="18" rx="2" />
                                                <line x1="16" y1="2" x2="16" y2="6" />
                                                <line x1="8" y1="2" x2="8" y2="6" />
                                                <line x1="3" y1="10" x2="21" y2="10" />
                                            </svg>
                                            TTGL
                                        </td>
                                        <td class="w-2/3 overflow-x-auto whitespace-nowrap scrollbar-hide">: 03 November
                                            2004</td>
                                    </tr>
                                    <tr class="align-top">

                                        <td class="pr-4 flex items-center gap-2 w-1/3 min-w-[100px]">
                                            <!-- Icon map-pin -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2">
                                                <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z" />
                                                <circle cx="12" cy="10" r="3" />
                                            </svg>
                                            Alamat
                                        </td>
                                        <td class="w-2/3 overflow-x-auto whitespace-nowrap scrollbar-hide">: Tipar, Kec.
                                            Rawalo, Kab. Banyumas, Jawa Tengah, Indonesia 53173</td>
                                    </tr>
                                    <tr class="align-top">
                                        <td class="pr-4 flex items-center gap-2 w-1/3 min-w-[100px]">
                                            <!-- Icon activity -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2">
                                                <polyline points="22 12 18 12 15 21 9 3 6 12 2 12" />
                                            </svg>
                                            Hobi
                                        </td>
                                        <td class="w-2/3 overflow-x-auto whitespace-nowrap scrollbar-hide">: Bola voli,
                                            Coding</td>
                                    </tr>
                                    <tr class="align-top">
                                        <td class="pr-4 flex items-center gap-2 w-1/3 min-w-[100px]">
                                            <!-- Icon briefcase -->
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                stroke-width="2">
                                                <rect x="2" y="7" width="20" height="14" rx="2"
                                                    ry="2" />
                                                <path d="M16 3h-8v4h8V3z" />
                                                <line x1="2" y1="13" x2="22" y2="13" />
                                            </svg>
                                            Profesi
                                        </td>
                                        <td class="w-2/3 overflow-x-auto whitespace-nowrap scrollbar-hide">: Pengembang
                                            Sistem</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-guest-layout>
