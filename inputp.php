   <?php
	
 if (isset($_POST['submit'])) {
  require_once("koneksi.php");
  $sql = $conn->prepare("INSERT INTO pegawai (id_pegawai, nama_pegawai , tempat_lahir, tanggal_lahir, agama, tahun_angkatan, jabatan, email, no_tlp, jk, alamat, lokasi_kerja, foto) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");  
  $id_pegawai=$_POST['id_pegawai'];
  $nama_pegawai= $_POST['nama_pegawai'];
  $tempat_lahir= $_POST['tempat_lahir'];
  $tanggal_lahir=$_POST['tanggal_lahir'];
  $agama= $_POST['agama'];
  $tahun_angkatan= $_POST['tahun_angkatan'];
  $jabatan=$_POST['jabatan'];
  $email= $_POST['email'];
  $no_tlp= $_POST['no_tlp'];
 
  $alamat= $_POST['alamat'];
  $lokasi_kerja= $_POST['lokasi_kerja'];
  $foto= $_POST['foto'];
  $sql->bind_param("ssssssssssss", $id_pegawai, $nama_pegawai, $tempat_lahir,$tanggal_lahir, $agama, $tahun_angkatan, $jabatan, $email, $no_tlp, $jk, $alamat, $lokasi_kerja, $foto); 
  if($sql->execute()) {
   $success_message = "Input Data Berhasil";
  } else {
   $error_message = "Ada masalah dengan Penginputan";
  }
  $sql->close();   
  $conn->close();
 } 
 
?>
<html>
<head>

 
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
.style1 {color: #FFFFFF}
</style>
  <title>Input Data Pegawai</title>  
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form id="frmUser" method="post" action="">

<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
 <thead>
  <tr>
   <th colspan="2" class="table-header"><div align="center">
     <p>Input Data Pegawai</p>
     <p>&nbsp;</p>
   </div></th>
  </tr>
 </thead>
 <tbody>
  <tr class="table-row">
   <td><label>Id Pegawai</label></td>
   <td><p>&nbsp;
     </p>
     <p>
       <input type="text" name="id_pegawai" class="txtField">
       </p>
     <p>&nbsp; </p></td>
  </tr>
  <tr class="table-row">
   <td><label>Nama_pegawai</label></td>
   <td><p>&nbsp;
     </p>
     <p>
       <input type="text" name="nama_pegawai" class="txtField">
       </p>
     <p>&nbsp; </p></td>
  </tr>
  <tr class="table-row">
   <td><label>Tempat Lahir</label></td>
   <td><p>&nbsp;</p>
     <p>
       <input type="text" name="tempat_lahir" class="txtField">
       </p>
     <p>&nbsp; </p></td>
  </tr>
  
<tr class="table-row">
   <td><label>Tanggal Lahir</label></td>
   <td><p>&nbsp;</p>
     <p>
       <input type="date" name="tanggal_lahir">
       </p>
     <p>&nbsp; </p></td>
  </tr>
  <tr class="table-row">
   <td><label>
     <div align="center">Agama</div>
   </label></td>
  <td><label>
     <select name="agama" id="agama">
       <option>Islam</option>
       <option>Kristen</option>
       <option>Hindu</option>
       <option>budha</option>
       <option>Konghucu</option>
       <option>Lainnya..</option>
          </select>
     <p>&nbsp; </p></td>
  </tr>
<tr class="table-row">
   <td><label>Tahun Angkatan</label></td>
   <td><p>&nbsp;</p>
     <p>
       <input type="date" name="tahun_angkatan">
       </p>
     <p>&nbsp; </p></td>
  </tr>
<tr class="table-row">
   <td><label>Jabatan</label></td>
   <td><p>&nbsp;</p>
     <p>
       <input type="text" name="jabatan" class="txtField">
       </p>
     <p>&nbsp; </p></td>
  </tr>
  <tr class="table-row">
   <td><label>Email</label></td>
   <td><p>&nbsp;</p>
     <p>
       <input type="text" name="email" class="txtField">
       </p>
     <p>&nbsp; </p></td>
  </tr>
  <tr class="table-row">
   <td><label>No Telepon/ HP</label></td>
   <td><p>&nbsp;</p>
     <p>
       <input type="text" name="no_tlp" class="txtField">
       </p>
     <p>&nbsp; </p></td>
  </tr>
  <tr class="table-row">
   <td><label>
     <div align="center">Jenis Kelamin</div>
   </label></td>
  <td><label>
     <select name="agama" id="agama">
       <option>Wanita</option>
       <option>Pria</option>
          </select>
  <tr class="table-row">
   <td><label>Alamat</label></td>
   <td><p>&nbsp;</p>
     <p>
       <input type="text" name="alamat" class="txtField">
       </p>
     <p>&nbsp; </p></td>
  </tr>
  <tr class="table-row">
   <td><label>Lokasi Kerja</label></td>
   <td><p>&nbsp;</p>
     <p>
       <input type="text" name="lokasi_kerja" class="txtField">
       </p>
     <p>&nbsp; </p></td>
  </tr>
  <tr class="table-row">
   <td><label>Foto</label></td>
   <td><p>&nbsp;
     </p>
     <p>
       <input type="file" name="foto">
       </p>
     <p>&nbsp;</p></td>
  </tr>
  <tr class="table-row">
   <td colspan="2"><input type="submit" name="submit" value="Submit" class="demo-form-submit"></td>
  </tr>
 </tbody>
</table>
</form>
</body>
</html>
  