<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
</head>
<body>
    <div>
        <h1>Users Here</h1>
    
        @foreach ($profiles as $profile )
            <div>{{ $profile->user->name }}</div>
            <hr>
        @endforeach
    </div>
    
    <div>
        <h1>Courses Here</h1>
        @foreach ($courses as $course )
            <div>
                <a href="/course/{{ $course->id }}">{{ $course->course_name }}</a>
            </div>
            <hr>
        @endforeach
    </div>
</body>
</html>