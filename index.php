<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../css/styles.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <header>
            <div id=header>
                <div class="header-container">
                    <h1>Proyecto de Seguridad</h1>
                </div>
            </div>
        </header>
        <button data-toggle="collapse" class="btn btn-primary" data-target="#demo">Opciones</button>

        <div id="demo" class="collapse">
            <div class="row">
                <div class="col-sm-2">
                    <label for="sel1">Imagenes a Desplegar:</label>
                    <select class="form-control" id="sel1">
                        <option value="0">Todo</option>
                        <option value="1">Conocidos</option>
                        <option value="2">Desconocidos</option>
                    </select>
                </div>
                <div class="col-sm-2" hidden id="search">
                    <label for="usr">Nombre:</label>
                    <input type="text" class="form-control" id="usr">
                </div>
            </div>

        </div>
        <div id="imagenes" class="container-section">
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="../js/script.js"></script>
    </body>
</html>