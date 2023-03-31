<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File manager</title>
</head>

<body>
<h1>File manager</h1>
<form action="file-manager.php" method="GET">
    <label for="path">Path:</label>
    <input type="text" name="path" id="path" required><br><br>

    <label for="directory">Directory:</label>
    <input type="text" name="directory" id="directory" required><br><br>

    <label for="operation">Operation:</label>
    <select name="operation" id="operation">
        <option value="read">Read</option>
        <option value="create">Create</option>
        <option value="delete">Delete</option>
    </select><br><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>