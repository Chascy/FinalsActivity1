<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Course User</title>
</head>
<body>
    <div><h1>Course: {{ $course->course_name }}</h1></div>

    <div><h2>Users Enrolled:</h2></div>
    @foreach ($users as $user )
        <div>{{ $user->name }}</div>
        <div>{{ $user->email }}</div>
        <hr>
    @endforeach
    
</body>
</html>