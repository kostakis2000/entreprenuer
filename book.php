<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking details</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <ul>
        <li><a href="#">home</a></li>
        <li>
            <a href="#">check flights </a>
            <ul class="dropdown">
                <li><a href="#">kenya</a></li>
                <li><a href="#">Tanzania</a></li>
                <li><a href="#">Rwanda</a></li>
                <li><a href="#">Burundi</a></li>
            </ul>
        </li>
        <li>
            <a href="#">about us</a>
            <ul class="dropdown">
                <li><a href="#">motto</a></li>
                <li><a href="#">Vision</a></li>
                <li><a href="#">Patners</a></li>
                <li><a href="#">Board</a></li>
            </ul>
        </li>
        <li><a href="#">contact us</a></li>
        </ul>
    </ul>

    <section>

    <div class="login-box">
        <form action="">
            <h2>Register</h2>
            <div class="input-box">
                <span class="icon"></span>
                <input type="email" required>
                <label>Email</label>
            </div>
            <div class="input-box">
                <span class="icon"></span>
                <input type="password" required>
                <label>Password</label>
            </div>
            <button type="Register">Register</button>
            <button type="button" onclick="location.href='flight.php'">
            Next page
            </button>
            

        
        </form>
    </div>

    </section>
</body>
</html>