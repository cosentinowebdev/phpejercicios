<?php

function semaforo_a($color) {
    // var_dump($color);
    if ($color == "rojo") {
        return "frene";
    } elseif ($color == "amarillo") {
        return "precaución";
    } elseif ($color == "verde") {
        return "avance";
    } else {
        return "estado desconocido";
    }
}

function semaforo_b($color) {
    // var_dump($color);
    return $color == "rojo" ? "frene" : ($color == "amarillo" ? "precaución" : ($color == "verde" ? "avance" : "estado desconocido"));
}

function semaforo_c($color) {
    // var_dump($color);
    switch ($color) {
        case "rojo":
            return "frene";
            break;
        case "amarillo":
            return "precaución";
            break;
        case "verde":
            return "avance";
            break;
        default:
            return "estado desconocido";
    }
}

if (isset($_GET['color'])) {
    // semaforo_a($_GET['color']);
    echo("<script>");
    echo("const div = document.getElementById('info');");
    echo(
        "let resultadoEj1 = 'funcion semaforo_a : "
        .semaforo_a($_GET['color']).
        ", funcion semaforo_b : "
        .semaforo_b($_GET['color']).
        ", funcion semaforo_c : "
        .semaforo_c($_GET['color']).
        "';"
    );
    echo("div.innerHTML = '<p>Resultado ejercicio 1</p><p>' +resultadoEj1+'</p>'");

    echo("</script>");
};
?>