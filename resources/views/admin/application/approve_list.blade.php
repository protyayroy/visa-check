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
                <table id="bootstrap_datatable" class="table table-dark table-bordered" style="width:100%">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date Of Birth</th>
                            <th>Passport Number</th>
                            <th>Confirmation Number</th>
                            <th>Nationality</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($approvels as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->date_of_birth }}</td>
                                <td>{{ $item->passport_number }}</td>
                                <td>{{ $item->confirmation_number }}</td>
                                <td>{{ $item->nationality }}</td>
                                <td>
                                    <a href="{{ route('show.approval', $item->id) }}" class="action_btn text-info"
                                        title="Edit Approval">
                                        <i class="fa-solid fa-pen-to-square"></i>

                                    </a>
                                    <a href="javascript:" class="text-danger action_btn delete_item" title="Delete Approval"
                                        item_id={{ $item->id }}>
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
                var deleteApprovalRoute = "{{ route('delete.approval', ['visa_approve' => ':id']) }}";
                deleteApprovalRoute = deleteApprovalRoute.replace(':id', id);
                window.location.href = deleteApprovalRoute;
            }
        });
    </script>
@endsection
