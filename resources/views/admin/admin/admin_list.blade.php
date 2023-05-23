@php
    $active = 'admin';
@endphp
@extends('admin.layouts.layout')
@section('title')
    Admin
@endsection
@section('content')
    <div class="card">
        <div class="card-header main_header mt-3">
            <h4 class="text-center mb-0"><i class="fa-solid fa-user"></i> All Admin List</h4>
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
                            <th>
                                Admins:
                            </th>
                            <th>
                                Name:
                            </th>
                            <th>
                                Email:
                            </th>
                            <th>
                                Type:
                            </th>
                            <th>
                                Mobile:
                            </th>
                            <th>
                                Address:
                            </th>
                            <th>
                                Action:
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach (App\Models\Admin::get() as $admin)
                            <tr>
                                <td class="image_status">
                                    @if (!empty($admin->image))
                                        <a href="{{ url('' . $admin->image) }}" title="View Image">
                                            <img src="{{ url('' . $admin->image) }}" alt="{{ $admin->image }}"
                                                class="img-fluid">
                                        </a>
                                    @else
                                        <img src="{{ url('images/dummy_image/person.webp') }}" alt="person.png"
                                            title="No Image" class="img-fluid bg-light" style="border:1px solid #ffffff">
                                    @endif
                                    @if ($admin->status == 1)
                                        <a href="javascript:void(0)" class="change_status text-success"
                                            id="admin-{{ $admin->id }}" status_id="{{ $admin->id }}"
                                            status_path="admin">
                                            <i class="fa-sharp fa-solid fa-circle-check" status="Active"></i>

                                        </a>
                                    @else
                                        <a href="javascript:void(0)" class="change_status text-success"
                                            id="admin-{{ $admin->id }}" status_id="{{ $admin->id }}"
                                            status_path="admin">
                                            <i class="fa-regular fa-circle" status="Inactive"
                                                title="Change into active"></i>
                                        </a>
                                    @endif
                                </td>
                                <td>
                                    {{ $admin->name }}
                                </td>
                                <td>
                                    {{ $admin->email }}
                                </td>
                                <td>
                                    {{ ucfirst($admin->type) }}
                                </td>
                                <td>
                                    {{ $admin->mobile }}
                                </td>
                                <td>
                                    {{ $admin->address }}
                                </td>
                                <td>
                                    <a href="{{ route('add-edit.admin', $admin->email) }}" class="action_btn text-info"
                                        title="Edit Admin">
                                        <i class="fa-solid fa-pen-to-square"></i>

                                    </a>
                                    @if ($admin->type !== 'admin')
                                        <a href="javascript:" class="text-danger action_btn delete_row" title="Delete Admin"
                                            delete_id={{ $admin->id }} delete_path="admin">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    @else
                                        <a class="text-danger action_btn" id="disable">
                                            <i class="fa-solid fa-trash"></i>
                                        </a>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
