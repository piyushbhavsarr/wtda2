<?php

$fp=fopen('contact.dat','r');
echo "<table border=2>";
echo "<tr><th>SrNo</th> <th>Name</th> <th>Residence No</th> <th>Mobile No</th> <th>Address</th></tr>";
while($row=fgets($fp,40))
{
   $data=explode(',',$row);
   echo "<tr>";
   for($n=0;$n<5;$n++)
   {
      echo "<td> $data[$n] </td>";
   }
   echo "</tr>";
}
echo"</table>";
fclose($fp);
?>
