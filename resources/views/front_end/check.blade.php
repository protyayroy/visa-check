@extends('front_end.layouts.main')

@section('content')
    <!-- ! Check Info Form Starts -->

    <form class="w-full flex flex-col justify-center items-center px-5 md:px-0">
        <div class="w-full md:w-[640px] lg:w-[768px] xl:w-[1024px] 2xl:w-[1280px]">
            <div class="w-full my-10">
                <h2 class="text-center text-2xl font-bold tracking-wide underline underline-offset-8">
                    Check Visa Status
                </h2>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Name
                    </label>
                    <input type="text" id="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Your Name" required />
                </div>
                <div>
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Date Of Birth
                    </label>
                    <input type="date" id="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required />
                </div>
                <div>
                    <label for="passport_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Passport Number
                    </label>
                    <input type="number" id="passport_number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Passport Number" required />
                </div>
                <div>
                    <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nationality
                    </label>
                    <input type="text" id="nationality"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Your Nationality" required />
                </div>
                <div>
                    <label for="confirmation_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Confirmation Number
                    </label>
                    <input type="number" id="confirmation_number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Enter Confirmation Number" required />
                </div>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Submit
            </button>
        </div>
    </form>

    <!-- ! Check Info Form Ends -->
@endsection
