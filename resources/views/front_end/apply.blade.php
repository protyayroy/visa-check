@php
    $active = 'apply';
@endphp
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
        <div class="w-full md:w-[640px] lg:w-[768px] xl:w-[1024px] 2xl:w-[1280px] border px-8 shadow-lg py-10 rounded-lg mt-10">
            <div class="w-full mb-10">
                <h2 class="text-center text-2xl font-bold tracking-wide underline underline-offset-8">
                    Apply for Visa
                </h2>
            </div>
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    <label for="nationality" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Nationality
                    </label>
                    <select name="nationality" id="nationality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" disabled selected>Select Nationality</option>
                            @foreach (DB::table('country')->get() as $country)
                                <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
                            @endforeach
                        </select>
                    @error('nationality')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div>
                    <label for="country_of_residence" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Country of Residence
                    </label>
                    <select name="country_residence" id="country_of_residence" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" disabled selected>Select Country of Residence</option>
                            @foreach (DB::table('country')->get() as $country)
                                <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
                            @endforeach
                        </select>
                    @error('country_residence')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div>
                    <label for="former_nationality" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Former Nationality
                    </label>
                    <select name="former_nationality" id="former_nationality" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                            <option value="" disabled selected>Select Former Nationality</option>
                            @foreach (DB::table('country')->get() as $country)
                                <option value="{{ $country->nicename }}">{{ $country->nicename }}</option>
                            @endforeach
                        </select>
                    @error('former_nationality')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div>
                    <label for="visa_consulate" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Visa Consulate
                    </label>
                    <input value="{{ old('consulate') }}"  type="text" id="visa_consulate" name="consulate"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Visa Consulate" required />
                    @error('consulate')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div>
                    <label for="select_visa_submission_mode" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Select Visa Submission Mode
                    </label>
                    <ul
                        class="items-center w-full text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg sm:flex ">
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r ">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-license" type="radio" value="Citizenship"
                                    name="submission_mode"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " />
                                <label for="horizontal-list-radio-license"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 ">
                                    Citizenship
                                </label>
                            </div>
                        </li>
                        <li class="w-full border-b border-gray-200 sm:border-b-0 sm:border-r ">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-id" type="radio" value="Business Visa"
                                    name="submission_mode"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " />
                                <label for="horizontal-list-radio-id"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 ">
                                    Business Visa
                                </label>
                            </div>
                        </li>
                        <li class="w-full ">
                            <div class="flex items-center pl-3">
                                <input id="horizontal-list-radio-passport" type="radio" value="E-Visa"
                                    name="submission_mode"
                                    class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 " />
                                <label for="horizontal-list-radio-passport"
                                    class="w-full py-3 ml-2 text-sm font-medium text-gray-900 ">
                                    E-Visa
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div>
                    <label for="mobile_no" class="block mb-2 text-sm font-medium text-gray-900 ">
                        Mobile No
                    </label>
                    <input value="{{ old('mobile') }}"  type="tel" id="mobile_no" name="mobile"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                        placeholder="Mobile No" required />
                    @error('mobile')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
            </div>
            <div class="mb-6">
                <label for="datepicker" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Date of Birth  <small>(year-month-date)</small>
                </label>
                <input type="text" id="datepicker" name="date_of_birth"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "  value="{{ date('Y-m-d') }}"
                        required />
                @error('date_of_birth')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <div class="mb-6">
                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 ">
                    E-mail
                </label>
                <input value="{{ old('email') }}"  type="email" id="email" name="email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="E-mail" required />
                @error('email')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <div class="mb-6">
                <label for="re_email" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Re-enter E-mail
                </label>
                <input value="{{ old('re_email') }}"  type="email" id="re_email" name="re_email"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                    placeholder="E-mail" required />
                @error('re_email')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <div class="mb-6">
                <label for="sponsor" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Sponsor
                </label>
                <input value="{{ old('sponsor') }}"  type="text" id="sponsor" name="sponsor"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Sponsor" required />
                @error('sponsor')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <div class="mb-6">
                <label for="details" class="block mb-2 text-sm font-medium text-gray-900 ">
                    Details (Fails) all Documents
                </label>
                <input  type="file" id="details" name="document"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 "
                    placeholder="Details (Fails) all Documents" required />
                @error('document')
                    <small class="text-danger">{{ $message }}*</small>
                @enderror
            </div>
            <button id="alertButton" type="submit"
                class="text-white  bg-blue-700 hover:bg-blue-800 font-medium rounded-md text-base w-full sm:w-auto px-20 py-2 mt-10 text-center">
                Submit
            </button>
        </div>
    </form>

    <!-- ! Apply Form Ends -->
@endsection
