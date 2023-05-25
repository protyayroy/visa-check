@php
    $active = 'application';
@endphp
@extends('admin.layouts.layout')
@section('title')
    Application
@endsection

@section('content')
    <div class="card">
        <div class="card-header main_header mt-3">
            <h4 class="text-center mb-0"><i class="fa-brands fa-cc-visa"></i> Visa Application
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
                <table id="bootstrap_datatable" class="table table-dark table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nationality</th>
                            <th>Former Nationality</th>
                            <th>Country of Residence</th>
                            <th>Visa Consulate</th>
                            <th>Visa Submission Mode</th>
                            <th>Mobile No.</th>
                            <th>Date of Birth</th>
                            <th>E-mail</th>
                            <th>Sponsor</th>
                            <th>Documents</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($applications as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->nationality }}</td>
                                <td>{{ $item->former_nationality }}</td>
                                <td>{{ $item->country_residence }}</td>
                                <td>{{ $item->consulate }}</td>
                                <td>{{ $item->submission_mode }}</td>
                                <td>{{ $item->mobile }}</td>
                                <td>{{ $item->date_of_birth }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->sponsor }}</td>
                                <td>
                                    <a href="{{ url('documents/' . $item->document) }}" class="text-success action_btn"
                                        target="_blank"><i class="fa-solid fa-file-pdf"></i></a>
                                </td>
                                <td>
                                    <a href="javascript:" class="text-danger action_btn delete_item"
                                        title="Delete Application" item_id={{ $item->id }}>
                                        <i class="fa-solid fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        $('.delete_item').click(function(e) {
            e.preventDefault();
            if (confirm("Do you want to delete this?")) {
                var id = $(this).attr('item_id');
                var deleteApplicationRoute = "{{ route('delete.application', ['application' => ':id']) }}";
                deleteApplicationRoute = deleteApplicationRoute.replace(':id', id);
                window.location.href = deleteApplicationRoute;
            }
        });
    </script>
@endsection
