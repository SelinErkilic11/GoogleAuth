<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>

</head>
<body class="login-register">

<div class="page-content">
    <h2 class="log-reg-header">LOGIN</h2>
    <form action="validation.php" method="post">
        <div class="form-group">
            <label>Email:</label>
            <input type="text" name="email" required>
        </div>
        <div class="form-group">
            <label>Password:</label>
            <input type="password" name="password" required>
        </div>
        <button class="btn-login" type="submit">Login</button>
    </form>
</div>
</body>
</html>