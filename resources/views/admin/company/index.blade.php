@extends('admin.app') 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Company Table</h4>
              <p class="card-description">
                <a href="{{ route('company.create')}}" class="btn btn-primary mr-2">Add Company</a>
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Title</th>
                      <th>Email</th>
                      <th>Description</th>
                      <th>Phone</th>
                      <th>Link</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>   
                    @if(count($companys) < 1) 
                    <tr>
                      <td class="text-center" colspan="12">
                          No data found
                      </td>
                  </tr>
                    @endif
                    @foreach($companys as $company)
                    <tr>
                      <td>{{$company->name}}</td>
                      <td>{{ $company->title }}</td>
                      <td>{{$company->email}}</td>
                      <td>{{ $company->description }}</td>
                      <td>{{ $company->phone }}</td>
                      <td>{{ $company->link }}</td>
                      <td><a class="btn btn-success"  href="{{ route('company.edit',['id' => $company->id]) }}">
                        Edit
                    </a></td>
                      <td><a class="btn btn-danger" onclick="return confirm('Are you sure!!')" href="{{ route('company.delete',['id'=>$company->id]) }}">
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