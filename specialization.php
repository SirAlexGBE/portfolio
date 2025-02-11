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

      <section class=" main-content specializations">
  <h2 class="section-title">My <span class="highlight">Specializations</span></h2>

  <div class="specialization-box">
    <div class="specialization-content">
      <h3 class="specialization-title">Front-end Developer</h3>
      <p class="specialization-description">
        Front-end is where I weave code and creativity to shape captivating and user-centric digital experiences.
      </p>
    </div>
    <i class="fas fa-code specialization-icon"></i>
  </div>

  <div class="specialization-box">
    <div class="specialization-content">
      <h3 class="specialization-title">UI/UX Designer</h3>
      <p class="specialization-description">
        UI/UX design is my palette for blending art and user psychology into seamless and delightful interactions.
      </p>
    </div>
    <i class="fas fa-globe specialization-icon"></i>
  </div>

  <div class="specialization-box">
    <div class="specialization-content">
      <h3 class="specialization-title">Backend Developer</h3>
      <p class="specialization-description">
        Back-end is where i put my coding logics and algorithms to deliver the needed.
    </div>
    <i class="fas fa-paint-brush specialization-icon"></i>
  </div>
  <div class="specialization-box">
    <div class="specialization-content">
      <h3 class="specialization-title">Database Design and Development</h3>
      <p class="specialization-description">
        Storing data, making them secure and edit and retrieve them as necessary.
    </div>
    <i class="fas fa-table specialization-icon"></i>
  </div>
</section>



      <!-- Sidebar -->
      <div class="sidebar navbar navbar-expand-lg navbar-light">
        <a href="index.php"><i data-lucide="home"></i></a>
        <a href="about.php" ><i data-lucide="user"></i></a>
        <a href="education.php" ><i data-lucide="school"></i></a>
        <a href="Specialization.php" class="active"><i data-lucide="layers"></i></a>
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
