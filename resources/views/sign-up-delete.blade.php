<form action="signup/delete" method="POST"> 
        @csrf
        {{method_field('DELETE')}}
        <label>Username : </label>   
        <input type="text" placeholder="Enter Username" name="username" required>  
        <br>
        <label>Password : </label>   
        <input type="password" placeholder="Enter Password" name="password" required>  
        <br>
        <button type="submit">Sign Up</button>   
        <br>
        <input type="checkbox" checked="checked"> Remember me   
        <br>
        <button type="button" class="cancelbtn"> Cancel</button>   
        <br>
        Forgot <a href="#"> password? </a>   
   
</form>    