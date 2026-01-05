<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Learning Hub | ZeroDayLabs</title>
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

<body class="bg-dark text-white">

<!-- HEADER -->
<header class="bg-black border-b border-white/10 sticky top-0 z-50">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-primary">
      ZeroDay<span class="text-white">Labs</span>
    </h1>
    <nav class="flex gap-6 text-sm text-gray-400">
      <a href="/hacker/index.php" class="hover:text-white">Programs</a>
      <a href="#" class="text-primary font-semibold">Learning</a>
      <a href="/index.php" class="hover:text-white">Back to Home</a>
    </nav>
  </div>
</header>

<!-- HERO -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <h2 class="text-4xl font-bold mb-4">
    Learn Ethical Hacking
  </h2>
  <p class="text-gray-400 max-w-2xl">
    Learn the fundamentals of web security and ethical hacking.
    Understand vulnerabilities, then practice responsibly on real programs.
  </p>
</section>

<!-- LEARNING CATEGORIES -->
<section class="max-w-7xl mx-auto px-6 grid md:grid-cols-3 gap-8">

  <!-- CARD -->
  <div class="bg-black border border-white/10 rounded-xl p-6">
    <h3 class="text-xl font-semibold text-primary">Web Basics</h3>
    <p class="text-gray-400 mt-2 text-sm">
      How the web works, HTTP, cookies, sessions, authentication.
    </p>
    <ul class="mt-4 space-y-2 text-sm text-gray-300">
      <li>• HTTP / HTTPS</li>
      <li>• Cookies & Sessions</li>
      <li>• Authentication</li>
    </ul>
    <a href="#" class="inline-block mt-6 text-primary">
      Start Learning →
    </a>
  </div>

  <!-- CARD -->
  <div class="bg-black border border-white/10 rounded-xl p-6">
    <h3 class="text-xl font-semibold text-primary">Common Vulnerabilities</h3>
    <p class="text-gray-400 mt-2 text-sm">
      Learn the most common security issues found in websites.
    </p>
    <ul class="mt-4 space-y-2 text-sm text-gray-300">
      <li>• SQL Injection</li>
      <li>• XSS</li>
      <li>• CSRF</li>
      <li>• IDOR</li>
    </ul>
    <a href="#" class="inline-block mt-6 text-primary">
      Explore Vulnerabilities →
    </a>
  </div>

  <!-- CARD -->
  <div class="bg-black border border-white/10 rounded-xl p-6">
    <h3 class="text-xl font-semibold text-primary">Testing Methodology</h3>
    <p class="text-gray-400 mt-2 text-sm">
      Learn how to test a website step by step like a professional.
    </p>
    <ul class="mt-4 space-y-2 text-sm text-gray-300">
      <li>• Reconnaissance</li>
      <li>• Input Testing</li>
      <li>• Exploitation</li>
      <li>• Reporting</li>
    </ul>
    <a href="#" class="inline-block mt-6 text-primary">
      Learn Methodology →
    </a>
  </div>

</section>

<!-- LEARNING PATH -->
<section class="max-w-7xl mx-auto px-6 py-16">
  <h3 class="text-2xl font-bold mb-6">Recommended Learning Path</h3>

  <div class="space-y-6">

    <div class="bg-black border border-white/10 rounded-xl p-6">
      <h4 class="font-semibold text-primary">Step 1 – Understand the Web</h4>
      <p class="text-gray-400 text-sm mt-2">
        Learn how websites communicate and manage user sessions.
      </p>
    </div>

    <div class="bg-black border border-white/10 rounded-xl p-6">
      <h4 class="font-semibold text-primary">Step 2 – Learn Vulnerabilities</h4>
      <p class="text-gray-400 text-sm mt-2">
        Study OWASP Top 10 vulnerabilities with real examples.
      </p>
    </div>

    <div class="bg-black border border-white/10 rounded-xl p-6">
      <h4 class="font-semibold text-primary">Step 3 – Practice on Labs</h4>
      <p class="text-gray-400 text-sm mt-2">
        Apply what you learned in safe, legal testing environments.
      </p>
    </div>

    <div class="bg-black border border-white/10 rounded-xl p-6">
      <h4 class="font-semibold text-primary">Step 4 – Find Real Bugs</h4>
      <p class="text-gray-400 text-sm mt-2">
        Test real websites responsibly and submit vulnerability reports.
      </p>
    </div>

  </div>
</section>

<!-- CTA -->
<section class="max-w-7xl mx-auto px-6 py-16 text-center">
  <h3 class="text-3xl font-bold mb-4">
    Ready to Practice?
  </h3>
  <p class="text-gray-400 mb-6">
    Apply your knowledge on real bug bounty programs.
  </p>
  <a href="/hacker/index.php"
     class="px-8 py-3 bg-primary rounded hover:bg-blue-700 transition">
    Go to Programs
  </a>
</section>

<!-- FOOTER -->
<footer class="text-center text-xs text-gray-500 py-6 border-t border-white/10">
  © 2026 ZeroDay Squad
</footer>

</body>
</html>
