{{-- @extends('layout')
@section('mainContent') --}}
<h1 align="center"></h1>
{{-- @endsection --}}
<!DOCTYPE html>
<html>
<head>
	<title>edit book</title>
	<style type="text/css">
		form {
		margin: 0 auto;
		width: 210px;
	}
	
	form label{
		
		display: block;
		display: inline-block;
		text-align: right;

		float: left;
	}
	form input{
		display: inline-block;
		text-align: left;
		float: right;
	}
	</style>
</head>
<body>
	

<form class="form-horizontal" method="post" action="/form/{{$item->id}}">
	@csrf
	
<div class="form-group">
	<label>Enter Name:</label><br>
	<input type="text" name="name" class="form-control" value="{{$item->name}}"><br><br>
	
	                
	<label>Enter Password:</label><br>
	<input type="text" name="desc" class="form-control" value="{{$item->password}}"><br><br>
	
	               
	<label>Enter Email:</label><br>
	<input type="text" name="author" class="form-control" value="{{$item->email}}"><br><br>
	               
	
	
	<input type="hidden" name="book_id" value="{{$item->id}}" >
	
	<button type="submit" name="submit">Update</button><br>
</div><br><br>
</form>


</body>
</html>
