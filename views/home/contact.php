<?php 
session_start();
if(!isset($_SESSION['id_login'])){
    include __DIR__ . '/../layouts/header.php';
}else{
    include __DIR__ . '/../layouts/header_login.php';
}
?>

<!-- HERO -->
<section class="min-h-[60vh] flex items-center bg-bg">
  <div class="max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-4xl md:text-6xl font-bold">
      Meet Our <span class="text-primary">Team</span>
    </h1>
    <p class="mt-6 text-muted text-lg max-w-2xl mx-auto">
      We are four developers participating in the YouCode Hackathon,
      building a secure and ethical hacking platform.
    </p>
  </div>
</section>

<!-- TEAM SECTION -->
<section class="py-32 bg-bg">
  <div class="max-w-7xl mx-auto px-6">

    <div class="grid md:grid-cols-4 gap-10">

      <!-- Member -->
      <div class="bg-card border border-border rounded-xl p-6 text-center
                  shadow-lg shadow-black/40 hover:bg-cardHover transition">
        <div class="w-24 h-24 mx-auto rounded-full bg-primary/20
                    flex items-center justify-center text-3xl font-bold text-primary">
          A
        </div>
        <h3 class="mt-6 text-xl font-semibold">Ali Kamal</h3>
        <p class="text-muted text-sm">Full Stack Developer</p>
        <p class="mt-4 text-muted text-sm">
          Backend architecture, security logic and database design.
        </p>
        <div class="mt-6 flex justify-center gap-4 text-primary">
          <a href="#" class="hover:text-accent">GitHub</a>
          <a href="#" class="hover:text-accent">LinkedIn</a>
          <a href="mailto:ali@example.com" class="hover:text-accent">Email</a>
        </div>
      </div>

      <!-- Member -->
      <div class="bg-card border border-border rounded-xl p-6 text-center
                  shadow-lg shadow-black/40 hover:bg-cardHover transition">
        <div class="w-24 h-24 mx-auto rounded-full bg-primary/20
                    flex items-center justify-center text-3xl font-bold text-primary">
          Y
        </div>
        <h3 class="mt-6 text-xl font-semibold">Youssef faouzi</h3>
        <p class="text-muted text-sm">Frontend Developer</p>
        <p class="mt-4 text-muted text-sm">
          UI/UX design, Tailwind CSS and interactive components.
        </p>
        <div class="mt-6 flex justify-center gap-4 text-primary">
          <a href="#" class="hover:text-accent">GitHub</a>
          <a href="#" class="hover:text-accent">LinkedIn</a>
          <a href="mailto:dev2@example.com" class="hover:text-accent">Email</a>
        </div>
      </div>

      <!-- Member -->
      <div class="bg-card border border-border rounded-xl p-6 text-center
                  shadow-lg shadow-black/40 hover:bg-cardHover transition">
        <div class="w-24 h-24 mx-auto rounded-full bg-primary/20
                    flex items-center justify-center text-3xl font-bold text-primary">
          A
        </div>
        <h3 class="mt-6 text-xl font-semibold">Achraf Abdlhakim el-sloua</h3>
        <p class="text-muted text-sm">Security Analyst</p>
        <p class="mt-4 text-muted text-sm">
          Vulnerability research, labs creation and ethical hacking.
        </p>
        <div class="mt-6 flex justify-center gap-4 text-primary">
          <a href="#" class="hover:text-accent">GitHub</a>
          <a href="#" class="hover:text-accent">LinkedIn</a>
          <a href="mailto:dev3@example.com" class="hover:text-accent">Email</a>
        </div>
      </div>

      <!-- Member -->
      <div class="bg-card border border-border rounded-xl p-6 text-center
                  shadow-lg shadow-black/40 hover:bg-cardHover transition">
        <div class="w-24 h-24 mx-auto rounded-full bg-primary/20
                    flex items-center justify-center text-3xl font-bold text-primary">
          Y
        </div>
        <h3 class="mt-6 text-xl font-semibold">Youness ait chattou</h3>
        <p class="text-muted text-sm">DevOps Engineer</p>
        <p class="mt-4 text-muted text-sm">
          Docker, labs deployment, VPS and infrastructure management.
        </p>
        <div class="mt-6 flex justify-center gap-4 text-primary">
          <a href="#" class="hover:text-accent">GitHub</a>
          <a href="#" class="hover:text-accent">LinkedIn</a>
          <a href="mailto:dev4@example.com" class="hover:text-accent">Email</a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- CONTACT SECTION -->
<section class="py-32 bg-black">
  <div class="max-w-4xl mx-auto px-6 text-center">

    <h2 class="text-3xl md:text-4xl font-bold">
      Contact <span class="text-primary">Us</span>
    </h2>

    <p class="mt-6 text-muted">
      Have questions about the project or the hackathon?
      Feel free to reach out to our team.
    </p>

    <form class="mt-12 grid gap-6 text-left">
      <input type="text" placeholder="Your Name"
        class="bg-bg border border-border rounded-lg p-4 text-text">

      <input type="email" placeholder="Your Email"
        class="bg-bg border border-border rounded-lg p-4 text-text">

      <textarea rows="5" placeholder="Your Message"
        class="bg-bg border border-border rounded-lg p-4 text-text"></textarea>

      <button
        class="bg-primary hover:bg-accent transition rounded-lg py-3 text-bg font-semibold">
        Send Message
      </button>
    </form>

  </div>
</section>

<?php include __DIR__ . '/../layouts/footer.php'; ?>
