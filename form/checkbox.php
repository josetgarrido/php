
<form method="post">
   <input type="checkbox" name="check_list[]" value="1"> 1
   <input type="checkbox" name="check_list[]" value="2"> 2
   <input type="checkbox" name="check_list[]" value="3"> 3
   <input type="checkbox" name="check_list[]" value="4"> 4
   <button type="submit" name="submit">Send</button>
</form>

<?php
if(isset($_POST['submit'])) {
   echo "Checkbox envoy:";
   echo "<br>";
    if(!isset($_POST['check_list[]'])) {
        foreach($_POST['check_list'] as $value){
        echo "<br>". $value ." was checked!";
     }
    }
}
?>