<?php  
$con = mysqli_connect("localhost","root","","assesment");    
@$a=$_POST['name'];  
@$b=$_POST['C'];
@$c=$_POST['C++'];
@$d=$_POST['JAVA'];
@$e=$_POST['PHP'];
@$f=$_POST['HTML'];      
if(@$_POST['submit'])  
{  
echo $s="insert into self(name,C,C++,JAVA,PHP,HTML) values('$a','$b','$c','$d','$e','$f')";  
echo "Your Data Inserted";  
mysql_query($s);  
}  
?>   
<html>
<title> self assesment form</title>
<center>
<h1> Self assesment form</h1>
<h3> Rate according to your understanding<h3>
<body background=bgimage.jpg>
<form action="insert.php" method='post'>
Name<input type='text' name='name'>
<table cellspacing="30">
<tr>
<th>atrribute</th>
<th>5</th>
<th>4</th>
<th>3</th>
<th>2</th>
<th>1</th>
</tr>
<tr>
<td>C</td>
<td><input type='radio' name='C' value="5"></td>
<td><input type='radio' name='C' value="4"></td>
<td><input type='radio' name='C' value="3"></td>
<td><input type='radio' name='C' value="2"></td>
<td><input type='radio' name='C' value="1"></td>
</tr>
</br>
<tr>
<td>C++</td>
<td><input type='radio' name='C++' value="5"></td>
<td><input type='radio' name='C++' value="4"></td>
<td><input type='radio' name='C++' value="3"></td>
<td><input type='radio' name='C++' value="2"></td>
<td><input type='radio' name='C++' value="1"></td>
</tr>
<br>
<tr>
<td>JAVA</td>
<td><input type='radio' name='JAVA' value="5"></td>
<td><input type='radio' name='JAVA' value="4"></td>
<td><input type='radio' name='JAVA' value="3"></td>
<td><input type='radio' name='JAVA' value="2"></td>
<td><input type='radio' name='JAVA' value="1"></td>
</tr><br>
<tr>
<td>PHP</td>
<td><input type='radio' name='PHP' value="5"></td>
<td><input type='radio' name='PHP' value="4"></td>
<td><input type='radio' name='PHP' value="3"></td>
<td><input type='radio' name='PHP' value="2"></td>
<td><input type='radio' name='PHP' value="1"></td>
</tr><br>
<tr>
<td>HTML</td>
<td><input type='radio' name='HTML' value="5"></td>
<td><input type='radio' name='HTML' value="4"></td>
<td><input type='radio' name='HTML' value="3"></td>
<td><input type='radio' name='HTML' value="2"></td>
<td><input type='radio' name='HTML' value="1"></td>
</tr><br>
<tr>
<td>
<input type='submit' value='submit'></td>
</tr>
</form>
</table>
</body>
</center>
</html>