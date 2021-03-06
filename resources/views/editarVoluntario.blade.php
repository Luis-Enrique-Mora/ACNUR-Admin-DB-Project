<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar socio</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="/resources/css/app.css"> </head>
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

        a:hover{
                cursor: pointer;
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
             @foreach($voluntarios as $vol)
            <form method="POST" action="/voluntario/update/">
            @endforeach
                @csrf
                <h2>Actualizar Voluntario</h2>
                <hr>
                <div class="row">
                @foreach($voluntarios as $vol)
                <input hidden name="id" value="{{$vol->voluntario_id}}" type="number">
                    <div class="col">
                        <input type="text" class="form-control" name="cedula" placeholder="Cedula" value="{{$vol->cedula}}" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$vol->nombre}}" required>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="apellido1" placeholder="Primer Apellido" value="{{$vol->apellido1}}" required>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="apellido2" placeholder="Segundo Apellido" value="{{$vol->apellido2}}" required>
                    </div>
                @endforeach
                    
                
                    <div class="col">
                        <select type="text" name="sede_fk" class="form-control" placeholder="Sede" required>
                        @foreach($voluntarios ?? '' as $vol)    
                        <option value="{{$vol->voluntario_id}}" disabled selected>Seleccione sede</option>
                        @endforeach
                            @foreach($sedes ?? '' as $sede)
                                <option value="{{$sede->sede_id}}">{{ $sede->nombre_sede }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                </div>

                <div class="container">
                    <button type="submit" class="mt-5 col-5 btn btn-success btn-block">Actualizar</button> 
                </div>
            </form>

        </div>

       
    </body>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</html>