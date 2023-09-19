@extends('backend.layouts.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            {{-- <div class="col-md-12">
            @if ($errors->any)
             <ul>
                @foreach ($errors as $error)
                    <li>{{$error}}</li>
                @endforeach
             </ul>
             @endif
        </div> --}}
            <div class="col-md-12 grid-margin stretch-card d-flex">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Banner</h4>
                        <form class="forms-sample" action="{{ route('brand.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-8 float-left">
                                <div class="col-md-8 float-left d-flex">
                                    <div class="form-group col-md-6 m-1">
                                        <input type="text" name="title"
                                            class="form-control form-control-sm text-center" placeholder="Title"
                                            aria-label="Username">
                                    </div>
                                </div>
                                <div class="col-md-8 float-lef d-flex">
                                    <div class="form-group col-md-6 m-1">
                                        <select name="status" class="form-control form-control-sm"
                                            id="exampleFormControlSelect3">
                                            <option class="text-center" value="">--status--</option>
                                            <option class="text-center" value="active"
                                                {{ old('status') == 'active' ? 'selectrd' : '' }}>Active</option>
                                            <option class="text-center" value="inactive"
                                                {{ old('status') == 'inactive' ? 'selectrd' : '' }}>inactive</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 float-right m-0">
                                <div class="input-group mb-3">
                                    <img src="" id="output" class="rounded float-end " alt="..."
                                        width="250px" height="200px" />
                                </div>
                                <span class="input-group-btn mt-3">
                                    <input type="file" name="photo" class="form-control col-md-6"
                                        id="upload_file  style="width:55%" onchange="loadfile(event)">
                                    </a>
                                </span>
                                <script type="text/javascript">
                                    function loadfile(event) {
                                        var output = document.getElementById('output');
                                        //    var output = document.createElement('img');
                                        //    output.id ='output'
                                        output.src = URL.createObjectURL(event.target.files[0]);
                                        //    upload_file.after(output);
                                    }
                                </script>
                            </div>
                            <div class="ml-3 mb-3 floate-left d-block">
                                <button type="submit" class="btn btn-primary mr-2 mt-5">Submit</button>
                                <button class="btn btn-light mt-5">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
