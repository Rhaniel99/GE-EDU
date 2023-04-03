@extends('templates.template')


@section('content')
<div class="main-login">
        <div class="left-login">
            <h1 class="title">Seja bem-vindo <br> Faça seu Login </h1>
            <img src="{{url('assets/svg/student.svg')}}" class="left-image" alt="student animation">
        </div>
        
        <div class="right-login">
            <div class="card-login">
                <h1>LOGIN</h1>
                <div class="textfield">
                    <label for="usuario">Usuário</label>
                    <input type="text" name="usuario" placeholder="Usuário">
                </div>
                <div class="textfield">
                    <label for="senha">Senha</label>
                    <input type="password" name="senha" placeholder="Senha">
                </div>
                <button class="btn-login">Login</button>
            </div>
        </div>
    </div>

@endsection