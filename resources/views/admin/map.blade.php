@extends('admin.app') 
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row"> 
        <div class="col-12 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Add Map</h4>
              <p class="card-description">
                {{-- Basic form elements --}}
              </p>
              <form class="forms-sample" method="post" action="{{ route('map.insert') }}" enctype="multipart/form-data">
                  @csrf
                  
                <div class="form-group">
                    <input type="hidden" name="type" value="same" class="form-control >
                  <label for="exampleInputName1">Iframe</label>
                  <textarea type="text" class="form-control" id="exampleInputName1" name="iframe" rows="4"  placeholder="Iframe" required>{{ !empty($map->iframes) ? $map->iframes : null }}</textarea>
                </div>
                
                <div class="form-group">
                  <label for="exampleInputName1">Link</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="link" placeholder="Link" value= "{{ !empty($map->link) ? $map->link : null }}" required>
                </div>
                <div class="form-group">
                    <label for="exampleTextarea1">Mobile 1</label>
                    <input type="number" class="form-control" id="exampleInputName1" name="mobileone" placeholder="mobileone" value="{{ !empty($map->mobileone) ? $map->mobileone : null }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Mobile 2</label>
                    <input type="number" class="form-control" id="exampleInputName1" name="mobiletwo" placeholder="mobiletwo" value="{{ !empty($map->mobiletwo) ? $map->mobiletwo : null }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Email 1</label>
                    <input type="email" class="form-control" id="exampleInputName1" name="emailone" placeholder="emailone" value="{{ !empty($map->emailone) ? $map->emailone : null }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Email 2</label>
                    <input type="email" class="form-control" id="exampleInputName1" name="emailtwo" placeholder="emailtwo" value="{{ !empty($map->emailtwo) ? $map->emailtwo : null }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Facebook</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="facebook" placeholder="Facebook Link" value="{{ !empty($map->facebook) ? $map->facebook : null }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Instagram</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="instagram" placeholder="Instagram Link" value="{{ !empty($map->instagram) ? $map->instagram : null }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">Twitter</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="twitter" placeholder="Twitter Link" value="{{ !empty($map->twitter) ? $map->twitter : null }}" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleTextarea1">LinkedIn</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="linkedin" placeholder="Linkedin Link" value="{{ !empty($map->linkedin) ? $map->linkedin : null }}" required>
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