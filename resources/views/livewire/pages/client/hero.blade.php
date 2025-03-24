<section class="relative pt-40 pb-24">
    <img src="{{ asset('assets/gif/com-light.gif') }}" alt="cover-image" class="w-full absolute top-0 left-0 z-0 h-60 object-cover">
    <div class="w-full max-w-7xl mx-auto px-6 md:px-8">
        <div class="flex items-center justify-center sm:justify-start relative z-10 mb-5">
            <img src="{{ asset('assets/img/apotosa.jpg') }}" alt="user-avatar-image"
                class="border-4 border-solid border-white w-50 h-50 rounded-full object-cover">
        </div>
        <div class="flex items-center justify-center flex-col sm:flex-row max-sm:gap-5 sm:justify-between mb-5">
            <div class="block">
                <h3 class="mt-2 text-xl font-semibold tracking-tight text-pretty text-gray-900 lg:text-3xl mb-1 max-sm:text-center">Rizki Putra Ramadhan</h3>
                <p class="font-normal text-base leading-7 text-gray-500  max-sm:text-center">Fullstack Developer <span class="sm:hidden">, </span> <br class="hidden sm:block">Banyumas, Jawa Tengah, Indonesia. <a href="{{ route('contact') }}" wire:navigate class="font-bold text-blue-700 hover:text-blue-800">Informasi Kontak</a></p>
            </div>
            <a href="https://wa.me/6281329995238"
                class="py-3.5 px-5  rounded-full hidden lg:inline-flex bg-indigo-600 items-center shadow-sm shadow-transparent transition-all duration-500 hover:bg-indigo-700">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.3011 8.69881L8.17808 11.8219M8.62402 12.5906L8.79264 12.8819C10.3882 15.6378 11.1859 17.0157 12.2575 16.9066C13.3291 16.7974 13.8326 15.2869 14.8397 12.2658L16.2842 7.93214C17.2041 5.17249 17.6641 3.79266 16.9357 3.0643C16.2073 2.33594 14.8275 2.79588 12.0679 3.71577L7.73416 5.16033C4.71311 6.16735 3.20259 6.67086 3.09342 7.74246C2.98425 8.81406 4.36221 9.61183 7.11813 11.2074L7.40938 11.376C7.79182 11.5974 7.98303 11.7081 8.13747 11.8625C8.29191 12.017 8.40261 12.2082 8.62402 12.5906Z"
                        stroke="white" stroke-width="1.6" stroke-linecap="round" />
                </svg>
                <span class="px-2 font-semibold text-base leading-7 text-white">Send Message</span>
            </a>
        </div>
        <div class="flex max-sm:flex-wrap max-sm:justify-center items-center gap-4">
            <a href="https://wa.me/6281329995238"  class="rounded-full lg:hidden py-3 px-6 flex bg-indigo-600 text-gray-700 font-semibold text-sm leading-6 transition-all duration-500 hover:bg-indigo-500 hover:text-gray-900">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M11.3011 8.69881L8.17808 11.8219M8.62402 12.5906L8.79264 12.8819C10.3882 15.6378 11.1859 17.0157 12.2575 16.9066C13.3291 16.7974 13.8326 15.2869 14.8397 12.2658L16.2842 7.93214C17.2041 5.17249 17.6641 3.79266 16.9357 3.0643C16.2073 2.33594 14.8275 2.79588 12.0679 3.71577L7.73416 5.16033C4.71311 6.16735 3.20259 6.67086 3.09342 7.74246C2.98425 8.81406 4.36221 9.61183 7.11813 11.2074L7.40938 11.376C7.79182 11.5974 7.98303 11.7081 8.13747 11.8625C8.29191 12.017 8.40261 12.2082 8.62402 12.5906Z"
                        stroke="white" stroke-width="1.6" stroke-linecap="round" />
                </svg> 
                <span class="px-2 font-semibold text-base leading-7 text-white">Send Message</span>
            </a>
            <a href="javascript:;" id="followButton" class="rounded-full py-3 px-6 flex {{ $isFollowing ? 'bg-green-100 text-green-700 cursor-not-allowed' : 'bg-stone-100 text-gray-700 hover:bg-stone-200 hover:text-gray-900' }} font-semibold text-sm leading-6 transition-all duration-500 ">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users me-1"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg>
                 <span id="followersCount"> {{ $followersCount }} </span>  &nbsp; Followers
            </a>
            
            <div class="flex items-center justify-center gap-5">
                <!-- Facebook -->
                <a href="https://web.facebook.com/koleksi.sukher" target="_blank"
                    class="p-3 rounded-full border border-solid border-gray-300 bg-gray-50 group transition-all duration-500 hover:bg-indigo-700 hover:border-indigo-700">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_1115_52)">
                            <path class="fill-indigo-600 transition-all duration-500 group-hover:fill-white"
                                d="M10.0001 20C15.523 20 20.0001 15.5228 20.0001 10C20.0001 4.47715 15.523 0 10.0001 0C4.47727 0 0.00012207 4.47715 0.00012207 10C0.00012207 15.5228 4.47727 20 10.0001 20Z"
                                fill="" />
                            <path class="fill-white transition-all duration-500 group-hover:fill-indigo-700"
                                d="M13.2516 3.06946H11.0364C9.72179 3.06946 8.25958 3.62236 8.25958 5.52793C8.266 6.1919 8.25958 6.82779 8.25958 7.54345H6.73877V9.96352H8.30665V16.9305H11.1877V9.91754H13.0893L13.2613 7.53666H11.1381C11.1381 7.53666 11.1428 6.47754 11.1381 6.16997C11.1381 5.41693 11.9216 5.46005 11.9688 5.46005C12.3416 5.46005 13.0666 5.46114 13.2527 5.46005V3.06946H13.2516V3.06946Z"
                                fill="" />
                        </g>
                        <defs>
                            <clipPath id="clip0_1115_52">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            
                <!-- Instagram -->
                <a href="https://www.instagram.com/sukherbyvir45/" target="_blank"
                    class="p-3 rounded-full border border-solid border-gray-300 bg-gray-50 group transition-all duration-500 hover:bg-indigo-700 hover:border-indigo-700">
                    <svg class="stroke-red-600 transition-all duration-500 group-hover:stroke-white" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M14.1667 5.83333V5.875M9.16673 17.5H10.8334C13.9761 17.5 15.5474 17.5 16.5237 16.5237C17.5001 15.5474 17.5001 13.976 17.5001 10.8333V9.16667C17.5001 6.02397 17.5001 4.45262 16.5237 3.47631C15.5474 2.5 13.9761 2.5 10.8334 2.5H9.16673C6.02403 2.5 4.45268 2.5 3.47637 3.47631C2.50006 4.45262 2.50006 6.02397 2.50006 9.16667V10.8333C2.50006 13.976 2.50006 15.5474 3.47637 16.5237C4.45268 17.5 6.02403 17.5 9.16673 17.5ZM13.3334 10C13.3334 11.8409 11.841 13.3333 10.0001 13.3333C8.15911 13.3333 6.66673 11.8409 6.66673 10C6.66673 8.15905 8.15911 6.66667 10.0001 6.66667C11.841 6.66667 13.3334 8.15905 13.3334 10Z"
                            stroke="" stroke-width="1.6" stroke-linecap="round" />
                    </svg>
                </a>
            
                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/in/rizki-putra-ramadhan-4a937a289/" target="_blank"
                    class="p-3 rounded-full border border-solid border-gray-300 bg-gray-50 group transition-all duration-500 hover:bg-indigo-700 hover:border-indigo-700">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_linkedin)">
                            <path class="fill-blue-700 transition-all duration-500 group-hover:fill-white"
                                d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z"
                                fill="" />
                            <path class="fill-white transition-all duration-500 group-hover:fill-indigo-700"
                                d="M6.25 7.5H4.375V15H6.25V7.5ZM5.3125 6.25C6.0625 6.25 6.5625 5.75 6.5625 5C6.5625 4.25 6.0625 3.75 5.3125 3.75C4.5625 3.75 4.0625 4.25 4.0625 5C4.0625 5.75 4.5625 6.25 5.3125 6.25ZM15.625 15H13.75V11.25C13.75 10.375 13.75 9.25 12.5 9.25C11.25 9.25 11 10.25 11 11.25V15H9.125V7.5H11V8.75C11.625 7.75 12.625 7.5 13.75 7.5C15.875 7.5 15.625 9.375 15.625 11.25V15Z"
                                fill="" />
                        </g>
                        <defs>
                            <clipPath id="clip0_linkedin">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            
                <!-- GitHub -->
                <a href="https://github.com/RizkiputraRamadhan" target="_blank"
                    class="p-3 rounded-full border border-solid border-gray-300 bg-gray-50 group transition-all duration-500 hover:bg-indigo-700 hover:border-indigo-700">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_github)">
                            <path class="fill-gray-800 transition-all duration-500 group-hover:fill-white"
                                d="M10 20C15.5228 20 20 15.5228 20 10C20 4.47715 15.5228 0 10 0C4.47715 0 0 4.47715 0 10C0 15.5228 4.47715 20 10 20Z"
                                fill="" />
                            <path class="fill-white transition-all duration-500 group-hover:fill-indigo-700"
                                d="M10 2.5C5.85786 2.5 2.5 5.85786 2.5 10C2.5 13.3679 4.80714 16.1625 7.85714 17.3214C8.21429 17.3929 8.35714 17.1429 8.35714 16.9286C8.35714 16.7143 8.35714 16.1429 8.35714 15.4286C6.07143 15.9286 5.64286 14.2857 5.64286 14.2857C5.35714 13.5 4.85714 13.2143 4.85714 13.2143C4.21429 12.7143 4.92857 12.7143 4.92857 12.7143C5.64286 12.7857 6.07143 13.5 6.07143 13.5C6.71429 14.5714 7.78571 14.2857 8.35714 14.0714C8.42857 13.5714 8.64286 13.2143 8.85714 12.9286C7.07143 12.6429 5.21429 11.9286 5.21429 8.57143C5.21429 7.5 5.64286 6.64286 6.35714 5.92857C6.28571 5.64286 6 4.78571 6.57143 3.64286C6.57143 3.64286 7.28571 3.35714 8.35714 4.28571C9.07143 4.07143 9.85714 3.92857 10.6429 3.92857C11.4286 3.92857 12.2143 4.07143 12.9286 4.28571C14 3.35714 14.7143 3.64286 14.7143 3.64286C15.2857 4.78571 15 5.64286 14.9286 5.92857C15.6429 6.64286 16.0714 7.5 16.0714 8.57143C16.0714 11.9286 14.2143 12.6429 12.4286 12.9286C12.7143 13.2143 12.9286 13.5714 12.9286 14.0714C12.9286 15.0714 12.9286 16.6429 12.9286 16.9286C12.9286 17.1429 13.0714 17.3929 13.4286 17.3214C16.1929 16.1625 18.5 13.3679 18.5 10C18.5 5.85786 15.1429 2.5 10 2.5Z"
                                fill="" />
                        </g>
                        <defs>
                            <clipPath id="clip0_github">
                                <rect width="20" height="20" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

