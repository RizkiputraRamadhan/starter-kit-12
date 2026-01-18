@section('title', 'About Us')
<x-guest-layout>
    <section class="py-10 relative" id="content">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full justify-center items-start gap-6 grid sm:grid-cols-2 grid-cols-1 lg:order-first order-last">
                    <div class="pt-24 lg:justify-center sm:justify-end justify-start items-start gap-2.5 flex">
                        <img class="rounded-xl object-cover" src="{{ asset('assets/img/apotosa.jpg') }}" alt="Profile Image" />
                    </div>
                    <img class="sm:ml-0 ml-auto rounded-xl object-cover" src="{{ asset('assets/img/photo.jpg') }}" alt="Profile Image" />
                </div>
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start gap-3 flex">
                            @include('livewire.pages.client.widget.header-title', [
                                'data' => 'Tentang Saya',
                            ])
                            <p class="text-gray-500 text-base font-normal leading-relaxed lg:text-start">
                                Saya adalah seorang Software Engineer yang senang membantu orang lain membangun ide digital mereka menjadi kenyataan. Sejak 2020, saya aktif menggunakan Laravel dan React JS untuk membuat berbagai aplikasi web yang mudah digunakan. Fokus utama saya adalah memastikan setiap sistem yang saya buat dapat membantu pekerjaan Anda menjadi lebih mudah dan cepat.
                            </p>
                        </div>
                        <div class="w-full lg:justify-start justify-center sm:gap-10 gap-5 inline-flex flex-col">
                            <table class="table-fixed text-left w-full">
                                <tbody>
                                    <tr class="align-top">
                                        <td class="pr-4 py-1.5 flex items-center gap-2 w-1/3 min-w-[100px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <polyline points="16 18 22 12 16 6" />
                                                <polyline points="8 6 2 12 8 18" />
                                            </svg>
                                            Keahlian
                                        </td>
                                        <td class="py-1.5 w-2/3">: Pembuatan Web & Aplikasi</td>
                                    </tr>
                                    <tr class="align-top">
                                        <td class="pr-4 py-1.5 flex items-center gap-2 w-1/3 min-w-[100px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <path d="M21 10c0 7-9 13-9 13S3 17 3 10a9 9 0 1 1 18 0z" />
                                                <circle cx="12" cy="10" r="3" />
                                            </svg>
                                            Domisili
                                        </td>
                                        <td class="py-1.5 w-2/3">: Jawa Tengah, Indonesia</td>
                                    </tr>
                                    <tr class="align-top">
                                        <td class="pr-4 py-1.5 flex items-center gap-2 w-1/3 min-w-[100px]">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 text-gray-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                                <circle cx="12" cy="12" r="10" />
                                                <circle cx="12" cy="12" r="6" />
                                                <circle cx="12" cy="12" r="2" />
                                            </svg>
                                            Fokus
                                        </td>
                                        <td class="py-1.5 w-2/3">: Pengembangan Sistem Digital</td>
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