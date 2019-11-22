<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Cidades</title>
</head>
<body class="container mt-5">
<h1 class="d-flex flex-column justify-content-center align-items-center"> Cadastrar</h1>
    <form method="POST" action="/formulario" class="d-flex flex-column justify-content-center align-items-center">
    @csrf
        <label>Nome:</label>
        <input  class="form-control col-6 mb-3" type="text" name="nome" id=""/>
        <label>Idade:</label>
        <input  class="form-control col-6 mt-3" type="number" name="idade" id=""/>
        <button class="btn btn-outline-info mt-3" type="submit">Enviar</button>

</body>
</html>