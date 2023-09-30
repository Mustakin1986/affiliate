@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Banner List</h4>
                        <p class="card-description">
                        </p>
                        <div class="table-responsive pt-2">
                            <table class="table table-bordered" id="bannerTable">
                                <thead>
                                    <tr style="text-align: center">
                                        <th>
                                            sl
                                        </th>
                                        <th>
                                            Photo
                                        </th>
                                        <th>
                                            full Name
                                        </th>
                                        <th>
                                            User Name
                                        </th>
                                        <th>
                                            Email
                                        </th>
                                        <th>
                                            Phone
                                        </th>
                                        <th>
                                            Address
                                        </th>
                                        {{-- <th>
                                            User Role
                                        </th> --}}
                                        <th>
                                            User Role
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $row)
                                        <tr style="text-align:center">
                                            <td>
                                                {{ $loop->index + 1 }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('/backend/user/' . $row->photo) }}" height="50"
                                                    width="50" />
                                            </td>
                                            <td>
                                                {{ $row->full_name }}
                                            </td>
                                            <td>
                                                {{ $row->user_name }}
                                            </td>
                                            <td>
                                                {{ $row->email }}
                                            </td>
                                            <td>
                                                {{ $row->phone }}
                                            </td>
                                            <td>
                                                {{ $row->address }}
                                            </td>
                                            <td>
                                                {{ $row->role }}
                                            </td>

                                            {{-- <td>
                                                @if ($row->status == active)
                                                    <span class="badge badge-success">Active</span>
                                                @else
                                                    <span class="badge badge-primary">Inactive</span>
                                                @endif
                                            </td> --}}
                                            <td>
                                                <a href="" <span class="btn btn-warning">
                                                    <i class="fa-sharp fa-solid fa-pen-to-square"></i></span>
                                                </a>
                                                <a href="" <span class="btn btn-danger">
                                                    <i class="fa-solid fa-trash"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
