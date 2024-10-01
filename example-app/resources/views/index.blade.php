<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dropdown Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">BrandName</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        
        <!-- Dropdown Menu for First Item -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu 1
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
            <li><a class="dropdown-item" href="#">Action 1</a></li>
            <li><a class="dropdown-item" href="#">Action 2</a></li>
            <li><a class="dropdown-item" href="#">Action 3</a></li>
          </ul>
        </li>

        <!-- Dropdown Menu for Second Item -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu 2
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item" href="#">Action 1</a></li>
            <li><a class="dropdown-item" href="#">Action 2</a></li>
            <li><a class="dropdown-item" href="#">Action 3</a></li>
          </ul>
        </li>

        <!-- Dropdown Menu for Third Item -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu 3
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown3">
            <li><a class="dropdown-item" href="#">Action 1</a></li>
            <li><a class="dropdown-item" href="#">Action 2</a></li>
            <li><a class="dropdown-item" href="#">Action 3</a></li>
          </ul>
        </li>

        <!-- Dropdown Menu for Fourth Item -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Menu 4
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown4">
            <li><a class="dropdown-item" href="#">Action 1</a></li>
            <li><a class="dropdown-item" href="#">Action 2</a></li>
            <li><a class="dropdown-item" href="#">Action 3</a></li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
