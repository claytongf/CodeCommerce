<h1>Users</h1>

<ul>
    @foreach($users as $user)
    <li>{{$user->name}} - {{$user->email}} - {{$user->price}}</li>
    @endforeach
</ul>