<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PBO2020-1908561105-UTS</title>
  <link rel="stylesheet" href="./styles.css">
</head>
<body>
<header>
        <center><h1>MYNOTE</h1><center>
        <center><h3>Aplikasi CRUD Sederhana</h3><center>
  </header>
  <center><form method="POST" action="./insert-db.php"><center>
    <input name="input-field">
    <button name="add-button">submit</button>
  </form>

  <?php 
    $conn = new mysqli("localhost", "root", "", "pbo2020-uts-1908561105");

    $query = "SELECT * FROM catatan";
    $hasil = $conn->query($query);


    foreach($hasil as $isi) {
      echo '<div class="cek">
              <p>'.$isi["isi"].'<p>
              <form method="POST" action="./insert-db.php" style="display: inline;">
                <button name="delete-button" value="'.$isi['id'].'">Delete</button>
              </form>
              <form method="POST" action="./insert-db.php" style="display: inline;">
                <input name="update-field">
                <button name="edit-button" value="'.$isi['id'].'">update</button>
              </form>
            </div>';
    }
  ?>

</body>
</html>