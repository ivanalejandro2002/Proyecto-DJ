<?php
    $fecha = $_POST["fecha"];
    $curp  = $_POST["CURP"];
    $Folio = "$curp$fecha";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script>
    function mandarDatosPDF2() {
        document.getElementById("formAceptaCont2").action = "pdfBaseDatos.php";
        document.getElementById("formAceptaCont2").submit();
    }
    </script>


</head>
<body onload="mandarDatosPDF2()">
<div class="input-field col l6 m6 s6 offset-l4">
        <form  id ="formAceptaCont2" method="POST" action="pdfBaseDatos.php">
            <input  type="hidden" name="folio" value="<?php echo $Folio; ?>">
            <input type="submit" value="Enviar" onclick="enviarFormulario()" class="btn">
        </form>
</div>
</body>
</html>
