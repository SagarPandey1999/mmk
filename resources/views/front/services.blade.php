<div id="services" class="our-services section">
    <div class="services-right-dec">
      <img src="assets/images/services-right-dec.png" alt="">
    </div>
    <div class="container">
      <div class="services-left-dec">
        <img src="assets/images/services-left-dec.png" alt="">
      </div>
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading">
            <h2>We <em>Provide</em> The Best Service With <span>Our Tools</span></h2>
            <span>Our Services</span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <div class="owl-carousel owl-services">
            @foreach($services as $service)
            <div class="item">
              <h4>{{ $service->name }}</h4>
              <div class="icon"><img src="/serviceimage/{{$service->image}}" alt=""></div>
              <p>{{ $service->description }}</p>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>