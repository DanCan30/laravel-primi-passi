<?php 

    $greetings = "Hello World!";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Home</title>
</head>
<body>
    <h1>My first Laravel page</h1>
    <p>{{ $greetings }}</p>
</body>
</html>