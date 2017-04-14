<?php


session_start();

require("connect.php");

if(isset($_POST['S1']))
{

	echo "<script>alert('check1')</script>";

	$mar_form=$_POST['mar'];
	$hindi_form=$_POST['hindi'];
	$eng_form=$_POST['eng'];
	$maths_form=$_POST['maths'];
	$sci_form=$_POST['sci'];
	$ss_form=$_POST['ss'];
	$m2_form=$_POST['m2'];
	$p1_form=$_POST['p1'];
	$p6_form=$_POST['p6'];
	$p7_form=$_POST['p7'];
	$p8_form=$_POST['p8'];
	$p38_form=$_POST['p38'];
	$totalm_form=$_POST['totalm'];
	$perct_form=$_POST['perct'];
	$result_form=$_POST['result'];

	//$a=$_SESSION['seat'];




	$write=mysqli_query($_connect,"INSERT INTO form2 (seatno,mar,hindi,eng,maths,sci,ss,m2,p1,p6,p7,p8,p38,totalm,perct,result) VALUES ('$a','$mar_form','$hindi_form','$eng_form','$maths_form','$sci_form','$ss_form','$m2_form','$p1_form','$p6_form','$p7_form','$p8_form','$p38_form','$totalm_form','$perct_form','$result_form')") or die("sql error");

	echo "Successful insertion";

	$_SESSION['seat']=$seatno_form;


header("Location:http://localhost/12thMarksheet/form6.php");






}

?>

<!DOCTYPE html>
<html>
<head>
<title>12th form</title>

<meta charset="UTF-8">
<meta name="description" content="12th Form">
<meta name="keywords" content="HTML, CSS, XML, JavaScript">
<meta name="author" content="Joel Braganza">
<style>
.div1 {

        background: linear-gradient(to right,#FFFACD,#FFFACD,#FFFACD );
}
.div2 {
      background: linear-gradient(to right,#DDA0DD,#87CEEB,#98FB98);
}
.fclr
{
color:white;
}
.submit{
padding: 15px 80px;
border-radius: 8px;
border: 2px solid #263238;
}
</style>


</head>
<body class="div2">


<h1><center> 12th MARKSHEET FORM </center></h1>
<fieldset >
<legend class="fclr">12th MARKSHEET FORM</legend>
<center>
<form class="div1" name="form9" action="form6.php" method="POST">
<table cellpadding="8" border="0" >
<tr>
<td>FIRST NAME</td>
<td>:</td>
<td><input type="text" name="fname"></td>
</tr>
<tr>
<td>MIDDLE NAME</td>
<td>:</td>
<td><input type="text" name="mname"></td>
</tr>
<tr>
<td>LAST NAME</td>
<td>:</td>
<td><input type="text" name="lname"></td>
</tr>
<tr>
<td>DIVISIONAL BOARD</td>
<td>:</td>
<td><select name="db">
<option value="no" checked >--SELECT DIV BOARD--</option>
<option value="mumbai">MUMBAI</option>
<option value="pune">PUNE</option>
<option value="nagpur">NAGPUR</option>
<option value="aurangabad">AURANGABAD</option>
<option value="kolhapur">KOLHAPUR</option>
<option value="nashik">NASHIK</option>
<option value="latur">LATUR</option>
<option value="amravati">AMRAVATI</option>
<option value="konkan">KONKAN</option>
</select>
</td>
</tr>

<tr>
<td>SEAT NO.</td>
<td>:</td>
<td><input type="text" name="seatno" onkeyup="limit(this,7);" onkeydown="limit(this)" ></td>
</tr>

<tr>
<td>CENTER NO.</td>
<td>:</td>
<td><input type="text" name="centerno" onkeyup="limit(this,4);" onkeydown="limit(this)"></td>
</tr>

<tr>
<td>DISTRICT AND SCHOOL NO.</td>
<td>:</td>
<td><input type="text" name="dnsno"></td>
</tr>

<tr>
<td>MONTH AND YEAR OF EXAM</td>
<td>:</td>
<td><input type="month" name="emonth"></td>
</tr>

<tr>
<td>SR. NO. OF STATEMENT</td>
<td>:</td>
<td><input type="text" name="srno" onkeyup="limit(this,6);" onkeydown="limit(this)"></td>
</tr>


<tr>
<td colspan="3"><center>  <input type="submit" onsubmit="myFunction()" value="Submit" class="submit" onclick="myFunction()">  <input type="reset" onclick="validateinfo()" value="Reset" class="submit"></center></td>
</tr>
</table>

</form>
</center>
</fieldset>






 <script src="validate1.js"></script>






</body>
</html>
