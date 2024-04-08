<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <nav class="navbar shadow navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img class="logo" src="assets/logo.png" alt="">
            </a>
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
          <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-center flex-grow-1 gap-4 pe-3">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Skin
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Toner</a></li>
                  <li><a class="dropdown-item" href="#">Perfume Oils</a></li>
                  <li><a class="dropdown-item" href="#">Moisturizer</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Babies
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Shampoo</a></li>
                    <li><a class="dropdown-item" href="#">Dry Shampoo</a></li>
                    <li><a class="dropdown-item" href="#">Conditioner</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Fragrance
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Perfumes</a></li>
                    <li><a class="dropdown-item" href="#">Room Freshner</a></li>
                    <li><a class="dropdown-item" href="#">Hugo Boss</a></li>
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    natural
                  </a>
                  <ul class="dropdown-menu mb-3">
                    <li><a class="dropdown-item" href="#">Tea Tree Oil</a></li>
                    <li><a class="dropdown-item" href="#">Eucalyptus Oil</a></li>
                    <li><a class="dropdown-item" href="#">Rosemary Oil</a></li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Blog</a>
                </li>
                
            </ul>
            <div class="search">
              <i class="fa fa-search"></i>
              <input type="text" class="form-control" placeholder="Search">
              <button class="btn btn-danger"><i class="fa-solid fa-magnifying-glass"></i></button>
            </div>
          </div>
        </div>
        <div class="cart-User d-flex gap-4">
          <div class="cart-icon d-flex align-items-center">
            <button class="cart-btn" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
              <i class="fa-solid fa-user"></i>
            </button>
            <i class="fa-solid fa-cart-shopping"></i>
          </div>
          <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        
      </div>
    </nav>

</body>
</html>