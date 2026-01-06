<?php
require_once __DIR__ . '/../../app/Repository/BaseModels.php';
require_once __DIR__ . '/../../app/Repository/UserRepository.php';
require_once __DIR__ . '/../../app/Repository/RaportsRepository.php';
require_once __DIR__ . '/../../app/Repository/ProjectRepository.php';
if($_SESSION['role_login'] !== 'owner'){
    header('Location: ../auth/login.php');
    exit;
}
    $ProjectRepository = new ProjectRepository();
    $RaportsRepository = new RaportsRepository();
    $BaseModels = new BaseModels();

    $result_project_number= $ProjectRepository->getNumberProject();
    $result_report_number= $RaportsRepository->getNumberReportById($_SESSION['id_login']);
    $result_project = $ProjectRepository->getProjectById($_SESSION['id_login']);
    $result_report = $BaseModels->getReportsOwner($_SESSION['id_login']);

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
            dark: 'black',
            bg: '#100527ff',
          card: 'black',
          border: '#1e293b',
          primary: '#60a5fa',
          accent: '#38bdf8',
          text: '#e5e7eb',
          muted: '#94a3b8'
          }
        }
      }
    }
 

  </script>
</head>

<body class="bg-dark  text-white">

<!-- HEADER -->
<header class="border-b border-white/10 bg-transparent py-2">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
    <a class="text-xl font-bold text-primary" href="../home/index.php">
      ZeroDay<span class="text-white">Labs</span>
    </a>
    <span class="text-sm text-gray-400">Company Dashboard</span>
  </div>
</header>

<main class="max-w-7xl mx-auto px-6 py-10 space-y-16">

<!-- STATS -->
<section class="grid md:grid-cols-3 gap-6">
  <div class="p-6 bg-bg border border-white/10 rounded-xl">
    <p class="text-gray-400 text-sm">Websites</p>
    <h2 class="text-3xl font-bold"><?= $result_project_number ?></h2>
  </div>
  <div class="p-6 bg-bg border border-white/10 rounded-xl">
    <p class="text-gray-400 text-sm">Reports</p>
    <h2 class="text-3xl font-bold "><?= $result_report_number ?></h2>
  </div>
  <div class="p-6 bg-bg border border-white/10 rounded-xl">
    <p class="text-gray-400 text-sm">Budget Left</p>
    <h2 class="text-3xl font-bold">$2,400</h2>
  </div>
</section>

<!-- ADD WEBSITE BUTTON -->
<section class="flex justify-end">
  <button onclick="openModal()"
    class="px-6 py-3 bg-blue-700 text-white font-bold rounded-lg hover:bg-accent transition">
    + Add Website
  </button>
</section>


<!-- WEBSITES LIST -->
<section class="bg-bg border border-white/10 rounded-xl p-8">
  <h2 class="text-2xl font-bold mb-6"> My Websites</h2>

  <table class="w-full text-sm">
    <thead class="text-gray-400 border-b border-white/3">
      <tr>
        <th class="text-center py-3">Site</th>
        <th class="text-center">Reward</th>
        <th class="text-center">Description</th>
        <th class="text-center">Action</th>
      </tr>
    </thead>
    <tbody>
        <?php  foreach($result_project AS $value): ?>
      <tr class="border-b border-white/5">
        <td class="py-4 text-center"><?= $value['address'] ?></td>
        <td class="text-center"><?= $value['price'] . " $" ?></td>
        <td class="text-white text-center"><?= $value['description'] ?></td>
        <td class="space-x-2 text-center">
          <button class="text-yellow-500  p-1 rounded-[11px] w-10">Edit</button>
          <button class="text-red-500  p-1 rounded-[11px] w-20">Delete</button>
        </td>
      </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</section>

<!-- HACKER REPORTS -->
<section class="bg-bg border border-white/10 rounded-xl p-8">
  <h2 class="text-2xl font-bold mb-6">Tester Reports</h2>

  <table class="w-full text-sm">
    <thead class="text-gray-400 border-b border-white/4">
      <tr>
        <th class="text-center py-3">Tester name</th>
        <th class="text-center">Site</th>
        <th class="text-center">Issue</th>
        <th class="text-center">Severity</th>
      </tr>
    </thead>
    <tbody>
        <?php  foreach($result_report AS $value): ?>
      <tr class="border-b border-white/5">
        <td class="py-4 text-center"><?= $value['tester_name'] ?></td>
        <td class="text-center"><?= $value['tester_email'] ?></td>
        <td class="text-center"><?= $value['report_issue'] ?></td>
<td class="text-center">
    <a href="mailto:<?= $value['tester_email'] ?>"
       class="text-blue-500 hover:underline">
      Contact
    </a>
  </td>        
      </tr>
        <?php endforeach; ?>
    </tbody>
  </table>
</section>

</main>

<footer class="text-center text-sm text-gray-500 py-6 border-t border-white/10">
  © 2026 ZeroDay Squad
</footer>


<!-- ADD WEBSITE MODAL -->
<div id="addWebsiteModal"
     class="fixed inset-0 bg-black/70 backdrop-blur-sm hidden items-center justify-center z-50">

  <div class="bg-card border border-border rounded-xl w-full max-w-3xl p-8 relative">

    <!-- CLOSE -->
    <button onclick="closeModal()"
      class="absolute top-4 right-4 text-muted hover:text-white text-xl">
      ✕
    </button>

    <h2 class="text-2xl font-bold mb-6 text-primary">
      Add Website
    </h2>

    <!-- SAME FORM (UNCHANGED) -->
    <form class="grid md:grid-cols-2 gap-6">

      <input type="text" placeholder="Website Name"
        class="bg-bg border border-border rounded-lg p-3 text-text">

      <input type="url" placeholder="Website URL"
        class="bg-bg border border-border rounded-lg p-3 text-text">

      <input type="url" class="text-sm text-muted bg-bg border border-border rounded-lg p-3 text-text" placeholder="Cover URL">

      <div class="flex gap-4">
        <input type="number" placeholder="Reward ($)"
          class="bg-bg border border-border rounded-lg p-3 w-full text-text">
      </div>

      <textarea placeholder="Website Description"
        class="md:col-span-2 bg-bg border border-border rounded-lg p-3 text-text"></textarea>

     

      <button
        class="md:col-span-2 bg-primary hover:bg-accent transition rounded-lg py-3 text-bg">
        Save Website
      </button>

    </form>
  </div>
</div>

</body>
<script>
  function openModal() {
    document.getElementById('addWebsiteModal').classList.remove('hidden');
    document.getElementById('addWebsiteModal').classList.add('flex');
  }

  function closeModal() {
    document.getElementById('addWebsiteModal').classList.add('hidden');
    document.getElementById('addWebsiteModal').classList.remove('flex');
  }
</script>

</html>
