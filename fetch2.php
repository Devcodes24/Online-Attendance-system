<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>fetch2</title>
<style>

@media screen and (min-width: 360px){
	body{
		width: 100vw;
		height: 100vh;
		text-align: center;
		
		
		
	}
	form{
		width:40vw;
		text-align: center;
		
		
		
	}
	

</style>

</head>
<body style="background-color:black">
<a href="attendence.html" style="text-decoration: none"><button type="button" style="background-color:white; color:navyblue; width:60px;height:25px ; border-radius:20px ; cursor:pointer;display: block;">Home</button></a>
<form style="">
<input type="date" name="date1" required style = "width: 100px;padding:5px;margin-right: 30px;margin-bottom: 30px">
<input type="submit" name="submit" style ="width: 100px;outline: none: background-color: white; color: black;padding: 6px;margin-bottom: 30px">
<?php

include("connection.php");
error_reporting(0);
$date1=$_GET['date1'];
$query="SELECT * FROM attendance where Date='$date1'";
$data=mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


//echo "$total";

if($total!=0){
	
	$html='<table border="1" style="width: 50vw;background-color:lightblue;text-align: center;align-item: center">';
    $html.='<tr>
    <th colspan = "5" border = "1px" style="line-height: 40px">Student Record Here</th>
    
    </tr>';$html.='<tr>
    <th>Name</th>
    <th>Attandance</th>
	<th>Date</th>
    </tr>';
	while(($result=mysqli_fetch_assoc($data))){
		 
		$html.="<tr>
		<td>Abhishek</td>
		<td>".$result['1. Abhishek']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Bhaskar</td>
		<td>".$result['2. Bhaskar']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Chintu</td>
		<td>".$result['3. Chintu']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Devendra</td>
		<td>".$result['4. Devendra']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Ekansh</td>
		<td>".$result['5. Ekansh']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Faizal</td>
		<td>".$result['6. Faizal']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Gandhia</td>
		<td>".$result['7. Gandhia']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Harsh</td>
		<td>".$result['8. Harsh']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Indresh</td>
		<td>".$result['9. Indresh']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Jhatu</td>
		<td>".$result['10. Jaggu']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Kanishk</td>
		<td>".$result['11. Kanishk']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Lodu</td>
		<td>".$result['12. Lokesh']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Manish</td>
		<td>".$result['13. Manish']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Nakul</td>
		<td>".$result['14. Nakul']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>om</td>
		<td>".$result['15. om']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>priyanka</td>
		<td>".$result['16. priyanka']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>queen</td>
		<td>".$result['17. queen']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Raj</td>
		<td>".$result['18. Raj']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Ramu</td>
		<td>".$result['19. queen']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Sneha yadav</td>
		<td>".$result['20. Sneha yadav']."</td>
		<td>".$result['Date']."</td></tr>
		<tr>
		<td>Tanu dahia</td>
		<td>".$result['21. Tanu dahia']."</td>
		<td>".$result['Date']."</td></tr>";
		$style = true;
	}
	$html.='</table>';
	
}
else{
	echo "no records";
}
echo $html;





?>

</table>

</form>

<button onclick="window.print();" style="padding: 8px: border:2px;background-color:goldenrod; color: white; font-size: 25px
;font-weight: bold; border-radius: 20px; cursor: pointer"> Download </button>



</body></html>