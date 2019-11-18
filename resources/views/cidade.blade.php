<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cidades</title>
</head>
<body>
    <h1 class="text-center m-5">Lista de Cidades</h1>
        <table class="table container">
            <thead class="thead-dark">
                <tr class="text-center">
                    <th>id</th>
                    <th>Nome</th>
                </tr>
            </thead>
            @foreach($listacidades as $cidade) <!--traz o método de acordo com o model-->
            <tbody>
                <tr class="text-center">
                    <th scope="row">{{ $cidade->id }}</th>
                    <td>{{ $cidade->nome }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
</body>
</html>