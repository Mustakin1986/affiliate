@extends('backend.layouts.master')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
    <div class="col-md-12 grid-margin stretch-card d-flex">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Add Banner</h4>
            <form class="forms-sample">
                 <div class="col-md-8 float-left">
                      <div class="col-md-8 float-left d-flex">
                        <div class="form-group col-md-6 m-1">
                            <input type="text" class="form-control form-control-sm text-center" placeholder="Title" name="title" aria-label="Username">
                          </div>
                          <div class="form-group col-md-6 m-1">
                            <input type="text" class="form-control form-control-sm text-center" placeholder="Username" aria-label="Username">
                          </div>
                      </div>
                      <div class="col-md-8 float-lef d-flex">
                        <div class="form-group col-md-6 m-1 ">
                            <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                              <option>banner</option>
                              <option>promo</option>
                            </select>
                           </div>

                          <div class="form-group col-md-6 m-1">
                            <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                              <option>Active</option>
                              <option>inactive</option>
                            </select>
                           </div>
                      </div>
                       <div class="form-group col-md-8 ml-3 mt-4">
                        <textarea class="form-control" id="exampleTextarea1" rows="4" placeholder="Description" name="description"></textarea>
                      </div>
                 </div>
                  <div class="col-md-4 float-right m-0">
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control" type="text" name="filepath">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">
                    </div>
                    {{-- <div class="card align-middle">
                        <div class="mb-3 ml-3">
                            <img src="\backend\images\samples\300x300\1.jpg" class="rounded float-end " alt="..." width="250px" height="200px">
                        </div>
                        <div class="input-group col-md-7">
                            <input type="file" class="form-control" id="inputGroupFile02">
                            <label class="input-group-text" for="inputGroupFile02">Upload</label>
                        </div>
                    </div> --}}
                  </div>
                 <div class="ml-3 mb-3">
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
<script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
<script> $('#lfm').filemanager('image');</script>
@endsection
