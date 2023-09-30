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
                        <h4 class="card-title">Add Product</h4>
                        <form class="forms-sample" action="{{ route('product.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12 d-flex">
                                <div class="col-md-8">
                                    <div class="col-md-8 float-left d-flex">
                                        <div class="form-group col-md-6 m-1">
                                            <input type="text" name="title"
                                                class="form-control form-control-sm text-center" placeholder="Title"
                                                aria-label="Username">
                                        </div>
                                        <div class="form-group col-md-6 m-1">
                                            <input type="text" name="stock"
                                                class="form-control form-control-sm text-center" placeholder="stock"
                                                aria-label="Username">
                                        </div>
                                        <div class="form-group col-md-6 m-1">
                                            <input type="text" name="price"
                                                class="form-control form-control-sm text-center" placeholder="price"
                                                aria-label="Username">
                                        </div>
                                    </div>

                                    <div class="col-md-8 float-left d-flex">
                                        <div class="form-group col-md-6 m-1 ">
                                            <select name="size" class="form-control form-control-sm text-cente"
                                                id="exampleFormControlSelect3">
                                                <option class="text-center" value="">--size--</option>
                                                <option class="text-center" value="1"
                                                    {{ old('size') == 'size' ? 'selectrd' : '' }}>s</option>
                                                <option class="text-center" value="2"
                                                    {{ old('size') == 'size' ? 'selectrd' : '' }}>M</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6 m-1">
                                            <input type="text" name="offer_price"
                                                class="form-control form-control-sm text-center" placeholder="offer_price"
                                                aria-label="Username">
                                        </div>
                                        <div class="form-group col-md-6 m-1">
                                            <input type="text" name="discount"
                                                class="form-control form-control-sm text-center" placeholder="discount"
                                                aria-label="Username">
                                        </div>

                                    </div>

                                    <div class="col-md-8 float-lef d-flex">
                                        <div class="form-group col-md-3 m-1 ">
                                            <select name="condition" class="form-control form-control-sm text-cente"
                                                id="exampleFormControlSelect3">
                                                <option class="text-center" value="">--Condition--</option>
                                                <option class="text-center" value="1"
                                                    {{ old('condition') == 'new' ? 'selectrd' : '' }}>new</option>
                                                <option class="text-center" value="2"
                                                    {{ old('condition') == 'popular' ? 'selectrd' : '' }}>popular</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-md-3 m-1">
                                            <select name="status" class="form-control form-control-sm"
                                                id="exampleFormControlSelect3">
                                                <option class="text-center" value="">--status--</option>
                                                <option class="text-center" value="1"
                                                    {{ old('status') == 'active' ? 'selectrd' : '' }}>Active</option>
                                                <option class="text-center" value="0"
                                                    {{ old('status') == 'inactive' ? 'selectrd' : '' }}>inactive</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 m-1 p-0">
                                            <select name="cat_id" class="form-control form-control-sm"
                                                id="exampleFormControlSelect3">
                                                <option class="text-center" selected disabled>--Category--</option>
                                                @foreach ($categories as $items)
                                                    <option class="text-center" value="{{ $items->id }}">
                                                        {{ $items->title }}</option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group col-md-3 m-1">
                                            <select name="brand_id" class="form-control form-control-sm"
                                                id="exampleFormControlSelect3">
                                                <option class="text-center" selected disabled>--Brand Name--</option>
                                                @foreach ($brand as $items)
                                                    <option class="text-center" value="{{ $items->id }}">
                                                        {{ $items->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-floating col-md-10 ml-3 mt-4">
                                        <div>
                                            <label for="exampleFormControlTextarea1">Short Description</label>
                                        </div>
                                        <textarea class="form-control" name="summary" rows="20" placeholder="Short Description" id="summary"
                                            style="height: 100px"></textarea>

                                    </div>
                                    <div class="form-floating col-md-10 ml-3 mt-4">
                                        <div>
                                            <label for="exampleFormControlTextarea1"> Long Description</label>
                                        </div>
                                        <textarea class="form-control" name="description" rows="20" placeholder="Long Description" id="description"
                                            style="height: 100px"></textarea>
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
                            </div>
                            <div class="col-md-4 mt-3 floate-left">
                                <button type="submit" class="btn btn-primary mr-2 mt-5">Submit</button>
                                <button class="btn btn-light mt-5">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
    @section('script')
        <script>
            $(document).ready(function() {
                $("#summary").summernote();
                $('.dropdown-toggle').dropdown();
            });
        </script>

        <script>
            $(document).ready(function() {
                $('#description').summernote();
                $('.dropdown-toggle').dropdown();
            });
        </script>
    @endsection
