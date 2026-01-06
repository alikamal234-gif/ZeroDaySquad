<?php
require_once __DIR__ . "/../../app/Repository/UserRepository.php";
$UserRepository = new UserRepository();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    if($_POST['password'] !== $_POST['password_confirm']){
        echo "your password ne egaux";
        return;
    }
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
    $data = [
        "name" => $_POST['name'],
        "email" => $_POST['email'],
        "password" => $password,
        "role" => $_POST['role']
    ];
    $UserRepository->transformeCV($data);
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Sign Up | ZeroDayLabs</title>
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
      Create your account
    </p>
  </div>

  <!-- Form -->
  <form class="space-y-5" method="post">

    <input name="name" type="text" placeholder="Full name"
      class="w-full bg-dark border border-white/10 rounded px-4 py-3 focus:ring-2 focus:ring-primary">

    <input name="email" type="email" placeholder="Email address"
      class="w-full bg-dark border border-white/10 rounded px-4 py-3 focus:ring-2 focus:ring-primary">

    <input name="password" type="password" placeholder="Password"
      class="w-full bg-dark border border-white/10 rounded px-4 py-3 focus:ring-2 focus:ring-primary">

    <input name="password_confirm" type="password" placeholder="Confirm password"
      class="w-full bg-dark border border-white/10 rounded px-4 py-3 focus:ring-2 focus:ring-primary">

    <!-- Role -->
    <select name="role" class="w-full bg-dark border border-white/10 rounded px-4 py-3">
      <option value="tester">Tester (Étudiant)</option>
      <option value="owner">Company (Owner)</option>
    </select>

    <!-- Terms -->
    <label class="flex items-start gap-2 text-sm text-gray-400">
      <input type="checkbox" class="mt-1">
      I agree to the
      <a href="#" class="text-primary">Terms & Conditions</a>
    </label>

    <button type="submit" class="w-full py-3 bg-primary rounded hover:bg-blue-700 transition">
      Create Account
    </button>

  </form>

  <!-- Footer -->
  <div class="text-center text-sm text-gray-400 mt-6">
    Already have an account?
    <a href="login.php" class="text-primary hover:underline">
      Login
    </a>
  </div>

</div>

</body>
</html>
