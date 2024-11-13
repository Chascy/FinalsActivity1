<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profiles</title>
</head>
<body>
    <h1>Profile</h1>
    <div><b>Name:</b> {{ $user->name }}</div>
    <div><b>Bio:</b> {{ $profile->bio }}</div>
    <div><b>School:</b> {{ $profile->school }}</div>
    <hr>
</body>
</html>