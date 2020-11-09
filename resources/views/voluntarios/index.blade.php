<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Formulario Voluntarios</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>
    <div class="container">
    <br />
      @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     <div class="card-header">
      <div class="row">
        <div class="col-sm-6">
          <h4><b>Voluntarios</b></h4>
        </div>
        <div class="col-sm-6">
          <a href="{{action('VoluntariosController@create')}}" method="get" role="button" class="btn btn-success float-right">
            Agregar 
          </a>
        </div>
      </div>
    </div>
    <table class="table table-striped">
    <thead>
      <tr>
        <th>ID</th>
        <th>Cedula</th>
        <th>Nombre</th>
        <th>Apellido 1</th>
        <th>Apellido 2</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>
    <tbody>
      
      @foreach($voluntarios as $vol)
      <tr>
        <td>{{$vol->id}}</td>
        <td>{{$vol->cedula}}</td>
        <td>{{$vol->nombre}}</td>
        <td>{{$vol->apellido1}}</td>
        <td>{{$vol->apellido2}}</td>
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
  </div>
  </body>
</html> 
@endsection