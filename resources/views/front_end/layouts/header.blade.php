<section id="navbar"
    class="flex justify-between items-center backdrop-blur-lg bg-transparent text-black sticky top-0 right-0 left-0 z-50 py-2 md:py-4 px-4 md:px-8 lg:px-12 2xl:px-20 shadow-sm">
    <div class="flex justify-center items-center space-x-3">
        <div>

            <img class="w-20" src="{{ asset('file') }}/images/namibia-visa-goverment.png" alt="namibia-visa-goverment.png" />
        </div>
        <div class="uppercase text-lg xl:text-2xl 2xl:text-3xl font-bold">
            <span class="text-blue-800">Namibia</span>
            <span class="text-red-600">Gov</span>
            <span class="text-green-600">Smart</span>
        </div>
    </div>
    <div class="hidden xl:flex justify-center space-x-4 tracking-tight text-sm 2xl:text-base font-semibold">
        <a href="{{ route('index') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'home' ? 'active' : ''}}">
            Home
        </a>
        <a href="{{ route('apply') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'apply' ? 'active' : ''}}">
            Apply
        </a>
        <a href="{{ route('check_info') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'check' ? 'active' : ''}}">
            Check information
        </a>
        <a href="{{ route('about') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'about' ? 'active' : ''}}">
            About Us
        </a>
        <a href="{{ route('gov_info') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'government' ? 'active' : ''}}">
            Government
        </a>
        <a href="{{ route('visa_passport') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'visa_passport' ? 'active' : ''}}">
            Visas and passports
        </a>
        <a href="{{ route('education') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'education' ? 'active' : ''}}">
            Education
        </a>
        <a href="{{ route('media') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'media' ? 'active' : ''}}">
            Media
        </a>
        <a href="{{ route('contact') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'contuct' ? 'active' : ''}}">
            Contact us
        </a>
        <a href="{{ route('invest') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'invest' ? 'active' : ''}}">
            Invest in Namibia
        </a>
    </div>
    <div onclick="toggle()" class="block xl:hidden text-xl">
        <i class="fa-solid fa-bars"></i>
    </div>




    <div id="nav"
        class="nav absolute -translate-y-full top-0 left-0 right-0 w-screen h-screen bg-gray-50 transition-all duration-500">
        <div onclick="toggle()" class="close absolute top-4 right-4 text-xl cursor-pointer">
            X
        </div>

        <div class="flex flex-col justify-center items-center space-y-6 tracking-tight w-full h-full">
            <a onclick="toggle()" href="{{ route('index') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'home' ? 'active' : ''}}">
                Home
            </a>
            <a onclick="toggle()" href="{{ route('apply') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'about' ? 'active' : ''}}">
                Apply
            </a>
            <a onclick="toggle()" href="{{ route('check_info') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'check' ? 'active' : ''}}">
                Check information
            </a>
            <a onclick="toggle()" href="{{ route('about') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'about' ? 'active' : ''}}">
                About Us
            </a>
            <a href="{{ route('gov_info') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'government' ? 'active' : ''}}">
                Government
            </a>
            <a onclick="toggle()" href="{{ route('visa_passport') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'visa_passport' ? 'active' : ''}}">
                Visas and passports
            </a>
            <a onclick="toggle()" href="{{ route('education') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'education' ? 'active' : ''}}">
                Education
            </a>
            <a onclick="toggle()" href="{{ route('media') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'media' ? 'active' : ''}}">
                Media
            </a>
            <a onclick="toggle()" href="{{ route('contact') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'contuct' ? 'active' : ''}}">
                Contact us
            </a>
            <a onclick="toggle()" href="{{ route('invest') }}"
                class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out {{ $active == 'invest' ? 'active' : ''}}">
                Invest in Namibia
            </a>
        </div>
    </div>

</section>
<script>
    const nav = document.getElementById('nav');
    const toggle = () => {
        console.log(nav)
        if (nav.classList.contains("-translate-y-full")) {
            nav.classList.remove('-translate-y-full');
            nav.classList.add('translate-y-0');
        } else {
            nav.classList.remove('translate-y-0');
            nav.classList.add('-translate-y-full');
        }
    }
    // if ((window).scrollBottom > 200) {
    //      document.getElementById("navbar").style.backgroundColor = "red"
    //     alert('');
    //  }
    $(document).ready(function() {
        //     var navbar = $('#navbar').
        //     $('#navbar').
        alert();
    })
</script>
