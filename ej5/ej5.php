<?php 

function sumatoria_a($array) {
    $sum = 0;
    for ($i = 0; $i < count($array); $i++) {
      $sum += $array[$i];
    }
    return $sum;
  }

  function sumatoria_b($array) {
    $sum = 0;
    foreach ($array as $value) {
      $sum += $value;
    }
    return $sum;
  }

  function sumatoria_c($array) {
    $sum = 0;
    $i = 0;
    while ($i < count($array)) {
      $sum += $array[$i];
      $i++;
    }
    return $sum;
  }

  if (isset($_GET['vector'])) {
    $vector = $_GET['vector'];
    $vector_arr = explode(',', $vector);

    echo("<script>");
    echo("const div = document.getElementById('info');");
    echo(
        "let resultadoEj5 = 'sumatoria_c : ".sumatoria_c($vector_arr).",sumatoria_b : ".sumatoria_b($vector_arr).",sumatoria_a : ".sumatoria_a($vector_arr)."';"
    );
    echo("div.innerHTML = '<p>Resultado ejercicio 5</p><p>' +resultadoEj5+'</p>'");

    echo("</script>");
}
?>