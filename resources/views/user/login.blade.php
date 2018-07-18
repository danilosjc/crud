<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
    <link rel="stylesheet" href="{{ asset('css/stylesheet.css') }}">
</head>
<body>

<section id="conteudo-view" class="login">
    <h1>Gestão</h1>
    <h3>O nosso gerenciador de gestão</h3>

    {!! Form::open(['route' => 'user.login', 'method' => 'post']) !!}

    <p>Acesse o sistema</p>
        {!! Form::text('username', null, [ 'class' => 'input', 'placeholder'=> 'Usuario' ]) !!} <br></br>

    </label>

    <label>
        {!! Form::password('password', ['placeholder' => 'Senha' ]) !!}
    </label>
    <br>
    {!! Form::submit('Entrar') !!}

    {!! Form::close() !!}

</section>

</body>
</html>
