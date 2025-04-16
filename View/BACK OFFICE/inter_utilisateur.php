<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>utilisateur</title>
    <link rel="stylesheet" href="inter_utilisateur.css">
</head>
<body>
    <img src="image.jpeg" alt="background" class="n1">
    <form action="addUsers.php" method="POST">
    <div>
    <label for="identifier">Identifier:</label>
        <input type="text" name="identifier" id="identifier" placeholder="Enter the id" class="input-box">

        <label for="First_Name">First_Name:</label>
        <input type="text" name="First_Name" id="First_Name" placeholder="Enter your First name" class="input-box">

        <label for="Last_Name">Last_Name:</label>
        <input type="text" name="Last_Name" id="Last_Name" placeholder="Enter your Last name" class="input-box">

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" placeholder="Enter the email" class="input-box">

        <label for="pwd">Password:</label>
        <input type="password" name="pwd" id="pwd" placeholder="Enter the password" class="input-box">
       
    </div>
    <button type="submit" class="button1">Add</button>
    
    </form>

    
</body>
</html>