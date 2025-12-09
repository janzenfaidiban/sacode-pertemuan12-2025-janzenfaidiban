<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>

    <style>
        body {
            margin: 0;
            padding: 0;
            height: 100vh;
            font-family: Arial, sans-serif;
            background: #f0f0f0;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-box {
            width: 420px;
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
            margin-bottom: 18px;
        }

        input, select, textarea {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 15px;
        }

        textarea {
            resize: vertical;
            min-height: 70px;
        }

        .btn-register {
            width: 100%;
            padding: 12px;
            border: none;
            background: #007bff;
            color: white;
            font-size: 16px;
            border-radius: 6px;
            cursor: pointer;
        }

        .btn-register:hover {
            background: #0056b3;
        }

        .login-text {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }

        .login-text a {
            color: #007bff;
            text-decoration: none;
        }

        .login-text a:hover {
            text-decoration: underline;
        }

        .checkbox-group {
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
        }
    </style>

</head>
<body>

    <div class="register-box">
        <h2>Daftar Akun</h2>

        <div class="form-group">
            <input type="text" placeholder="Nama Lengkap">
        </div>

        <div class="form-group">
            <select>
                <option value="">Jenis Kelamin</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <textarea placeholder="Alamat lengkap"></textarea>
        </div>

        <div class="form-group">
            <input type="text" placeholder="Username">
        </div>

        <div class="form-group">
            <input type="password" placeholder="Password">
        </div>

        <div class="form-group">
            <input type="password" placeholder="Confirm Password">
        </div>

        <div class="form-group checkbox-group">
            <input type="checkbox" id="konfirmasi">
            <label for="konfirmasi">Saya memberikan data yang benar</label>
        </div>

        <button class="btn-register">Daftar</button>

        <div class="login-text">
            Sudah punya akun? <a href="login.html">Login di sini</a>
        </div>
    </div>

</body>
</html>
