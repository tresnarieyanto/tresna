<?php 
require_once("koneksi.php");

$sql = "SELECT * FROM kelompokkerja";
$result = $conn->query($sql); 
$conn->close();  
?>
<html>
<head>
 <title>Show Kelompok Kerja</title>
 <script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
 <link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css">
 <link href="../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
 <style type="text/css">
<!--
.style1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
 </style>
</head>
<body>
 <div class="button_link">
   <p><a href="inputpeg.php"></a></p>
   </p>
 </div>
<table width="602" align="center" class="tbl-qa"> 
  <thead>
    <tr>
    <th width="289" height="37" bgcolor="#0000FF" class="table-header style1" wnimmhsth="20%"> <div align="center">kelompok kerja </div></th>
        <th width="215" bgcolor="#0000FF" class="table-header style1" wnimmhsth="20%"> <div align="center">kelompok </div></th>
    <th width="82" colspan="2" bgcolor="#0000FF" class="table-header style1" wnimmhsth="20%"><div align="center">Aksi</div></th>
    </tr>
  </thead>
  <tbody>  
   <?php
    if ($result->num_rows > 0) {  
     while($row = $result->fetch_assoc()) {
   ?>
   <tr class="table-row" id="row-<?php echo $row["kelkerja"]; ?>"> 
    <td bordercolor="#FFCC66" class="table-row"><div align="left"><?php echo $row["kelkerja"]; ?></div></td>
    <td bordercolor="#FFCC66" class="table-row"><div align="center"><?php echo $row["kelompok"]; ?></div></td>
    <td colspan="2" bordercolor="#FFCC66" class="table-row"><div align="center"><a href="menueditk.php?kelkerja=<?php echo $row["kelkerja"]; ?>" class="link"><img src="edit.png" width="30" height="30" title="Edit"/></a><a href="deletekel.php?kelkerja=<?php echo $row["kelkerja"]; ?>" class="link"><a href="deletekel.php?kelkerja=<?php echo $row["kelkerja"]; ?>" class="link"><img src="delete.png" name="delete" width="32" height="36" title="Delete" onClick="return confirm('Yakin akan di Hapus?')" kelkerja="delete"/></a></a></div></td>
   </tr>
   <?php
     }
    }
   ?>
  </tbody>
</table>
<div align="center"></div>
<p>&nbsp;</p>
<table width="134" align="center">
  <tr>
    <th width="164" scope="row"><ul id="MenuBar1" class="MenuBarHorizontal">
      
    </ul>
    <div align="center"></div></th>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
</html>