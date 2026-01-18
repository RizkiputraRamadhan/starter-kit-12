@section('title', 'Contact Us')
<x-guest-layout>
    <section class="py-10 relative" id="content">
        <div class="w-full max-w-7xl px-4 md:px-5 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">

                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start  gap-3 flex">
                            @include('livewire.pages.client.widget.header-title', [
                                'data' => 'Kontak Saya',
                            ])
                        </div>
                        <div class="w-full lg:justify-start justify-center sm:gap-10 gap-5 inline-flex flex-col">
                            <table class="table-fixed text-left w-full">
                                <tbody>
                                    <tr class="align-top">
                                        <td class="pr-4 w-1/3 min-w-[100px]">
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-phone w-4 h-4 text-gray-500">
                                                    <path
                                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                                </svg>
                                                <span>No Wa</span>
                                            </div>
                                        </td>
                                        <td class="w-2/3 overflow-x-auto whitespace-nowrap scrollbar-hide">
                                            : +62 813-2999-5238
                                            <a href="https://wa.me/6281329995238" target="_blank"
                                                class="text-blue-600 hover:text-blue-900 font-bold italic inline-flex items-center gap-1 ml-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-external-link">
                                                    <path d="M15 3h6v6" />
                                                    <path d="M10 14 21 3" />
                                                    <path
                                                        d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>

                                    <tr class="align-top">
                                        <td class="pr-4 w-1/3 min-w-[100px]">
                                            <!-- Container flex biar sejajar -->
                                            <div class="flex items-center gap-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-at-sign w-4 h-4 text-gray-500">
                                                    <circle cx="12" cy="12" r="4" />
                                                    <path d="M16 8v5a3 3 0 0 0 6 0v-1a10 10 0 1 0-4 8" />
                                                </svg>
                                                <span>Email</span>
                                            </div>
                                        </td>
                                        <td class="w-2/3 overflow-x-auto whitespace-nowrap scrollbar-hide">
                                            : poetraarromadhon56@gmail.com
                                            <a href="mailto:poetraarromadhon56@gmail.com" target="_blank"
                                                class="text-blue-600 hover:text-blue-900 font-bold italic inline-flex items-center gap-1 ml-1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="lucide lucide-external-link">
                                                    <path d="M15 3h6v6" />
                                                    <path d="M10 14 21 3" />
                                                    <path
                                                        d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                                                </svg>
                                            </a>
                                        </td>
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
                                        <td class="w-2/3 overflow-x-auto whitespace-nowrap scrollbar-hide">: Kabupaten Banyumas, Jawa Tengah</td>
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
