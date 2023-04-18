<h1>Cars List</h1>

<table border="1">

<tr>
 
    <td>ID</td>
    <td>Name</td>
    <td>Color</td>

</tr>

@foreach ($cars as $car)
<tr>
 
    <td>{{$car['id']}}</td>
    <td>{{$car['name']}}</td>
    <td>{{$car['color']}}</td>

</tr> 
@endforeach


</table>