<!DOCTYPE html>
<html>
<head>
  <title>CRUD -  Lihat Data Dosen </title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
  <button style="margin-bottom:10px;"><a href="tambah-dosen.php">Tambah Data Dosen</a></button>
  <?php
  //include koneksi ke database
  include_once('config/koneksi.php');

  $sql = "SELECT id_dosen, nama, email, alamat FROM tbl_dosen ORDER BY id_dosen DESC";
  $result = mysqli_query($connection, $sql);
        echo "<table>
                <tr>
                  <th style='text-align:center'>No.</th>
                  <th style='text-align:center'>Nama</th>
                  <th style='text-align:center'>Email</th>
                  <th style='text-align:center'>Alamat</th>
                  <th style='text-align:center'>Aksi</th>
                </tr>";
        // output data of each row
        $no = 1;
        while($row = mysqli_fetch_array($result)) {
            echo "<tr>
                    <td style='text-align:center'>".$no."</td>
                    <td>".$row['nama']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['alamat']."</td>
                    <td style='text-align:center'><a href='edit-dosen.php?&id=".$row['id_dosen']."'>Edit</a> | <a href='delete-dosen.php?&id=".$row['id_dosen']."'>Delete</a> </td>
                  </tr>";
                  $no++;
        }
        echo "</table>";
  ?>
</body>
</html>
