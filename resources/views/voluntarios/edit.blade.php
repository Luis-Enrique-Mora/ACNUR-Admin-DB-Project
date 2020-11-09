<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Formulario Voluntarios</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
  </head>
  <body>
    <div class="container">
      <h2>Actualizar Voluntarios</h2><br/>
      <div class="container">
    </div>
     <form method="post" action="{{action('VoluntariosController@update', $id)}}">
        @csrf
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" name="Nombre" value="{{$vol->nombre}}">
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Ape1">Apellido 1:</label>
            <input type="text" class="form-control" name="Apellido1" value="{{$vol->apellido1}}">
          </div>
          <div class="form-group col-md-4">
            <label for="Apellido2">Apellido 2:</label>
            <input type="text" class="form-control" name="Apellido2" value="{{$vol->apellido2}}">
          </div>
        </div>
       
        <div class="row">
          <div class="col-md-4"></div>
          <div class="form-group col-md-4">
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
   </div>
  </body>
</html>