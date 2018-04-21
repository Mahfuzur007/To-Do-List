                        <?php

$dbc=mysqli_connect("localhost","root","","admin");
if(isset($_POST['todo_btn']))
{   $title=mysqli_real_escape_string($dbc,$_POST['title']);
    $time=mysqli_real_escape_string($dbc,$_POST['time']);
	$description=mysqli_real_escape_string($dbc,$_POST['description']);
  $date=mysqli_real_escape_string($dbc,$_POST['date']);
   
            $sql="INSERT INTO todolist(title,time,description,date) VALUES('$title','$time','$description','$date')";
              mysqli_query($dbc,$sql);  
          header("Location: http://127.0.0.1:8000/home");
die();
}
?>
<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'admin');

$input = filter_input_array(INPUT_POST);

 $title=mysqli_real_escape_string($dbc,$_POST['title']);
    $time=mysqli_real_escape_string($dbc,$_POST['time']);
  $description=mysqli_real_escape_string($dbc,$_POST['description']);
    $date=mysqli_real_escape_string($dbc,$_POST['date']);

if($input["action"] === 'edit')
{
 $query = "
 UPDATE todolist 
 SET title = '".$title."', 
 time = '".$time."' , 
 description = '".$description."'  , 
 date = '".$date."' 
 WHERE id = '".$input["id"]."'
 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM todolist
 WHERE id = '".$input["id"]."'
 ";
 mysqli_query($connect, $query);
}

echo json_encode($input);

?>

    