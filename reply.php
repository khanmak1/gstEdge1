<?php

$servername="localhost";
$username="root";
$password="12345";
$dbname="gstedge";

$con = mysqli_connect($servername,$username,$password,$dbname);

$result = mysqli_query($con,"SELECT * FROM employee Order By year ASC"); 

STATIC $count = 0;
STATIC $ray = 0;

echo "<table>";

while($row = mysqli_fetch_array($result)) 
  { 
if($count==0){
	
  echo "<tr>"; 
  echo "<td>" . $row['year'] . "</td>"; 
  
  
  echo "<td>" . $count . "</td>"; 
  echo "</tr>"; 
  
  $ray = $row['no_emp'];
}
else
{
	$ray=$row['no_emp']-$ray;
  echo "<tr>"; 
  echo "<td>" . $row['year'] . "</td>"; 
  echo "<td>" . $ray . "</td>"; 
  echo "</tr>";
	$ray=$row['no_emp'];
	
	
}

  } 
  
echo "</table>"; 


mysqli_close($con);
?>