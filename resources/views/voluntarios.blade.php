<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Voluntarios</title>
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
                    <a class="nav-link" href="{{ url('/') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('socios') }}">Socios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('sedes') }}">Sedes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('voluntarios') }}">Voluntarios</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="{{ url('cuotas') }}">Coutas</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="head" class="row col-10">
        <div class="col-10">
            <h2>Voluntarios ACNUR</h2>
        </div>
        <div id="addBtn" class="col-2">
                <button onclick="window.location='/agregarVoluntario'" class="btn btn-success"><i class="fas fa-user-plus"></i></button>
            </div>
    </div>
    
    <table class="table table-hover col-10" id="voluntarios">
        <thead>
            <tr>
                <th>ID</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido1</th>
                <th>Apellido2</th>
                <th>Tipo</th>
            </tr>
        </thead>
        <tbody>
            @foreach($voluntarios as $vol)
            <tr>
                <td>{{ $vol->voluntario_id }}</td>
                <td>{{ $vol->cedula }}</td>
                <td>{{ $vol->nombre }}</td>
                <td>{{ $vol->apellido1 }}</td>
                <td>{{ $vol->apellido2 }}</td>
                <td>{{ $vol->tipo }}</td>
                
                <td><a href="{{action('VoluntariosController@edit', $vol->id)}}" class="btn btn-warning">Edit</a></td>
                <td>
                <form action="{{action('VoluntariosController@destroy', $vol->id)}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button class="btn btn-danger" onclick="return confirm('¿Esta seguro que desea eliminarlo?')" type="submit">Delete</button>
                </form>
                </td>
            
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>


