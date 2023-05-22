@extends('front_end.layouts.main')


@section('content')
    <!-- ! Invest In Namibia Starts -->


    <div class="w-full flex justify-center items-center my-20">
        <div
            class="w-full px-2 sm:px-0 sm:w-5/6 md:4/6 lg:w-3/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="h-[420px] overflow-hidden">
                <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('file') }}/images/invest.jpg" alt="invest.jpg" />
            </div>
            <div class="p-5">
                <h5
                    class="w-full text-center mb-7 text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl leading-relaxed text-blue-700 font-bold tracking-normal dark:text-white">
                    INVEST IN NAMIBIA
                </h5>
                <h2 class="text-blue-600 my-10 text-2xl font-semibold">
                    Why invest in Namibia?
                </h2>
                <ul class="list-disc ml-5 my-10 leading-9">
                    <li>Peace, stability and good governance</li>
                    <li>Peace, stability and good governance</li>
                    <li>Excellent telecommunications network</li>
                    <li>Wide inter-continental market access</li>
                    <li>Liberal investment regime</li>
                    <li>Stable labour environment</li>
                    <li>Generous investment regimes</li>
                    <li>Fast, efficient and transparent bureaucracy</li>
                    <li>Low inflation</li>
                    <li>Stable foreign exchange reserves</li>
                    <li>Strategically located, low cost and efficient port</li>
                    <li>Young and trainable labour force</li>
                    <li>Good housing and recreational facilities</li>
                </ul>
                <a class="hover:underline underline-offset-4 text-blue-600"
                    href="https://www.namibiahc.org.uk/investment-opportunities.php" target="_blank">
                    More Details
                </a>
            </div>
        </div>
    </div>

    <!-- ! Invest In Namibia Ends -->
@endsection
