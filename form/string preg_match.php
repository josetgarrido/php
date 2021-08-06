<form method="post">
    <input type="text" name="txt">
    <button type="submit" name="submit">Send</button>
</form>

<?php
if(isset($_POST['submit'])) {
   
    $txt = $_POST['txt'];
        //Para La cadena contenga al menos un caracter especial, un número y una letra (minimo 3)
        //(preg_match("/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{3,}$/", $nic))

    if (preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{3,}$/", $txt)) {
        echo "La cadena contiene al menos un número y una letra";
    } 
    else {
        echo "La cadena no cumple con el patrón: debe tener al menos un número y una letra";
    }
}
?>