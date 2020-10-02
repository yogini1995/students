<?php
session_start();
if(isset($_SESSION['userid']))
{

?>


<html>
<h1>Welcome To Student Management System</h1>
<br>
 <head>

 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style> 

	table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}

</style>

 </head>

 	<div class="col-md-3">
 		<form action= "/Search" method="get">
 			@csrf
 			<div class="input-group">

 				<input type="search" name="search" class="form-control">
 				<span class="input-group-prepend">

 					<button type="submit" class="btn btn-primary">Search</button>
 				</span>


 			</div>

		</form>

	</div>
	


<table border="2 px solid black" >
<tr>
	<th> ID </th>
	<th>Name</th>
	<th>Password</th>
	<th>Email</th>
	<th>Update</th>
	<th>Delete</th>
@foreach($data as $item)
<tr >

	<td> {{$item->id}}</td>
	<td> {{$item->name}}</td>
	<td> {{$item->password }}</td>
	<td> {{$item->email}}</td>
	<td> <a href="http://localhost:8000/edit?id={{$item->id}}" class="btn btn success" > <button  > Update </button> </a> </td>
	<td>  <button onclick="return deldata('{{$item->id}}');" class="btn btn-danger" > Delete </button> </td>
</tr>

@endforeach


</table>
<br>

	<!-- <a href="http://localhost:8000/del?id={{$item->id}}" -->
<script>
		function deldata(dataid){

if (confirm('Are you sure you want to delete this thing into the database?')) {
  // Save it!
  window.location = "http://localhost:8000/del?id=" + dataid;
  //console.log('Thing was saved to the database.');
} else {
  // Do nothing!
  console.log('Thing was not saved to the database.');
}
	}
</script>

<a href="http://localhost:8000/add" > <button > Insert </button> </a><br><br>
<button  onclick="window.location.href = '/' " class="btn btn-primary"> Logout </button>


{{$data->links()}}

</html>

<?php
}
else
{

?>

<script type="text/javascript">
	
	window.location="{{ url('/') }}";
</script>

<?php

}

?>
	 

	 




