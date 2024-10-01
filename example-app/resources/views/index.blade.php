<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Navbar with Background Image</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome for Social Media Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet"> 

    <style>
        /* Styling for background image section */
        .hero-section {
            position: relative;
            background-image: url('{{ asset('image/h.jpg') }}'); /* Laravel asset helper */
            background-size: cover;
            background-position: center;
            height: 90vh;
            display: flex;
            justify-content: center;
            align-items: center;
            color: black;
            text-align: center;
        }

        /* Styling for the overlay text */
        .hero-section h1 {
            font-size: 4rem;
            font-weight: bold;
        }
        
        /* Social Media Icons on Image */
        .social-icons {
            position: absolute;
            bottom: 20px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 20px;
        }

        .social-icons a {
            color: #fff;
            font-size: 30px;
            text-decoration: none;
        }

        .social-icons a:hover {
            color: #ddd;
        }
    </style>
</head>
<body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">BrandName</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <!-- Dropdown Menu Example 1 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Portfolio
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="portfolio.blade.php">completed project</a></li>
                        <li><a class="dropdown-item" href="#">Action 2</a></li>
                        <li><a class="dropdown-item" href="#">Action 3</a></li>
                    </ul>
                </li>
                <!-- Dropdown Menu Example 2 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Service
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
                        <li><a class="dropdown-item" href="#">Action 1</a></li>
                        <li><a class="dropdown-item" href="#">Action 2</a></li>
                    </ul>
                </li>
                <!-- Dropdown Menu Example 3 -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Blog
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink3">
                        <li><a class="dropdown-item" href="#">Action 1</a></li>
                        <li><a class="dropdown-item" href="#">Action 2</a></li>
                        <li><a class="dropdown-item" href="#">Action 3</a></li>
                    </ul>
                </li>
                <!-- Dropdown Menu Example 4 -->
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                     Contact
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink4">
                      <li><a class="dropdown-item" href="#">Action 1</a></li>
                      <li><a class="dropdown-item" href="#">Action 2</a></li>
                      <li><a class="dropdown-item" href="#">Action 3</a></li>
                  </ul>
              </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Hero Section with Background Image -->
<div class="hero-section">
    <h1>Hafizullah Jihadwal</h1>
    <h3>Full stack web developer.</h3>
    <p></p>

    <!-- Social Media Icons -->
    <div class="social-icons">
        <a href="https://www.facebook.com" target="_blank"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.twitter.com" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="https://www.linkedin.com" target="_blank"><i class="fab fa-linkedin-in"></i></a>
    </div>
</div>

{{-- about section   --}}

<!-- About Section -->
<section class="about-section text-center">
    <div class="container">
        <h2>About Hafizullah Jihadwal</h2>
        <p>
            Hafizullah Jihadwal is a full-stack web developer with expertise in both front-end and back-end technologies. 
            He excels in creating dynamic, responsive web applications that provide seamless user experiences. 
            Passionate about coding and design, Hafizullah continues to expand his skills, embracing new technologies and 
            modern web development trends. His projects are known for integrating innovative solutions while focusing 
            on both functionality and aesthetic appeal.
        </p>
    </div>
</section>
{{-- professional service --}}

<!-- Professional Web Development Services Section -->
<section class="services-section text-center py-5">
  <div class="container">
      <h2 class="mb-4">Professional Web Development Services</h2>
      <div class="row">
          <!-- Box 1: Front-End Development -->
          <div class="col-md-4">
              <div class="card h-100">
                  <div class="card-body">
                      <h3 class="card-title">Front-End Development</h3>
                      <p class="card-text">
                          Create visually appealing and responsive websites using modern HTML, CSS, and JavaScript frameworks. 
                          Optimize for both performance and user experience across all devices.
                      </p>
                  </div>
              </div>
          </div>

          <!-- Box 2: Back-End Development -->
          <div class="col-md-4">
              <div class="card h-100">
                  <div class="card-body">
                      <h3 class="card-title">Back-End Development</h3>
                      <p class="card-text">
                          Develop robust server-side applications using PHP, Node.js, or Python. Handle databases, API integrations, and business logic to ensure secure and scalable systems.
                      </p>
                  </div>
              </div>
          </div>

          <!-- Box 3: Full-Stack Development -->
          <div class="col-md-4">
              <div class="card h-100">
                  <div class="card-body">
                      <h3 class="card-title">Full-Stack Development</h3>
                      <p class="card-text">
                          Combine both front-end and back-end development skills to build complete web applications. 
                          Manage everything from user interfaces to server-side logic and databases.
                      </p>
                  </div>
              </div>
          </div>
      </div>
  </div>
</section>

<style>
  .services-section {
      background-color: #f8f9fa;
  }

  .services-section h2 {
      font-size: 2.5rem;
      margin-bottom: 30px;
  }

  .card-title {
      font-size: 1.5rem;
      margin-bottom: 15px;
  }

  .card-text {
      font-size: 1.1rem;
  }
</style>

<style>
    .about-section {
        background-color: #f8f9fa;
        padding: 60px 0;
    }

    .about-section h2 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .about-section p {
        font-size: 1.2rem;
        line-height: 1.8;
    }
</style>


