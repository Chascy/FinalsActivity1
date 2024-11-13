<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Course</title>
</head>
<body>
    <h1>User</h1>
    <div><b>Name: </b>{{ $user->name }}</div>
    <hr>
    
    <b>Courses Enrolled:</b>
    @foreach ($courses as $course )
        <div>{{ $course->course_name }}</div>
    @endforeach
    <hr>
</body>
</html>