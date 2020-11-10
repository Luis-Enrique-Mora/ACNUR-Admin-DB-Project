<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   
<div class="container">
  <div class="div">
    <div class="row">
      <div class="col-6">
        <h1>Productos</h1>
      </div>
      <div class="col-6 mt-2">
        <div class="text-right">
          <button onclick="window.location='/crear/productos'" class="btn btn-success" type="button">Agregar <i class="fas fa-user-plus"></i></button>
        </div>
       </div>
    </div>
  </div>
  
  
  <table class="table"> 
    <thead>
        <tr>
            <th>ID</th>
            <th>Descripcion</th>
            <th>Tipo Env.</th>
            <th></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $resp)
            <tr> 
                <td>{{ $loop->index + 1 }}</td>
                <td>{{ $resp->descripcion }}</td>
                <td>{{ $resp->tipoProd }}</td>
                <td><button onclick="window.location='/eliminar/producto/{{$resp->idProducto}}'" class="btn"><i class="fas fa-trash"></td>
                <td><button onclick="window.location='/editar/producto/{{$resp->idProducto}}'" class="btn"><i class="fas fa-edit"></i></td>
            </tr>
            @endforeach
    </tbody>
  </table>
</div>