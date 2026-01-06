<?php
require_once __DIR__ . "/../../app/Repository/UserRepository.php";
$UserRepository = new UserRepository();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $UserRepository->ValidationLogin($email,$password);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Login | ZeroDayLabs</title>
  <script src="https://cdn.tailwindcss.com"></script>

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#2563EB',
            dark: '#020617'
          }
        }
      }
    }
  </script>
</head>

<body class="bg-dark text-white min-h-screen flex items-center justify-center">

<div class="w-full max-w-md bg-black border border-white/10 rounded-xl p-8">

  <!-- Logo -->
  <div class="text-center mb-8">
    <h1 class="text-2xl font-bold text-primary">
      ZeroDay<span class="text-white">Labs</span>
    </h1>
    <p class="text-gray-400 text-sm mt-2">
      Sign in to your account
    </p>
  </div>

  <!-- Form -->
  <form class="space-y-5" method="post">

    <input type="email" placeholder="Email address" name="email"
      class="w-full bg-dark border border-white/10 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">

    <input type="password" placeholder="Password" name="password"
      class="w-full bg-dark border border-white/10 rounded px-4 py-3 focus:outline-none focus:ring-2 focus:ring-primary">

    <div class="flex justify-between text-sm text-gray-400">
      <label class="flex items-center gap-2">
        <input type="checkbox">
        Remember me
      </label>
      <a href="#" class="hover:text-primary">Forgot password?</a>
    </div>

    <button class="w-full py-3 bg-primary rounded hover:bg-blue-700 transition">
      Login
    </button>

  </form>

  <!-- Footer -->
  <div class="text-center text-sm text-gray-400 mt-6">
    Don’t have an account?
    <a href="signup.php" class="text-primary hover:underline">
      Sign up
    </a>
  </div>

</div>

</body>
</html>
