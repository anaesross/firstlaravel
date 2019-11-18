<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center m-5">Página Home</h1>
    <table class="table container-fluid flex-column d-flex justify-content-center align-items-center">
        <thead class="thead-dark">
            <tr>
                <th class="col-6">id</th>
                <th class="col-6">Nome</th>
            </tr>
        </thead>
        <tbody>
        @foreach($listaUsuarios as $usuario) <!--traz o método de acordo com o model-->
            <tr>
                <th scope="row">{{ $usuario->id }}</th>
                <td>{{ $usuario->nome }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>