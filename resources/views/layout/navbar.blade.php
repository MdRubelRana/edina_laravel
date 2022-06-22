<!-- Navbar Section Start -->
<header
    x-data="{navbarOpen: false}"
    class="fixed left-0 top-0 z-50 bg-transparent w-full flex items-center shadow-md h-24"
    >

    <div class="container mx-auto">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <img src="{{ url('/img/logo.png') }}" alt="logo" class="w-12 lg:w-16 inline-block">
                </a>
            </div>
            <div class="">
                <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive'">
                </x-layout.navbar-hamburger>
                <nav
                    :class="!navbarOpen && 'hidden'" id="navbarCollapse"
                    class="absolute right-4 top-full py-5 px-6 z-50 shadow-sm rounded-lg w-full">
                    <ul class="block lg:flex lg:items-center text-lg text-black">
                        @foreach($navigationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                        @endforeach
                    </ul>
                </nav>
                <nav
                :class="!navbarOpen && 'hidden' "
                id="navbarCollapse"
                class="
                    absolute
                    py-5
                    px-6
                    shadow
                    rounded-lg
                    max-w-[250px]
                    w-full
                    lg:max-w-full lg:w-full
                    right-4
                    top-full
                    lg:block lg:static lg:shadow-none
                ">
                <ul class="block lg:flex lg:items-center text-lg">
                        @foreach($navigationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">{{ $item['label'] }}</x-layout.navbar-item>
                        @endforeach
                    </ul></nav>
            </div>
        </div>
    </div>

</header>
<!-- Navbar Section End -->