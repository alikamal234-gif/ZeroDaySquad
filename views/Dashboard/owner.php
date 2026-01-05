<?php
require_once __DIR__ . '/../../app/Repository/BaseModels.php';
require_once __DIR__ . '/../../app/Repository/UserRepository.php';
require_once __DIR__ . '/../../app/Repository/RaportsRepository.php';
require_once __DIR__ . '/../../app/Repository/ProjectRepository.php';
    $ProjectRepository = new ProjectRepository();
    $RaportsRepository = new RaportsRepository();
    

    $result_project_number= $ProjectRepository->getNumberProject();
    $result_report_number= $RaportsRepository->getNumberReportById(2);
    $result_project = $ProjectRepository->getProjectById(2);


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Owner Dashboard | ZeroDayLabs</title>
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
<header class="border-b border-white/10 bg-black">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <h1 class="text-xl font-bold text-primary">
      ZeroDay<span class="text-white">Labs</span>
    </h1>
    <span class="text-sm text-gray-400">Company Dashboard</span>
  </div>
</header>

<main class="max-w-7xl mx-auto px-6 py-10 space-y-16">

<!-- STATS -->
<section class="grid md:grid-cols-4 gap-6">
  <div class="p-6 bg-black border border-white/10 rounded-xl">
    <p class="text-gray-400 text-sm">Websites</p>
    <h2 class="text-3xl font-bold"><?= $result_project_number ?></h2>
  </div>
  <div class="p-6 bg-black border border-white/10 rounded-xl">
    <p class="text-gray-400 text-sm">Reports</p>
    <h2 class="text-3xl font-bold text-red-500"><?= $result_report_number ?></h2>
  </div>
  <div class="p-6 bg-black border border-white/10 rounded-xl">
    <p class="text-gray-400 text-sm">Budget Left</p>
    <h2 class="text-3xl font-bold">$2,400</h2>
  </div>
</section>

<!-- ADD WEBSITE -->
<section class="bg-black border border-white/10 rounded-xl p-8">
  <h2 class="text-2xl font-bold mb-6">+ Add Website</h2>

  <form class="grid md:grid-cols-2 gap-6">

    <input type="text" placeholder="Website Name"
      class="bg-dark border border-white/10 rounded p-3">

    <input type="url" placeholder="Website URL"
      class="bg-dark border border-white/10 rounded p-3">

    <input type="file"
      class="text-sm text-gray-400">

    <div class="flex gap-4">
      <input type="number" placeholder="Min Reward"
        class="bg-dark border border-white/10 rounded p-3 w-full">
      <input type="number" placeholder="Max Reward"
        class="bg-dark border border-white/10 rounded p-3 w-full">
    </div>

    <textarea placeholder="Website Description"
      class="md:col-span-2 bg-dark border border-white/10 rounded p-3"></textarea>

    <label class="flex items-center gap-2 text-sm md:col-span-2">
      <input type="checkbox">
      Private program (optional)
    </label>

    <button class="md:col-span-2 px-6 py-3 bg-primary rounded hover:bg-blue-700 transition">
      Save Website
    </button>

  </form>
</section>

<!-- WEBSITES LIST -->
<section class="bg-black border border-white/10 rounded-xl p-8">
  <h2 class="text-2xl font-bold mb-6"> My Websites</h2>

  <table class="w-full text-sm">
    <thead class="text-gray-400 border-b border-white/10">
      <tr>
        <th class="text-left py-3">Site</th>
        <th>Reward</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php  foreach($result_project AS $value): ?>
      <tr class="border-b border-white/5">
        <td class="py-4"><?= $value['address'] ?></td>
        <td>$100 – $500</td>
        <td class="text-green-500">Active</td>
        <td class="space-x-2">
          <button class="text-primary">Edit</button>
          <button class="text-red-500">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</section>

<!-- HACKER REPORTS -->
<section class="bg-black border border-white/10 rounded-xl p-8">
  <h2 class="text-2xl font-bold mb-6">Hacker Reports</h2>

  <table class="w-full text-sm">
    <thead class="text-gray-400 border-b border-white/10">
      <tr>
        <th class="text-left py-3">Hacker</th>
        <th>Site</th>
        <th>Issue</th>
        <th>Severity</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>

      <tr class="border-b border-white/5">
        <td class="py-4">hacker01</td>
        <td>example.com</td>
        <td>SQL Injection</td>
        <td class="text-red-500">Critical</td>
        <td class="text-yellow-400">Pending</td>
      </tr>

    </tbody>
  </table>
</section>

</main>

<footer class="text-center text-sm text-gray-500 py-6 border-t border-white/10">
  © 2026 ZeroDay Squad
</footer>

</body>
</html>
