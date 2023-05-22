@extends('front_end.layouts.main')

@section('content')
    <!-- ! Education Starts -->

    <div class="w-full flex justify-center items-center my-20">
        <div
            class="w-full px-2 sm:px-0 sm:w-5/6 md:4/6 lg:w-3/6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
            <div class="h-[420px] overflow-hidden">
                <img class="rounded-t-lg h-full w-full object-cover" src="{{ asset('file') }}/images/education.jpg" alt="" />
            </div>
            <div class="p-5">
                <h5
                    class="w-full text-center mb-7 text-lg sm:text-xl md:text-2xl lg:text-3xl xl:text-4xl leading-relaxed text-blue-700 font-bold tracking-normal dark:text-white">
                    EDUCATION OF NAMIBIA
                </h5>
                <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm lg:text-base leading-10 tracking-wide">
                    MCC’s $304.5 million Namibia Compact (2009-2014) funded the $145
                    million Education Project which included the Improving the Quality
                    of General Education Activity (Education Activity) and the Improving
                    Access to and Management of Textbooks Activity (Textbook Activity),
                    which aimed to improve the quality of the Namibian workforce by
                    enhancing the equity and effectiveness of basic education. The
                    Education Activity rehabilitated nearly 50 schools and funded
                    training for school personnel. The Textbook Activity distributed
                    textbooks to all Namibian schools and supported textbook procurement
                    and management reforms.
                </p>
                <a class="hover:underline underline-offset-4 text-blue-600"
                    href="https://www.mcc.gov/resources/doc/evalbrief-010120-nam-edu" target="_blank">More Details</a>
            </div>
        </div>
    </div>

    <!-- ! Education Ends -->
@endsection
