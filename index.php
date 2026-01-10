<?php 
session_start();
if(!isset($_SESSION['id_login'])){
    include __DIR__ . '/../layouts/header.php';
}else{
    include __DIR__ . '/../layouts/header_login.php';
} 

?>

<section class="min-h-screen flex items-center">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16">

    <!-- Left -->
    <div data-aos="fade-right">
      <h1 class="text-4xl md:text-6xl font-bold leading-tight">
        Ethical Hacking <br>
        <span class="text-primary">Made Legal</span>
      </h1>

      <p class="mt-6 text-gray-400 text-lg">
        Learn, practice and secure real-world applications through
        legal bug bounty programs and interactive labs.
      </p>

      <div class="mt-8 flex gap-4">
        <a href="switch.php"
           class="px-6 py-3 bg-primary rounded text-lg hover:bg-blue-700 transition">
          Get Started
        </a>
        <a href="#labs"
           class="px-6 py-3 border border-white/20 rounded text-lg hover:bg-white/10 transition">
          Explore Labs
        </a>
      </div>
    </div>

    <!-- Right -->
    <div data-aos="fade-left" class="relative">
      <div class="absolute inset-0 bg-primary/20 blur-3xl rounded-full"></div>
      <div class="relative bg-dark border border-white/10 rounded-xl p-6 shadow-xl shadow-blue-800">
        <p class="text-sm text-gray-400">Example Vulnerability</p>
        <h3 class="mt-2 font-semibold text-primary">SQL Injection</h3>
        <pre class="mt-4 bg-black/60 p-4 rounded text-sm overflow-auto">
SELECT * FROM users WHERE id = '1 OR 1=1';
        </pre>
      </div>
    </div>

  </div>
</section>

<!-- Section Features -->
<section id="labs" class="py-32 bg-black">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <h2 data-aos="fade-up" class="text-3xl md:text-4xl font-bold">
      Powerful Learning Labs
    </h2>

    <div class="mt-16 grid md:grid-cols-3 gap-10">

      <div data-aos="zoom-in" class="p-8 border border-white/10 rounded-xl">
        <h3 class="text-xl font-semibold text-primary">Web Labs</h3>
        <p class="mt-4 text-gray-400">
          Practice real web vulnerabilities directly from your browser.
        </p>
      </div>

      <div data-aos="zoom-in" data-aos-delay="100"
           class="p-8 border border-white/10 rounded-xl">
        <h3 class="text-xl font-semibold text-primary">Bug Bounty</h3>
        <p class="mt-4 text-gray-400">
          Earn rewards by responsibly disclosing vulnerabilities.
        </p>
      </div>

      <div data-aos="zoom-in" data-aos-delay="200"
           class="p-8 border border-white/10 rounded-xl">
        <h3 class="text-xl font-semibold text-primary">Security News</h3>
        <p class="mt-4 text-gray-400">
          Stay updated with the latest CVEs and zero-day vulnerabilities.
        </p>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
