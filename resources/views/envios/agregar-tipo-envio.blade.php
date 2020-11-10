<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   

<div class="container">
    <div class="col-12">
        <div class="row">
            <div class="col">

                <form method="POST" action="/crear/tipo/envio" autocomplete="off">
                    @csrf
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