<?php
    $id = $_POST['region'];
    $option = "<option value='0'>Selecciona tu opcion</option>";
    if ($id == 1) {
        echo $option . "<option value='1'>opcion 1</option>";
           
    }elseif ($id == 2){
        echo $option . "<option value='2'>opcion 2</option>";
    }
?>