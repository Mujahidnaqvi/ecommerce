@include('for-loop')

<h1>Here is the list of the users</h1>

@foreach($users as $user)

<h3>{{$user}}</h3>

@endforeach