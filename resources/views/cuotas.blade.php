<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cuotas</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/app.css">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Envios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{url('/crear/envio')}}">Envios</a>
                          <a class="dropdown-item" href="{{url('/lista/productos')}}">Productos</a>
                          <a class="dropdown-item" href="{{url('/tipo/envios')}}">Tipo Envios</a>
                        </div>
                      </li>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          Voluntarios
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{url('/voluntarios')}}">Voluntarios</a>
                          <a class="dropdown-item" href="{{url('/voluntariosA')}}">Voluntarios Administrativos</a>
                          <a class="dropdown-item" href="{{url('/voluntariosH')}}">Voluntarios Humanitarios</a>
                        </div>
                      </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="head" class="row col-10">
        <div class="col-10">
            <h2>Cuotas ACNUR</h2>
        </div>
        <div id="addBtn" class="col-2">
            <button onclick="window.location='/agregarCuota'" class="btn btn-success"><i class="fas fa-plus-square"></i></button>
        </div>
    </div>
    
    <table class="table table-hover col-10" id="cuotas">
        <thead>
            <tr>
                <th>ID cuota</th>
                <th>Tipo</th>
                <th>monto</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($tipo_cuota as $cuota)
            <tr>
                <td>{{ $cuota->cuota_id }}</td>
                <td>{{ $cuota->tipo }}</td>
                <td>{{ $cuota->cantidad }}</td>
                <td>
                    <form action="{{url('cuota/delete/' .$cuota->cuota_id)}}" method="post">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button class="btn" onclick="return confirm('¿Esta seguro que desea eliminarlo?')" type="submit"><i class="fas fa-trash"></i></button>
                    </form>
                </td>
                <td>
<<<<<<< HEAD
                        <a href="{{url('/cuota/edit/' .$cuota->cuota_id)}}"><i class="fas fa-edit"></i></a>
                    </td>
=======
                    <a href="{{url('/cuota/edit/' .$cuota->cuota_id)}}"><i class="fas fa-edit"></i></a>
                </td> 
>>>>>>> 9391ff0ab571e77f8e0e448eb4069934f80b7708
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</html>


