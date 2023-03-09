@if($name=='Mujahid')
<h1>This is my name=  {{$name}} </h1>
@elseif($name=='Ahmed')
<h1>This is not my name = {{$name}} </h1>
@else
<h1>Unknown </h1>
@endif