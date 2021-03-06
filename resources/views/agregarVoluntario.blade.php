<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar Voluntarios</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    </head>
    <body>

    <style>
        
        form{
            margin-top: 50px;
        }

        .fas:hover{
            cursor: pointer;
        }

        #head{
            margin: auto;
        }

        button{
            margin-top: 50px;
            margin: auto;
        }

    </style>
       <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
        <a class="navbar-brand text-white" id="Inicio">
    <img src="logo.jpeg"  height="85px">
    </a>
           
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
        <div class="container col-10">

            <form method="POST" action="agregarVoluntario/add">
                @csrf
                <h2>Agregar Voluntario</h2>
                <hr>
                <div class="row">

                    <div class="col">
                        <input type="text" class="form-control" name="cedula" placeholder="Cedula" required>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" required>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="apellido1" placeholder="Primer Apellido" required>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="apellido2" placeholder="Segundo Apellido" required>
                    </div>

                    <div class="col">
                        <select type="text" name="sede_fk" class="form-control" placeholder="Sede" required>
                            <option value="" disabled selected>Seleccione sede</option>
                            @foreach($sedes ?? '' as $sede)
                                <option value="{{$sede->sede_id}}">{{ $sede->nombre_sede }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

               

                

                <div class="container">
                    <button type="submit" class="mt-5 col-5 btn btn-success btn-block">Agregar</button> 
                </div>
            </form>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>