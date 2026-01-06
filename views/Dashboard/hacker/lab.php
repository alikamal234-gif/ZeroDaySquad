<?php
require_once __DIR__ . "/../../../app/Repository/ProjectRepository.php";

$ProjectRepository = new ProjectRepository();

if(isset($_GET['site'])){
    $id = $_GET['site'];
    $result_project = $ProjectRepository->getAllProjectById($id);
}

?>


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
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between">
    <a href="index.php" class="text-primary text-sm">← Back to sites</a>
    <span class="text-sm text-gray-400">Live Testing Environment</span>
  </div>
</header>

<main class="max-w-7xl mx-auto px-6 py-6">

  <h1 class="text-2xl font-bold mb-6">Testing: example.com</h1>

  <!-- TABS -->
  <div class="flex gap-6 border-b border-white/10 mb-6">
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
    <p class="text-gray-400 max-w-3xl">
      This target is authorized for ethical security testing.
      Respect the defined scope and responsible disclosure rules.
    </p>
  </div>

  <!-- <a href="start_lab.php">▶️ Start Lab</a><br><br>
<a href="stop_lab.php">⏹️ Stop Lab</a><br><br>
<a href="reset_lab.php">🔄 Reset Lab</a> -->

  <!-- SCOPE -->
  <div id="scope" class="tab-content hidden">
  <div class="bg-card border border-border rounded-xl p-6 space-y-6">

    <!-- Allowed Domains -->
    <div>
      <h3 class="text-primary font-semibold mb-2">Allowed Domains</h3>
      <ul class="text-muted list-disc pl-6 space-y-1">
        <li>example.com</li>
        <li>*.example.com</li>
        <li>api.example.com</li>
      </ul>
    </div>

    <!-- Allowed Paths -->
    <div>
      <h3 class="text-primary font-semibold mb-2">Allowed Paths</h3>
      <ul class="text-muted list-disc pl-6 space-y-1">
        <li>/api/*</li>
        <li>/auth/*</li>
        <li>/user/*</li>
      </ul>
    </div>

    <!-- Allowed Vulnerabilities -->
    <div>
      <h3 class="text-primary font-semibold mb-2">Allowed Vulnerabilities</h3>
      <ul class="text-muted list-disc pl-6 space-y-1">
        <li>Cross-Site Scripting (XSS)</li>
        <li>SQL Injection (SQLi)</li>
        <li>Insecure Direct Object Reference (IDOR)</li>
        <li>Cross-Site Request Forgery (CSRF)</li>
      </ul>
    </div>

    <!-- Forbidden -->
    <div>
      <h3 class="text-red-400 font-semibold mb-2">Forbidden Activities</h3>
      <ul class="text-muted list-disc pl-6 space-y-1">
        <li>Denial of Service (DoS / DDoS)</li>
        <li>Brute force attacks</li>
        <li>Credential stuffing</li>
        <li>Phishing & social engineering</li>
      </ul>
    </div>

  </div>
</div>

  <!-- TEST LAB (SPLIT VIEW) -->
  <div id="test" class="tab-content ">

    <div class="grid grid-cols-2 gap-4 h-[70vh]">

      <!-- LEFT : LAB / TOOLS -->
      <div class="bg-black border border-white/10 rounded-xl overflow-hidden flex flex-col">
        <div class="px-4 py-2 border-b border-white/10 text-sm text-gray-400">
          🧪 Lab Environment
        </div>

        <iframe
  src="http://localhost:7681"
  class="w-full h-full border"
  sandbox="allow-scripts allow-forms allow-same-origin">
</iframe>
      </div>

      <!-- RIGHT : TARGET WEBSITE -->
      <div class="bg-black border border-white/10 rounded-xl overflow-hidden flex flex-col">
        <div class="px-4 py-2 border-b border-white/10 text-sm text-gray-400">
          🌐 Target Website
        </div>

        <iframe
          src="<?= $result_project['project_address'] ?>"
          class="w-full h-full bg-white"
          sandbox="allow-scripts allow-forms allow-same-origin">
        </iframe>
      </div>

    </div>

    <p class="text-xs text-gray-500 mt-4">
      ⚠️ Testing is monitored. Only interact with allowed assets.
    </p>

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
        class="w-full bg-dark border border-white/10 rounded p-3 h-32"></textarea>

      <button class="px-6 py-3 bg-primary rounded hover:bg-blue-700 transition">
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
