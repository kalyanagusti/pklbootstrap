<?php
include ("koneksi.php");
if (isset($_GET['id'])){
	$title ="Edit";
	$url ='proses_edit';
	$id = $_GET['id'];
	//buat query untuk ambil data dari database
	$sql ="SELECT * FROM daftar WHERE id = $id";
	$query = mysqli_query ($koneksi,$sql);
	$daftar = mysqli_fetch_array ($query);
	//jika data yang diedit tidak ditemukan
	if (mysqli_num_rows($query) < 1){
	die("data tidak ditemukan ...");}
	//url jika edit data 	
	}else{
		$title ="Add";
		//url jika tambah data
		$url='proses_pendaftaran.php';
	}
	?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Form Peserta</title>
    <link rel="stylesheet" type="text/css" href="style1.css">
  </head>
  <body>
    <section class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-6">
      <fieldset>
          <legend><h2 class="text-center mb-3">Form peserta</h2></legend> 
           

           
           <form name="tambahpeserta" action="#" method="post">
  <div class="row mb-3">
    <label for="id" class="col-sm-2 col-form-label">Id</label>
    <div class="col-sm-10">
      <input type="number" class="form-control" id="id" name="id">
    </div>
  </div>
  <div class="row mb-3">
    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nama" name="nama">
    </div>
  </div>
  <div class="row mb-3">
    <label for="email" class="col-sm-2 col-form-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" id="email" name="email">
    </div>
  </div>
  <div class="row mb-3">
    <label for="tanggal_lahir" class="col-sm-2 col-form-label">Tgl Lahir</label>
    <div class="col-sm-10">
      <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
    </div>
  </div>
  <div class="row mb-3">
    <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
    <div class="col-sm-10">
      <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
    </div>
  </div>
    <div align="right">
   <button type="submit" class="btn btn-secondary">Simpan</button>
  </div>
 </form>
      </fieldset>
         </div>
       </div>
    </section>
   
    
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

  </body>
</html>