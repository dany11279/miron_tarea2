<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Manipulación del DOM</title>
</head>
<body>
    <h1 id="tit" class="text-success">MANIPULACIÓN DEL DOM</h1>
    <h1 id="tituloPag" class="text-success fw-bold">MANIPULACIÓN DEL DOM</h1>
    <br>
    <button id="botonClick">Click</button>
    <br>
    <p id="parrafo1">Texto de ejemplo</p>
    <div id="cajaTexto">
        <!-- comentario html -->
        <p id="parrafo1" class="text-success">ESTE ES UN PARRAFO</p>
        <p id="parrafo2">ESTE ES UN PARRAFO</p>
        <p id="parrafo3">ESTE ES UN PARRAFO</p>
        <p id="parrafo4">ESTE ES UN PARRAFO</p>
        <p id="parrafo5">ESTE ES UN PARRAFO</p>
        <p id="miParrafo">este es un nuevo parrafo</p>

    </Div>
    <br>
    <br>

    <select id="miSelect">
  <option value="opcion1">Opción 1</option>
  <option value="opcion2">Opción 2</option>
  <option value="opcion3">Opción 3</option>
</select>

    <br>
    <br>
    <div class="row">
        <div class="col">
            <form action="">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" value="texto de prueba">
                <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre">
                <input type="button" value="Enviar" id="botonEnviar">
            </form>
        </div>
        <br>
    <div class="row">
        <div class="col">
            <form action="">
                <label for="email">Correo electrónico</label>
                <input type="email" name="email" id="email" value="texto de prueba">
            </form>
        </div>
    </div>
    <a href="https://www.google.com">Ir a Google</a>
    <a href="https://www.facebook.com">Ir a Facebook</a>
    <a href="http://www.mipagina.com">Mi página</a>
    <script src="tarea2.js"></script>
</body>
</html>
