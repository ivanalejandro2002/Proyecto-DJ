<script>
    function limpiarAtributosValue() {
      // Obtener todos los elementos de entrada del formulario
      var inputs = document.getElementsByTagName("input");

      // Iterar sobre los elementos de entrada y limpiar los atributos "value"
      for (var i = 0; i < inputs.length; i++) {
        var input = inputs[i];
        if (input.value !== "") {
          input.value = "";
        }
      }
    }
  </script>