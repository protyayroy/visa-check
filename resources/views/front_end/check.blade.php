@php
    $active = 'check';
@endphp
@extends('front_end.layouts.main')

@section('content')
    <!-- ! Check Info Form Starts -->
    <form class="w-full flex flex-col justify-center items-center px-5 md:px-0" action="{{ route('check.visa') }}"
        method="GET">
        @csrf
        <div
            class="w-full md:w-[640px] lg:w-[768px] xl:w-[1024px] 2xl:w-[1280px] border px-8 shadow-lg py-10 rounded-lg mt-10">

            @if (Session::has('success_message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Success:</strong> {{ Session('success_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            @if (Session::has('error_message'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Warning:</strong> {{ Session('error_message') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="w-full mb-10">
                <h2 class="text-center text-2xl font-bold tracking-wide underline underline-offset-8">
                    Check Visa Status
                </h2>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Name
                    </label>
                    <input type="text" id="name" name="name"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Enter Your Name" required />
                </div>
                <div>
                    <label for="date" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Date Of Birth
                    </label>
                    <input type="date" id="date" name="date"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        required />
                </div>
                <div>
                    <label for="passport_number" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Passport Number
                    </label>
                    <input type="text" id="passport_number" name="passport_number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Enter Passport Number" required />
                </div>
                <div>
                    <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Nationality
                    </label>
                    <input type="text" id="nationality" name="nationality"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Enter Your Nationality" required />
                </div>
                <div>
                    <label for="confirmation_number" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Confirmation Number
                    </label>
                    <input type="text" id="confirmation_number" name="confirmation_number"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Enter Confirmation Number" required />
                </div>
            </div>
            <button onclick="alerts()" type="submit"
                class="text-white  bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-base w-full sm:w-auto px-20 py-2 mt-10 text-center">
                Submit
            </button>
        </div>
    </form>

    <!-- ! Check Info Form Ends -->
@endsection

{{-- <script>
    const alerts = () => {
        Swal.fire({
            title: 'Success!',
            text: 'SweetAlert2 is working!',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    }
</script> --}}
