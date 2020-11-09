<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Agregar socio</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href='bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css' rel='stylesheet' type='text/css'>
    </head>
    <body>

    <style>
            form{
                margin-top: 50px;
            }

            .fas:hover{
                cursor: pointer;
            }

            #head{
                margin: auto;
            }

            #addBtn{
                margin-top: 50px;
            }

        </style>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">ACNUR Systems</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Socios</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sedes</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">Coutas</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container col-10">

            <form>

            <h2>Agregar socio</h2>
            <hr>
            <div class="row">

                <div class="col">
                    <input type="text" class="form-control" placeholder="Nombre">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Primer Apellido">
                </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Segundo Apellido">
                </div>
                <div class="col">
                    <select type="text" class="form-control" placeholder="Tipo cuota">
                        <option value="" disabled selected>Seleccione sede</option>
                    </select>
                </div>

            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1"></label>
                <textarea placeholder="Domicilo" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>

            <div class="row">
                <div class="col">
                    <input type="number" class="form-control" placeholder="Número de cuenta">
                </div>

                <div class="col">
                    <input type='text' class="form-control" id="datepicker" > <br>
                </div>

                <div class="col">
                    <select type="text" class="form-control" placeholder="Tipo cuota">
                        <option value="" disabled selected>Seleccione cuota</option>
                    </select>
                </div>
            </div>

            </form>

        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        
        <!-- Script -->
    <script type="text/javascript">
        $(document).ready(function(){
        $('#datepicker').datepicker(); 
        });
    </script>

    </body>
</html>