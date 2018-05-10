<?php
 if (isset($_POST['submit'])) {
  require_once("koneksi.php");
  $sql = $conn->prepare("INSERT INTO kelompokkerja (kelkerja, kelompok) VALUES (?, ?)");  
  $kelkerja= $_POST['kelkerja'];
  $kelompok= $_POST['kelompok'];
  $sql->bind_param("ss", $kelkerja, $kelompok); 
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
  <title>Input Data Kelompok Kerja</title>  
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form id="frmUser" method="post" action="">

<p align="center"><span class="table-header style1">Input Data Kelompok</span></p>
<p>&nbsp;</p>
<table width="390" align="center" cellpadding="10" cellspacing="0" bordercolor="#FFFFFF" bgcolor="#FFFFFF" class="tbl-qa">
 
 <tbody>
  <tr class="table-row">
   <td width="190" height="71"><label>
   <div align="left">Kelompok kerja</div>
   </label></td>
   <td width="158"><input type="text" name="kelkerja" class="txtField"></td>
  </tr>
  <tr class="table-row">
   <td><label>
     <div align="left">Kelompok</div>
   </label>
     <div align="left"></div></td>
   <td><input type="text" name="kelompok" class="txtField"></td>
  </tr>
  <tr class="table-row">
   <td colspan="2">&nbsp;</td>
  </tr>
 </tbody>
</table>
<p>&nbsp;</p>
<div align="center">
  <input type="submit" name="submit" value="Submit" class="tbl-qa">
</div>
</form>
</body>
</html>