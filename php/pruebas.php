<?php
for($i = 1; $i <= $numFilas; $i++){
    echo "<div class='container'><tr>";
    for($j = 0; $j < 15; $j++){
        echo "<td class='small'>$arreglo[$j]</td>";
    }
    echo "</tr></div>";
    mysqli_data_seek($resultado, $i);
    $arreglo = mysqli_fetch_array($resultado);
}
?>

