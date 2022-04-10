@extends('layouts.main')

@section('title', 'Sobre fichas')

@section('content')
<div class="container-card">
  <ul class="card-info">
    <li class="card" style="--color:#ececec; --bg-color:#C23D2A">
      <div class="icon"><i class="fa-solid fa-gear"></i></div>
      <div class="title">Lorem ipsum</div>
      <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis pretium euismod. Aenean elit sapien, varius quis ante sit amet, tincidunt finibus orci. Ut consectetur imperdiet quam, at ultrices mi rutrum ut. Sed semper justo quis nisl ornare interdum in ut ante. </div>
    </li>
    <li class="card" style="--color:#ececec; --bg-color:#842C2A">
      <div class="icon"><i class="fa-solid fa-magnifying-glass"></i></div>
      <div class="title">Lorem ipsum</div>
      <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis pretium euismod. Aenean elit sapien, varius quis ante sit amet, tincidunt finibus orci. Ut consectetur imperdiet quam, at ultrices mi rutrum ut. Sed semper justo quis nisl ornare interdum in ut ante. </div>
    </li>
    <li class="card" style="--color:#ececec; --bg-color:#032437">
      <div class="icon"><i class="fa-solid fa-circle-star"></i></div>
      <div class="title">Lorem ipsum</div>
      <div class="content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec iaculis pretium euismod. Aenean elit sapien, varius quis ante sit amet, tincidunt finibus orci. Ut consectetur imperdiet quam, at ultrices mi rutrum ut. Sed semper justo quis nisl ornare interdum in ut ante. </div>
    </li>
  </ul>
</div>
{{-- fichas --}}

<div class="container-ficha">
  <div class="first about-sheet">
    <img class="about-sheet-profile-img" src="https://cdn.gamer-network.net/2018/metabomb/leagueoflegendsbestcarrychampions2018pantheon.jpg" alt="">
    <div class="about-sheet-description-bk"></div>
    <div class="about-sheet-logo">
      <img src="https://miscmedia-9gag-fun.9cache.com/images/thumbnail-facebook/1557291375.3948_Dy2yZu_n.jpg" alt="">
    </div>
    <div class="about-sheet-description">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div  class="about-sheet-date">
      <p>20.02.2019</p>
    </div>
  </div>

  <div class="second about-sheet">
    <img class="about-sheet-profile-img" src="https://i.pinimg.com/originals/9f/b1/ff/9fb1ffb05dd28039d1a06ad8e90cbd75.jpg" alt="">
    <div class="about-sheet-description-bk"></div>
    <div class="about-sheet-logo">
      <img src="https://miscmedia-9gag-fun.9cache.com/images/thumbnail-facebook/1557291375.3948_Dy2yZu_n.jpg" alt="">
    </div>
    <div class="about-sheet-description">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div  class="about-sheet-date">
      <p>20.02.2019</p>
    </div>
  </div>

  <div class="first about-sheet">
    <img class="about-sheet-profile-img" src="https://cdn.gamer-network.net/2018/metabomb/leagueoflegendsbestcarrychampions2018pantheon.jpg" alt="">
    <div class="about-sheet-description-bk"></div>
    <div class="about-sheet-logo">
      <img src="https://miscmedia-9gag-fun.9cache.com/images/thumbnail-facebook/1557291375.3948_Dy2yZu_n.jpg" alt="">
    </div>
    <div class="about-sheet-description">
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
    <div  class="about-sheet-date">
      <p>20.02.2019</p>
    </div>
  </div>
</div>
@endsection