{{-- seccessful project  --}}
<!-- Successful Projects Section -->
<section class="projects-section text-center py-5">
  <div class="container">
      <h2 class="mb-4">Successful Projects</h2>
      <div class="row" id="project-cards">
          <!-- Project 1 -->
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 1">
                  <div class="card-body">
                      <h4 class="card-title">Project 1</h4>
                      <p class="card-text">A brief description of Project 1 goes here.</p>
                      <a href="#" class="btn btn-primary">View Project</a>
                  </div>
              </div>
          </div>

          <!-- Project 2 -->
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 2">
                  <div class="card-body">
                      <h4 class="card-title">Project 2</h4>
                      <p class="card-text">A brief description of Project 2 goes here.</p>
                      <a href="#" class="btn btn-primary">View Project</a>
                  </div>
              </div>
          </div>

          <!-- Project 3 -->
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 3">
                  <div class="card-body">
                      <h4 class="card-title">Project 3</h4>
                      <p class="card-text">A brief description of Project 3 goes here.</p>
                      <a href="#" class="btn btn-primary">View Project</a>
                  </div>
              </div>
          </div>

          <!-- Project 4 -->
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 4">
                  <div class="card-body">
                      <h4 class="card-title">Project 4</h4>
                      <p class="card-text">A brief description of Project 4 goes here.</p>
                      <a href="#" class="btn btn-primary">View Project</a>
                  </div>
              </div>
          </div>

          <!-- Project 5 -->
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 5">
                  <div class="card-body">
                      <h4 class="card-title">Project 5</h4>
                      <p class="card-text">A brief description of Project 5 goes here.</p>
                      <a href="#" class="btn btn-primary">View Project</a>
                  </div>
              </div>
          </div>

          <!-- Project 6 -->
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 6">
                  <div class="card-body">
                      <h4 class="card-title">Project 6</h4>
                      <p class="card-text">A brief description of Project 6 goes here.</p>
                      <a href="#" class="btn btn-primary">View Project</a>
                  </div>
              </div>
          </div>
      </div>

      <!-- More Button -->
      <button id="moreButton" class="btn btn-primary mt-4">More Projects</button>
  </div>
</section>

<style>
  .projects-section h2 {
      font-size: 2.5rem;
      margin-bottom: 30px;
  }

  .card-title {
      font-size: 1.25rem;
      margin-bottom: 15px;
  }

  .card-text {
      font-size: 1rem;
  }

  .card-img-top {
      height: 200px;
      object-fit: cover;
  }
</style>

<script>
  // JavaScript to load more projects when clicking the "More Projects" button
  const moreButton = document.getElementById('moreButton');
  const projectCards = document.getElementById('project-cards');

  moreButton.addEventListener('click', function() {
      const newProjects = `
          <!-- Project 7 -->
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <img src="https://via.placeholder.com/300" class="card-img-top" alt="Project 7">
                  <div class="card-body">
                      <h4 class="card-title">Project 7</h4>
                      <p class="card-text">A brief description of Project 7 goes here.</p>
                      <a href="#" class="btn btn-primary">View Project</a>
                  </div>
              </div>
          </div>
          
          <!-- Project 8 -->
          <div class="col-md-4 mb-4">
              <div class="card h-100">
                  <img src="public/image/h.jpg" class="card-img-top" alt="Project 8">
                  <div class="card-body">
                      <h4 class="card-title">Project 8</h4>
                      <p class="card-text">A brief description of Project 8 goes here.</p>
                      <a href="#" class="btn btn-primary">View Project</a>
                  </div>
              </div>
          </div>
      `;
      projectCards.innerHTML += newProjects;
      moreButton.style.display = 'none'; // Hide the button after loading more projects
  });
</script>


<!-- Footer -->
<footer class="bg-light text-center text-lg-start">
  <div class="container p-4">
      <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
              <h5 class="text-uppercase">About Us</h5>
              <p>
                  Brief description about your company or website. This section can provide background information, values, or mission statements.
              </p>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
              <h5 class="text-uppercase">Quick Links</h5>
              <ul class="list-unstyled">
                  <li><a href="#" class="text-dark">Home</a></li>
                  <li><a href="#" class="text-dark">Portfolio</a></li>
                  <li><a href="#" class="text-dark">Services</a></li>
                  <li><a href="#" class="text-dark">Blog</a></li>
                  <li><a href="#" class="text-dark">Contact</a></li>
              </ul>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
              <h5 class="text-uppercase">Contact Us</h5>
              <p>
                  Email: <a href="mailto:info@example.com" class="text-dark">info@example.com</a><br>
                  Phone: <a href="tel:+1234567890" class="text-dark">+1 234 567 890</a>
              </p>
              <h5 class="text-uppercase">Follow Us</h5>
              <div>
                  <a href="https://www.facebook.com" target="_blank" class="text-dark me-3"><i class="fab fa-facebook-f"></i></a>
                  <a href="https://www.twitter.com" target="_blank" class="text-dark me-3"><i class="fab fa-twitter"></i></a>
                  <a href="https://www.instagram.com" target="_blank" class="text-dark me-3"><i class="fab fa-instagram"></i></a>
                  <a href="https://www.linkedin.com" target="_blank" class="text-dark"><i class="fab fa-linkedin-in"></i></a>
              </div>
          </div>
      </div>
  </div>

  <div class="text-center p-3" style="background-color: #f8f9fa;">
      &copy; 2024 Your Company Name. All Rights Reserved.
  </div>
</footer>

<!-- Font Awesome for Social Media Icons -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
