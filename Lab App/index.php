<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab App</title>
</head>
<body>

    <!-- The HTML form -->
    <form method="POST" action="save.php">
        <label for="full_name">Full Name:</label>
        <input type="text" name="full_name" id="full_name"><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" id="email"><br>
        
        <label>Gender:</label><br>
        <input type="radio" name="gender" value="Male" id="male">
        <label for="male">Male</label><br>
        
        <input type="radio" name="gender" value="Female" id="female">
        <label for="female">Female</label><br>
        
        <input type="submit" name="submit" value="Submit">
    </form>



</body>
</html>