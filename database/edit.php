<?php

 require'function.php';

 // Mengambil data dari URL
 $id=$_GET["id"];

 // Query data berdasarkan ID
 $data=query("SELECT*FROM warmindo WHERE id=$id")[0];


 if(isset($_POST["submit"])){

 // Status perubahan data (berhasil/ tidak)
 if(edit($_POST)>0){
 echo "
 <script>
 alert('Data Berhasil Diedit');
 document.location.href='index.php';
 </script>
 ";
 } else {
 echo"
 <script>
 alert('Data Gagal Diedit');
 document.location.href='index.php';
 </script>
 ";
 }
 }

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Edit Data Survei</title>
 <!-- CSS body-->
 <style>
 body{
font-family: arial, sans-serif;
 margin: 70px;
 }

 input {
 width: 100%;
 }

 </style>
 </head>
 <body>
 <h1>Edit Data Survey</h1>


 <form action="" method="post" enctype="multipart/form-data">
 <input type="hidden" name="id" value="<?=$data["id"];?>">
 <input type="hidden" name="fotoLama" value="<?=$data["foto"];?>">
 <ul>
 <li>
 <!-- "required" digunakan untuk memastikan kolom terisi (tidak boleh kosong) -->

 <li>
 <label for="latitude">Latitude:</label>
 <input type="text" name="latitude" id="latitude"required
 value="<?= $data["latitude"];?>">
 </li>

 <li>
 <label for="longitude">Longitude:</label>
 <input type="text" name="longitude" id="longitude"
 value="<?= $data["longitude"];?>">
 </li>

 <li>
 <label for="nama_warmindo">Nama Warmindo:</label>
 <input type="text" name="nama_warmindo" id="nama_warmindo"required
 value="<?= $data["nama_warmindo"];?>">
 </li>

 <li>
 <label for="foto">Foto:</label> <br>
 <img src="img/<?=$data['foto'];?>" width="200"> <br>
 <input type="file" name="foto" id="foto">
 </li>

 <li>
 <button type="submit" name="submit">Edit Data!</button>
 </li>
 </ul>

 </form>

 </body>
 </html>