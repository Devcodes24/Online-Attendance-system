<?php
require ('vendor/autoload.php');
include "fetchdata.php";
$conn=mysqli_connect('localhost','root','','students');
$mpdf= new \Mpdf\Mpdf();
$mpdf-> writeHTML($html);
$filr=time().'.pdf';
$mpdf->output($file,'I');

?>