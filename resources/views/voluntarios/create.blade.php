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
      <h2>Voluntarios</h2><br/>
      <div class="container">
    </div>
      <form method="post" action="{{url('voluntarios/add')}}">
        @csrf
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Cedula">Cédula:</label>
            <input type="text" class="form-control" name="cedula" required>
          </div>
          <div class="form-group col-md-4">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" name="Nombre" required>
          </div>
        </div>
        
        <div class="row">
          <div class="form-group col-md-4">
            <label for="Apellido1">Apellido 1:</label>
            <input type="text" class="form-control" name="Apellido1" required>
          </div>
          <div class="form-group col-md-4">
            <label for="Apellido2">Apellido 2:</label>
            <input type="text" class="form-control" name="Apellido2" required>
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