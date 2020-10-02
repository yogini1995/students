
<?php
session_start();
if(isset($_SESSION['userid']))
{

?>

<html>

<head>
 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

</body>
<pre>
	@if($errors->any())
 <div>
 	<ul>
 		@foreach($errors->all() as $error)
 		<li style="color:red;">{{$error}}</li>
 		@endforeach

 	</ul>

 </div>
@endif
<form action="save" method="post">
@csrf
<h1>Insert Your Information</h1>
<div class="col-md-3">
Standard:
	<select name="cat_id" id="cat_id" class="form-control">
 @foreach($category as $item) 
<option value='{{$item->id}}' >{{$item->standard}}</option>
			@endforeach
		
	</select><br><br>


Enter Name:     <input type="text" name="name" value="{{old('name')}}"><br><br>
Enter Password: <input type="text" name="password" value="{{old('password')}}"><br><br>
Enter Email:   <input type="text" name="email" value="{{old('email')}}"><br><br>
<label for="students" id="students">

	<button type="submit">Insert Data</button><br><br>


</div>
		
			   


</body>

</html>

<?php
}
else
{
	echo "login to access this page";

?>

<script type="text/javascript">
	
	window.location="{{ url('/') }}";
	
</script>

<?php

}

?>
