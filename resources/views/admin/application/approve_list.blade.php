@php
    $active = 'approve_list';
@endphp
@extends('admin.layouts.layout')
@section('title')
    Approve List
@endsection

@section('content')
    <div class="card">
        <div class="card-header main_header mt-3">
            <h4 class="text-center mb-0"><i class="fa-solid fa-list"></i> Visa Approve List
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
                <table id="bootstrap_datatable" class="table table-bordered w-100">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Date Of Birth</th>
                            <th>Passport Number</th>
                            <th>Confirmation Number</th>
                            <th>Nationality</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($approvels as $item)
                            <tr>
                                <td>{{$item->name}}</td>
                                <td>{{$item->date_of_birth}}</td>
                                <td>{{$item->passport_number}}</td>
                                <td>{{$item->confirmation_number}}</td>
                                <td>{{$item->nationality}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
