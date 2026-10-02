```php
<?php
session_start();

// Jika sudah login, arahkan ke halaman utama
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    header("Location: Index.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Website Sekolah</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f0f4f8;
            min-height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            width: 100%;
            max-width: 400px;
            background: #ffffff;
            padding: 35px;
            border-radius: 12px;
            box-shadow: 0 5px 20px #0002;
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
            color: #1e3a8a;
        }

        .desc {
            text-align: center;
            color: #666;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 18px;
        }

        label {
            display: block;
            margin-bottom: 7px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 7px;
            font-size: 14px;
        }

        input:focus {
            outline: none;
            border-color: #2563eb;
        }

        .btn-login {
            width: 100%;
            padding: 12px;
            border: none;
            border-radius: 7px;
            background: #2563eb;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        .btn-login:hover {
            background: #1d4ed8;
        }

        .error {
            background: #fee2e2;
            color: #b91c1c;
            padding: 10px;
            border-radius: 7px;
            margin-bottom: 18px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="login-container">

        <h2>Login</h2>
        <p class="desc">Website Sekolah</p>

        <?php if (isset($_GET['error'])): ?>
            <div class="error">
                Username atau password salah!
            </div>
        <?php endif; ?>

        <form action="proses_login.php" method="POST">

            <div class="form-group">
                <label for="username">Username</label>

                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Masukkan username"
                    required
                    autofocus
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button
                class="btn-login"
                type="submit"
            >
                Login
            </button>

        </form>

    </div>

</body>

</html>
```