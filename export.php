<?php

/**
 *Ext. v1 
 * @author Ardha Herdianto
 * @copyright 2013
 */
 
require_once 'config.php';

if(!isset($_GET['sub'])) header('Location:./');

$sub=$_GET['sub'];
  
$mydate=getdate(date("U"));
$date="$mydate[year]-$mydate[mday]-$mydate[mon]";

// nama file
$namaFile = "export-$date.xls";

function xlsBOF() {
echo pack("ssssss", 0x809, 0x8, 0x0, 0x10, 0x0, 0x0);
return;
}

function xlsEOF() {
echo pack("ss", 0x0A, 0x00);
return;
}

function xlsWriteNumber($Row, $Col, $Value) {
echo pack("sssss", 0x203, 14, $Row, $Col, 0x0);
echo pack("d", $Value);
return;
}

function xlsWriteLabel($Row, $Col, $Value ) {
$L = strlen($Value);
echo pack("ssssss", 0x204, 8 + $L, $Row, $Col, 0x0, $L);
echo $Value;
return;
}


header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,
        pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");

// header untuk nama file
header("Content-Disposition: attachment;
        filename=".$namaFile."");

header("Content-Transfer-Encoding: binary ");

// memanggil function penanda awal file excel
xlsBOF();

// ------ membuat kolom pada excel --- //

// mengisi pada cell A1 (baris ke-0, kolom ke-0)
xlsWriteLabel(0,0,"id_info");               

// mengisi pada cell A2 (baris ke-0, kolom ke-1)
xlsWriteLabel(0,1,"Tanggal");              

// mengisi pada cell A3 (baris ke-0, kolom ke-2)
xlsWriteLabel(0,2,"nama_info");

// mengisi pada cell A4 (baris ke-0, kolom ke-3)
xlsWriteLabel(0,3,"link");   

// -------- menampilkan data --------- //


// query menampilkan semua data

$query = "SELECT * FROM $sub";
$hasil = mysql_query($query);

// nilai awal untuk baris cell
$noBarisCell = 1;

// nilai awal untuk nomor urut data
$noData = 1;

while ($data = mysql_fetch_array($hasil))
{

// menampilkan data id
   xlsWriteLabel($noBarisCell,0,$data['id_info']);

// menampilkan data nama mahasiswa
   xlsWriteLabel($noBarisCell,1,$data['Tanggal']);

// menampilkan data nilai
   xlsWriteLabel($noBarisCell,2,$data['nama_info']);

// menampilkan data nilai
   xlsWriteLabel($noBarisCell,3,$data['link']);

   // increment untuk no. baris cell dan no. urut data
   $noBarisCell++;
   $noData++;
}

// memanggil function penanda akhir file excel
xlsEOF();
exit();

?>