@extends('admin.app') 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Users Table</h4>
              <p class="card-description">
                {{-- Add class <code>.table-hover</code> --}}
              </p>
              <div class="table-responsive">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Last Seen</th>
                      <th></th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($users) < 1) 
                    <tr>
                      <td class="text-center" colspan="12">
                          No data found
                      </td>
                  </tr>
                    @endif
                      @foreach($users as $user)
                    <tr>
                      <td>{{$user->name}}</td>
                      <td>{{$user->email}}</td>
                      <td>
                        {{ Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}
                      </td>
                      <td>
                        @if(Cache::has('user-is-online-' . $user->id))
                            <span class="text-success">Online</span>
                        @else
                            <span class="text-secondary">Offline</span>
                        @endif
                      </td>
                      <td><a class="btn btn-danger" onclick="return confirm('Are you sure!!')" href="{{ route('user.delete',['id'=>$user->id]) }}">
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