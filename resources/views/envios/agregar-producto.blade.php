<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   

<div class="container mt-5">
    <div class="col-12">
        <div class="row">
            <div class="col">

                <form method="POST" action="/agregar/productos" autocomplete="off">
                    @csrf

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="inputGroupSelect01">Tipo Envio</label>
                        </div>
                   
                        <select class="custom-select col-3" name="idTipoEnv" id="inputGroupSelect01">
                            @foreach($tipo_envio as $resp)
                                <option value="{{$resp->idTipoEnv}}">{{$resp->descripcion}}</option>
                            @endforeach
                        </select>
                       
                      </div>
                   
                    <div class="form-group">
                       <label>Descripción</label>
                       <input type="text" name="descripcion" class="form-control col-4" required>
                    </div> 
                    <button type="submit" class="btn btn-primary">Agregar</button>
                </form>

            </div>
        </div>
    </div>
</div>