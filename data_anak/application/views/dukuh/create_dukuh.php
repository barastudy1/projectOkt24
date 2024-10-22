<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Tambah Padukuhan</title>
</head>
<body>
	<h1><center>Input Data Dukuh</center></h1>
	<form method="post">
<table width="600" border="0" align="center" cellpadding="8px">
   <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Kode Padukuhan</div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="kd_padukuhan" id="kd_padukuhan" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Nama Padukuhan</div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="nama_padukuhan" id="nama_padukuhan" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle"><span class="style4"></span></td>
	<td></td>
    <td><input type="submit" name="simpan" value="Simpan" id="simpan" />
	<input type="hidden" name="asal" id="asal" value="<?php echo $_SERVER['PHP_SELF'];?>" /></td>
  </tr>
</table>
</form>
</body>
</html>