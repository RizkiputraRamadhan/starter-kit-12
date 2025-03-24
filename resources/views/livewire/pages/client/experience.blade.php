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
                                            <li>Membuka kelas online Laravel untuk umum ( 2023 – 2024 )
                                            </li>
                                            <li>Mentor programming dan Version Control System di universitas bina sarana informatika ( 2024 )
                                            </li>
                                        </ul>
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
                                            <li>Lolos lomba pkm – kc tingkat nasional dengan system yang saya buat yaitu system ujian online anti
                                                cheating
                                            </li>
                                        </ul>
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
                                            <li>Merancang dan membangun system untuk starup, lembaga pendidikan atau pemerintah. ( 2022 –
                                                saat ini )
                                            </li>
                                        </ul>
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
                                                Mendevelop, mengembangkan dan maintenance system internal untuk kebutuhan perusahaan
                                            </li>
                                            <li>
                                                Berkolaborasi dengan tim desain untuk consum desain menjadi system
                                            </li>
                                            <li>
                                                Integrasi API j-payroll untuk kebutuhan aplikasi permintaan HRD
                                            </li>
                                            <li>
                                                Integrasi LDAP (Lightweight Directory Access Protocol) accounts user
                                            </li>
                                            <li>
                                                Etc…
                                            </li>
                                            
                                        </ul>
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
