
 

 
    <h2>Register</h2>
    @if($errors->any())
 <div>
    <ul>
        @foreach($errors->all() as $error)
        <li style="color:red;">{{$error}}</li>
        @endforeach

    </ul>

 </div>
@endif
    <form method="POST" action="registration_submit">
        @csrf

        

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value=""><br>
        </div>
 
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value=""><br>
        </div>
 
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" value="" ><br>
        </div>
 
        <div class="form-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Register</button>
        </div>
        
    </form>
