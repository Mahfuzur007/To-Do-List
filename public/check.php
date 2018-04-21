    <table  class="table table-bordered table-striped"style=" margin-left:10%;width:80%;"> 
	<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$viewid=$_GET['viewid'];
$query = "SELECT * FROM todolist WHERE time='$viewid'";
$result = mysqli_query($connect, $query);
 while($row = mysqli_fetch_array($result))
     {
      echo '
       <tr>
       <td>'.$row["id"].'</td>
       <td>'.$row["title"].'</td>
       <td>'.$row["time"].'</td>
	     <td>'.$row["description"].'</td>
       <td>'.$row["date"].'</td>
	   	        </tr>
			
      ';
}

?>	
</table>