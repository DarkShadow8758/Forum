@extends('layouts.gpt')


@section('content')

<div class="form-container">
  <form class="form">
      <div class="title">Contact us</div>
      <input type="text" placeholder="Your email" class="input">
      <textarea placeholder="Your message"></textarea>
      
      <button>Submit</button>
  </form>
</div>

@endsection