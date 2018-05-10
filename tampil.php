<?php 
require_once("koneksi.php");

$sql = "SELECT * FROM pegawai";
$result = $conn->query($sql); 
$conn->close();  
?>
<html>
<head>
 
<title>Show Pegawai</title>
<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
<link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style1 {font-size: medium}
.style4 {font-size: small; }
-->
</style>
</head>
<body>
 <div class="button_link">
   <p><a href="input.php"></a></p>
   <p>
   
   </p>
 </div>
 <table width="833" height="137" align="center" class="tbl-qa"> 
  <thead>
    <tr>
    <th width="35" height="42" bgcolor="#00CCCC" class="table-header style1" wnimmhsth="20%"><div align="left" class="style4">id</div></th>
    <th width="133" bgcolor="#00CCCC" class="table-header style1" wnimmhsth="20%"><div align="left" class="style4">Nama Pegawai</div></th>
    <th width="75" bgcolor="#00CCCC" class="table-header style1" wnimmhsth="20%"> <div align="center" class="style4">Tanggal lahir </div></th>
    <th width="81" bgcolor="#00CCCC" class="table-header style1" wnimmhsth="20%"> <div align="center" class="style4">Tahun Angkatan  </div></th>
    <th width="75" bgcolor="#00CCCC" class="table-header style1" wnimmhsth="20%"> <div align="left" class="style4">Jabatan</div></th>
    <th width="99" bgcolor="#00CCCC" class="table-header style1" wnimmhsth="20%"> <div align="left" class="style4">No Telepon  </div></th>
    <th width="173" bgcolor="#00CCCC" class="table-header style1" wnimmhsth="20%"> <div align="left" class="style4">Alamat </div></th>
    <th width="53" bgcolor="#00CCCC" class="table-header style1" wnimmhsth="20%"> <div align="left">Foto</div></th>
    <th width="69" bgcolor="#00CCCC" class="table-header style1" wnimmhsth="20%"><div align="left">Aksi</div></th>
    </tr>
  </thead>
  <tbody>  
   <?php
    if ($result->num_rows > 0) {  
     while($row = $result->fetch_assoc()) {
   ?>
   <tr class="table-row" id="row-<?php echo $row["id_pegawai"]; ?>"> 
    <td bordercolor="#999999" bgcolor="#FFFFFF" class="table-row"><div align="left">        <?php echo $row["id_pegawai"]; ?></div></td>
    <td bordercolor="#999999" bgcolor="#FFFFFF" class="table-row"><div align="left"><?php echo $row["nama_pegawai"]; ?>
    </div></td>
    <td bordercolor="#999999" bgcolor="#FFFFFF" class="table-row"><div align="left"><?php echo $row["tanggal_lahir"]; ?></div></td>
      <td bordercolor="#999999" bgcolor="#FFFFFF" class="table-row"><div align="left"><?php echo $row["tahun_angkatan"]; ?></div></td>
      <td bordercolor="#999999" bgcolor="#FFFFFF" class="table-row"><div align="left"><?php echo $row["jabatan"]; ?></div></td>
      <td bordercolor="#999999" bgcolor="#FFFFFF" class="table-row"><div align="left"><?php echo $row["no_tlp"]; ?></div></td>
      <td bordercolor="#999999" bgcolor="#FFFFFF" class="table-row"><div align="left"><?php echo $row["alamat"]; ?></div></td>
      <td bordercolor="#999999" bgcolor="#FFFFFF" class="table-row"><div align="left"></div></td>
	<td colspan="2" bordercolor="#999999" bgcolor="#FFFFFF" class="table-row"><a href="menueditp.php?id_pegawai=<?php echo $row["id_pegawai"]; ?>" class="link">edit</a> <a href="delete.php?id_pegawai=<?php echo $row["id_pegawai"]; ?>" class="link">delete</a></td>
	</tr>
   <?php
     }
    }
   ?>
  </tbody>
</table>
<p>&nbsp;</p>
 
 <p>&nbsp;</p>
 <script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>