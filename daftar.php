   <?php
	
 if (isset($_POST['submit'])) {
  require_once("koneksi.php");
  $sql = $conn->prepare("INSERT INTO login (username,password,) VALUES (?, ?)");  
  $username=$_POST['username'];
  $password= $_POST['password'];
  $sql->bind_param("ss", $username, $password); 
  if($sql->execute()) {
   $success_message = "Pendaftaran Berhasil";
  } else {
   $error_message = "Ada masalah dengan Pendaftaran";
  }
  $sql->close();   
  $conn->close();
 } 
 
?>
<html>
<head>
<link href="style.css" rel="stylesheet" type="text/css" />
 
<style>
.tbl-qa{border-spacing:0px;border-radius:4px;border:#6ab5b9 1px solid;}
</style>
  <title>Daftar</title>  
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
   <th colspan="2" class="table-header">Daftar</th>
  </tr>
 </thead>
 <tbody>
  <tr class="table-row">
   <td><label>username</label></td>
   <td><input type="text" name="username" class="txtField"></td>
  </tr>
  <tr class="table-row">
   <td><label>password</label></td>
   <td><input type="password" name="password" class="txtField"></td>
  </tr>
  
  <tr class="table-row">
   <td colspan="2"><input type="submit" name="submit" value="Submit" class="demo-form-submit"></td>
  </tr>
 </tbody>
</table>
</form>
</body>
</html>
  
