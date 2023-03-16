<h3>Session Sign in form</h3>

<form action="sessionsignin/create" method="POST">

   @csrf

<input type="text" name="username" placeholder="Enter Username">
<input type="password" name="password" placeholder="Enter Password">
<button type="submit">Login</button>

</form>