@php
    $active = 'add_approval';
@endphp
@extends('admin.layouts.layout')
@section('title')
    Add Approve
@endsection

@section('content')
    <div class="card">
        <div class="card-header main_header mt-3">
            <h4 class="text-center mb-0"><i class="fa-solid fa-square-check"></i> Add Visa Approve
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
            </div>

            <form action="{{ route('store.approval') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                    @error('name')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nationality">Nationality:</label>
                    <input type="text" class="form-control" id="nationality" name="nationality"
                        placeholder="Enter Nationality">
                    @error('nationality')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date Of Birth:</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                    @error('date_of_birth')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="passport_number">Passport Number:</label>
                    <input type="text" class="form-control" id="passport_number" name="passport_number"
                        placeholder="Enter Passport Number">
                    @error('passport_number')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="confirmation_number">Confirmation Number:</label>
                    <input type="text" class="form-control" id="confirmation_number" name="confirmation_number"
                        placeholder="Enter Confirmation Number">
                    @error('confirmation_number')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="pdf">Send PDF:</label>
                    <input type="file" class="form-control" id="pdf" name="pdf"
                        placeholder="Enter Confirmation Number">
                    @error('pdf')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-plus"></i> Add Approve</button>
            </form>
        </div>
    </div>
@endsection
