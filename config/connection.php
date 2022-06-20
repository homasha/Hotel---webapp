<?php
  $config = [$host = 'localhost', $user = 'root', $password = '', $dbname = 'hotel_v2'];

  $connection = new mysqli('localhost', 'root', '', 'hotel_v2');

  if($connection->connect_error)
  {
    die("Błąd: ".$connection->connect_error);
  } else {
    mysqli_set_charset($connection, "utf8mb4");
    $connectionInfo = 'Połączono z bazą danych '.$dbname.' !!! :)<br>';
  }
?>
