<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Form</title>
</head>
<body>
    <h2>Student Form</h2>
    <form action="../index.php" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required><br><br>
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
