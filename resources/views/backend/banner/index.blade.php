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
                            <table id="example" class="display" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sl</th>
                                        <th>Photo</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Condition</th>
                                        <th>Use Status</th>
                                        <th>Action</th>
                                    </tr>
                                <tbody>
                                    <tr>
                                        <td>Tiger Nixon</td>
                                        <td>System Architect</td>
                                        <td>Edinburgh</td>
                                        <td>61</td>
                                        <td>2011-04-25</td>
                                        <td>$320,800</td>
                                        <td>$320,800</td>
                                    </tr>
                                </tbody>
                                </thead>
                            </table>
                            <table class="table table-bordered">
                                <thead>
                                    <tr style="text-align: center">
                                        <th>
                                            sl
                                        </th>
                                        <th>
                                            Photo
                                        </th>
                                        <th>
                                            Title
                                        </th>
                                        <th>
                                            Description
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Condition
                                        </th>
                                        <th>
                                            Use Status
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($banner as $row)
                                        <tr style="text-align:center">
                                            <td>
                                                {{ $loop->index + 1 }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('/backend/banner/' . $row->photo) }}" height="50"
                                                    width="50" />
                                            </td>
                                            <td>
                                                {{ $row->title }}
                                            </td>
                                            <td>
                                                {{ $row->description }}
                                            </td>
                                            <td>
                                                @if ($row->status == 1)
                                                    <span class="badge badge-success">
                                                        Active
                                                    </span>
                                                @else
                                                    <span class="badge badge-danger">
                                                        Inactive
                                                    </span>
                                                @endif
                                            </td>

                                            <td>
                                                @if ($row->condition == 1)
                                                    <span class="badge badge-success">Banner</span>
                                                @else
                                                    <span class="badge badge-primary">Promo</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="progress">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>
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

@section('script')
    new DataTable('#example',{
    paging: false,
    scrollCollapse: true,
    scrollY: '50vh'
    });
@endsection
