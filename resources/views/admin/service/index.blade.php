@extends('admin.app') 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Services Table</h4>
              <p class="card-description">
                <a href="{{route('service.create')}}" class="btn btn-primary mr-2">Add Service</a>
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                        <th>Image</th>
                      <th>Name</th>
                      <th>Description</th>
                      <th>Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($services) < 1) 
                    <tr>
                      <td class="text-center" colspan="12">
                          No data found
                      </td>
                  </tr>
                    @endif
                    @foreach($services as $service)
                    <tr>
                        <td class="text-center">
                            
                            <img class="img-fluid" src="/serviceimage/{{$service->image}}">
                            
                        </td>
                      <td>{{$service->name}}</td>
                      <td>{{ $service->description }}</td>
                      <td>{{ $service->link }}</td>
                      <td><a class="btn btn-success"  href="{{ route('service.edit',['id'=>$service->id]) }}">
                        Edit
                    </a></td>
                      <td><a class="btn btn-danger" onclick="return confirm('Are you sure!!')" href="{{ route('service.delete',['id'=>$service->id]) }}">
                        Delete
                    </a></td>
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
    <!-- content-wrapper ends -->
  </div>
@endsection