<?php 

function binomioCuadradoPerfecto_a($a, $b) {
    return pow($a+$b, 2);
}
  
  
function binomioCuadradoPerfecto_b($a, $b) {
    return ($a*$a) + (2*$a*$b) + ($b*$b);
}
if (isset($_GET['binomioCuadradoPerfectoValor1']) && isset($_GET['binomioCuadradoPerfectoValor2'])) {
    $valor1 = $_GET['binomioCuadradoPerfectoValor1'];
    $valor2 = $_GET['binomioCuadradoPerfectoValor2'];
    
    // Validar que los valores sean numéricos
    if (!is_numeric($valor1) || !is_numeric($valor2)) {
        echo("<script>");
        echo("const div = document.getElementById('info');");
        echo("const alerta = '<p>Los valores ingresados deben ser numéricos.</p>';");
        echo("div.innerHTML = '<p>Resultado ejercicio 2</p><p>' +alerta+'</p>';");

        echo("</script>");
        exit;
    }
    echo("<script>");
    echo("const div = document.getElementById('info');");
    echo(
        "let resultadoEj2 = 'funcion binomioCuadradoPerfecto_a : "
        .binomioCuadradoPerfecto_a($_GET['binomioCuadradoPerfectoValor1'],$_GET['binomioCuadradoPerfectoValor2']).
        ", funcion binomioCuadradoPerfecto_b : "
        .binomioCuadradoPerfecto_b($_GET['binomioCuadradoPerfectoValor1'],$_GET['binomioCuadradoPerfectoValor2']).
        "';"
    );
    echo("div.innerHTML = '<p>Resultado ejercicio 2</p><p>' +resultadoEj2+'</p>'");

    echo("</script>");
};
?>