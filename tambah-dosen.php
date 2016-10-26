<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>CRUD -  Tambah Data Dosen </title>
    <style>
    .container {
      text-align: left;
      margin-top: 0%;
    }
    .input {
      height: 30px;
      width: 99%;
      font-size: 20px;
    }
    .editor {
      width: 99%;
      font-size: 20px
    }
    </style>
  </head>
  <body>
    <div class="container">
      <form action="simpan-dosen.php" method="POST">
        <fieldset>
          <legend>Tambah Data Dosen :</legend>
          Nama :<br>
          <input type="text" class="input" name="nama"><br>
          Alamat Email :<br>
          <input type="text" class="input" name="email"><br>
          Alamat Rumah :<br>
          <textarea class="editor" name="alamat" rows="6"></textarea><br><br>
          <button type="submit" value="Submit">Simpan</button>
        </fieldset>
      </form>
    </div>
  </body>
</html>
