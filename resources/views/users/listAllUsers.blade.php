@extends('layouts.gpt')

@section('header', 'Listar todos os usuários')

@section('content')

    <table border = "1">
        <tr> 
            <td>Name</td>
            <td>E-mail</td>
            <td>Options</td>
        </tr>
        @foreach ($users as $user)
        <tr>
           
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td><input type="submit" value="Banish" id="submit-button"></td>
           
        </tr>
        @endforeach



@endsection