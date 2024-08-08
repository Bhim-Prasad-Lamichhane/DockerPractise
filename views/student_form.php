<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Student Form</title>

    <style>
body {
    background-color: skyblue;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
    font-family: Arial, sans-serif;
}

h2 {
    margin-bottom: 20px;
}

form {
    background-color: white;
    border: 2px solid blue;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
}

label {
    display: block;
    margin-bottom: 8px;
    font-weight: bold;
}

input[type="text"],
input[type="number"] {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type="submit"] {
    width: 100%;
    background-color: blue;
    color: white;
    padding: 10px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type="submit"]:hover {
    background-color: darkblue;
}
        </style>
</head>
<body>
    <h2>STUDENT FORM</h2>
    <form action="../index.php" method="post">
        <label for="name">NAME:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="age">AGE:</label>
        <input type="number" id="age" name="age" required><br><br>
        <label for="address">ADDRESS:</label>
        <input type="text" id="address" name="address" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
