@section('title', 'Experience')
<x-guest-layout>
    <section class="py-5 relative" id="content">
        <div class="w-full max-w-7xl md:px-2 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                <img src="{{ asset('assets/gif/experience.gif') }}" class="lg:w-100 w-100 m-auto lg:hidden" alt="Experience Illustration">
                
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start gap-3 flex">
                            @include('livewire.pages.client.widget.header-title', [
                                'data' => 'Pengalaman',
                            ])
                        </div>

                        <div class="w-full lg:justify-start justify-center">
                            
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <img src="{{ asset('assets/img/lunaray.png') }}" alt="Logo Lunaray" class="w-10 rounded">
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">IT Developer</h3>
                                    <p class="text-gray-600 font-medium">PT Lunaray Cahya Abadi (2025 – Saat Ini)</p>
                                    <ul class="list-disc px-4 text-gray-600 mt-2">
                                        <li>Membangun infrastruktur digital perusahaan dari nol, termasuk sistem ERP, Company Profile, Portal Berita, hingga pengembangan AI Product Concept (Cantik AI).</li>
                                        <li>Bertanggung jawab penuh atas manajemen teknis menyeluruh (Full-stack Development) dan administrasi server (DevOps/Deployment).</li>
                                        <li>Memastikan stabilitas seluruh ekosistem IT dan skalabilitas sistem untuk kebutuhan jangka panjang perusahaan.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>

                            <div class="w-full rounded-xl flex items-start gap-4">
                                <img src="{{ asset('assets/img/tongtji.jpeg') }}" alt="Logo Tong Tji" class="w-10 rounded">
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">IT Developer</h3>
                                    <p class="text-gray-600 font-medium">PT Tongtji Tea Indonesia (Juli 2024 – Januari 2025)</p>
                                    <ul class="list-disc px-4 text-gray-600 mt-2">
                                        <li>Mengembangkan dan mengelola sistem internal perusahaan untuk optimalisasi kebutuhan operasional harian.</li>
                                        <li>Berkolaborasi aktif dengan tim desain dalam mengimplementasikan antarmuka sistem yang fungsional dan efisien.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>

                            <div class="w-full rounded-xl flex items-start gap-4">
                                <img src="{{ asset('assets/img/infinit.png') }}" alt="Logo Infinite" class="w-10 rounded">
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Software Engineer (MSIB)</h3>
                                    <p class="text-gray-600 font-medium">Infinite Learning (Maret 2024 – Juli 2024)</p>
                                    <ul class="list-disc px-4 text-gray-600 mt-2">
                                        <li>Berfokus pada pengembangan aplikasi web berbasis Python, Express JS, dan React JS.</li>
                                        <li>Berhasil membangun sistem cerdas pendeteksi penyakit tanaman tomat sebagai proyek akhir program.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>

                            <div class="w-full rounded-xl flex items-start gap-4">
                                <img src="{{ asset('assets/img/mentor.jpeg') }}" alt="Logo Mentor" class="w-10 rounded">
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Mentor Programming</h3>
                                    <p class="text-gray-600 font-medium">Freelance & Akademik (2023 – 2024)</p>
                                    <ul class="list-disc px-4 text-gray-600 mt-2">
                                        <li>Menyelenggarakan kursus online Laravel dan menjadi mentor Version Control System (Git) di Universitas Bina Sarana Informatika.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>

                            <div class="w-full rounded-xl flex items-start gap-4">
                                <img src="{{ asset('assets/img/pkm.jpeg') }}" alt="Logo PKM" class="w-10 rounded">
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Peneliti & Inovator Digital</h3>
                                    <p class="text-gray-600 font-medium">Lomba Tingkat Nasional & Kabupaten</p>
                                    <ul class="list-disc px-4 text-gray-600 mt-2">
                                        <li>PKM-KC Nasional: Merancang dan membangun sistem ujian online anti-cheating dari tahap konsep hingga implementasi teknis.</li>
                                        <li>Krenova Tegal: Mengembangkan fitur tambahan pada sistem ujian online dan lolos seleksi inovasi tingkat Kabupaten.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>

                            <div class="w-full rounded-xl flex items-start gap-4">
                                <img src="{{ asset('assets/img/remote.jpeg') }}" alt="Logo Remote" class="w-10 rounded">
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Freelancer Remote Developer</h3>
                                    <p class="text-gray-600 font-medium">2022 – Saat Ini</p>
                                    <ul class="list-disc px-4 text-gray-600 mt-2">
                                        <li>Berpengalaman menangani berbagai proyek pengembangan sistem informasi baik secara mandiri maupun kolaborasi tim untuk sektor startup, pendidikan, dan pemerintahan.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>

                            <div class="w-full rounded-xl flex items-start gap-4">
                                <img src="{{ asset('assets/img/himsi.jpg') }}" alt="Logo HIMSI" class="w-10 rounded">
                                <div class="flex flex-col">
                                    <h3 class="text-lg font-semibold text-gray-900">Himpunan Mahasiswa (HIMSI)</h3>
                                    <p class="text-gray-600 font-medium">Divisi Litbang & Humas</p>
                                    <ul class="list-disc px-4 text-gray-600 mt-2">
                                        <li>Aktif berkontribusi dalam penelitian, pengembangan bakat mahasiswa, serta menjembatani komunikasi organisasi sebagai Humas.</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>

                        </div>
                    </div>
                </div>

                <img src="{{ asset('assets/gif/experience.gif') }}" class="lg:w-150 w-50 m-auto lg:block hidden" alt="Experience Illustration">
            </div>
        </div>
    </section>
</x-guest-layout>