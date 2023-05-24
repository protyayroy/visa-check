@php
    $active = 'add_approval';
@endphp
@extends('admin.layouts.layout')
@section('title')
    Edit Approve
@endsection

@section('content')
    <div class="card">
        <div class="card-header main_header mt-3">
            <h4 class="text-center mb-0"><i class="fa-solid fa-square-check"></i> Edit Visa Approve
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

            <form action="{{ route('edit.approval', $visa_approve->id) }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" id="name" name="name"
                        placeholder="Enter Name" value="{{ $visa_approve->name }}">
                    @error('name')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="nationality">Nationality:</label>
                    <input type="text" class="form-control" id="nationality" name="nationality"
                        placeholder="Enter Nationality" value="{{ $visa_approve->nationality }}">
                    @error('nationality')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="date_of_birth">Date Of Birth:</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" value="{{ $visa_approve->date_of_birth }}">
                    @error('date_of_birth')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="passport_number">Passport Number:</label>
                    <input type="text" class="form-control" id="passport_number" name="passport_number"
                        placeholder="Enter Passport Number" value="{{ $visa_approve->passport_number }}">
                    @error('passport_number')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="confirmation_number">Confirmation Number:</label>
                    <input type="text" class="form-control" id="confirmation_number" name="confirmation_number"
                        placeholder="Enter Confirmation Number" value="{{ $visa_approve->confirmation_number }}">
                    @error('confirmation_number')
                        <small class="text-danger">{{ $message }}*</small>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="fa-solid fa-arrows-rotate"></i>Update Approve</button>
            </form>
        </div>
    </div>
@endsection
