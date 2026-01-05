<?php include __DIR__ . '/../layouts/header.php'; ?>
<?php include __DIR__ . '/../layouts/sidebar.php'; ?>

<main class="ml-64 pt-28 px-10">

  <!-- Header -->
  <div class="flex justify-between items-center">
    <h1 class="text-3xl font-bold">Admin Dashboard</h1>
    <div class="text-sm text-gray-400">Welcome back, Admin</div>
  </div>

  <!-- Stats -->
  <section class="grid md:grid-cols-4 gap-6 mt-10">

    <div class="p-6 rounded-xl bg-black border border-white/10">
      <p class="text-gray-400 text-sm">Total Users</p>
      <h2 class="text-3xl font-bold mt-2">1,248</h2>
      <span class="text-green-500 text-sm">+12%</span>
    </div>

    <div class="p-6 rounded-xl bg-black border border-white/10">
      <p class="text-gray-400 text-sm">Active Labs</p>
      <h2 class="text-3xl font-bold mt-2">32</h2>
      <span class="text-green-500 text-sm">+8%</span>
    </div>

    <div class="p-6 rounded-xl bg-black border border-white/10">
      <p class="text-gray-400 text-sm">Reports</p>
      <h2 class="text-3xl font-bold mt-2">418</h2>
      <span class="text-yellow-400 text-sm">Pending</span>
    </div>

    <div class="p-6 rounded-xl bg-black border border-white/10">
      <p class="text-gray-400 text-sm">Rewards Paid</p>
      <h2 class="text-3xl font-bold mt-2">$12,400</h2>
      <span class="text-blue-500 text-sm">This month</span>
    </div>

  </section>

  <!-- Charts -->
  <section class="grid md:grid-cols-2 gap-8 mt-12">

    <div class="p-6 bg-black border border-white/10 rounded-xl">
      <h3 class="font-semibold mb-4">Reports Overview</h3>
      <div class="h-56 bg-white/5 rounded flex items-center justify-center text-gray-500">
        Chart.js / Recharts
      </div>
    </div>

    <div class="p-6 bg-black border border-white/10 rounded-xl">
      <h3 class="font-semibold mb-4">Users Growth</h3>
      <div class="h-56 bg-white/5 rounded flex items-center justify-center text-gray-500">
        Chart.js / Recharts
      </div>
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
          <th class="py-3 text-left">Severity</th>
          <th class="py-3 text-left">Status</th>
          <th class="py-3 text-left">Action</th>
        </tr>
      </thead>
      <tbody>

        <tr class="border-b border-white/5">
          <td class="py-4">hacker01</td>
          <td>SQL Injection</td>
          <td><span class="text-red-500">Critical</span></td>
          <td><span class="text-yellow-400">Pending</span></td>
          <td>
            <button class="px-3 py-1 bg-primary rounded text-xs">Review</button>
          </td>
        </tr>

        <tr class="border-b border-white/5">
          <td class="py-4">hacker02</td>
          <td>XSS</td>
          <td><span class="text-orange-400">High</span></td>
          <td><span class="text-green-500">Approved</span></td>
          <td>
            <button class="px-3 py-1 bg-white/10 rounded text-xs">View</button>
          </td>
        </tr>

      </tbody>
    </table>
  </section>

</main>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
