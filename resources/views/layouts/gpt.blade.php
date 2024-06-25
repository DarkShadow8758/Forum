<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
  integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
  crossorigin="anonymous" 
  referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
  <link rel="stylesheet" href="{{asset ('css/style.css')}}">

  <title>Document</title>
</head>
<body>
  <div class="navigation">
    <ul>
      <li>
        <a href="{{url('/')}}">
          <span class="icon"><i class="fa-solid fa-house"></i></span>
          <span class="title">Home</span>
        </a>
      </li>
      @if(Auth::check())
      <li>
      <a href="{{url('/users/profile')}}">
          <span class="icon"><i class="fa-solid fa-user"></i></span>
          <span class="title">Profile {{ Auth::user()->name }}</span>
        </a>
      </li>
      @endif
      @if(Auth::guest())
      <li>
        <a href="{{url('/auth')}}">
          <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
          <span class="title">Login</span>
        </a>
      </li>
      @endif
      <li>
        <a href="{{url('/createPost')}}">
          <span class="icon"><i class="fa-solid fa-comment"></i></span>
          <span class="title">Posts</span>
        </a>
      </li>
      <li>
        <a href="{{url('/help')}}">
          <span class="icon"><i class="fa-solid fa-circle-question"></i></span>
          <span class="title">Help!</span>
        </a>
      </li>
      @if(Auth::check())
      <li>
      
      <a href="{{route('listUser', [Auth::user()->id])}}">
          <span class="icon"><i class="fa-solid fa-gear"></i></span>
          <span class="title">Edit Profile</span>
        </a>
      </li>
      @endif
      <li>
        <a href="{{url('/users')}}">
          <span class="icon"><i class="fa-solid fa-lock"></i></span>
          <span class="title">Admin</span>
        </a>
      </li>
      @if(Auth::check())
      <li>
        <a href="{{url('/logout')}}">
          <span class="icon"><i class="fa-solid fa-arrow-right-from-bracket"></i></span>
          <span class="title">Sair</span>
        </a>
      </li>
      @endif
    </ul>
   

  </div> 
  <div class="content">
    @yield('content')
    </div>   
  <div class="toggle" onclick = "toggleMenu();"></div>
  <script type="text/javascript">
    function toggleMenu(){
      let navigation = document.querySelector('.navigation');
      let content = document.querySelector('.content');
      let toggle = document.querySelector('.toggle');
      navigation.classList.toggle('active');
      content.classList.toggle('active');
      toggle.classList.toggle('active');
    }

  </script>
        
 
 
 

</body>
</html>