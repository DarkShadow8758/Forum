@extends('layouts.gpt')
  
@section('content')


<div class="body-profile">
  <div class="header__wrapper">
    <header class="header-profile"></header>
      <div class="cols__container">
        <div class="left__col">
          <div class="img__container">
            <img class="img-profile" src="{{asset ('img/user.jpeg')}}" alt="Boy" />
              <span class="span-profile"></span>
          </div>
            <h2 class="h2-profile">Boy</h2>
            <p class="p-profile">UI/UX Designer</p>
            <p class="p-profile">3@gmail.com</p>
            <ul class="about">
              <li class="li-profile"><span class="span-profile">4,073</span>Followers</li>
              <li class="li-profile"><span class="span-profile">325</span>Following</li>
              <li class="li-profile"><span class="span-profile">200,543</span>Attractions</li>
            </ul>
            <div class="content">
              <p class="p-profile">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Fugiat itaque, voluptatum 
                ipsum aliquid magni vero et voluptate ipsa, suscipit 
                debitis sunt iste, deleniti mollitia architecto? Tenetur corrupti ipsum maxime officia.
              </p>
              <ul class="ul-profile">
                <li class="li-profile"><i class="fa fa-twitter"></i></li>
                <li class="li-profile"><i class="fa fa-pinterest"></i></li>
                <li class="li-profile"><i class="fa fa-facebook"></i></li>
                <li class="li-profile"><i class="fa fa-dribble"></i></li>
              </ul>
            </div>
        </div>
        <div class="right__col">
          <nav class="nav-profile">
            <ul class="ul-profile">
              <li class="li-profile"><a class="a-profile" href="#">photos</a></li>
              <li class="li-profile"><a class="a-profile" href="#">galleries</a></li>
              <li class="li-profile"><a class="a-profile" href="#">groups</a></li>
              <li class="li-profile"><a class="a-profile" href="#">about</a></li>
            </ul>
            <button class="btn-profile">Follow</button>
          </nav>
          <div class="photos">
            <img class="img-profile" src="{{asset ('img/1.jpg')}}" alt="Photo" />
            <img class="img-profile" src="{{asset ('img/1.jpg')}}" alt="Photo" />
            <img class="img-profile" src="{{asset ('img/1.jpg')}}" alt="Photo" />
            <img class="img-profile" src="{{asset ('img/1.jpg')}}" alt="Photo" />
            <img class="img-profile" src="{{asset ('img/1.jpg')}}" alt="Photo" />
          </div>
        </div>
    </div>
  </div>
</div>
@endsection