<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do usuario</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        ul{
            display: flex;
            flex-direction: column;
            box-shadow: 0px 1px 2px rgb(80,80,80);
            width: 60%;
            margin: 2% 20%;
            border-radius: 1em; 
            padding: 20px 0px 0px 0px;
        }
        ul li{
            list-style: none;
            padding: 10px 30px;
            font-family: arial;
        }

        ul li:nth-child(odd){
            background: rgb(231,231,231);
        }

        ul li:last-child{
            border-bottom-left-radius: 1em;
            border-bottom-right-radius: 1em;
        }
        ul .token{
            width: 90%;
            height: 300px;
            margin: 0 5% 2%;
            border-radius: 0.3em;
            border: 2px solid rgb(60,60,60);
        }
        a{
            margin-left: 30px;
        }
    </style>
</head>
<body>
    <ul>
        <span class="token"></span>
        <hr>
        <li>{{$user->name}}</li>
        <li>{{$user->email}}</li>
        <li>{{$user->password}}</li>
        <li>Cadastrado em: {{date('d/m/y', strtotime($user->created_at))}}</li>
        <a href="{{route('user.index')}}">Voltar</a>
    </ul>
</body>
</html>