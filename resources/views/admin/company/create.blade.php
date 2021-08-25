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
              <form class="forms-sample" method="post" action="{{ route('company.insert') }}">
                  @csrf
                <div class="form-group">
                  <label for="exampleInputName1">Title</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail3">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Description</label>
                  <textarea class="form-control" name="description" id="exampleTextarea1" rows="4"></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputName1">Link</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="link" placeholder="Link">
                </div>
                <div class="form-group">
                    <label for="exampleInputName1">Phone</label>
                    <input type="number" class="form-control" id="exampleInputName1" name="phone" placeholder="Phone">
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