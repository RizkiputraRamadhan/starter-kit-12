@section('title', 'Experience')
<x-guest-layout>
    <section class="py-5 relative" id="content">
        <div class="w-full max-w-7xl  md:px-2 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                <img src="{{ asset('assets/gif/experience.gif') }}" class="lg:w-100 w-100 m-auto lg:hidden" alt="">
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start  gap-3 flex">
                            @include('livewire.pages.client.widget.header-title', [
                                'data' => 'Pengalaman',
                            ])
                        </div>
                        <div class="w-full lg:justify-start justify-center ">
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/mentor.jpeg') }}" alt="Logo UBSI" class="w-10 rounded"
                                    width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Mentor Programming</h3>
                                    <p class=" text-gray-600">
                                        <ul class="list-disc px-4">
                                            <li>Menyelenggarakan kelas online Laravel untuk umum (2023 – 2024)</li>
                                            <li>Mentor programming dan Version Control System di Universitas Bina Sarana Informatika (2024)</li>
                                        </ul>
                                    </p>
                                    <p class="mt-2">
                                        <a href="{{ asset('assets/img/sertifikat/mentor.jpeg') }}" data-lightbox="roadtrip" class="flex text-blue-700 items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image-play"><path d="m11 16-5 5"/><path d="M11 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6.5"/><path d="M15.765 22a.5.5 0 0 1-.765-.424V13.38a.5.5 0 0 1 .765-.424l5.878 3.674a1 1 0 0 1 0 1.696z"/><circle cx="9" cy="9" r="2"/></svg>
                                            <span class="font-semibold text-blue-700">Document</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/infinit.png') }}" alt="Logo UBSI" class="w-10 rounded"
                                    width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Studi Independen ( MSIB )</h3>
                                    <p class=" text-gray-600">Infinite Learning ( Maret 2024 – Juli 2024 )</p>
                                    <p class=" text-gray-600  mt-2">
                                        <ul class="list-disc px-4">
                                            <li>Mengikuti program MSIB dengan keahlian yang diambil yaitu web development
                                            </li>
                                            <li>Berhasil membuat website penditeksi penyakit pada tanaman tomat dengan teknologi python,
                                                express js, react js
                                            </li>
                                        </ul>
                                    </p>
                                    <p class="mt-2">
                                        <a href="{{ asset('assets/pdf/msib.pdf') }}" class="flex text-blue-700 items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image-play"><path d="m11 16-5 5"/><path d="M11 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6.5"/><path d="M15.765 22a.5.5 0 0 1-.765-.424V13.38a.5.5 0 0 1 .765-.424l5.878 3.674a1 1 0 0 1 0 1.696z"/><circle cx="9" cy="9" r="2"/></svg>
                                            <span class="font-semibold text-blue-700">Document</span>
                                        </a>
                                    </p>

                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/pkm.jpeg') }}" alt="Logo UBSI" class="w-10 rounded"
                                    width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Lomba PKM-KC</h3>
                                    <p class=" text-gray-600">
                                        <ul class="list-disc px-4">
                                            <li>Lolos lomba PKM-KC tingkat nasional dengan membuat sistem ujian online anti-cheating dari tahap perancangan hingga implementasi</li>
                                        </ul>
                                    </p>
                                    <p class="mt-2">
                                        <a href="{{ asset('assets/pdf/pkm.pdf') }}" class="flex text-blue-700 items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image-play"><path d="m11 16-5 5"/><path d="M11 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6.5"/><path d="M15.765 22a.5.5 0 0 1-.765-.424V13.38a.5.5 0 0 1 .765-.424l5.878 3.674a1 1 0 0 1 0 1.696z"/><circle cx="9" cy="9" r="2"/></svg>
                                            <span class="font-semibold text-blue-700">Document</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/krenova.jpg') }}" alt="Logo UBSI" class="w-10 rounded"
                                    width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Lomba Krenova</h3>
                                    <p class=" text-gray-600">
                                        <ul class="list-disc px-4">
                                            <li>Lolos lomba Krenova tingkat Kabupaten Tegal dengan mengangkat kembali sistem ujian online anti-cheating yang dikembangkan dengan fitur tambahan</li>
                                        </ul>
                                    </p>
                                    <p class="mt-2">
                                        <a href="{{ asset('assets/img/sertifikat/krenova.jpeg') }}" data-lightbox="krenova" class="flex text-blue-700 items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image-play"><path d="m11 16-5 5"/><path d="M11 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6.5"/><path d="M15.765 22a.5.5 0 0 1-.765-.424V13.38a.5.5 0 0 1 .765-.424l5.878 3.674a1 1 0 0 1 0 1.696z"/><circle cx="9" cy="9" r="2"/></svg>
                                            <span class="font-semibold text-blue-700">Document</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/himsi.jpg') }}" alt="Logo UBSI" class="w-10 rounded"
                                    width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Himpunan Mahasiswa</h3>
                                    <p class=" text-gray-600">
                                        <ul class="list-disc px-4">
                                            <li>Aktif sebagai anggota HIMSI (Himpunan Mahasiswa Sistem Informasi) dari semester 2 hingga semester 5 dengan peran di bidang Litbang (Penelitian dan Pengembangan) serta Humas</li>
                                        </ul>
                                    </p>
                                    <p class="mt-2">
                                        <a href="{{ asset('assets/img/sertifikat/litbang.jpg') }}" data-lightbox="himasa" class="flex text-blue-700 items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image-play"><path d="m11 16-5 5"/><path d="M11 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6.5"/><path d="M15.765 22a.5.5 0 0 1-.765-.424V13.38a.5.5 0 0 1 .765-.424l5.878 3.674a1 1 0 0 1 0 1.696z"/><circle cx="9" cy="9" r="2"/></svg>
                                            <span class="font-semibold text-blue-700">Document</span>
                                        </a>
                                        {{-- <a href="{{ asset('assets/img/sertifikat/litbang.jpg') }}" class="hidden" data-lightbox="himasa">Image #4</a> --}}
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/remote.jpeg') }}" alt="Logo UBSI" class="w-10 rounded"
                                    width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Freelancer remote working</h3>
                                    <p class=" text-gray-600">
                                        <ul class="list-disc px-4">
                                            <li>
                                                Menangani proyek remote sebagai freelancer, fokus pada pengembangan sistem untuk klien dari sektor startup, pendidikan, dan pemerintahan (2022 – saat ini).
                                            </li>                                            
                                        </ul>
                                    </p>
                                    <p class="mt-2">
                                        <a href="{{ route('project') }}"  class="flex text-blue-700 items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image-play"><path d="m11 16-5 5"/><path d="M11 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6.5"/><path d="M15.765 22a.5.5 0 0 1-.765-.424V13.38a.5.5 0 0 1 .765-.424l5.878 3.674a1 1 0 0 1 0 1.696z"/><circle cx="9" cy="9" r="2"/></svg>
                                            <span class="font-semibold text-blue-700">Document</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <!-- Logo -->
                                <img src="{{ asset('assets/img/tongtji.jpeg') }}" alt="Logo UBSI" class="w-10 rounded"
                                    width="60">
                                <!-- Content -->
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">IT Intern Developper</h3>
                                    <p class=" text-gray-600">PT Tongtji Tea Indonesia ( 22 juli 2024 – 24 januari 2025 )</p>
                                    <p class=" text-gray-600 mt-2">
                                        <ul class="list-disc px-4">
                                            <li>
                                                Mengembangkan, membangun, dan melakukan pemeliharaan sistem internal yang mendukung kebutuhan operasional perusahaan.
                                            </li>
                                            <li>
                                                Berkolaborasi dengan tim desain untuk mengimplementasikan desain menjadi sistem yang fungsional dan efisien.
                                            </li>
                                        </ul>
                                    </p>
                                    <p class="mt-2">
                                        <a href="{{ asset('assets/pdf/tongtji.pdf') }}" class="flex text-blue-700 items-center gap-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-image-play"><path d="m11 16-5 5"/><path d="M11 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2v6.5"/><path d="M15.765 22a.5.5 0 0 1-.765-.424V13.38a.5.5 0 0 1 .765-.424l5.878 3.674a1 1 0 0 1 0 1.696z"/><circle cx="9" cy="9" r="2"/></svg>
                                            <span class="font-semibold text-blue-700">Document</span>
                                        </a>
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        </div>
                    </div>
                </div>
                <img src="{{ asset('assets/gif/experience.gif') }}" class="lg:w-150 w-50 m-auto lg:block hidden"
                    alt="">
            </div>
        </div>
    </section>
</x-guest-layout>
