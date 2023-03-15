<h2>Flash Session</h2>

<form action="flashsession" method="POST">
@csrf
<input type="text" name="username" placeholder="Enter Username">
<br><br>
<input type="email" name="email" placeholder="Enter email">
<br><br>
<input type="password" name="password" placeholder="Enter password">
<br><br>
<button type="submit">Submit</button>

</form>