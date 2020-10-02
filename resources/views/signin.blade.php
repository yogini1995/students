<!DOCTYPE html>
<html>
<head>

    <style>
form {
  border: 10px solid #f1f1f1;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  display: block;
}

label,input {
 display: block;
 width: 150px;
 float: left;
 margin-bottom: 10px;
}


    </style>
	
</head>
<body>
	<center>
		<form action="login_submit" method="post">
			@csrf
			<div class="form-group">
            <label for="email">Email:</label>
            <input type="text" class="form-control" id="email" name="email" value="">
        </div> <br><br>
 
        <div class="form-group">
            <label for="password">PASSWORD:</label>
            <input type="text" class="form-control" id="password" name="password" value="">
        </div>

        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Login</button>
        </div>




		</form>
    </center>


	

</body>
</html>