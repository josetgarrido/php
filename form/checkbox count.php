<form method="post">
   <input type="checkbox" name="check_list[]" value="aa"> 1
   <input type="checkbox" name="check_list[]" value="bb"> 2
   <input type="checkbox" name="check_list[]" value="33"> 3
   <input type="checkbox" name="check_list[]" value="44"> 4
   <button type="submit" name="submit">Send</button>
</form>

<?php
if(isset($_POST['submit'])) {
   if(!isset($_POST['check_list[]'])) {
      //cuenta los checkbox seleccionados
      $checked_contador = count($_POST['check_list']);
      //valida que se seleccionen al menos 2
      if ($checked_contador <= 1) {
         echo "tienes que seleccioanr mas de 2";
      } else {

      echo "<p>Has seleccionado ".$checked_contador." avanza:</p> <br/>";
      }
   }
}
?>