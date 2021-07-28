  <?php
  //Connection db
  require 'connection.php';

  $user   = 'Text';
  $email  = 'Text@correo.com';

  $query = $conn->prepare("INSERT INTO users SET username_col= :user, email_col= :emailuser");
  $query->execute([':user' => $user, ':emailuser' => $email ]);


  ?>