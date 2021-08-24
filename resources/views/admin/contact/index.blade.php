@extends('admin.app') 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Contact Table</h4>
              <p class="card-description">
                {{-- Add class <code>.table-hover</code> --}}
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Address</th>
                      <th>Phone</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                      @if(count($contacts) < 1) 
                      <tr>
                        <td class="text-center" colspan="12">
                            No data found
                        </td>
                    </tr>
                      @endif
                      @foreach($contacts as $contact)
                    <tr>
                      <td>{{$contact->name}}</td>
                      <td>{{$contact->email}}</td>
                      <td>{{ $contact->address }}</td>
                      <td>{{ $contact->phone }}</td>
                      <td><a class="btn btn-danger" onclick="return confirm('Are you sure!!')" href="{{ route('contact.delete',['id' => $contact->id]) }}">
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