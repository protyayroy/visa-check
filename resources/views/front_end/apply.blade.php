@extends('front_end.layouts.main')

@section('content')
    <!-- ! Apply Form Starts -->

    @if (Session::has('success_message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success:</strong> {{ Session('success_message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <form class="w-full flex flex-col justify-center items-center px-5 md:px-0" action="{{ route('apply.create') }}"
        enctype="multipart/form-data" method="post">
        @csrf
        <div class="w-full md:w-[640px] lg:w-[768px] xl:w-[1024px] 2xl:w-[1280px]">
            <div class="w-full my-10">
                <h2 class="text-center text-2xl font-bold tracking-wide underline underline-offset-8">
                    Apply for Visa
                </h2>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Nationality
                    </label>
                    <input type="text" id="nationality" name="nationality"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Nationality" required />
                    @error('nationality')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div>
                    <label for="country_of_residence" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Country of Residence
                    </label>
                    <input type="text" id="country_of_residence" name="country_residence"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Country of Residence" required />
                    @error('country_residence')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div>
                    <label for="former_nationality" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Former Nationality
                    </label>
                    <input type="text" id="former_nationality" name="former_nationality"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Former Nationality" required />
                    @error('former_nationality')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div>
                    <label for="visa_consulate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Visa Consulate
                    </label>
                    <input type="text" id="visa_consulate" name="consulate"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Visa Consulate" required />
                    @error('consulate')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div>
                    <label for="select_visa_submission_mode"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Select Visa Submission Mode
                    </label>
                    <ul
                        class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex dark:bg-gray-700 dark:border-gray-600 dark:text-white">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-license" type="radio" value="Citizenship"
                                    name="submission_mode"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                <label for="horizontal-list-radio-license"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Citizenship
                                </label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-id" type="radio" value="Business Visa"
                                    name="submission_mode"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                <label for="horizontal-list-radio-id"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    Business Visa
                                </label>
                            </div>
                        </li>
                        <li class="w-full dark:border-gray-600">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-passport" type="radio" value="E-Visa"
                                    name="submission_mode"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-700 dark:focus:ring-offset-gray-700 focus:ring-2 dark:bg-gray-600 dark:border-gray-500" />
                                <label for="horizontal-list-radio-passport"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                                    E-Visa
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <label for="mobile_no" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                        Mobile No
                    </label>
                    <input type="number" id="mobile_no" name="mobile"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Mobile No" required />
                    @error('mobile')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label for="date_of_birth" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Date of Birth
                </label>
                <input type="date" id="date_of_birth" name="date_of_birth"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Date of Birth" required />
                @error('date_of_birth')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    E-mail
                </label>
                <input type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="E-mail" required />
                @error('email')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <div class="mb-6">
                <label for="re_email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Re-enter E-mail
                </label>
                <input type="email" id="re_email" name="re_email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="E-mail" required />
                @error('re_email')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <div class="mb-6">
                <label for="sponsor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Sponsor
                </label>
                <input type="text" id="sponsor" name="sponsor"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Sponsor" required />
                @error('sponsor')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <div class="mb-6">
                <label for="details" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                    Details (Fails) all Documents
                </label>
                <input type="file" id="details" name="document"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Details (Fails) all Documents" required />
                @error('document')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Submit
            </button>
        </div>
    </form>

    <!-- ! Apply Form Ends -->
@endsection
