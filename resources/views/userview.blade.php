<!DOCTYPE html>
<html>

<body>
	<pre>
	<form action="update" method="post">
		<select name='id'>
<!--
			@foreach($data as $item) 
<option value='{{$item->id}}' >{{$item->name}}</option>
			@endforeach
-->
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
<!--/select--> 
		<br><br>

@csrf

	Enter Id:        <input type="hidden" name="id" value="{{$_GET['id']}}"><br><br>
	Enter Name:      <input type="hidden" name="name" value=""><br><br>
	Enter Password:  <input type="text" name="password"><br><br>
	Enter Email:     <input type="text" name="email"><br><br>
	<button type="submit">Update Data</button>

	</form>

</body>
</html>