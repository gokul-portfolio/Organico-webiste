<head>
    <!-- link CSS -->
    <link rgit statusel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/css/index.css">
    <link rel="stylesheet" href="./assets/css/respansive.css">
    <!-- bootstrap icon  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">


</head>

<body>
    <!-- Circle element -->
    <div class="follower-circle" id="followerCircle"></div>
    <!-- Top Bar -->
    <div class="navbar-top">
        Welcome to our Organic store Organico!
    </div>

    <!-- Main Navbar -->
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <!-- Center Logo -->
            <a class="navbar-brand  d-md-none" href="#">
                <img src="./assets/image/logo.png" class="img-fluid " alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">

                <!-- Left Menu Items (4 items) -->
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Service
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="pagesDropdown">
                            <li><a class="dropdown-item" href="#">Page 1</a></li>
                            <li><a class="dropdown-item" href="#">Page 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="shopDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Shop
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="shopDropdown">
                            <li><a class="dropdown-item" href="#">Shop 1</a></li>
                            <li><a class="dropdown-item" href="#">Shop 2</a></li>
                        </ul>
                    </li>
                </ul>

                <!-- Center Logo for larger screens -->
                <a class="navbar-brand d-none d-md-block" href="#">
                    <img src="./assets/image/logo.png" class="img-fluid" alt="">
                </a>

                <!-- Right Menu Items (3 items) -->
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="portfolioDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Portfolio
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="portfolioDropdown">
                            <li><a class="dropdown-item" href="#">Portfolio 1</a></li>
                            <li><a class="dropdown-item" href="#">Portfolio 2</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Conduct US</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link cart-icon" href="#">
                            <i class="fas fa-shopping-cart"></i> Cart: 0 - $0.00
                        </a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <!-- follow -->
    <script>
        const followerCircle = document.getElementById('followerCircle');

        document.addEventListener('mousemove', (e) => {

            const mouseX = e.pageX;
            const mouseY = e.pageY;

            followerCircle.style.left = `${mouseX}px`;
            followerCircle.style.top = `${mouseY}px`;
        });
    </script>










    <!-- script link -->
    <script src="./assets/js/bootstrap.min.js"></script>
    <script src="./assets/js/index.js"></script>
    <!-- Owl Carousel JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</body>