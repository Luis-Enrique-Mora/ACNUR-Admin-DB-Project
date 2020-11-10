<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   
<div class="container">
    <div class="col">
        <div class="row">
            <div class="col-6">
                <div class="col-12">
                        <h1>Envios Materiales</h1>

                    <form method="POST" action="/crear/datos/envio" autocomplete="off">
                        <div class="col-6">
            
                            {{-- <select class="custom-select col-12" name="idTipoEnv" id="inputGroupSelect01">
                                @foreach($productos as $resp)
                                    <option value="{{$resp->idProducto}}">{{$resp->descripcion}}</option>
                                @endforeach
                            </select> --}}
                
                        </div>
                        <div class="col-6">
                
                            <div class="form-group">
                                <label>Toneladas</label>
                                <input type="number" name="cantidad" class="form-control col-6" required>
                            </div> 
                
                        </div>
                        <button type="submit" class="btn btn-success">Agregar</button>
                    </form>
                    
                </div>
            </div>
            <div class="col-6">
                <h1>Envio Voluntarios</h1>
            </div>
        </div>
    </div>
</div>