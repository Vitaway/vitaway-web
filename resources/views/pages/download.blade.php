@extends('layouts.guest')

@section('title') Download @stop

@section('metas')
    <meta name="description" content="Free Web tutorials">
    <meta name="keywords" content="HTML, CSS, JavaScript">
@stop

@section('styles')
    <link rel="stylesheet" href="/css/navigation-bar.css">
    <link rel="stylesheet" href="/css/footer.css">
@stop

@section('content')
    <x-navigation-bar />

    <template>
        <div class="relative bg-white overflow-hidden">
            <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
                <div class="absolute inset-0 inset-x-10">
                    <div class="absolute inset-y-0 z-0 w-full h-full from-indigo-50 bg-gradient-to-b lg:w-3/6"></div>
                </div>
                <div class="relative">
                    <div class="grid gap-10 lg:grid-cols-2">
                        <div class="flex flex-col justify-center md:pr-10 xl:pr-0 lg:max-w-lg">
                            <div class="max-w-xl mb-6">
                                <h2 class="mb-6 font-patua font-normal text-3xl tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                                    <span class="relative inline-block">
                                        <svg viewBox="0 0 52 24" fill="currentColor" class="absolute top-0 left-28 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-32 lg:-mt-10 sm:block">
                                            <defs>
                                            <pattern id="6b0188f3-b7a1-4e9b-b95e-cad916bb3042" x="0" y="0" width=".135" height=".30">
                                                <circle cx="1" cy="1" r=".7"></circle>
                                            </pattern>
                                            </defs>
                                            <rect fill="url(#6b0188f3-b7a1-4e9b-b95e-cad916bb3042)" width="52" height="24"></rect>
                                        </svg>
                                        <span class="relative font-patua font-normal bg-white">The</span>
                                    </span>
                                    quick, brown fox jumps <br/> over a lazy dog
                                </h2>
                                <p class="text-base text-gray-700 md:text-lg">
                                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae.
                                </p>
                                <hr class="my-8 border-gray-600" />
                                <div class="flex items-center mb-3 sm:justify-left">
                                    <a href="/" class="mr-3 transition duration-300 hover:shadow-lg">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Download_on_the_App_Store_Badge.svg/1000px-Download_on_the_App_Store_Badge.svg.png" class="object-cover object-top w-32 mx-auto" alt="" />
                                    </a>
                                    <a href="/" class="transition duration-300 hover:shadow-lg">
                                        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/78/Google_Play_Store_badge_EN.svg/1000px-Google_Play_Store_badge_EN.svg.png" class="object-cover object-top w-32 mx-auto" alt="" />
                                    </a>
                                </div>
                                <p class="max-w-xs text-xs text-gray-600 sm:text-sm sm:max-w-sm">
                                    Sed ut unde omnis iste natus accusantium doloremque laudantium omnis iste.
                                </p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center lg:pl-8 ml-20">
                            <div class="flex flex-col items-end px-3">
                                <div class="relative border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[500px] w-[250px] shadow-xl">
                                    <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                                    <div class="rounded-[2rem] ml-2 mt-2 mb-2 overflow-hidden w-[94%] h-[97%] bg-white dark:bg-gray-800">
                                        <img src="/images/categories.png" class="dark:hidden" alt="">
                                        <img src="/images/categories.png" class="hidden dark:block" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="px-3">
                                <div class="relative border-gray-800 pt-[13px] dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[600px] w-[300px] shadow-xl">
                                    <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                                    <div class="rounded-[2rem] overflow-hidden w-[272px] h-[572px] bg-white dark:bg-gray-800 ml-3">
                                        <img src="/images/categories.png" class="dark:hidden w-[272px] h-[572px]" alt="">
                                        <img src="/images/categories.png" class="hidden dark:block w-full h-full" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col items-end px-3">
                                <div class="relative border-gray-800 dark:border-gray-800 bg-gray-800 border-[14px] rounded-[2.5rem] h-[500px] w-[250px] shadow-xl">
                                    <div class="w-[148px] h-[18px] bg-gray-800 top-0 rounded-b-[1rem] left-1/2 -translate-x-1/2 absolute"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[124px] rounded-l-lg"></div>
                                    <div class="h-[46px] w-[3px] bg-gray-800 absolute -left-[3px] top-[178px] rounded-l-lg"></div>
                                    <div class="h-[64px] w-[3px] bg-gray-800 absolute -right-[3px] top-[142px] rounded-r-lg"></div>
                                    <div class="rounded-[2rem] ml-2 mt-2 mb-2 overflow-hidden w-[94%] h-[97%] bg-white dark:bg-gray-800">
                                        <img src="/images/categories.png" class="dark:hidden" alt="">
                                        <img src="/images/categories.png" class="hidden dark:block" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </template>

    <x-footer />
@endsection