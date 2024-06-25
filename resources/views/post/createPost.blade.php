@extends('layouts.gpt')

@section('content')

<section class="swiper  mySwiper">
  
   
      <div class="card__content">
        <span class="card__title">{{ Auth::user()->name }}</span>
        <p class="post__text">
 
        <div class="bg-white border border-slate-200 grid grid-cols-6 gap-2 rounded-xl p-2 text-sm">
    <h1 class="text-center text-slate-200 text-xl font-bold col-span-6">Send Post</h1>
    <textarea placeholder="Your post..." class="textarea-post"></textarea>
    <div class="buttons-container col-span-6">
      <a>Tags:</a>
    <button class="btn-tag">Game</button>
    <button class="btn-tag">Programer</button>
    <button class="btn-tag">Easy</button>
    <button class="btn-tag">SFX</button>
    <button class="btn-tag">Paths</button>
    <span class="col-span-2"></span>

          <button title="Add New" class="add-new-btn">
            <span class="icon">
              <span class="circle"></span>
              <span class="horizontal-line"></span>
              <span class="vertical-line"></span>
            </span>
          </button>



</div>


          <button class="card__btn">Send</button>
          <button class="button">
  <svg viewBox="0 0 448 512" class="svgIcon"><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"></path></svg>
</button>

          
        </p>
        
      </div>
    </div>
</div>
  </div>
</section>


</div>


@endsection