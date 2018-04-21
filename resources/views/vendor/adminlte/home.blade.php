@extends('adminlte::layouts.app')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
 <script src="{{ asset('/js/jquery.tabledit.min.js') }}"></script>
@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<!-- Default box -->
				<div class="box">
					<div class="box-header with-border">
						<h3 class="box-title">Home</h3>

						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
								<i class="fa fa-minus"></i></button>
							<button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
								<i class="fa fa-times"></i></button>
						</div>
					</div>
					<div class="box-body">
							<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				
	<?php
$connect = mysqli_connect("localhost", "root", "", "admin");
$query = "SELECT * FROM todolist ORDER BY id DESC";
$result = mysqli_query($connect, $query);
?>				

			
												
<!------ Include the above in your HEAD tag ---------->

    <div class="container">    
        <div id="loginbox" style="margin-top:50px;margin-right:35%;" >                    
            <div class="panel panel-info" style="width:450px;margin-left:-35px">
                    <div class="panel-heading">
                        <div class="panel-title">To Do Menu Bar</div>
                                            </div>     

                    <div style="padding-top:30px width:450px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
<form style="width:400px" action="action.php" method="post">
     <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><label for="text">To Do Work</label></span>
<input type="text" class="form-control"  id="title" name="title" required="">
</div>  
<div style="margin-bottom: 25px" class="input-group"> 
<span class="input-group-addon"><label for="text">Time</label></span>
<select type="text" id="time" class="form-control"  name="time" required="">
<option value="00.30">12.30AM</option>
<option value="1.00">1.00AM</option>
<option value="1.30">1.30AM</option>
<option value="2.00">2.00AM</option>
<option value="2.30">2.30AM</option>
<option value="3.00">3.00AM</option>
<option value="3.30">3.30AM</option>
<option value="4.00">4.00AM</option>
<option value="4.30">4.30AM</option>
<option value="5.00">5.00AM</option>
<option value="5.30">5.30AM</option>
<option value="6.00">6.00AM</option>
<option value="6.30">6.30AM</option>
<option value="7.00">7.00AM</option>
<option value="7.30">7.30AM</option>
<option value="8.00">8.00AM</option>
<option value="8.30">8.30AM</option>
<option value="9.00">9.00AM</option>
<option value="9.30">9.30AM</option>
<option value="10.00">10.00AM</option>
<option value="10.30">10.30AM</option>
<option value="11.00">11.00AM</option>
<option value="11.30">11.30AM</option>
<option value="12.00">12.00PM</option>
<option value="12.30">12.30PM</option>
<option value="13.00">1.00PM</option>
<option value="13.30">1.30PM</option>
<option value="14.00">2.00PM</option>
<option value="14.30">2.30PM</option>
<option value="15.00">3.00PM</option>
<option value="15.30">3.30PM</option>
<option value="16.00">4.00PM</option>
<option value="16.30">4.30PM</option>
<option value="17.00">5.00PM</option>
<option value="17.30">5.30PM</option>
<option value="18.00">6.00PM</option>
<option value="18.30">6.30PM</option>
<option value="19.00">7.00PM</option>
<option value="19.30">7.30PM</option>
<option value="20.00">8.00PM</option>
<option value="20.30">8.30PM</option>
<option value="21.00">9.00PM</option>
<option value="21.30">9.30PM</option>
<option value="22.00">10.00PM</option>
<option value="22.30">10.30PM</option>
<option value="23.00">11.00PM</option>
<option value="23.30">11.30PM</option>
<option value="24.00">12.00AM</option>

</select>
</div> 
<div style="margin-bottom: 25px" class="input-group"> 
<span class="input-group-addon"><label for="text">Date</label></span>
<input type="text" id="date" class="form-control"  name="date" >
</div> 
<div style="margin-bottom: 25px" class="input-group"> 
<span class="input-group-addon"><label for="text">Description</label></span>
<input type="text" id="description" class="form-control"  name="description" >
</div> 
<button type="submit" name="todo_btn" class="btn btn-success">Add To Do</button>
</form>    

<form action="check.php">
<select type="text" name="viewid" value="10">
<option value="00.30">12.30AM</option>
<option value="1.00">1.00AM</option>
<option value="1.30">1.30AM</option>
<option value="2.00">2.00AM</option>
<option value="2.30">2.30AM</option>
<option value="3.00">3.00AM</option>
<option value="3.30">3.30AM</option>
<option value="4.00">4.00AM</option>
<option value="4.30">4.30AM</option>
<option value="5.00">5.00AM</option>
<option value="5.30">5.30AM</option>
<option value="6.00">6.00AM</option>
<option value="6.30">6.30AM</option>
<option value="7.00">7.00AM</option>
<option value="7.30">7.30AM</option>
<option value="8.00">8.00AM</option>
<option value="8.30">8.30AM</option>
<option value="9.00">9.00AM</option>
<option value="9.30">9.30AM</option>
<option value="10.00">10.00AM</option>
<option value="10.30">10.30AM</option>
<option value="11.00">11.00AM</option>
<option value="11.30">11.30AM</option>
<option value="12.00">12.00PM</option>
<option value="12.30">12.30PM</option>
<option value="13.00">1.00PM</option>
<option value="13.30">1.30PM</option>
<option value="14.00">2.00PM</option>
<option value="14.30">2.30PM</option>
<option value="15.00">3.00PM</option>
<option value="15.30">3.30PM</option>
<option value="16.00">4.00PM</option>
<option value="16.30">4.30PM</option>
<option value="17.00">5.00PM</option>
<option value="17.30">5.30PM</option>
<option value="18.00">6.00PM</option>
<option value="18.30">6.30PM</option>
<option value="19.00">7.00PM</option>
<option value="19.30">7.30PM</option>
<option value="20.00">8.00PM</option>
<option value="20.30">8.30PM</option>
<option value="21.00">9.00PM</option>
<option value="21.30">9.30PM</option>
<option value="22.00">10.00PM</option>
<option value="22.30">10.30PM</option>
<option value="23.00">11.00PM</option>
<option value="23.30">11.30PM</option>
<option value="24.00">12.00AM</option>
</select>
     <button type="submit" name="view" ><i class="fa fa-eye" aria-hidden="true"></i></button></form>



                        </div>                     
                    </div>  
        </div>
       </div>
		
		
				
			</div>
		</div>
			<div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <div><h3>View To Do</h3><br /> </div>  
    <table style="width:650px"  id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>ID</th>
       <th>To Do Work</th>
       <th>Time</th>
	   <th>Description</th>
     <th>Date</th>
      </tr>
     </thead>
     <tbody>
    
   
 <?php
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
     </tbody>
    </table>
	
   </div>  
  </div>   
	</body>   
<script>  
( function($) {
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "id"],
       editable:[[1, 'title'], [2, 'time'],[3, 'description'],[4, 'date']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.id).remove();
       }
      }
     });
 
}); } ) ( jQuery );
 </script>
	</div>
	<body> 
					</div>
					<!-- /.box-body -->
				</div>
				<!-- /.box -->

			</div>
		</div>
	</div>
@endsection
