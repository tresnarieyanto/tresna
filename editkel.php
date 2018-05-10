<?php
 require_once("koneksi.php");
 if (isset($_POST['submit'])) {  
  $sql = $conn->prepare("UPDATE kelompokkerja SET kelkerja=? , kelompok=?  WHERE kelkerja=?");
  $kelkerja=$_POST['kelkerja'];
  $kelompok= $_POST['kelompok'];
  $sql->bind_param("sss",$kelkerja, $kelompok, $_GET["kelkerja"]); 
  if($sql->execute()) {
   $success_message = "Update Data Berhasil";
  } else {
   $error_message = "Ada masalah update data";
  }

 }
 $sql = $conn->prepare("SELECT * FROM kelompokkerja WHERE kelkerja=?");
 $sql->bind_param("s",$_GET["kelkerja"]);   
 $sql->execute();
 $result = $sql->get_result();
 if ($result->num_rows > 0) {  
  $row = $result->fetch_assoc();
 }
 $conn->close();
?>
<html>
<head>

<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
<title>edit kelompok kerja</title>
</head>
<body>
<?php if(!empty($success_message)) { ?>
<div class="success message"><?php echo $success_message; ?></div>
<?php } if(!empty($error_message)) { ?>
<div class="error message"><?php echo $error_message; ?></div>
<?php } ?>
<form name="frmUser" method="post" action="">
<div class="button_link"></div>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tbl-qa">
 <thead>
  <tr>
   <th colspan="2" class="table-header">Edit Data Kelompok Kerja</th>
  </tr>
 </thead>
 <tbody>
  <tr class="table-row">
  <td><label>Kelompok Kerja</label></td>
  <td><input type="text" name="kelkerja" class="txtField" value="<?php echo $row["kelkerja"]?>"></td>
  </tr>
  <tr class="table-row">
  <td><label>Kelompok</label></td>
  <td><input type="text" name="kelompok" class="txtField" value="<?php echo $row["kelompok"]?>"></td>
  </tr>
  <tr class="table-row">
   <td colspan="2"><input type="submit"  name="submit" value="Submit" class="demo-form-submit"></td>
  </tr>
 </tbody> 
</table>
</form>
</body>
</html>