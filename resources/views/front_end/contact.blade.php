@extends('front_end.layouts.main')

@section('content')
    <section class="px-2 xl:px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="max-h-[500px] overflow-hidden w-full">
                <img class=" max-w-full rounded-lg w-full h-full" src="{{ asset('file') }}/images/namibiavisanamibiaOffice.jpeg"
                    alt="Namibia Visa">
            </div>
            <div class="max-h-[500px] overflow-hidden w-full">
                <img class=" max-w-full rounded-lg w-full h-full" src="{{ asset('file') }}/images/namibiavisanamibiaOffice1.jpeg"
                    alt="Namibia Visa">
            </div>
            <div class="max-h-[500px] overflow-hidden w-full">
                <img class=" max-w-full rounded-lg w-full h-full" src="{{ asset('file') }}/images/namibiavisanamibiaOffice2.jpeg"
                    alt="Namibia Visa">
            </div>
            <div class="max-h-[500px] overflow-hidden w-full">
                <img class=" max-w-full rounded-lg w-full h-full" src="{{ asset('file') }}/images/namibiavisanamibiaOffice3.jpeg"
                    alt="Namibia Visa">
            </div>
        </div>
        <div
            class="w-full rounded-lg overflow-hidden sm:mr-10 p-10 flex items-center justify-center relative">
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xl mb-4">ADDRESS</h2>
                    <p class="mt-1">Ministry Of Home Affairs, Immigration, Safety And Security, Windhoek North At The Corner Of Hosea Kutako Drive And Harvey Street Erf 6971, Opposite The Electoral Commission Of Namibia (ECN).</p>
                </div>
                <div class="lg:w-1/2 px-6 lg:mt-0">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xl mb-2">EMAIL</h2>
                    <a class="text-indigo-500 leading-relaxed">govnamibia@gmail.com</a> <br>
                    <a class="text-indigo-500 leading-relaxed">namibiainfo2@gmail.com</a>
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xl mb-2 mt-4">PHONE</h2>
                    <p class="leading-relaxed">Call Us +264 81 951 0184 / +264 81 951 0196 / +264 81 951

                        0629</p>
                </div>
            </div>
        </div>
    </section>
@endsection
