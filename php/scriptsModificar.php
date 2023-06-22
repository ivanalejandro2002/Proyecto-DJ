<script>
    function modificarFormulario() {
        document.getElementById("formModificar").action = "contratacion2.php";
        document.getElementById("formModificar").submit();
  }

  function enviarFormulario() {
        document.getElementById("formEnviar").action = "subiraBD.php";
        document.getElementById("formEnviar").submit();
  }

  </script>