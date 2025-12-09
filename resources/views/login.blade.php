<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: #f0f0f0;

            /* center horizontally & vertically */
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box {
            width: 350px;
            padding: 25px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 0 12px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            border: none;
            background: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #0056b3;
        }

        .register-text {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .register-text a {
            color: #007bff;
            text-decoration: none;
        }

        .register-text a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>

    <div class="login-box">
        <h2>Login</h2>

        <div class="form-group">
            <input type="text" placeholder="Username">
        </div>

        <div class="form-group">
            <input type="password" placeholder="Password">
        </div>

        <button class="btn-login">Login</button>

        <div class="register-text">
            Sudah punya akun? <a href="daftar.html">Daftar di sini</a>
        </div>
    </div>

</body>
</html>
