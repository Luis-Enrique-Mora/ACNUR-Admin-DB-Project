<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   

<div class="container mt-5">
    <div class="col-12">
        <div class="row">
            <div class="col">

                <form method="PUT" action="/editar/producto" autocomplete="off">
                    @csrf

                   
                    <select class="custom-select col-4" name="idTipoEnv" id="inputGroupSelect01">
                        @foreach ($tipo_envio as $resp)
                            <option name="idTipoEnv" value="{{$resp->idTipoEnv}}">{{$resp->descripcion}}</option>
                        @endforeach 
                    </select>
                    
                    <div class="form-group">
                        @foreach ($producto as $pro)
                        <input hidden name="idProducto" value="{{$pro->idProducto}}">
                        <label>Descripción</label>
                        <input type="text" name="descripcion" value="{{$pro->descripcion}}" class="form-control col-4" required>
                        @endforeach 
                    </div> 

                    <button type="submit" class="btn btn-primary">Editar</button>
                </form>

            </div>
        </div>
    </div>
</div>