@php
    $active = 'dashboard';
@endphp
@extends('admin.layouts.layout')
@section('title')
    Profile
@endsection

@section('content')
    <div class="card">
        <div class="card-header main_header mt-3">
            <h4 class="text-center mb-0"><i class="fa-solid fa-user"></i> {{ auth()->user()->name }}
                Profile
            </h4>
        </div>
        <div class="card-body body-content">
            <div class="pt-3">
                @if (Session::has('success_message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Success:</strong> {{ Session('success_message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row">
                    <div class="col-4">
                        <div class="row">
                            <div class="profile-image">
                                @if (!empty(auth()->user()->image))
                                    <img src="{{ url('file/admins/' . auth()->user()->image) }}"
                                        alt="{{ auth()->user()->image }}" class="img-fluid">
                                @else
                                    <img src="{{ url('file/dummy_image/person.webp') }}"
                                        alt="images/dummy_image/person.webp" class="img-fluid">
                                @endif
                                @if (!empty(auth()->user()->image))
                                    <div class="overlay text-center">
                                        <div class="image-button">
                                            <a href="{{ url('file/admins/' . auth()->user()->image) }}"
                                                class="btn btn-info mb-4">View
                                                Image</a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                            <div class="col-12 form_card mt-4">
                                @if ($errors->any())
                                    <div class="alert alert-danger text-center">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        @foreach ($errors->all() as $error)
                                            {{ $error }}
                                        @endforeach
                                    </div>
                                @endif
                                <h4>Upload Profile Image</h4>
                                <form action="{{ route('profile.image.update') }}" enctype="multipart/form-data" method="POST">
                                    @csrf
                                    <label for="update_image">Choose Image:</label>
                                    <input type="file" name="update_image" id="update_image" class="form-control-file">
                                    <button class="btn btn-primary mt-2 float-right"><i class="fa-solid fa-rotate"></i>
                                        &nbsp; Update Image</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <a href="{{ route('profile.edit') }}" class="btn btn-info float-right mb-2"> Edit Profile &nbsp;
                            <i class="fa-sharp fa-solid fa-arrow-right"></i>
                        </a>
                        <div class="clearfix"></div>
                        <table class="table table-bordered">
                            <tr>
                                <th>Name:</th>
                                <td>{{ auth()->user()->name }}</td>
                            </tr>
                            <tr>
                                <th>Email:</th>
                                <td>{{ auth()->user()->email }}</td>
                            </tr>
                            <tr>
                                <th>Mobile:</th>
                                <td>{{ auth()->user()->mobile }}</td>
                            </tr>
                            <tr>
                                <th>Address:</th>
                                <td>{{ auth()->user()->address }}</td>
                            </tr>
                            {{-- <tr>
                                <th>Admin Status:</th>
                                <td>
                                    @if (auth('admin')->user()->status === 1)
                                        Active
                                    @else
                                        Inactive
                                    @endif
                                </td>
                            </tr> --}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
