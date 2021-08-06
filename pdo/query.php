  <?php
  //Connection db
  require 'connection.php';

  $query = $conn->prepare("SELECT * FROM users");
  $query->execute();
  
  //fechAll, Returns an array containing all rows
  $result = $query->fetchAll();
  
  foreach ($result as $r) {
        //Inside [] put column name
        echo $r["Column 1"];
  }

  ?>
© 2021 GitHub, Inc.