{{-- navbar --}}
<header class=" bg-white bg-opacity-90 sticky top-0 px-5 shadow border border-gray-100 rounded-full backdrop-blur-lg backdrop-saturate-150 z-[9999] w-full max-w-7xl mx-auto">
<!-- Scrollable Menu -->
    <nav class="flex overflow-x-auto whitespace-nowrap scrollbar-hide lg:py-4 py-2 relative z-10 custom-scrollbar-x">
        <a href="{{ route('home') }}" 
            class="flex items-center {{ request()->segment(1) == '' ? 'text-blue-600 font-bold' : 'text-gra8-700 font-semibold' }} px-4 py-2 cursor-pointer hover:text-blue-600 focus:outline-none relative">
            Home 
        </a>
        <a href="{{ route('about') }}" wire:navigate
            class="flex items-center {{ request()->segment(1) == 'about' ? 'text-blue-600 font-bold' : 'text-gra8-700 font-semibold' }} px-4 py-2 cursor-pointer hover:text-blue-600 focus:outline-none relative">
            Tentang Saya
        </a>
        <a href="{{ route('education') }}"  wire:navigate
            class="flex items-center {{ request()->segment(1) == 'education' ? 'text-blue-600 font-bold' : 'text-gray-800 font-semibold' }}   px-4 py-2 cursor-pointer hover:text-blue-600 focus:outline-none relative">
            Pendidikan
        </a>
        <a href="{{ route('experience') }}"  wire:navigate
            class="flex items-center {{ request()->segment(1) == 'experience' ? 'text-blue-600 font-bold' : 'text-gray-800 font-semibold' }}   px-4 py-2 cursor-pointer hover:text-blue-600 focus:outline-none relative">
            Pengalaman
        </a>
        <a href="{{ route('skills') }}"  wire:navigate
            class="flex items-center {{ request()->segment(1) == 'skills' ? 'text-blue-600 font-bold' : 'text-gray-800 font-semibold' }}   px-4 py-2 cursor-pointer hover:text-blue-600 focus:outline-none relative">
            Keahlian
        </a>
        <a href="{{ route('project') }}"  wire:navigate
            class="flex items-center {{ request()->segment(1) == 'project' ? 'text-blue-600 font-bold' : 'text-gray-800 font-semibold' }}   px-4 py-2 cursor-pointer hover:text-blue-600 focus:outline-none relative">
            Project
        </a>
        <a href="{{ route('contact') }}"  wire:navigate
            class="flex items-center {{ request()->segment(1) == 'contact' ? 'text-blue-600 font-bold' : 'text-gray-800 font-semibold' }}   px-4 py-2 cursor-pointer hover:text-blue-600 focus:outline-none relative">
            Kontak
        </a>
        
    </nav>
</header>
                                        