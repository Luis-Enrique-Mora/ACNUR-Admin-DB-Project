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
                <h2>Sedes ACNUR</h2>
            </div>
            <div id="addBtn" class="col-2">
                <button onclick="window.location='/agregarSede'" class="btn btn-success"><i class="fas fa-plus-square"></i></button>
            </div>
        </div>

        <table class="table table-hover col-10" id="cuotas">
            <thead>
                <tr>
                    <th>ID sede</th>
                    <th>Nombre sede</th>
                    <th>Ubicación</th>
                    <th>Nombre director</th>
                    <th>Apellido 1</th>
                    <th>Apellido 2</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($sedes as $sede)
                <tr>
                    <td>{{ $sede->sede_id }}</td>
                    <td>{{ $sede->nombre_sede }}</td>
                    <td>{{ $sede->domicilio }}</td>
                    <td>{{ $sede->nombre_director }}</td>
                    <td>{{ $sede->apellido1 }}</td>
                    <td>{{ $sede->apellido2 }}</td>
                    <td>
                        <form action="{{url('sede/delete/' .$sede->sede_id)}}" method="post">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button class="btn" onclick="return confirm('¿Esta seguro que desea eliminarlo?')" type="submit"><i class="fas fa-trash"></i></button>
                        </form>
                    </td>
                    <td><i class="fas fa-edit"></i></td> 
                </tr>
                @endforeach
            </tbody>
        </table>

    </body>
</html>