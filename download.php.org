<?php
include('koneksi.php');
require_once("dompdf/autoload.inc.php");
use Dompdf\Dompdf;
$dompdf = new Dompdf();
$query = mysqli_query($koneksi,"SELECT user.eq, user.alamat, user.telp, user.mctype, user.customer, user.pic, user.sn, user.tgl, signature.img, signature.base64, signature.status
FROM user INNER JOIN signature 
ON user.id = signature.id
 WHERE user.id='$_GET[id]'");



$html = '<center><h3>Daftar Nama Siswa</h3></center><hr/><br/>';


$no = 1;
while($data= mysqli_fetch_array($query))
{
    $html .= "

    	<table border='1px'  width='58%'' >
    	<tr>
      		<th  rowspan='2' style='background:#ddd'; height='' width='30p%'>&nbsp; Customer Name</th>
     		<th   width='30%'  height=''>". $data['customer']."</th>
        </tr>
        <tr>
      		<th  rowspan='2' style='background:#ddd'; height='' width='30p%'>&nbsp; Address</th>
     		<th   width='30%'  height=''>". $data['customer']."</th>
        </tr>
         </table>";
    $no++;
}
$html .= "</html>";
$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'landscape');
// Rendering dari HTML Ke PDF
$dompdf->render();
// Melakukan output file Pdf
$dompdf->stream('laporan_siswa.pdf');
?>

