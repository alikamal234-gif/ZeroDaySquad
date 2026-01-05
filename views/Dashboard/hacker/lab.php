<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lab | ZeroDayLabs</title>
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

<header class="border-b border-white/10 bg-black">
  <div class="max-w-7xl mx-auto px-6 py-4">
    <a href="index.php" class="text-primary text-sm">← Back to sites</a>
  </div>
</header>

<main class="max-w-7xl mx-auto px-6 py-10">

  <h1 class="text-2xl font-bold mb-6">Testing: example.com</h1>

  <!-- TABS -->
  <div class="flex gap-6 border-b border-white/10 mb-8">
    <button onclick="openTab('overview')" class="tab-btn text-primary pb-3">
      Overview
    </button>
    <button onclick="openTab('scope')" class="tab-btn pb-3">
      Scope
    </button>
    <button onclick="openTab('test')" class="tab-btn pb-3">
      Test Lab
    </button>
    <button onclick="openTab('report')" class="tab-btn pb-3">
      Submit Report
    </button>
  </div>

  <!-- OVERVIEW -->
  <div id="overview" class="tab-content">
    <p class="text-gray-400">
      Target website authorized for security testing.  
      Please respect the scope and responsible disclosure rules.
    </p>
  </div>

  <!-- SCOPE -->
  <div id="scope" class="tab-content hidden">
    <ul class="text-gray-400 list-disc pl-6">
      <li>Allowed domain: example.com</li>
      <li>Allowed paths: /api/*</li>
      <li>Forbidden: DoS, brute force</li>
    </ul>
  </div>

  <!-- TEST -->
  <div id="test" class="tab-content hidden">
    <div class="bg-black border border-white/10 rounded-xl p-6">
      <p class="text-sm text-gray-400 mb-2">Target URL</p>
      <div class="bg-black/60 p-4 rounded text-sm">
        https://example.com
      </div>

      <p class="text-gray-400 mt-4">
        Use your browser, Burp Suite, or Postman to test vulnerabilities.
      </p>
    </div>
  </div>

  <!-- REPORT -->
  <div id="report" class="tab-content hidden">
    <form class="space-y-4 max-w-xl">

      <input type="text" placeholder="Vulnerability Title"
        class="w-full bg-dark border border-white/10 rounded p-3">

      <select class="w-full bg-dark border border-white/10 rounded p-3">
        <option>Low</option>
        <option>Medium</option>
        <option>High</option>
        <option>Critical</option>
      </select>

      <textarea placeholder="Description / Steps to reproduce"
        class="w-full bg-dark border border-white/10 rounded p-3"></textarea>

      <button class="px-6 py-3 bg-primary rounded">
        Submit Report
      </button>

    </form>
  </div>

</main>

<script>
  function openTab(tab) {
    document.querySelectorAll('.tab-content')
      .forEach(el => el.classList.add('hidden'));

    document.getElementById(tab).classList.remove('hidden');

    document.querySelectorAll('.tab-btn')
      .forEach(btn => btn.classList.remove('text-primary'));

    event.target.classList.add('text-primary');
  }
</script>

<footer class="text-center text-sm text-gray-500 py-6 border-t border-white/10">
  © 2026 ZeroDay Squad
</footer>

</body>
</html>
