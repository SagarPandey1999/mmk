@extends('admin.app') 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row"> 
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Company</h4>
              <p class="card-description">
                {{-- Basic form elements --}}
              </p>
              <form class="forms-sample" method="post" action="{{ route('service.insert') }}" enctype="multipart/form-data">
                  @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" required>
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleTextarea1" rows="4" required></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Link</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="link" placeholder="Link" required>
                </div>
                <div class="form-group">
                    <label>File upload</label>
                    <input type="file" name="image" id="fileupload" class="form-control" required>
                    {{-- <div class="input-group col-xs-12">
                      <input type="text" id="filepath" class="form-control file-upload-info" disabled placeholder="Upload Image">
                      <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" id="fileupload" type="button">Upload</button>
                      </span>
                    </div> --}}
                  </div>
                <button type="submit" class="btn btn-primary mr-2">Submit</button>
                <button class="btn btn-light">Cancel</button>
              </form>
            </div>
          </div>
        </div>
        
      </div>
    </div>
    <!-- partial -->
  </div>
@endsection
@section('extra_javascripts')
@endsection