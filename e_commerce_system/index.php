<?php
session_start();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email'] ?? '');
    $password = trim($_POST['password'] ?? '');

    if ($email !== '' && $password !== '') {
        $_SESSION['user_email'] = $email;
        header('Location: dashboard.php');
        exit;
    }

    $error = 'Please enter your email and password.';
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Commerce Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="login-body">
    <main class="login-shell">
        <section class="login-card">
            <h1>E-Commerce</h1>
            <p class="login-subtitle">Sign in to your account to continue</p>

            <?php if ($error): ?>
                <div class="alert alert-danger py-2" role="alert"><?php echo htmlspecialchars($error); ?></div>
            <?php endif; ?>

            <form method="post" action="index.php">
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                </div>

                <div class="login-options">
                    <label class="remember">
                        <input type="checkbox" name="remember">
                        <span>Remember me</span>
                    </label>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn btn-dark login-btn">Sign In</button>

                <p class="signup-note">Don't have an account? <a href="#">Sign up</a></p>
            </form>
        </section>
    </main>
</body>
</html>
