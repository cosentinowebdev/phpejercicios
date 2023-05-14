<?php 
function incrementar(&$var) {
    $var++;
}
if (isset($_GET['valor1'])) {
    $valor1 = $_GET['valor1'];

    echo("<script>");
    echo("const div = document.getElementById('info');");
    echo(
        "let resultadoEj4 = 'valor pasado $valor1 resultado de funcion incrementar : "
        .incrementar($valor1).
        " $valor1';"
    );
    echo("div.innerHTML = '<p>Resultado ejercicio 4</p><p>' +resultadoEj4+'</p>'");

    echo("</script>");
}
?>