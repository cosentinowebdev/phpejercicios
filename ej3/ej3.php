<?php 
function concatenar($texto1, $texto2) {
    return $texto1 .' '. $texto2;
}
if (isset($_GET['texto1']) && isset($_GET['texto2'])) {
    $texto1 = $_GET['texto1'];
    $texto2 = $_GET['texto2'];

    echo("<script>");
    echo("const div = document.getElementById('info');");
    echo(
        "let resultadoEj3 = 'funcion concatenar : "
        .concatenar($texto1,$texto2).
        "';"
    );
    echo("div.innerHTML = '<p>Resultado ejercicio 3</p><p>' +resultadoEj3+'</p>'");

    echo("</script>");
}
?>