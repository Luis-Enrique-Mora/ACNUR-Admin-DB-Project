<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sedes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
</head>
    <body>
        <style>
            #cuotas{
                margin-top: 50px;
                margin: auto;
            }
            h2{
                margin-top: 50px;
            }

            .fas:hover{
                cursor: pointer;
            }
        </style>

        <div class="container">
            <h2>Socios ACNUR</h2>
        </div>

        <table class="table table-hover col-10" id="cuotas">
            <thead>
                <tr>
                    <th>ID Socio</th>
                    <th>Nombre Socio</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th>Domicilio</th>
                    <th>Cuenta bancaria</th>
                    <th>Cuota</th>
                    <th>fecha de pago</th>
                    <th></th>
                    <th></th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($socios as $socio)
                <tr>
                    <td>{{ $socio->socio_id }}</td>
                    <td>{{ $socio->nombre }}</td>
                    <td>{{ $socio->apellido1 }}</td>
                    <td>{{ $socio->apellido2 }}</td>
                    <td>{{ $socio->direccion }}</td>
                    <td>{{ $socio->cuanta_bancaria }}</td>
                    <td>{{ $socio->tipo }}</td>
                    <td>{{ \Carbon\Carbon::parse($socio->fecha_pago)->format('j F') }}</td>
                    <td><i class="fas fa-trash"></i></td>
                <td><i class="fas fa-edit"></i></td> 
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>