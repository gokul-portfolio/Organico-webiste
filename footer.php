<head>
    <style>
        /* Footer Styling */
        .footer {
           background-image: url('./assets/image/img/bg-footer-top.png');
           background-position: center;
           background-repeat: no-repeat;
           background-size: cover; 
            color: white;
            padding: 50px 0;
            /* font-family: 'Arial', sans-serif; */
        }

        .footer h5 {
            font-weight: bold;
            color: white;
            font-size: 20px;
            margin-bottom: 20px;
            position: relative;
        }

        .footer p, .footer a {
            color: white;
            margin: 5px 0;
            font-size: 16px;
            line-height: 1.6;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        .footer a {
            text-decoration: none;
            position: relative;
        }

    
        .footer a:hover {
            color: #ffcc00; 
            transform: translateX(5px); 
        }

        .footer .social-icons a {
            color: white;
            font-size: 24px;
            margin-right: 15px;
            transition: color 0.3s ease, transform 0.3s ease;
        }

  
        .footer .social-icons a:hover {
            color: #ffcc00; 
            transform: scale(1.1); 
        }


        .footer .footer-logo {
            font-size: 30px;
            font-weight: bold;
            color: white;
            margin-bottom: 20px;
            transition: transform 0.3s ease, color 0.3s ease;
        }

    
        .footer .footer-logo:hover {
            transform: scale(1.1);
            color: #ffcc00; 
        }

        .footer .instagram img {
            width: 100%;
            height: auto;
            margin: 1px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .footer .instagram img:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
        }

        
        .footer .instagram {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .footer .instagram .col-4 {
            width: calc(33.33% - 10px);
            padding: 0;
        }

        /* Footer Links Layout */
        .footer .container {
            max-width: 1200px;
            margin: 0 auto;
        }

        .footer .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        /* .footer .col-lg-3, .footer .col-md-6 {
            width: calc(25% - 20px);
            margin-bottom: 30px;
        } */

        /* Small devices */
       
    </style>
</head>


<body>

<footer class="footer">
  <div class="container">
    <div class="row " style="margin-top: 80px;" >
      
      <!-- Logo and Description -->
      <div class="col-lg-3 col-md-6  col-sm-12 mb-4">
        <div class="footer-logo">
            <img src="./assets/image/logo.png" class="img-fluid" alt=""></div>
        <p>We work with a passion of taking challenges and creating new ones in the advertising sector.</p>
        <div class="social-icons mt-3">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-dribbble"></i></a>
          <a href="#"><i class="fab fa-behance"></i></a>
        </div>
      </div>
      
      <!-- Links -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <h5>Links</h5>
        <ul class="list-unstyled">
          <li><a href="#">Home</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Testimonials</a></li>
          <li><a href="#">News</a></li>
        </ul>
      </div>
      
      <!-- Official Info -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <h5>Official Info</h5>
        <p><i class="fas fa-map-marker-alt"></i> 30 Commercial Road, Fratton, Australia</p>
        <p><i class="fas fa-phone-alt"></i> 1-888-452-1505</p>
        <p><strong>Open Hours:</strong><br>Mon - Sat: 8 am - 5 pm<br>Sunday: CLOSED</p>
      </div>
      
      <!-- Instagram Feed -->
      <div class="col-lg-3 col-md-6 col-sm-12 mb-4 ins">
        <h5>Instagram</h5>
        <div class="row instagram">
          <div class="col-4"><img src="./assets/image/product/product-6.jpg" alt="insta1"></div>
          <div class="col-4"><img src="./assets/image/product/product-5.jpg" alt="insta2"></div>
          <div class="col-4"><img src="./assets/image/product/product-4.jpg" alt="insta3"></div>
          <div class="col-4"><img src="./assets/image/product/product-3.jpg" alt="insta4"></div>
          <div class="col-4"><img src="./assets/image/product/product-1.jpg" alt="insta5"></div>
          <div class="col-4"><img src="./assets/image/product/product-2.jpg" alt="insta6"></div>
        </div>
      </div>
      
    </div>

    <!-- <div>
        <img src="./assets/image/img/bg-footer-bottom.png" class="img-fluid" alt="">
    </div> -->
  </div>
</footer>
    
</body>
