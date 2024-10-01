<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Completed Projects Showcase</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome (Optional) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
    <style>
        /* Custom CSS for better design */
        .completed-projects-section {
            background-color: #f8f9fa;
            padding: 60px 0;
        }

        .card {
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-title {
            font-size: 1.5rem;
            margin-bottom: 15px;
        }

        .card-text {
            font-size: 1rem;
            color: #555;
        }

        .card-img-top {
            height: 200px;
            object-fit: cover;
        }

        /* Footer styling */
        footer {
            background-color: #343a40;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        footer a {
            color: #ddd;
            text-decoration: none;
        }

        footer a:hover {
            color: #fff;
        }
    </style>
</head>
<body>

    <!-- Header Section -->
    <header class="bg-dark text-white text-center py-5">
        <div class="container">
            <h1>Welcome to Our Project Showcase</h1>
            <p>Explore our successfully completed projects</p>
        </div>
    </header>

    <!-- Completed Projects Section -->
    <section class="completed-projects-section text-center py-5">
        <div class="container">
            <h2 class="mb-4">Completed Projects</h2>
            <div class="row">
                <!-- Project 1 -->
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Project 1 Image">
                        <div class="card-body">
                            <h4 class="card-title">Project 1</h4>
                            <p class="card-text">This is a brief description of Project 1, highlighting its success and key features.</p>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Project 2 Image">
                        <div class="card-body">
                            <h4 class="card-title">Project 2</h4>
                            <p class="card-text">This is a brief description of Project 2, showcasing its design and development process.</p>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="col-md-4">
                    <div class="card shadow h-100">
                        <img src="https://via.placeholder.com/350x200" class="card-img-top" alt="Project 3 Image">
                        <div class="card-body">
                            <h4 class="card-title">Project 3</h4>
                            <p class="card-text">This is a brief description of Project 3, focusing on its technical achievements and innovations.</p>
                            <a href="#" class="btn btn-primary">View Project</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-dark text-white text-center py-3">
        <div class="container">
            <p>&copy; 2024 Completed Projects Showcase. All Rights Reserved.</p>
            <p><a href="#">Privacy Policy</a> | <a href="#">Terms of Service</a></p>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
