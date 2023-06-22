<?php
for($i = 1; $i <= $numFilas; $i++){
    echo "<tr>";
    for($j = 0; $j < 2; $j++){
        echo "<td>$arreglo[$j]</td>";
    }
    echo "</tr>";
    mysqli_data_seek($resultado, $i);
    $arreglo = mysqli_fetch_array($resultado);
}
?>

