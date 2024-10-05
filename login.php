<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>
    <?php
        session_start();

    ?>

    <form action="session.php" method="post">
        <label for="username">Username</label>
        <input type="text" name="username">
        <label for="password">Password</label>
        <input type="password" name="password">

        <input type="submit" name="Submit">
        


    </form>
    
</body>
</html>