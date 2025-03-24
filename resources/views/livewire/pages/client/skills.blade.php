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
                        <div class="w-full lg:justify-start justify-center ">
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Komunikasi Efektif</h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
                                        Mampu menjelaskan
                                        Solusi teknis kepada tim teknis atau nonteknis
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Kerjasama Tim</h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
                                        Terbiasa bekerja dalam tim
                                        untuk mengembangkan project
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Kemampuan Adaptasi</h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
                                        Cepat dalam
                                        beradaptasi dengan teknologi baru sesuai
                                        dengan case Perusahaan
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Kemampuan debugger dan
                                                pengolahan
                                                data </h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
                                        Mampu mencari sumber masalah
                                        yang terjadi dan menyelesaikannya , juga
                                        mampu mengolah data dengan logika
                                        query yang diharapkan.
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Lainnya</h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
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
                        <div class="w-full lg:justify-start justify-center ">
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Programming Languege</h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
                                        PHP, Javascript,
                                        Flutter, Golang
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Framework</h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
                                        Laravel v8 - latest, Codeigniter v4, Tailwind CSS,
                                        Bootstrap, react js, jquery, express Js, Golang etc..
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Tools</h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
                                        Postman, Vscode. Herd, Dbngin,
                                        Tableplus, Git Bash, PuTTy, FileZila, AnyDesk, etc..

                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Version Control System  </h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
                                        Github, GItlab.
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>
                            <div class="w-full rounded-xl flex items-start gap-4 ">
                                <div class="flex flex-col">
                                    <ul class="list-disc px-4">
                                        <li>
                                            <h3 class="text-lg font-semibold text-gray-900">Lainnya</h3>
                                        </li>
                                    </ul>
                                    <p class=" text-gray-600 px-4">
                                        Figma, MS Office, Linux, Terminal, SSh, FTP, etc ..
                                    </p>
                                </div>
                            </div>
                            <div class="border border-dashed my-5 border-gray-300"></div>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-guest-layout>
