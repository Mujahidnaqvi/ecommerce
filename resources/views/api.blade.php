<h1>This is the Api Data</h1>

<table border="1">

    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Email</td>
        <td>Image</td>
    </tr>
  
 @foreach ($fechedData as $userDetails)
     
 <tr>
    <td>{{$userDetails['id']}}</td>
    <td>{{$userDetails['first_name']}}</td>
    <td>{{$userDetails['email']}}</td>
    <td><img src="{{$userDetails['avatar']}}" alt=""></td>
</tr>

 @endforeach   



</table>