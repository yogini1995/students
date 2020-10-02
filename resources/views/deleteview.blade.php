
<!DOCTYPE html>

<?php
session_start();
if(isset($_SESSION['id']))
{

?>
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
	<pre>
	<form action="del" method="post">
		<select name='id'>

			 @foreach($data as $item) 
<option value='{{$item->id}}' >{{$item->name}}</option>
			@endforeach
			

			<!--option value='1'>anil</option>
			<option value='2'>sakshat</option>
			<option value='3'>sahil</option>
			<option value='4'>akshata</option>
			<option value='5'>sai</option>
			<option value='6'>ashwin</option>
			<option value='7'>mugdha</option>
			<option value='8'>sakhi</option>
			<option value='9'>satish</option>
			<option value='10'>sankalp</option>
			<option value='11'>geeta</option>
			<option value='12'>sandip</option>
			<option value='13'>sudha</option-->

		</select> 
		<br><br>
		@csrf


	<button type="submit" >Delete</button>

	
</body>

</form>
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
