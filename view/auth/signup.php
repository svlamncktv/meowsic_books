<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log In Page</title>
    <link rel="stylesheet" href="../template/background.css">
    <link rel="stylesheet" href="../template/logsign.css">
</head>
<body>

    <div class="container">
        <div class="box">
            <h2>Meowsic Books Sign UP 🐱🐾</h2>
            <form id="Form">
                <div class="input-group">
                    <label>Username</label>
                    <input type="text" id="username" placeholder="Enter username..." >
                </div>
                <div class="input-group">
                    <label>Password</label>
                    <input type="password" id="password" placeholder="Enter password..." >
                </div>

                <div class="role-selection">
                    <label>Sign UP as</label>
                    <div class="role-options">
                        <label>
                            <input type="radio" name="role" value="3" checked>
                            <span>✍️ Author</span>
                        </label>
                        <label>
                            <input type="radio" name="role" value="2">
                            <span>📖 Reader</span>
                        </label>
                    </div>
                </div>
                <button type="submit" class="signup-btn">Sign UP</button>
            </form>
            <br>
            <button type="button" onclick="location.href = 'login.php';" class="login-btn">login</button>

    </div>

    <script src="script.js"></script>
</body>
</html>
