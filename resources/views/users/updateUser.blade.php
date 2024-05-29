@extends('layouts.gpt')

@section('header', 'Alterar o usuário')

@section('content')

<div class= "container">
        <h2>Alterar o Usuário</h2>
        <form action="#" method= "post">
            <div class="form-group">
                <label for ="name">Nome:</label>
                <input type = "text" id = "name" name = "name" required>
            </div>
             <div class="form-group">
                <label for ="email">Email:</label>
                <input type = "email" id = "email" name = "email" required>
            </div>
            <div class="form-group">
                <label for ="password">Senha:</label>
                <input type = "text" id = "password" naame = "password" required>
            </div>
            <div class="form-group">
                <button type ="submit">Enviar</button>
            </div>
        </form>
    </div>
    //Fazer formulário de edição


@endsection