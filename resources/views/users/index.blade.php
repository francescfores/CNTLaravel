<!DOCTYPE html>
<html>
<head>
    <title>Users</title>
</head>
<body>
@foreach ($users as $user)
    <li>{{ $user->name }}</li>
@endforeach
</body>
</html>