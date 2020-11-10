<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   

<div class="container">
    <div class="col">
        <div class="row">

            
            <div class="col-12">

                <form method="POST" action="/agregar/envio" autocomplete="off">
                     @csrf
                    <div class="form-group">
                        <label>Destino</label>
                        <input type="text" name="destino" class="form-control col-4" required>
                    </div> 
            
                    <div class="form-group">
                        <label>Fecha de envio</label>
                        <input type="date" name="fecha_env" class="form-control col-4" required>
                    </div>
                    <button type="submit" class="btn btn-success">Agregar</button>
                </form>
            </div>
            

           
        </div>
        </div>
    </div>
