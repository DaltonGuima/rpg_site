@extends('layouts.main')

@section('home', 'header-red-home')

@section('title', 'Home')
    
@section('dice-home')
    
    <div class="container hero">
        <div class="row">
            <div class="col-12 col-lg-6 col-xl-5 offset-xl-1">
                <h1>The revolution is here.</h1>
                <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis sapien viverra convallis. In non tempus lorem. </p>
                <a href="/about_sheet"><button class="btn btn-light btn-lg action-button" type="button">Learn More</button></a>
            </div>
            <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 d-none d-lg-block phone-holder">
                <div class="dice-mockup"><img src="/images/d20loko.png" class="dice">
                    <div class="screen"></div>
            </div>
        </div>
    </div>

@endsection

    

@section('content')
{{-- Cards --}}
  <div class="container">
    <div class="row pt-5 m-auto">
      <div class="col-md-6 col-lg-4 pb-3">

        <!-- Copy the content below until next comment -->
        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Card has minimum height set but will expand if more space is needed for card body content. You can use Bootstrap <a href="https://getbootstrap.com/docs/4.0/components/card/#card-decks" target="_blank">card-decks</a> to align multiple cards nicely in a row.</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="#" class="btn btn-primary">Option</a>
            <a href="#" class="btn btn-outline-primary">Other option</a>
          </div>
        </div>
        
        <!-- Copy until here -->

      </div>
      <div class="col-md-6 col-lg-4 pb-3">

        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Card has minimum height set but will expand if more space is needed for card body content. You can use Bootstrap <a href="https://getbootstrap.com/docs/4.0/components/card/#card-decks" target="_blank">card-decks</a> to align multiple cards nicely in a row.</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="#" class="btn btn-primary">Option</a>
            <a href="#" class="btn btn-outline-primary">Other option</a>
          </div>
        </div>
        
      </div>
      <div class="col-md-6 col-lg-4 pb-3">

        <div class="card card-custom bg-white border-white border-0">
          <div class="card-custom-img" style="background-image: url(http://res.cloudinary.com/d3/image/upload/c_scale,q_auto:good,w_1110/trianglify-v1-cs85g_cc5d2i.jpg);"></div>
          <div class="card-custom-avatar">
            <img class="img-fluid" src="http://res.cloudinary.com/d3/image/upload/c_pad,g_center,h_200,q_auto:eco,w_200/bootstrap-logo_u3c8dx.jpg" alt="Avatar" />
          </div>
          <div class="card-body" style="overflow-y: auto">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Card has minimum height set but will expand if more space is needed for card body content. You can use Bootstrap <a href="https://getbootstrap.com/docs/4.0/components/card/#card-decks" target="_blank">card-decks</a> to align multiple cards nicely in a row.</p>
          </div>
          <div class="card-footer" style="background: inherit; border-color: inherit;">
            <a href="#" class="btn btn-primary">Option</a>
            <a href="#" class="btn btn-outline-primary">Other option</a>
          </div>
        </div>
        
      </div> 
    </div>
  </div>
  {{-- Menu css --}}
  <div class="Container-Menu">
    <ul class="Menu-CSS">
      <li style="--clr:#00ade1">
        <a href="#" data-text="&nbsp;Home">&nbsp;Home</a>
      </li>
      <li style="--clr:#ff6493">
        <a href="#" data-text="&nbsp;About">&nbsp;About</a>
      </li>
      <li style="--clr:#ffdd1c">
        <a href="#" data-text="&nbsp;Services">&nbsp;Services</a>
      </li>
      <li style="--clr:#00dc82">
        <a href="#" data-text="&nbsp;Team">&nbsp;Team</a>
      </li>
      <li style="--clr:#dc00d4">
        <a href="#" data-text="&nbsp;Contact">&nbsp;Contact</a>
      </li>
    </ul>
  </div>
@endsection     
