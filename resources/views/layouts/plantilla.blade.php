<!DOCTYPE html>
<html>
    <head>
        <title>Plantilla</title>
    </head>
    <body>
        <div class="cabecera">
            @yield("cabecera")
        </div>
        <div class="contenido">
           @yield("contenido")
        </div>
        <div class="pie">
           @yield("pie")
        </div>
    </body>
</html>