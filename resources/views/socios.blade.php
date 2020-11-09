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

            #head{
                margin: auto;
            }

            #addBtn{
                margin-top: 50px;
            }

            a:hover{
                cursor: pointer;
            }

        </style>

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">ACNUR Systems</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="window.location='/socios'"  class="nav-link">Socios</a>
                    </li>
                    <li class="nav-item">
                        <a onclick="window.location='/sedes'" class="nav-link">Sedes</a>
                    </li>
                    <li class="nav-item">
                    <a onclick="window.location='/cuotas'" class="nav-link">Coutas</a>
                    </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="head" class="row col-10">
            <div class="col-10">
                <h2>Socios ACNUR</h2>
            </div>
            <div id="addBtn" class="col-2">
                <button onclick="window.location='/agregarSocio'" class="btn btn-success"><i class="fas fa-user-plus"></i></button>
            </div>
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