
<html>
<head>
<title>Prosjek ocjena prvog i drugog kolokvija</title>
</head>
<body>
	<h1>Izračun prosjeka ocjena</h1>
<form method="post">
<table border="0">
<tr>
<td> <input type="number" name="num1" value="" placeholder="Unesite prvu ocjenu"/>
</td>
</tr>
<tr>
<td> <input type="number" name="num2" value="" placeholder="Unesite drugu ocjenu"/>
</td>
</tr>
<tr>
<td> <input type="submit" name="submit" value="Submit"/>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{
$prva = $_POST['num1'];
$druga = $_POST['num2'];


$total = (int)$prva + (int)$druga; 
$average = number_format($total/2); 




}



echo " Prosjek ocjena dva kolokvija = ".round($average) ;
?>
</body>
</html>