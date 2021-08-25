<div class="main-banner" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="owl-carousel owl-banner">
                  @foreach($companys as $company)
                <div class="item header-text">
                  <h6>{{$company->title}}</h6>
                  <h2>{{ $company->name }}</h2>
                  <p>{{ $company->description }}</p>
                  <div class="down-buttons">
                    <div class="call-button">
                        <a href="#"><i class="fa fa-envelope"></i>{{ $company->email }}</a>
                      </div>
                    <div class="call-button">
                      <a href="#"><i class="fa fa-phone"></i>{{ $company->phone }}</a>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>