<?php
  DEFINE("HOST", "localhost");
  DEFINE("USER", "root");
  DEFINE("PASSWORD", "");
  DEFINE("DBNAME", "ksiegarnia");

  $conn = mysqli_connect(HOST, USER, PASSWORD, DBNAME);

  if (mysqli_connect_errno() != 0) {
    echo ("Błąd połączenia z serwerem i bazą danych<br>");
  } else {
    echo ("Połączyłeś się z bazą danych<br>");
  }
?>