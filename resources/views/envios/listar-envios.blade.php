<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Destino</th>
        <th scope="col">Fecha</th>
        <th scope="col">Sedes</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td><button onclick="window.location='/eliminar/producto/{{$resp->idProducto}}'" class="btn"><i class="fas fa-trash"></td>
        <td><button onclick="window.location='/editar/producto/{{$resp->idProducto}}'" class="btn"><i class="fas fa-edit"></i></td>
       <td>@mdo</td>
      </tr>
    </tbody>
  </table>