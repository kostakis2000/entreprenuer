<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">

    
</head>
<body class="bodyyy">
    <h1 class="h11">User Feedback Form</h1>
    <form action="" method="post"> <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="date">Date:</label>
        <input type="date" id="date" name="date" required><br><br>

        <label for="gender">Gender:</label>
        <input type="radio" id="male" name="gender" value="male" required> Male
        <input type="radio" id="female" name="gender" value="female" required> Female
        <br><br>

        <label for="role">Role:</label>
        <select id="role" name="role" required>
            <option value="">Select Role</option>
            <option value="admin">Admin</option>
            <option value="staff">Staff</option>
        </select>
        <br><br>

        <label for="message">Feedback Message:</label>
        <textarea id="message" name="message" rows="5" cols="30" required></textarea><br><br>

        <button type="submit">Submit Feedback</button>
    </form>
</body>
</html>