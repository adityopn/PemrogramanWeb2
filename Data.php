<?php 
$nim = $_POST["nim"];
$nama = $_POST["nama"];
$gender = $_POST["jk"];
$status = $_POST["status"];
$hp = $_POST["telfon"];
$alamat = $_POST["alamat"];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css">
    <title>Data Mahasiswa</title>
    <style>
      td {
        padding: 5px 10px;
        text-align: center;
      }
      body{
          align-items: center;
        }
    </style>
  </head>
  <body>
    <section>
      <form action="" method="post">
        <table class="table">
          <th colspan="6">Tabel Biodata</th>
          <tr>
            <td>NIM</td>
            <td>Nama</td>
            <td>Gender</td>
            <td>Status</td>
            <td>No. Hp</td>
            <td>Alamat</td>
          </tr>
          <tr>
            <td><?php echo $nim;?></td>
            <td><?php echo $nama;?></td>
            <td><?php echo $gender;?></td>
            <td><?php echo $status;?></td>
            <td><?php echo $hp;?></td>
            <td><?php echo $alamat;?></td>
          </tr>
        </table>
      </form>
    </section>
  </body>
</html>
