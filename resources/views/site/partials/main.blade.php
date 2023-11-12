<main>

    @include('site.partials.banner')

    <section class="relative pt-16 max-w-5xl mx-auto">
        <div class="container mx-auto px-4 lg:max-w-5xl">
            <div
                class="relative min-w-0 break-words w-full  -mt-44">

                @yield('content')

            </div>
        </div>
    </section>
</main>