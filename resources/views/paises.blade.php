<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Document</title>
    </head>
<body>
    <h1><center>Lista de paises</center></h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="text-primary">Nombre</th>
                <th class="text-success">Capital</th>
                <th class="text-danger">Moneda</th>
                <th class="text-warning">Población</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($naciones as $nombre => $nacion )
                <tr>
                    <td>{{ $nombre }}</td>
                    <td>{{ $nacion["capital"] }}</td>
                    <td>{{ $nacion["Moneda"] }}</td>
                    <td>{{ $nacion["Población"] }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
