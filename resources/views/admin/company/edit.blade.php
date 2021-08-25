@extends('admin.app') 
@section('content')
<div class="main-panel">        
    <div class="content-wrapper">
      <div class="row"> 
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Edit Company</h4>
              <p class="card-description">
                {{-- Basic form elements --}}
              </p>
              <form class="forms-sample" method="post" action="{{ route('company.update') }}">
                  @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Title</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Title" value="{{ $company->title  ? $company->title : null }}">
                  <input type="hidden" name="id" value="{{ $company->id }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name" value="{{ $company->name ? $company->name : null }}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email" value="{{ $company->email ? $company->email : null }}">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleTextarea1" rows="4">{{ $company->description ? $company->description : null }}</textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Link</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="link" placeholder="Link" value="{{ $company->link ? $company->link : null }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Phone</label>
                    <input type="number" class="form-control" id="exampleInputName1" name="phone" placeholder="Phone" value="{{ $company->phone ? $company->phone : null }}">
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