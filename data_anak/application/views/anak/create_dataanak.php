<h1><center>Input Data Anak</center></h1>
<form method="post">
<table width="600" border="0" align="center" cellpadding="8px">
  <tr>
    <td width="150" valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">NIK </div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="nik" id="nik" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Kode Sekolah  </div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="kd_sekolah" id="kd_sekolah" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Kode Padukuhan</div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="kd_padukuhan" id="kd_padukuhan" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Nama Anak</div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="nama_anak" id="nama_anak" size="54" required="" /></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Tempat Lahir</div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="tempat_lahir" id="tempat_lahir" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Tanggal Lahir </div></td>
	<td>:</td>
    <td bgcolor="#00FA9A"><input type="date" name="tgl_lahir" id="tgl_lahir" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Alamat </div></td>
  <td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="alamat" id="alamat" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Nama Ibu </div></td>
  <td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="nama_ibu" id="nama_ibu" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Nama Ayah </div></td>
  <td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="nama_ayah" id="nama_ayah" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Pekerjaan Ibu </div></td>
  <td>:</td>
    <td><select name="pekerjaan_ibu">
                    <option value="-">- Pilih Pekerjaan -
                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga
                    <option value="Wiraswasta">Wiraswasta
                    <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil
                    <option value="Karyawan">Karyawan
                    <option value="Tidak Bekerja">Tidak Bekerja
          </select></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Pekerjaan Ayah</div></td>
  <td>:</td>
      <td><select name="pekerjaan_ayah">
                    <option value="-">- Pilih Pekerjaan -
                    <option value="Wiraswasta">Wiraswasta
                    <option value="Pegawai Negeri Sipil">Pegawai Negeri Sipil
                    <option value="Karyawan">Karyawan
                    <option value="Tidak Bekerja">Tidak Bekerja
          </select></td>
  </tr>
  <tr>
    <td valign="middle" bgcolor="#66CDAA"><div align="left" class="style3">Jumlah Pendapatan(/bln)</div></td>
  <td>:</td>
    <td bgcolor="#00FA9A"><input type="text" name="jml_pendapatan" id="jml_pendapatan" size="54" required=""/></td>
  </tr>
  <tr>
    <td valign="middle"><span class="style4"></span></td>
	<td></td>
    <td><input type="submit" name="simpan" value="Simpan" id="simpan" />
	<input type="hidden" name="asal" id="asal" value="<?php echo $_SERVER['PHP_SELF'];?>" /></td>
  </tr>
</table>
<br>

