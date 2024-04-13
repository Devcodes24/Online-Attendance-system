<html><head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>fetch data</title>
</head>
<body style="background-color:black">
<a href="attendence.html" ><button type="button" style="background-color:white; color:navyblue; width:60px;height:25px ; border-radius:20px ; cursor:pointer">Home</button></a>
<h2 style="color:white">Total Presency: <span id="total" style="color:white"></span></h2>

<form>


<?php
include("connection.php");
error_reporting(0);
$date1=$_GET['date1'];
$query="SELECT * FROM attendance";
$data=mysqli_query($conn,$query);
$total = mysqli_num_rows($data);


//echo "$total";

if($total!=0){
	
	$html='<table border="2" style="background-color:lightblue" style="overflow-x:auto;" id="table">';
    $html.='<tr>
    <th onclick="getIndex(this)">1. Abhishek</th>
    <th onclick="getIndex(this)">2. Bhaskar</th>
    <th onclick="getIndex(this)">3. Chintu</th>
    <th onclick="getIndex(this)">4. Devendra</th>
    <th onclick="getIndex(this)">5. Ekansh</th>
    <th onclick="getIndex(this)">6. Faizal</th>
    <th onclick="getIndex(this)">7. Gandhia</th>
    <th onclick="getIndex(this)">8. Harsh</th>
    <th onclick="getIndex(this)">9. Indresh</th>
    <th onclick="getIndex(this)">10. Jaggu</th>
    <th onclick="getIndex(this)">11. Kanishk</th>
    <th onclick="getIndex(this)">12. Lokesh</th>
    <th onclick="getIndex(this)">13. Manish</th>
	<th onclick="getIndex(this)">14. Nakul</th>
	<th onclick="getIndex(this)">15. om</th>
	<th onclick="getIndex(this)">16. priyanka</th>
	<th onclick="getIndex(this)">17. queen</th>
	<th onclick="getIndex(this)">18. Raj</th>
	<th onclick="getIndex(this)">19. Ramu</th>
	<th onclick="getIndex(this)">20. Sneha yadav</th>
	<th onclick="getIndex(this)">21. Tanu dahia</th>
    <th>Date</th>
    </tr>';
	while(($result=mysqli_fetch_assoc($data))){
		 
		$html.="<tr>
		<td>".$result['1. Abhishek']."</td>
		<td>".$result['2. Bhaskar']."</td>
		<td>".$result['3. Chintu']."</td>
		<td>".$result['4. Devendra']."</td>
		<td>".$result['5. Ekansh']."</td>
		<td>".$result['6. Faizal']."</td>
		<td>".$result['7. Gandhia']."</td>
		<td>".$result['8. Harsh']."</td>
		<td>".$result['9. Indresh']."</td>
		<td>".$result['10. Jaggu']."</td>
		<td>".$result['11. Kanishk']."</td>
		<td>".$result['12. Lokesh']."</td>
		<td>".$result['13. Manish']."</td>
		<td>".$result['14. Nakul']."</td>
		<td>".$result['15. om']."</td>
		<td>".$result['16. priyanka']."</td>
		<td>".$result['17. queen']."</td>
		<td>".$result['18. Raj']."</td>
		<td>".$result['19. Ramu']."</td>
		<td>".$result['20. Sneha yadav']."</td>
		<td>".$result['21. Tanu dahia']."</td>
		<td>".$result['Date']."</td></tr>";
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

<button onclick="window.print();"> Download </button>

<script>
function getIndex(x){
	var col=x.cellIndex;
	var a=0;
	var total=document.getElementById("total")

    for(var j=1;j<table.rows.length;j++){
    console.log(table.rows[j].cells[col].innerHTML);
	if(table.rows[j].cells[col].innerHTML=='present'){
    a+=1;
    }
    
}
total.innerHTML=(a);
console.log(a);
}
</script>

</body></html>