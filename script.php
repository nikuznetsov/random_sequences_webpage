<?php
if ((!empty($_POST['storage'])) and (!empty($_POST['age'])) and (!empty($_POST['answer']))) {
 $array = $_POST['storage'];
 $age = $_POST['age'];
 $gender = $_POST['answer'];
 $amount1 = $_POST['amount'];
 $indent = $_POST['indent1'];
 
 mkdir("sequences/$indent($amount1)/", 0777, true);
 mkdir("info/", 0777, true);
 
 $f = fopen("sequences/$indent($amount1)/$indent($amount1).txt", "a");
 fwrite($f, $array."\r\n");
 
 $r = fopen("info/info.txt", "a");
 fwrite($r, 'ID: ');
 fwrite($r, $indent."\r\n"); 
 fwrite($r, 'Amount: ');
 fwrite($r, $amount1."\r\n");
 fwrite($r, 'Age: '); 
 fwrite($r, $age."\r\n"); 
 fwrite($r, 'Gender: '); 
 fwrite($r, $gender."\r\n"); 
 fwrite($r, "\r\n");
 
 fclose($f);
 fclose($r);
} 
?>

<html>
<head>
  <meta charset="utf-8">
  <title>
   Тест
  </title>
 <p align="center"><font size="7"><b>Cпасибо, что прошли тест!</b></font></p> 
 </head>
 <body background="back.jpg">
   <table align="center">
    <tr>
     <td></td>
	 <td align="center">
	  <form action="index.html" method="post">
       <input align="center" type="submit" value="Вернуться к тесту" style="width:200px;height:100px" name="Submit" id="frm1_submit" />
      </form>
	 </td>
	 <td></td>		
	</tr>
   </table>
  <table align="center"> 
   <tr><td><img align="middle" src="cat.png"></td></tr>
  </table>
 </body>
</html>