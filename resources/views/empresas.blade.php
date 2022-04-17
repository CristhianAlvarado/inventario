<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Empresas</title>
</head>
<body>
    @foreach ($empresa as $emp)
        <p>{{$emp->razon_social}}</p>
    @endforeach
</body>
</html>