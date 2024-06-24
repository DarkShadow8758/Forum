@extends('layouts.gpt')


@section('content')

<h2>Hello! {{ Auth::user()->name }}</h2>

    <div class= "container">
        
        @if($user != null)
  <form id="registration-form" action="{{ route('updateUser', [$user->id]) }}" method="post" >
    @csrf
    @method('put')
    <input type="text" id="name" name="name" placeholder="Nome" value="{{ $user->name}}" required>
    @error('name') <span>{{ $message }} </span> @enderror
    <input type="email" id="email" name="email" placeholder="E-mail" value="{{ $user->email}}" required>
    @error('email') <span>{{ $message }} </span> @enderror
    <input type="password" id="password" name="password" placeholder="Senha"  >
    @error('password') <span>{{ $message }} </span> @enderror
    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Senha de Confirmação" >
    <!--<input type="text" id="datepicker" placeholder="Data de Nascimento" required title="Preencher o campo">-->
    <input type="submit" value="Edit" id="submit-button">
    <form id="registration-form" action="{{ route('deleteUser', [$user->id]) }}" method="post" >
    @csrf
    @method('delete')
    <input type="submit" value="Deletar" id="submit-button">
  </form>
  </form>
 
  
  @endif
    </div>


@endsection