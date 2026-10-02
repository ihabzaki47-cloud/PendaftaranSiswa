<?php
session_start();

// Username & Password yang ditentukan langsung di kode
$username_benar = "admin";
$password_benar = "admin123";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Memeriksa apakah username dan password sesuai
    if ($username === $username_benar && $password === $password_benar) {
        $_SESSION['admin'] = $username;
        header("Location: dashboard.php"); // Mengarahkan ke dashboard.php
        exit();
    } else if ($username !== $username_benar) {
        echo "<script>alert('Username tidak ditemukan!');</script>";
    } else {
        echo "<script>alert('Password salah!');</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <style>
        body { font-family: Arial, sans-serif; background: #8585eeff; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 0 10px rgba(0,0,0,0.1); width: 300px; text-align: center; }
        input { width: 100%; padding: 10px; margin: 10px 0; box-sizing: border-box; }
        .btn-blue { background-color: #1882d3; color: white; padding: 10px; width: 100%; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>
    <div class="card">
        <h2>Login Admin</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" name="login" class="btn-blue">Login</button>
        </form>
    </div>
</body>
</html>