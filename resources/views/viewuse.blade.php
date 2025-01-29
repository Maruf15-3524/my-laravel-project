@include("navbar")

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <h1>All Users</h1>
    @foreach ($user as $users)
        <h2>Full Name: {{ $users->full_name }}</h2>
        <h3>Phone: {{ $users->phone }}</h3>
        <h4>Location: {{ $users->location }}</h4>
        <a href="{{ url('/edituser') }}/{{ $users->id }}">edit</a>
        <a href="{{ url('/deleteuser') }}/{{ $users->id }}">Delete</a>
        <hr>
    @endforeach

</head>
<body>

</body>
</html>
