<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar socio</title>
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
        <div class="container col-10">

            <form method="POST" action="{{url('socio/update' .$socio->socio_id)}}">
                @csrf
                <h2>Agregar socio</h2>
                <hr>
                <div class="row">
                @foreach($socio as $socios)
                    <div class="col">
                        <input type="text" class="form-control" name="nombre" placeholder="Nombre" value="{{$socios->nombre}}" required>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="apellido1" placeholder="Primer Apellido" value="{{$socios->apellido1}}" required>
                    </div>

                    <div class="col">
                        <input type="text" class="form-control" name="apellido2" placeholder="Segundo Apellido" value="{{$socios->apellido2}}" required>
                    </div>
                @endforeach
                    <div class="col">
                        <select type="text" name="sede_fk" class="form-control" placeholder="Tipo cuota">
                            @foreach($socio as $socios)
                                <option value="{{$socios->sede_id}}" disabled selected>{{$socios->nombre_sede}}</option>
                            @endforeach
                            @foreach($sedes as $sede)
                                <option value="{{$sede->sede_id}}">{{ $sede->nombre_sede }}</option>
                            @endforeach
                        </select>
                    </div>

                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1"></label>
                    @foreach($socio as $socios)
                        <textarea placeholder="Domicilo" name="direccion" class="form-control" id="exampleFormControlTextarea1" rows="3" required>{{$socios->direccion}}</textarea>
                    @endforeach
                </div>

                <div class="from-group row">
                    
                    <div class="col">
                     @foreach($socio as $socios)
                        <input type="text" name="cuanta_bancaria" class="form-control" placeholder="Número de cuenta" value="{{$socios->cuanta_bancaria}}" required>
                     @endforeach
                    </div>

                    <div class="col">
                        @foreach($socio as $socios)
                            <input id="Fecha" type="date" class="form-control datepicker" value="{{$socios->fecha_pago}}" data-date-format="mm/dd/yyyy" name="fecha_pago" required>
                        @endforeach
                    </div>
                     
                    <div class="col">
                        <select type="text" name="tipo_cuota_fk" class="form-control" required>
                            @foreach($socio as $socios)
                                <option value="{{$socios->cuota_id}}" disabled selected>{{$socios->tipo}}</option>
                            @endforeach
                            @foreach($cuotas as $cuota)
                                <option value="{{$cuota->cuota_id}}">{{ $cuota->cantidad }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="container">
                    <button type="submit" class="mt-5 col-5 btn btn-success btn-block">Actualizar</button> 
                </div>
            </form>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </body>
</html>