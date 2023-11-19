<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>person form</title>
</head>
<body>
    <h1 style="text-align: center">Person name and email</h1>
    <div class="formdiv" style="text-align: center">
    <form action="/findnameemail" method="POST" >
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="Rahimg Howlader">
        <label for="email">Email</label>
        <input type="email" name="email" id="email" value="rahant@bac.com">

        <label for="text">Mobile</label>
        <input type="text" name="mobile" id="mobile" value="3949384939">
        <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>