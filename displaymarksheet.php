<?php


session_start();


require("connect.php");

$sql = "select * from form1 where seatno='".$_SESSION['seat']."'";

$sql1 = "select * from form2 where seatno='".$_SESSION['seat']."'";


$result = $_connect->query($sql);

$result1 = $_connect->query($sql1);

echo $_SESSION['seat'];

echo "$result->num_rows";
echo "$result1->num_rows";


if ($result->num_rows > 0 &&  $result1->num_rows > 0 )
  {
    // output data of each row



    $row = $result->fetch_assoc();
    $row1 = $result1->fetch_assoc();

    echo $row['fname'];
      echo $row['mname'];
        echo $row['lname'];
        echo $row['moname'];
          echo $row['divb'];




            echo $row1['mar'];
              echo $row1['hindi'];
?>

﻿<!DOCTYPE html>

<html>

	<head>
<title> 12TH MARKSHEET </title>

<meta charset="UTF-8">
<meta name="description" content="12 th MARKSHEET">

	<meta name="keywords" content="HTML, CSS, XML, JavaScript">

<meta name="author" content="Joel Braganza">


		<style>


			.top{

				font-family:"Old English Text MT";

				font-style:normal;

	            font-variant:normal;

	            background-color: ;


			    }

              .whole{


                    background-color: #CC7;
                    background:linear-gradient(90deg,#CC4,#CC9,#CC9,#CC6);
              }

              .bck{

                    background-color:black;
                    color:white;
              }

              .one{
                    background:liner-gradient(90deg,green,blue,green);
                    text-align:center;
              }

              #hello{
                    background:linear-gradient(45deg,beige,pink);
              }

              .bod{

              			max-width:100%;
              			height:20%;
              			text-align:center;
              }


</style>



	</head>

<body class="bod">
<table border="1" align="center" class="whole" >

	<tr>

<td>

<table align="center" width=100% >

				<tr>

					<td rowspan="5" ><img src="MSBSHSE_logo.png" align="center" height="220" width="220"></td>

</tr>


				<tr>

					<td ><center><strong><font size="6" >महाराष्ट् राज्य माध्यमिक व उच्च  माध्यमिक शिक्षण मंडळ पुणे</font></strong></center> </td>

				</tr>



				<tr>

    <td class="top"><center><font size="6" > Maharashtra State Board of</font> </center></td>

				</tr>


				<tr>

				    <td class="div"><center><font size="6" > Secondary and Higher Secondary  Education ,Pune </font></center></td>


				</tr>

				<tr>

					 <td><center><strong> <font size="5" >माध्यमिक प्रमाणपत्र परीक्षा शालान्त - गुणपत्रक </font></strong></center></td>


				</tr>



				<tr>
					<td></td>
					<td colspan="1" style="text-align:center;"><font face="cursive" size="6" > NAGPUR &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<em>DIVISIONAL BOARD</em> </font></td>



				</tr>



				<tr>

			<td colspan="2"><font face="cursive" size="5"><center>HIGHER SECONDARY CERTIFICATE EXAMINATION--<strong>STATEMENT OF MARKS</strong><small>(Revised from-2008)</small></center></font></td>

				</tr>


			</table>


		<table align="center" border="1" cellpadding="5" cellspacing="1" width=100% >



            <tr class="bck">

			  <td><font size="2" ><center> विभागीय मंङळ <br>DIVISIONAL BOARD</center></font></td>


			  <td><font size="2"><center>आसन क्रमांक <br> SEAT NO. </center></font></td>


			  <td><font size="2"><center> केन्द्र क्रमांक<br> CENTER NO. </center></font></td>


			  <td><font size="2"><center>जिल्हा व शाळा क्रमांक<br> DIST. & SCHOOL NO.</center></font></td>


			  <td><font size="2"><center>परीक्षेचा महिना व वर्ष<br>MONTH & YEAR OF EXAM</center></font></td>


	                  <td><font size="2"><center>गुणपत्रिकेचा अनुक्रमांक<br>SR.NO. OF STATEMENT </center></font></td>

        		</tr>


			<tr>


        <td><strong><center><?php echo $row['divb']; ?></center></strong></td>
        <td> <strong><center><?php echo $row['seatno']; ?></center></strong></td>
        <td><strong><center><?php echo $row['centerno']; ?></center></strong></td>
        <td><strong><center><?php echo $row['dnsno']; ?></center></strong></td>
        <td><strong><center><?php echo $row['emonth']; ?></center></strong></td>
        <td><strong><center><?php echo $row['srno']; ?></center></strong></td>
</tr>






		</table>


		<table align="center" border="1" cellpadding="5" cellspacing="1" width=100% id="hello">


			<tr class="one" >

			    <td colspan="9"><center>उमेदवाराचे संपूर्ण नाव ( अडनाव प्रथम ) / CANDIDATE'S FULL NAME (SURNAME FIRST)</center><br> <center><strong><font face="Handwriting" size="6"> Braganza Joel John Bridget Savio  </strong></center></td>

			</tr>


			<tr class="one ">

				<td colspan="9">उमेदवाराच्या आईचे नाव / CANDIDATE'S MOTHER'S NAME <br>  &nbsp&nbsp&nbsp&nbsp&nbsp <strong><font size="6">Bridget</font> </strong>
			</td>

</tr>


<tr class="whole">

	<td rowspan="3"><center>विषय<br>SUBJECTS<br></center></td>

	<td colspan="3"><center>भाषा/ LANGUAGES</center></td>

	    <td rowspan="3"><center>गणित<br>MATHS</center></td>

	    <td rowspan="3"><center>विज्ञान<br>SCIENCE</center></td>

	  <td rowspan="3"><center>सामाजिक शासत्रे<br>SOCIAL SCIENCES</center></td>

	  <td rowspan="3"><center>एकूण गुण<br>TOTAL MARKS</center></td>

	  <td rowspan="2"><center>टक्केवारी<br>PERCENTAGE</center></td>
</tr>

<tr class="whole">
	  <td><center>प्रथम<br>FIRST</center></td>

	   <td colspan="2"><center>व्दितीय /त्रुतीय<br>SECOND/THIRD</center></td>
</tr>
<tr class="whole">

	    <td><center>MAR</center></td>
    <td><center>HIN</center></td>

	  <td><center>ENG</center></td>

	 <td><center><strong>60.67</strong></center></td>

</tr>


<tr>

	 <td><center>कमाल गुण <br>MAXIMUM MARKS</center></td>

	<td><center>100</center></td>

	    <td><center>100</center></td>

    <td><center>100</center></td>

	  <td><center>150</center></td>

    <td><center>100</center></td>

	   <td><center>100</center></td>

	    <td><center>650</center></td>

    <td><center>निकाल<br>RESULT<center></td>

</tr>


<tr>

	<td><center>प्राप्त गुण<br>MARKS OBTAINED</center></td>

  <td><center>प्राप्त गुण<br>MARKS OBTAINED</center></td>
    <td><center><strong><?php  echo $row1['mar']; ?></strong></center></td>
    <td><center><strong><?php  echo $row1['hindi']; ?></strong></center></td>
    <td><center><strong><?php  echo $row1['eng']; ?></strong></center></td>
    <td><center><strong><?php  echo $row1['maths']; ?></strong></center></td>
    <td><center><strong><?php  echo $row1['sci']; ?></strong></center></td>
    <td><center><strong><?php  echo $row1['ss']; ?></strong></center></td>
    <td><center><strong><?php  echo $row1['totalm']; ?></strong></center></td>
    <td><center><strong><?php  echo $row1['result']; ?></strong></center></td>
</tr>


</table>



<table align="center" border="1" cellpadding="5" cellspacing="1" width=100% >

<tr>

	<td colspan="7" class="one" style="background-color:turquoise;"><font size="5">एकूण गुण (अक्षरी) / &lowast; THREE HUNDRED AND SIXTY FOUR &lowast;   <br> TOTAL MARKS( IN WORDS) </font></td>


		<td rowspan="4"><img src="holo.png" height="230" width="225"></td>

</tr>


<tr>

<td><center>श्रेणीचे विषय <br> SUBJECTS FOR GRADING</center></td >

<td><center>कार्यानुभव/तंत्र विषय <br>WORK EXPR.<br>TECH. SUBJECT</center></td>

	<td colspan="5"><center>शालेय विषय <br>SCHOOL SUBJECTS</center></td>

</tr>


<tr>

<td><center>₤ सांकेतिक क्र. <br>₤ INDEX NO.</center></td>

<td><center>M2</center></td>
<td><center>P1</center></td>

	<td><center>P6</center></td>
<td><center>P7</center></td>

	<td><center>P8</center></td>
<td><center>38</center></td>

</tr>


<tr>

<td><center>&lowast; प्राप्त गुण / श्रेणी <br>MARKS/GRADE OBTAINED </center></td>
<td><center><strong><?php  echo $row1['m2']; ?></strong></center></td>
<td><center><strong><?php  echo $row1['p1']; ?></strong></center></td>
<td><center><strong><?php  echo $row1['p6']; ?></strong></center></td>
<td><center><strong><?php  echo $row1['p7']; ?></strong></center></td>
<td><center><strong><?php  echo $row1['p8']; ?></strong></center></td>
<td><center><strong><?php  echo $row1['p38']; ?></strong></center></td>

</tr>


<tr>


		<td colspan="7"><p>
	<strong>Important:</strong>
	No change in this Statement of Marks shall be made except by th authority issuing it.&nbspAny infringement of this requirement will result in cancellation of the Statement of Marks in questions & may also involve imposition of the other appropriate penalty as decided by the Board.

	<br><strong>Note:</strong>
	Minimum 35% marks are essential to pass in each subject.


<p>
	<strong>XX</strong>  Indicates Exemption in the subject.
	<strong> AA</strong>  Indicates Absent.
	<strong> NN</strong>  Indicates Subject Not Offered
       <strong> +</strong> Sign, if shown under the total marks, indicates the grace marks awarded for  getting Grade-I, as per regulation of the  Board.
	<strong># </strong> Indicates that the candidate is given the  benefit of combined passing in subjects  Mathematics and Science.
       <strong> $</strong> before total marks and marks after +  sign indicate the additional marks given  for the sports candidate.
	<strong>*</strong>  Indicates marks are out of 100 or Grades as per table shown below.
	<strong>@</strong>  before total marks and marks after + sign indicate the additional marks given  for the sports candidate and grace marks awarded for getting grade I.
	<strong>₤ </strong> Indicates name of the subject for the Index No. and abbreviations as show on the reverse.






	</p>

<td><img src="sign.png"></img></td>


</tr>


</table>
















<pre align="center">
<font size="10"><strong>I</strong></font><font size="6">0591673</font>                   <font size="10">              प्रमाणपत्राच्या श्रेणी /</font><strong>Grades of Certificate</strong>                            <strong><font face="courier" size="5"> 40092184661</strong> </font></pre>


<table align="center" border="1" cellpadding="5" cellspacing="1" width=100% >

<tr>


<td><center>विशेष प्राविण्यासह प्रथम श्रेणी <br>(Grade I with Distinction) <center>
	</td>


	<td><center>प्रथम श्रेणी<br>(Grade I) </center></td>
<td><center>व्दितीय श्रेणी<br>(Grade II) </center></td>



	<td><center>उत्तीर्ण श्रेणी<br>(Grade Pass) </center></td>

</tr>


<tr>

	<td><center>७५ % व त्यापेक्षा <br>अधिक गुण<br> 75% and above </center></td>
<td><center>६० % व त्यापेक्षा अधिक परंतु <br>७५% पेक्षा कमी गुण<br> 60% and above <br>but below 75% </center></td>


	<td><center>४५ % व त्यापेक्षा अधिक परंतु  <br>६०% पेक्षा कमी गुण<br> 45% and above <br>but below 60% </center></td>

<td><center>इतर सर्व उत्तीर्ण उमेदवार<br>(विषयात सूट घेतलेल्या उमेदवारसह )<br> All other successfull candidates <br> (Including the exempted) </center></td>

</tr>

</table>


<p><center><strong>GRADES IN WORK EXPERIENCE / SCHOOL SUBJECTS</strong></center></p>

<table align="center" border="1" cellpadding="5" cellspacing="1" width=100% >


<tr>


	<td><i>Grade</i></td>
<td><center><strong>A</strong></center></td>


	<td><center><strong>B</strong></center></td>


<td><center><strong>C</strong></center></td>


<td><center><strong>D</strong></center></td>


	<td><center><strong>E</strong></center></td>


<td><center><strong>H</strong></center></td>

</tr>


<tr>


<td>
	<i>Marks Obtained</i>
</td>


	<td><center>60% & above</center></td>


	<td><center>45% to 59%</center></td>


	<td><center>35% to 44%</center></td>



	<td><center>34% & below</center></td>

	<td><center>Exempted</center></td>

	<td><center>Physically Handicapped</center></td>


</tr>

</table>




</td>
</tr>

</table>




</body>

</html>

<?php
  }

 else
 {
    echo "No such result found";
}


 ?>
