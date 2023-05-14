<?php

class Saludar {
    private $nombre;
    private $apellido;

    public function __construct($nombre, $apellido) {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    public function saludoFormal($horario) {
        if ($horario >= 5 && $horario < 13) {
            $prefijo = "Buenos días";
        } else if ($horario >= 13 && $horario < 21) {
            $prefijo = "Buenas tardes";
        } else {
            $prefijo = "Buenas noches";
        }
        return "$prefijo {$this->nombre} {$this->apellido}";
    }

    public function saludoInformal($horario) {
        if ($horario >= 5 && $horario < 13) {
            $saludo = "buen día";
        } else if ($horario >= 13 && $horario < 21) {
            $saludo = "buena tarde";
        } else {
            $saludo = "buena noche";
        }
        return "¡Hola {$this->nombre}! Que tengas un $saludo";
    }
}

if (isset($_GET['nombre'])&&isset($_GET['apellido'])&&isset($_GET['hora'])) {
    $nombre = $_GET['nombre'];
    $apellido = $_GET['apellido'];
    $hora= $_GET['hora'];
    $saludo = new Saludar("Ezequiel", "Perez");

    echo("<script>");
    echo("const div = document.getElementById('info');");
    echo(
        "let resultadoEj6 = 'Saludo formal: '+'".$saludo->saludoFormal($hora)."'+', Saludo informal: '+'".$saludo->saludoInformal($hora)."';"
    );
    echo("div.innerHTML = '<p>Resultado ejercicio 6</p><p>' +resultadoEj6+'</p>'");

    echo("</script>");
}
// Ejemplo de uso

// echo $saludo->saludoFormal(9); // Imprime "Buenos días Ezequiel Perez"
// echo $saludo->saludoInformal(9); // Imprime "¡Hola Ezequiel! Que tengas un buen día"
