<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Hacker Programs | ZeroDayLabs</title>
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

<!-- ================= HEADER ================= -->
<header class="sticky top-0 z-50 bg-black border-b border-white/10">
  <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">

    <!-- Left -->
    <div class="flex items-center gap-6">
      <h1 class="text-xl font-bold text-primary">
        ZeroDay<span class="text-white">Labs</span>
      </h1>

      <!-- Tabs -->
      <nav class="flex gap-4 text-sm">
          <a href="/index.php" class="text-gray-400 hover:text-white">
            <-- Back to Index
          </a>
        <span class="text-primary font-semibold border-b-2 border-primary pb-1">
          Try hack
        </span>
      </nav>
    </div>

    <!-- Right -->
    <div class="text-sm text-gray-400">
      hacker01
    </div>

  </div>
</header>

<!-- ================= FILTERS ================= -->
<section class="bg-black border-b border-white/10">
  <div class="max-w-7xl mx-auto px-6 py-4 flex flex-wrap gap-4 text-sm">

    <input type="text" placeholder="Search by domain..."
      class="bg-dark border border-white/10 rounded px-3 py-2 w-60">

    <select class="bg-dark border border-white/10 rounded px-3 py-2">
      <option>Reward</option>
      <option>$0 – $100</option>
      <option>$100 – $500</option>
      <option>$500+</option>
    </select>

    <select class="bg-dark border border-white/10 rounded px-3 py-2">
      <option>Difficulty</option>
      <option>Beginner</option>
      <option>Intermediate</option>
      <option>Advanced</option>
    </select>

    <select class="bg-dark border border-white/10 rounded px-3 py-2">
      <option>Target Type</option>
      <option>Web</option>
      <option>API</option>
    </select>

  </div>
</section>

<!-- ================= FEED ================= -->
<main class="max-w-3xl mx-auto px-4 py-10 space-y-8">

  <!-- ===== PROGRAM POST ===== -->
  <article class="bg-black border border-white/10 rounded-xl">

    <!-- Header -->
    <div class="flex items-center gap-4 p-4">
      <img src="https://yt3.googleusercontent.com/qgSeLfJk2OKnQicVDvc_VSlSISmAmWVHYtmSTckcC_iUn7hVfpURctMAqoSz0u4xfER6rlKDBA=s900-c-k-c0x00ffffff-no-rj"
           class="w-10 h-10 rounded-full object-cover">
      <div>
        <p class="font-semibold">example.com</p>
        <p class="text-xs text-gray-400">
          Public Program • SaaS Company
        </p>
      </div>
    </div>

    <!-- Cover -->
    <img src="https://yt3.googleusercontent.com/qgSeLfJk2OKnQicVDvc_VSlSISmAmWVHYtmSTckcC_iUn7hVfpURctMAqoSz0u4xfER6rlKDBA=s900-c-k-c0x00ffffff-no-rj"
         class="w-full h-52 object-cover">

    <!-- Content -->
    <div class="p-4 space-y-4">

      <!-- Description -->
      <p class="text-sm text-gray-300 leading-relaxed">
        We are looking for security researchers to test authentication,
        authorization and API endpoints in our production environment.
      </p>

      <!-- Meta -->
      <div class="flex flex-wrap gap-4 text-xs text-gray-400">
        <span>💰 Reward: <b class="text-white">$100 – $500</b></span>
        <span>🎯 Level: Beginner</span>
        <span>🌐 Target: Web</span>
      </div>

      <!-- Scope Preview -->
      <div class="flex flex-wrap gap-2 text-xs">
        <span class="px-2 py-1 bg-primary/10 text-primary rounded">XSS</span>
        <span class="px-2 py-1 bg-primary/10 text-primary rounded">SQLi</span>
        <span class="px-2 py-1 bg-primary/10 text-primary rounded">IDOR</span>
        <span class="px-2 py-1 bg-white/5 rounded text-gray-400">
          No DoS
        </span>
      </div>

      <!-- Actions -->
      <div class="flex justify-between items-center pt-4 border-t border-white/10">
        <a href="lab.php?site=1"
           class="px-5 py-2 bg-primary rounded hover:bg-blue-700 transition">
          🚀 Try Hack
        </a>
        <a href="#" class="text-sm text-gray-400 hover:text-white">
          View details →
        </a>
      </div>

    </div>
  </article>
  <article class="bg-black border border-white/10 rounded-xl">

    <!-- Header -->
    <div class="flex items-center gap-4 p-4">
      <img src="https://yt3.googleusercontent.com/qgSeLfJk2OKnQicVDvc_VSlSISmAmWVHYtmSTckcC_iUn7hVfpURctMAqoSz0u4xfER6rlKDBA=s900-c-k-c0x00ffffff-no-rj"
           class="w-10 h-10 rounded-full object-cover">
      <div>
        <p class="font-semibold">example.com</p>
        <p class="text-xs text-gray-400">
          Public Program • SaaS Company
        </p>
      </div>
    </div>

    <!-- Cover -->
    <img src="https://yt3.googleusercontent.com/qgSeLfJk2OKnQicVDvc_VSlSISmAmWVHYtmSTckcC_iUn7hVfpURctMAqoSz0u4xfER6rlKDBA=s900-c-k-c0x00ffffff-no-rj"
         class="w-full h-52 object-cover">

    <!-- Content -->
    <div class="p-4 space-y-4">

      <!-- Description -->
      <p class="text-sm text-gray-300 leading-relaxed">
        We are looking for security researchers to test authentication,
        authorization and API endpoints in our production environment.
      </p>

      <!-- Meta -->
      <div class="flex flex-wrap gap-4 text-xs text-gray-400">
        <span>💰 Reward: <b class="text-white">$100 – $500</b></span>
        <span>🎯 Level: Beginner</span>
        <span>🌐 Target: Web</span>
      </div>

      <!-- Scope Preview -->
      <div class="flex flex-wrap gap-2 text-xs">
        <span class="px-2 py-1 bg-primary/10 text-primary rounded">XSS</span>
        <span class="px-2 py-1 bg-primary/10 text-primary rounded">SQLi</span>
        <span class="px-2 py-1 bg-primary/10 text-primary rounded">IDOR</span>
        <span class="px-2 py-1 bg-white/5 rounded text-gray-400">
          No DoS
        </span>
      </div>

      <!-- Actions -->
      <div class="flex justify-between items-center pt-4 border-t border-white/10">
        <a href="lab.php?site=1"
           class="px-5 py-2 bg-primary rounded hover:bg-blue-700 transition">
          🚀 Try Hack
        </a>
        <a href="#" class="text-sm text-gray-400 hover:text-white">
          View details →
        </a>
      </div>

    </div>
  </article>

  <!-- ===== PROGRAM POST (REPEAT) ===== -->
  <!-- Loop with PHP later -->

</main>

<!-- ================= FOOTER ================= -->
<footer class="text-center text-xs text-gray-500 py-6 border-t border-white/10">
  © 2026 ZeroDay Squad
</footer>

</body>
</html>
