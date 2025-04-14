<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
</head>
<body>
    <form action="process2.php" method="post">
        <input type="text" name="name" placeholder="Enter user name">
        <input type="text" name="email" placeholder="Enter user email">
        <input type="password" name="password" placeholder="Enter user password">
        
        <br>
        <input type="checkbox" name="skills[]" value="PHP"> PHP
        <br>
        <input type="checkbox" name="skills[]" value="JAVA"> JAVA
        <br>
        <input type="checkbox" name="skills[]" value="CPP"> CPP
        <br>
        <input type="checkbox" name="skills[]" value="JavaScript"> JavaScript
        
        <br>
        <input type="radio" name="gender" value="male"> Male
        <br>
        <input type="radio" name="gender" value="female"> Female
        
        <br>
        <select name="city">
            <option value="">Select your city</option>
            <option value="noida">Noida</option>
            <option value="delhi">Delhi</option>
            <option value="gurgaon">Gurgaon</option>
        </select>
        
        <br>
        <textarea name="bio" placeholder="Enter your bio"></textarea>
        
        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>


