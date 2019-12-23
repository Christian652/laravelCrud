<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listar Usuarios</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            display: flex;
            justify-content: center;
            flex-direction: column;
        }

        table{
            border-collapse: collapse;
            border: 1px solid rgb(211,211,211);
        }

        table thead{
            background: black;
            color: white;
            font-family: arial;
        }

        table thead th{
            padding: 10px 0px;
        }

        table td{
            border: 1px solid rgb(211,211,211);
            padding: 0 10px;
        }
        table tr:nth-child(odd){
            background: rgb(211,211,211,.3);
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <th>id</th>
            <th>name</th>
            <th>email</th>
            <th>password</th>
            <th>ações</th>
        </thead>

        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->password }}</td>
                <td>
                    <a href="{{Route('user.show', ['user' => $user->id])}}">Vizualizar</a>

                    <form action="{{Route('user.destroy', ['user'=>$user->id])}}" method="post">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Deletar">
                    </form>

                    <a href="{{route('user.edit',['user'=>$user->id])}}">Editar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('user.create')}}">Cadastrar Um Usuario</a>
</body>
</html>