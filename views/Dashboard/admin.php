<?php
require_once __DIR__ . '/../../app/Repository/BaseModels.php';
require_once __DIR__ . '/../../app/Repository/UserRepository.php';
require_once __DIR__ . '/../../app/Repository/RaportsRepository.php';
if($_SESSION['role_login'] !== 'admin'){
    header('Location: ../auth/login.php');
    exit;
}


    $BaseModels = new BaseModels();
    $UserRepository = new UserRepository();
    $Raports = new RaportsRepository();
    $result_reports = $BaseModels->getReports();
    $UserRepository_number_user = $UserRepository->getNumberUser();
    $UserRepository_number_report = $Raports->getNumberReports();
?>

<?php if(!isset($_SESSION['id_login'])){
    include __DIR__ . '/../layouts/header.php';
}else{
    include __DIR__ . '/../layouts/header_login.php';
} 
?>

<main class=" px-10">

  <!-- Header -->
  <div class="flex justify-between items-center">
    <h1 class="text-3xl font-bold">Admin Dashboard</h1>
    <div class="text-sm text-gray-400">Welcome back, Admin</div>
  </div>

  <!-- Stats -->
  <section class="grid md:grid-cols-3 gap-6 mt-10">

    <div class="p-6 rounded-xl bg-black border border-white/10">
      <p class="text-gray-400 text-sm">Total Users</p>
      <h2 class="text-3xl font-bold mt-2"><?= $UserRepository_number_user ?></</h2>
      <span class="text-green-500 text-sm">+12%</span>
    </div>

    

    <div class="p-6 rounded-xl bg-black border border-white/10">
      <p class="text-gray-400 text-sm">Reports</p>
      <h2 class="text-3xl font-bold mt-2"><?= $UserRepository_number_report ?></h2>
      <span class="text-yellow-400 text-sm">Pending</span>
    </div>

    <div class="p-6 rounded-xl bg-black border border-white/10">
      <p class="text-gray-400 text-sm">Rewards Paid</p>
      <h2 class="text-3xl font-bold mt-2">$12,400</h2>
      <span class="text-blue-500 text-sm">This month</span>
    </div>

  </section>


<section class="grid md:grid-cols-2 gap-8 mt-12">

  <div class="p-6 bg-black border border-white/10 rounded-xl">
    <h3 class="font-semibold mb-4">Reports Overview</h3>
    <canvas id="reportsChart" class="h-56"></canvas>
  </div>

  <div class="p-6 bg-black border border-white/10 rounded-xl">
    <h3 class="font-semibold mb-4">Users Growth</h3>
    <canvas id="usersChart" class="h-56"></canvas>
  </div>

</section>


  <!-- Table -->
  <section class="mt-12 bg-black border border-white/10 rounded-xl p-6">

    <h3 class="font-semibold mb-6">Latest Vulnerability Reports</h3>

    <table class="w-full text-sm">
      <thead class="text-gray-400 border-b border-white/10">
        <tr>
          <th class="py-3 text-left">User</th>
          <th class="py-3 text-left">Lab</th>
          <th class="py-3 text-left">Email</th>
          <th class="py-3 text-left">Description</th>
        </tr>
      </thead>
      <tbody>
        <?php  foreach($result_reports AS $value): ?>
        <tr class="border-b border-white/5">
          <td class="py-4"><?= $value['tester_name'] ?></td>
          <td><?= $value['report_issue'] ?></td>
          <td><span class="text-red-500"><?= $value['tester_email'] ?></span></td>
          <td><span class="text-white"><?= $value['report_description'] ?></span></td>
          <td>
            <button class="px-3 py-1 bg-primary rounded text-xs">Review</button>
          </td>
        </tr>
        <?php endforeach; ?>


      </tbody>
    </table>
  </section>

</main>

<script>
const reportsChartConfig = {
  type: 'bar',
  data: {
    labels: ['SQLi', 'XSS', 'IDOR', 'CSRF', 'Auth'],
    datasets: [{
      label: 'Reports',
      data: [12, 8, 5, 6, 4],
      backgroundColor: '#4f8dff',
      borderRadius: 6,
      barThickness: 30
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false }
    },
    scales: {
      x: {
        ticks: { color: '#bcb5ff' },
        grid: { display: false }
      },
      y: {
        ticks: { color: '#bcb5ff' },
        grid: { color: 'rgba(255,255,255,0.05)' }
      }
    }
  }
};
</script>


<script>
const usersChartConfig = {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [{
      label: 'Users',
      data: [10, 25, 40, 60, 90, 130],
      borderColor: '#8f7bff',
      backgroundColor: 'rgba(143,123,255,0.15)',
      fill: true,
      tension: 0.4,
      pointRadius: 4
    }]
  },
  options: {
    responsive: true,
    plugins: {
      legend: { display: false }
    },
    scales: {
      x: {
        ticks: { color: '#bcb5ff' },
        grid: { display: false }
      },
      y: {
        ticks: { color: '#bcb5ff' },
        grid: { color: 'rgba(255,255,255,0.05)' }
      }
    }
  }
};
</script>
<script>
new Chart(
  document.getElementById('reportsChart'),
  reportsChartConfig
);

new Chart(
  document.getElementById('usersChart'),
  usersChartConfig
);
</script>


<?php include __DIR__ . '/../layouts/footer.php'; ?>
