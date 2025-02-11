<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Alex Kandel</title>
    <meta
  name="description"
  content="Explore the portfolio of Alex Kandel, a full-stack and UI/UX developer based in Nepal. Skilled in HTML, CSS, JavaScript, Bootstrap, ReactJS, PHP, and MySQL, Alex designs and develops seamless, user-focused web applications with a minimalist aesthetic."
/>
<meta
  name="keywords"
  content="full-stack developer Nepal, UI/UX developer Nepal, web developer portfolio, HTML CSS JavaScript developer, ReactJS PHP MySQL developer, Alex Kandel portfolio"
/>
<meta name="author" content="Alex Kandel" />


    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Libre+Franklin:wght@400;700&family=Lohit+Bengali&display=swap" rel="stylesheet" />

    <!-- Lucide Icons -->
    <script src="https://unpkg.com/lucide@latest"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="Assets/CSS/Style.css" />
  </head>
  <body>
    <div class="container">
      <!-- Profile Card -->
      <div class="profile-card">
        <img src="Assets/Images/profile2.png" alt="Profile Picture" class="profile-img" />

        <div>
          <h4 class="profile-name">
            Alex <span style="color: white">Kandel</span>
          </h4>
          <p class="position">Junior Fullstack Developer, UI/UX Designer</p>
          <p class="location">Based in Nepal</p>
        </div>

        <div class="social-icons">
          <a href="https://www.facebook.com/Neonales" target="_blank"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/sir69alex/" target="_blank"><i class="fab fa-instagram"></i></a>
          <a href="https://x.com/Sir69Alex"target="_blank"><i class="fab fa-x-twitter"></i></a>
          <a href="https://www.linkedin.com/in/yaleksh-kandel-2542a4284/" target="_blank"><i class="fab fa-linkedin"></i></a>
          <a href="https://github.com/SirAlexGBE" target="_blank"><i class="fab fa-github"></i></a>
          <a href="mailto:info@yalekshkandel.com.np" target="_blank"><i class="fa-solid fa-envelope"></i></a>
        </div>
        <a class="hire-btn" href="mailto:info@yalekshkandel.com.np">HIRE ME !</a>
      </div>

      <!-- About Me Section -->
      <section class="main-content about-me">
      <h2 class="section-title">About <span class="highlight">Me</span></h2>
  <h2 class="about-heading">Hello, I'm <span class="highlight">Alex Kandel</span></h2>

  <p class="about-intro">
    From designing pixel-perfect UI to developing full-stack applications, I turn ideas into digital experiences.
    I believe that <span class="bold">great design</span> is invisible, and that <span class="bold">good code</span> feels like magic.
  </p>

  <p class="about-mission">
    My mission? To craft projects that are not just functional but <span class="highlight">memorable, intuitive, and impactful.</span>
    Every project I build is a reflection of my passion for problem-solving, my obsession with clean design, and my love for coding.
  </p>
</section>



      <!-- Sidebar -->
      <div class="sidebar navbar navbar-expand-lg navbar-light">
        <a href="index.php"><i data-lucide="home"></i></a>
        <a href="about.php" class="active"><i data-lucide="user"></i></a>
        <a href="education.php"><i data-lucide="school"></i></a>
        <a href="Specialization.php"><i data-lucide="layers"></i></a>
        <a href="projects.php"><i data-lucide="briefcase"></i></a>
        <a href="skills.php"><i data-lucide="cpu"></i></a>
        <a href="contact.php"><i data-lucide="mail"></i></a>
      </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
      window.onload = function () {
        lucide.createIcons();
      };
    </script>
  </body>
</html>
