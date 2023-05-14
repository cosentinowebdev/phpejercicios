<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guia Practica De Ejercicios</title>
</head>

<body>
    <!-- <a href="/index.php?color=rojo">ejercicio1 - color rojo</a> -->
    <button onclick="toggleForms('ej1')">Mostrar/ocultar formulario ejercicio 1</button>
    <form id="ej1" method="get" action="">
        <fieldset>
            <legend>Ejercicio 1</legend>
            <label for="color">Color del semáforo:</label>
            <input type="text" name="color" id="color" autocomplete="on" list="opciones">
            <datalist id="opciones">
                <option value="rojo">
                <option value="amarillo">
                <option value="verde">
            </datalist>
            <br><br>
            <input type="submit" value="Consultar">
        </fieldset>
    </form>
    <button onclick="toggleForms('ej2')">Mostrar/ocultar formulario ejercicio 2</button>
    <form id="ej2" method="get" action="">
        <fieldset>
            <legend>Binomio Cuadrado Perfecto</legend>
            <label for="binomioCuadradoPerfectoValor1">Valor de a:</label>
            <input type="number" name="binomioCuadradoPerfectoValor1" id="binomioCuadradoPerfectoValor1" required>
            <br><br>
            <label for="binomioCuadradoPerfectoValor2">Valor de b:</label>
            <input type="number" name="binomioCuadradoPerfectoValor2" id="binomioCuadradoPerfectoValor2" required>
            <br><br>
            <input type="submit" value="Calcular">
        </fieldset>
    </form>
    <button onclick="toggleForms('ej3')">Mostrar/ocultar formulario ejercicio 3</button>
    <form id="ej3" method="get" action="">
        <fieldset>
            <legend>Concatenar Textos</legend>
            <label for="texto1">Texto 1:</label>
            <input type="text" name="texto1" id="texto1" required>
            <br><br>
            <label for="texto2">Texto 2:</label>
            <input type="text" name="texto2" id="texto2" required>
            <br><br>
            <input type="submit" value="Concatenar">
        </fieldset>
    </form>
    <button onclick="toggleForms('ej4')">Mostrar/ocultar formulario ejercicio 4</button>
    <form id="ej4" method="get" action="">
        <fieldset>
            <legend>Incrementar valor</legend>
            <label for="valor1">Valor array:</label>
            <input type="number" name="valor1" id="valor1" required>
            <br><br>
            <input type="submit" value="Concatenar">
        </fieldset>
    </form>
    <button onclick="toggleForms('ej5')">Mostrar/ocultar formulario ejercicio 5</button>
    <form id="ej5" method="get" action="">
        <fieldset>
            <label for="vector">Ingrese los valores del vector separados por comas:</label>
            <input type="text" id="vector" name="vector">
            <br>
            <input type="submit" value="Calcular suma">
        </fieldset>
    </form>
    <button onclick="toggleForms('ej6')">Mostrar/ocultar formulario ejercicio 6</button>
    <form id="ej6" method="get" action="">
        <fieldset>
            <legend>Saludar Usuario</legend>
            <label for="nombre">nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
            <label for="nombre">apellido:</label>
            <input type="text" name="apellido" id="apellido" required>
            <label for="hora">hora del dia:</label>
            <input type="number" name="hora" id="hora" required>
            <br><br>
            <input type="submit" value="Concatenar">
        </fieldset>
    </form>


    <hr>
    <div id="info">

    </div>
    <hr>
    <script>
        var forms = document.getElementsByTagName("form");
        for (var i = 0; i < forms.length; i++) {
            if (forms[i].style.display === "none") {
                forms[i].style.display = "block";
            } else {
                forms[i].style.display = "none";
            }
        }
        function toggleForms(id) {
            var form = document.getElementById(id);

            if (form.style.display === "none") {
                form.style.display = "block";
            } else {
                form.style.display = "none";
            }
            
        }
    </script>
</body>

</html>
<?php 
    include_once("./ej1/ej1.php");
    include_once("./ej2/ej2.php");
    include_once("./ej3/ej3.php");
    include_once("./ej4/ej4.php");
    include_once("./ej5/ej5.php");
    include_once("./ej6/ej6.php");
?>