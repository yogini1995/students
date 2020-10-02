
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
</style>
</head>
<body>
	
<div class="container">
	<!--div class="jumbotron"-->
	@if($errors->any())
 <div>
 	<ul>
 		@foreach($errors->all() as $error)
 		<li style="color:red;font-size:20px;">{{$error}}</li>
 		@endforeach

 	</ul>

 </div>
 @endif

		<form action="/update" method="post">
			@csrf
			<h1>Update Your Information</h1><br>

			
		<input type="hidden" class="form-control" name="id" id="id" value="{{$student[0]->id}}">
			<div class="form-group">
				<label>Enter name: </label>
				
				<input type="text" class="form-control" name="name" id="name" value="{{$student[0]->name}}" readonly>
			</div><br>

			<div class="form-group">
				<label>Enter Password: </label>

					 <input type="text" class="form-control" name="password" id="password" value="{{$student[0]->password}}">
			</div><br>

			<div class="form-group">
				<label>Enter email:</label>

					 <input type="text" class="form-control" name="email" id="email" value="{{$student[0]->email}}" readonly>
			</div><br><br>


			<button type="submit" name="submit" >Update</button>
		</form>

		

	

</div>
</div>

</body>
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