<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <style>
        h1 {
            color:red;
        }
    </style>
</head>
<body>
    <h1>{{ $name }} mando un mensaje.</h1>
    <h2>El mail de {{ $name }} es {{ $email }}</h2>
    <h3>El titule es {{ $title }}</h3>
    <p>
        {{ $messageBody }}
    </p>
</body>
</html>