<!DOCTYPE html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>Login / Sign Up Form</title>
    <link rel="shortcut icon" href="/assets/favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bodyy">
    <?php require_once("Database/db_connect.php"); 

    if(isset($_POST["submit"])) {
        $username= $_POST["Username"];
        $password=$_POST["password"];
        $email=$_POST["Email_address"];
        $gender=$_POST["gender"];
        $role=$_POST["role"];
    $sql = "INSERT INTO `users`(`username`, `password`, `gender_name`, `role_name` ) 
    VALUES ('$username','$password','$gender','$role')";

 if ($conn->query($sql) === TRUE) {
   echo "New record created successfully";
 } else {
   echo "Error: " . $sql . "<br>" . $conn->error;
 }    
}
$conn->close(); ?>
    <form class="form" id="createAccount" method="POST" action="about.php">
            <h1 class="form__title">Create Account</h1>
            <div class="form__message form__message--error"></div>
            <div class="form__input-group">
                <input type="text" name="Username" class="form__input" autofocus placeholder="Username">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="text" name="Email_address" class="form__input" autofocus placeholder="Email Address">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
                <input type="password" name="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>
            <div class="form__input-group">
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
               
            </div>
            <input  type="submit" name="submit">
          
        </form>
    </div>
    
</body>
