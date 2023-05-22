@extends('front_end.layouts.main')

@section('content')
    <!-- ! Visa And Passports Starts -->


    <div class="w-full flex justify-center items-center my-20">
        <div
            class="w-full px-2 sm:px-0 sm:w-5/6 md:4/6 lg:w-3/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="h-[420px] overflow-hidden">
                <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('file') }}/images/visaPassport.jpg" alt="" />
            </div>
            <div class="p-5">
                <h5
                    class="w-full text-center mb-7 text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl leading-relaxed text-blue-700 font-bold tracking-normal dark:text-white">
                    Visa And Passports
                </h5>
                <a class="hover:underline underline-offset-4 text-blue-600"
                    href="https://www.passportindex.org/passport/namibia/" target="_blank">
                    Click Here
                </a>
            </div>
        </div>
    </div>

    <!-- ! Visa And Passports Ends -->
@endsection
