<!DOCTYPE html>
<html lang="Es-419">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>

    <h1 class="text-success">Lista de paises</h1>

    <table class="table table-dark table-sstriped table-success">
        <thead>
            <tr class="text-warningphp artisan">
                <th>Nombre</th>
                <th>Capital</th>
                <th>Moneda</th>
                <th>Población</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($paises as $nombre => $informacion)
            <tr>
                <th class="table-info text-dark">{{$nombre}}</th>
                <th class="table-primary text-info">{{$informacion["capital"]}}</th>
                <th class="table-info text-dark">{{$informacion["moneda"]}}</th>
                <th class="table-primary text-info">{{$informacion["población"]}}</th>
            </tr>

            @endforeach
        </tbody>
    </table>
</body>
</html>
