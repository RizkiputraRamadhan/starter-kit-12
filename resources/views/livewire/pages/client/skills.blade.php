@section('title', 'Skills')
<x-guest-layout>
    <section class="py-5 relative" id="content">
        <div class="w-full max-w-7xl  md:px-2 lg:px-5 mx-auto">
            <div class="w-full justify-start items-center gap-12 grid lg:grid-cols-2 grid-cols-1">
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start  gap-3 flex">
                            @include('livewire.pages.client.widget.header-title', [
                                'data' => 'PROFESSIONAL SKILL',
                            ])
                        </div>
                        <div class="w-full lg:justify-start justify-center">
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Komunikasi Efektif</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        Mampu menyampaikan solusi teknis secara jelas dan efektif kepada tim teknis maupun non-teknis.
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Kolaborasi Tim</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        Berpengalaman bekerja dalam tim lintas fungsi untuk mengembangkan dan menyelesaikan proyek secara efektif.
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Adaptasi Teknologi</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        Cepat beradaptasi dengan teknologi baru dan mampu menyesuaikan solusi berdasarkan kebutuhan bisnis.
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Problem Solving & Data Processing</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        Terampil dalam menemukan akar permasalahan serta menyusun solusi yang efisien, termasuk dalam pengolahan dan manipulasi data menggunakan query yang optimal.
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Other Skills</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        Article Writting, documentasi IT Project, build API, Intergration System, etc ..
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        </div>
                        
                    </div>
                </div>
                <div class="w-full flex-col justify-center lg:items-start items-center gap-10 inline-flex">
                    <div class="w-full flex-col justify-center items-start gap-8 flex">
                        <div class="w-full flex-col justify-start lg:items-start  gap-3 flex">
                            @include('livewire.pages.client.widget.header-title', [
                                'data' => 'TECHNICAL SKILL',
                            ])
                        </div>
                        <div class="w-full lg:justify-start justify-center">
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Programming Languages</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        PHP, JavaScript, Flutter, Golang
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Frameworks & Libraries</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        Laravel (v8+), CodeIgniter 4, Tailwind CSS, Bootstrap, React.js, jQuery, Express.js, Go standard library, etc.
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Development Tools</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        Postman, Visual Studio Code, Herd, DBngin, TablePlus, Git Bash, PuTTY, FileZilla, AnyDesk, etc.
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Version Control</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        GitHub, GitLab
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                        
                            <div class="w-full rounded-xl flex items-start gap-4">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Other Skills</h3>
                                        </li>
                                    </ul>
                                    <p class="text-gray-600 px-4">
                                        Figma, Microsoft Office Suite, Linux Environment, Terminal, SSH, FTP, etc.
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-14 border-gray-300"></div>
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-guest-layout>
