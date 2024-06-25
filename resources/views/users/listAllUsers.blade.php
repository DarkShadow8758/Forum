@extends('layouts.gpt')

@section('header', 'Listar todos os usuários')

@section('content')
<div class="container-listUsers">
    <table class="table-listUsers" border = "1">
        <tr> 
            <th>Name</th>
            <th>E-mail</th>
            <th colspan="2">Options</th>
        </tr>
        @foreach ($users as $user)
        <tr class="item-listUsers">
           
            <td class="center">{{$user->name}}</td>
            <td class="right">{{$user->email}}</td>
            <td><button class="green">Suspend</button></td>
            <td><button>Banish</bu</td>
           
        </tr>
</div>

        @endforeach



@endsection