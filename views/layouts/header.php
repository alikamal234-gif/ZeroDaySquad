<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>ZeroDayLabs</title>

  <!-- Tailwind CDN -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


  <!-- AOS Animation -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#2563EB', // blue
            dark: '#020617'
          }
        }
      }
    }
  </script>
</head>

<body class="bg-dark text-white">

<header class="fixed w-full bg-dark/90 backdrop-blur border-b border-white/10 z-50">
  <div class="max-w-7xl mx-auto flex justify-between items-center px-6 py-4">
    
    <!-- Logo -->
    <div class="text-xl font-bold text-primary">
      ZeroDay<span class="text-white">Labs</span>
    </div>

    <!-- Navigation -->
    <nav class="hidden md:flex gap-8 text-sm">
      <a href="../home/index.php" class="hover:text-primary transition">Home</a>
      <a href="#labs" class="hover:text-primary transition">Labs</a>
      <a href="../learn/index.php" class="hover:text-primary transition">Learning</a>
      <a href="../home/contact.php" class="hover:text-primary transition">Contact</a>
    </nav>

    <!-- Auth Buttons -->
    <div class="flex gap-3">
      <a href="../auth/login.php" class="px-4 py-2 border border-white/20 rounded hover:bg-white/10 transition">
        Login
      </a>
      <a href="../auth/signup.php" class="px-4 py-2 bg-primary rounded hover:bg-blue-700 transition">
        Sign Up
      </a>
    </div>

  </div>
</header>

<main class="pt-32">
