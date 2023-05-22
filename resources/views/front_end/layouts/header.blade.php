<section
    class="flex justify-between items-center p-5 backdrop-blur-lg bg-transparent sticky top-0 right-0 left-0 z-50 md:p-4 lg:px-12 2xl:px-20 shadow-sm">
    <div>
        <img class="w-20" src="{{ asset('file') }}/images/logo.png" alt="Logo" />
    </div>
    <div class="hidden xl:flex justify-center space-x-6 tracking-tight">
        <a href="{{ route('index') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            Home
        </a>
        <a href="{{ route('apply') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            Apply
        </a>
        <a href="{{ route('check_info') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            Check information
        </a>
        <a href="{{ route('about') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            About Us
        </a>
        <a href="{{ route('gov_info') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            Government
        </a>
        <a href="{{ route('visa_passport') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            Visas and passports
        </a>
        <a href="{{ route('education') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            Education
        </a>
        <a href="{{ route('media') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            Media
        </a>
        <a href="{{ route('contact') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            Contact us
        </a>
        <a href="{{ route('invest') }}"
            class="hover:underline hover:underline-offset-2 hover:text-red-500 hover:border-red-500 hover:-translate-y-0.5 transition-all duration-200 ease-in-out">
            Invest in Namibia
        </a>
    </div>
    <!-- <div class="block xl:hidden">
        <FaBars class="text-xl cursor-pointer" />
      </div> -->
</section>
