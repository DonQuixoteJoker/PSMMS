<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration</title>
</head>
<body>
<h1>
    Student Registration
</h1>
<div>
    <form action="{{url('/registerStudent')}}" method="POST">

    @csrf

    <label>Name</label>
    <input type="text" name="name" required>

    <label>Email</label>
    <input type="text" name="email" required>

    <label>Password</label>
    <input type="text" name="password" required>

    <input type="submit" value="Submit">
    </form>

    

</div>
    
</body>
</html>