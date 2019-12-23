<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Usuario</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        form{
            display: flex;
            flex-direction: column;
           
            width: 40%;
            margin: 0 30%;
        }
        form input{
            width: 100%;
            border: none;
            box-shadow: 0px 1px 3px rgb(40,40,40);
            border-radius: 3em;
            outline: none;
            padding: 20px 25px;
            margin-bottom: 10px;
        }

        form input[type="submit"] {
            background: rgb(10,60,160);
            font-size: 1em;
            color: white;
        }
        form h1{
            font-family: arial;
            font-size: 3em;
            color: rgb(10,60,160);
            margin-bottom: 10px;
            text-align: center;
        }
        a{
            text-decoration: none;
            color: rgb(10,60,160);
            border: 1px solid rgb(60,60,60);
            border-radius: 1em;
            padding: 10px 30px;
        }
    </style>
</head>
<body>
    <br>
    <br>
    <br>
    <form action="{{route('user.update', ['user'=>$user->id])}}" method="post">
        <h1>Edição De Usuario</h1>
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{$user->name}}">
        <input type="text" name="email" value="{{$user->email}}">
        <input type="text" name="password">
        <input type="submit" value="Salvar">
        <br>
        <div>
            <a href="{{route('user.index')}}">Voltar</a>
        </div>
    </form>

</body>
</html>