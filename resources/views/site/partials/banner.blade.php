<section class="relative pt-16 pb-32 flex content-center items-center justify-center" style="height: 400px;">
    <div class="absolute top-0 w-full h-full bg-top bg-cover" style='background-image: url("https://lh5.googleusercontent.com/p/AF1QipONsAIyiIRPIextGGh5j71iS21fvVg7fcCQxcTB=w1350-h780-n-k-no");'>
        {{-- <span id="blackOverlay" class="w-full h-full absolute opacity-50 bg-black"></span> --}}
    </div>
    @hasSection('title')
    <div class="container relative mx-auto lg:max-w-5xl">
        <div class="items-center flex flex-wrap">
            <div class="w-full lg:w-10/12 px-4 ml-auto mr-auto text-center">
                <div class="pr-12">
                        <h1 class="text-white font-semibold text-5xl">@yield('title')</h1>
                </div>
            </div>
        </div>
    </div>
    @endif
    <div class="top-auto bottom-0 left-0 right-0 w-full absolute pointer-events-none overflow-hidden"
        style="height: 70px;">
        <svg class="absolute bottom-0 overflow-hidden" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none"
            version="1.1" viewBox="0 0 2560 100" x="0" y="0">
            <polygon class="text-gray-200 fill-current" points="2560 0 2560 100 0 100"></polygon>
        </svg>
    </div>
</section>