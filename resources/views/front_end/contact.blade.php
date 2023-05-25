@php
    $active = 'contuct';
@endphp
@extends('front_end.layouts.main')

@section('content')
    <section class="px-2 xl:px-4">
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            <div class="max-h-[500px] overflow-hidden w-full">
                <img class=" max-w-full rounded-lg w-full h-full"
                    src="{{ asset('file') }}/images/namibiavisanamibiaOffice.jpeg" alt="Namibia Visa">
            </div>
            <div class="max-h-[500px] overflow-hidden w-full">
                <img class=" max-w-full rounded-lg w-full h-full"
                    src="{{ asset('file') }}/images/namibiavisanamibiaOffice1.jpeg" alt="Namibia Visa">
            </div>
            <div class="max-h-[500px] overflow-hidden w-full">
                <img class=" max-w-full rounded-lg w-full h-full"
                    src="{{ asset('file') }}/images/namibiavisanamibiaOffice2.jpeg" alt="Namibia Visa">
            </div>
            <div class="max-h-[500px] overflow-hidden w-full">
                <img class=" max-w-full rounded-lg w-full h-full"
                    src="{{ asset('file') }}/images/namibiavisanamibiaOffice3.jpeg" alt="Namibia Visa">
            </div>
        </div>
        {{-- <div class="w-full rounded-lg overflow-hidden sm:mr-10 p-10 flex items-center justify-center relative">
            <div class="bg-white relative flex flex-wrap py-6 rounded shadow-md">
                <div class="lg:w-1/2 px-6">
                    <h2 class="title-font font-semibold text-gray-900 tracking-widest text-xl mb-4">ADDRESS</h2>
                    <p class="mt-1">Ministry Of Home Affairs, Immigration, Safety And Security, Windhoek North At The
                        Corner Of Hosea Kutako Drive And Harvey Street Erf 6971, Opposite The Electoral Commission Of
                        Namibia (ECN).</p>
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
        </div> --}}

        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-12">
                            <h2 style="font-weight: 700; font-size: 18px">Main Address</h2>
                            <hr>
                        </div>
                        <div class="col-md-6 mt-4">
                            <h3 style="font-weight: 600; font-size: 16px; margin-bottom:10px">ADDRESS</h3>
                            <p>Ministry Of Home Affairs, Immigration, Safety And Security, Windhoek North At The Corner
                                Of
                                Hosea Kutako Drive And Harvey Street Erf 6971, Opposite The Electoral Commission Of
                                Namibia
                                (ECN).</p>
                        </div>
                        <div class="col-md-6 mt-4">
                            <h3 style="font-weight: 600; font-size: 16px; margin-bottom:10px">EMAIL</h3>
                            <p>
                                <a href="mailto:govnamibia@gmail.com">govnamibia@gmail.com</a>
                                <a href="mailto:namibiainfo2@gmail.com">namibiainfo2@gmail.com</a>
                            </p>
                            <h3 style="font-weight: 600; font-size: 16px; margin-bottom:10px; margin-top: 15px">PHONE</h3>
                            <p>Call Us +264 81 951 0184 / +264 81 951 0196 / +264 81 951 0629</p>
                        </div>

                        <div class="col-12 mt-5">
                            <h2 style="font-weight: 700; font-size: 18px">Sub Address</h2>
                            <hr>
                        </div>
                        <div class="col-md-6 mt-4">
                            <h3 style="font-weight: 600; font-size: 16px; margin-bottom:10px">ADDRESS</h3>
                            <p>67 - 71 Van Rhijn Street, 67 Van Rhijn Street, Windhoek, Namibia</p>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="w-full rounded-lg overflow-hidden sm:mr-10 p-10 flex items-center justify-center relative">

                    <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59260755.89623216!2d-61.144035925526325!3d-24.966472023107283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1c0b1b0d72fe2f5f%3A0x290e97924297f622!2sMinistry%20of%20Home%20Affairs%20and%20Immigration!5e0!3m2!1sen!2sbd!4v1685011616267!5m2!1sen!2sbd"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

            </div>
        </div>

    </section>
@endsection
