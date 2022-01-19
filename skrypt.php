  <?php

  // 1. Connect to db
  include "db.php";

  // 2. Pobierz dane z formularza
  if (
    !empty($_POST["imie"]) || !empty($_POST["nazwisko"])
    || !empty($_POST["miejscowosc"])
  ) 
  {
    $i = $_POST["imie"];
    $n = $_POST["nazwisko"];
    $m = $_POST["miejscowosc"];


    // 3. Wstawienie rekordow

    $add = "INSERT INTO klienci (imie,nazwisko,miejscowosc) VALUES ('$i', '$n', '$m');";
    $res = mysqli_query($conn, $add);

    if ($res == false) {
      echo ("Nie udalo sie wstawic rekordow do bazy.");
    } else {
      echo ("Udalo sie wstawic rekordy.");
    }
  }




  ?>