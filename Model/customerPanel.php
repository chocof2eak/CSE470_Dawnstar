<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,innitial-scale=1.0">
  <title>Greetings | Dawnstar</title>


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="/Dawnstar/MVC PATTERN/View/Adminstyle.css">

  <!-- Favicons -->
  <link href="../View/assets/img/favicon.png" rel="icon">
  <link href="../View/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../View/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../View/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="../View/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../View/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="../View/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="../View/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../View/assets/css/coming-soon.css" rel="stylesheet">
  <link href="../View/assets/css/home.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="../View/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: iPortfolio - v1.4.1
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="../View/assets/img/game.png" alt="">
        <?php if (isset($_GET['customer_id'])) { ?>
          <h1 class="text-light">Hello, <?php echo $_GET['customer_id'] ?></h1>
        <?php } ?>
      </div>

      <nav class="nav-menu">
        <ul>
          <li class="active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#games"><i class="bx bx-game"></i> <span>Games</span></a></li>
          <li><a href="#brand"><i class="bx bx-git-branch"></i> <span>Trending Brands</span></a></li>
          <li><a href="#brand"><i class="bx bxl-deviantart"></i> <span>Popular Games</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>
          <li><a href="#terms"><i class="bx bx-book-alt"></i> Terms & Conditions</a></li>
          <li><a href="../View/index.html"><i class="bx bx-log-out"></i> Log Out</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Dawnstar : An Online Game Store</h1>
      <p>We <span class="typed" data-typed-items="Give you the best games at, your doorstep "></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Games Section ======= -->
    <section id="Games" class="about section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Pool of Games</h2>
        </div>

        <h2>Available Games:</h2>
        <hr />
        <br>

        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dawnn";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Game WHERE 'pre-order' = 0";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="container bcontent">
              <div class="card" style="width: 1070px;">
                <div class="row no-gutters">
                  <div class="col-sm-5">
                    <img class="card-img" src="../View/assets/img/gamephotos/<?= $row['image']; ?>" alt="Suresh Dasari Card">
                  </div>
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h1 class='card-title'>Game Name: <?= $row['Game_name']; ?></h1>
                      <h3 class='card-text'>registration No.: <?= $row['reg_no']; ?></h3>
                      <h3 class='card-text'>price : <?= $row['price']; ?></h3>
                      <a href='bookingController.php?GameID=<?= $row['GameID']; ?>'><button class=book>Order</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
        <?php
          }
        } else {
          echo "No Games Available";
        }
        $conn->close();
        ?>
        <br>
        <h2>Unavilable Games:</h2>
        <hr />
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dawnn";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT * FROM Game WHERE 'pre-order' = 1";
        $result = mysqli_query($conn, $sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while ($row = $result->fetch_assoc()) {
        ?>
            <div class="container bcontent">
              <div class="card" style="width: 1070px;">
                <div class="row no-gutters">
                  <div class="col-sm-5">
                    <img class="card-img" src="../View/assets/img/gamephotos/<?= $row['image']; ?>" alt="Suresh Dasari Card">
                  </div>
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h1 class='card-title'>Game Name: <?= $row['Game_name']; ?></h1>
                      <h3 class='card-text'>registration No.: <?= $row['reg_no']; ?></h3>
                      <h3 class='card-text'>price: <?= $row['price']; ?></h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <br>
        <?php
          }
        } else {
          echo "All Games Available";
        }
        $conn->close();
        ?>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Branch Section ======= -->
    <section id="branch" class="resume">
      <div class="container">
        <div class="section-title">
          <h2>Trending Brands</h2>
        </div>
        <div class="box">

          <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="box-part text-center" id="boxContent">
                <i class="bx bx-game"></i>
                <div class="title">
                  <h2>EA</h2>
                </div>
                <div class="text">
                  <span>Electronic Arts Inc. is an American video game company headquartered in Redwood City, California. Founded in May 1982 by Apple employee Trip Hawkins, the company was a pioneer of the early home computer game industry and promoted the designers and programmers responsible for its games as "software artists.</span>
                </div>
                <a href="https://www.youtube.com/watch?v=EqNZA8Z9H-I">Click Here for History</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="box-part text-center" id="boxContent">
                <i class="bx bx-game"></i>
                <div class="title">
                  <h2>Ubisoft</h2>
                </div>
                <div class="text">
                  <span>Ubisoft Entertainment SA is a French video game company headquartered in Saint-Mandé with development studios across the world. Its video game franchises include Assassin's Creed, Far Cry, For Honor, Just Dance, Prince of Persia, Rabbids, Rayman, Tom Clancy's, and Watch Dogs.</span>
                </div>
                <a href="https://www.youtube.com/watch?v=gQPrlmy1fMQ">Click here for history</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="box-part text-center" id="boxContent">
                <i class="bx bx-game"></i>
                <div class="title">
                  <h2>Bethesda</h2>
                </div>
                <div class="text">
                  <span>Bethesda Softworks LLC is an American video game publisher based in Rockville, Maryland. The company was founded by Christopher Weaver and Ed Fletcher in 1986 as a division of Media Technology Limited, and in 1999 became a subsidiary of ZeniMax Media.</span>
                </div>
                <a href="https://www.youtube.com/watch?v=FpA9deBET4c">Click here for history</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="box-part text-center" id="boxContent">
                <i class="bx bx-game"></i>
                <div class="title">
                  <h2>Activsion</h2>
                </div>
                <div class="text">
                  <span>Activision Publishing, Inc. is an American video game publisher based in Santa Monica, California. It serves as the publishing business for its parent company, Activision Blizzard, and consists of several subsidiary studios</span>
                </div>
                <a href="https://www.youtube.com/watch?v=ZBkhDxFe7xI">Click here for history</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="box-part text-center" id="boxContent">
                <i class="bx bx-game"></i>
                <div class="title">
                  <h2>Sony</h2>
                </div>
                <div class="text">
                  <span>Sony Group Corporation, commonly known as Sony and stylized as SONY, is a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo, Japan.</span>
                </div>
                <a href="https://www.youtube.com/watch?v=nNNclDNhgqg">Click here for history</a>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
              <div class="box-part text-center" id="boxContent">
                <i class="bx bx-game"></i>
                <div class="title">
                  <h2>Konami</h2>
                </div>
                <div class="text">
                  <span>Konami Group Corporation is a Japanese entertainment conglomerate and video game company. In addition to being a video game developer and publisher, it also produces and distributes trading cards, anime, tokusatsu, pachinko machines, slot machines, and arcade cabinets.</span>
                </div>
                <a href="https://www.youtube.com/watch?v=mxAvumcfGlg">Click here for history</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Branch Section -->

    <!-- ======= Branch Section ======= -->
    <section id="branch" class="resume">
      <div class="container">
        <div class="section-title">
          <h2>Popular Games</h2>
        </div>
        <div class="box">

          <div class="row">

            <div class="container bcontent">
              <div class="card" style="width: 1070px;">
                <div class="row no-gutters">
                  <div class="col-sm-5">
                    <img class="card-img" src="" height="400px" width="400px">
                  </div>
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h1 class='card-title'>Doom Eternal</h1>
                      <a href="https://www.youtube.com/watch?v=cZoj6nM8uvk&list=PL7RtZMiaOk8jTvI-RzGBaTFPalgTJsgj6" button type="submit" class="btn btn-primary">
                        <h1>VIEW STREAM</h1>
                      </a>

                      <h2 class="text" text style="color:navy">IGN reviews</h2>
                      <a href="https://www.ign.com/articles/doom-eternal-final-review" button type="submit" button style="background-color:red; border-color:red; color:antiquewhite">
                        <h2>See Reviews</h2>
                      </a>
                      <h2 class="text" text style="color:navy">TechRadar reviews</h2>
                      <a href=" https://www.techradar.com/reviews/doom-eternal-review" button type="submit" button style="background-color:red; border-color:red; color:antiquewhite">
                        <h2>See Reviews</h2>
                      </a>
                      <h2 class="text" text style="color:navy">TechRadar reviews</h2>
                      <a href=" https://www.techradar.com/reviews/doom-eternal-review" button type="submit" button style="background-color:red; border-color:red; color:antiquewhite">
                        <h2>See Reviews</h2>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="container bcontent">
              <div class="card" style="width: 1070px;">
                <div class="row no-gutters">
                  <div class="col-sm-5">
                    <img class="card-img" src="" height="400px" width="400px">
                  </div>
                  <div class=" col-sm-7">
                    <div class="card-body">
                      <h1 class='card-title'>God of War</h1>
                      <a href="https://youtu.be/_0mjJRbcm7g" button type="submit" class="btn btn-primary">
                        <h1>VIEW STREAM</h1>
                      </a>
                      <h2 class="text" text style="color:navy">IGN reviews</h2>
                      <a href="https://www.ign.com/articles/2018/04/12/god-of-war-review" button type="submit" button style="background-color:red; border-color:red; color:antiquewhite">
                        <h2>See Reviews</h2>
                      </a>
                      <h2 class="text" text style="color:navy">PolyGon reviews</h2>
                      <a href=" https://www.polygon.com/2018/4/12/17226486/god-of-war-review-ps4-2018" button type="submit" button style="background-color:red; border-color:red; color:antiquewhite">
                        <h2>See Reviews</h2>
                      </a>
                      <h2 class="text" text style="color:navy">PcGamer reviews</h2>
                      <a href=" https://www.pcgamer.com/god-of-war-pc-review/" button type="submit" button style="background-color:red; border-color:red; color:antiquewhite">
                        <h2>See Reviews</h2>
                      </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container bcontent">
              <div class="card" style="width: 1070px;">
                <div class="row no-gutters">
                  <div class="col-sm-5">
                    <img class="card-img" src="" height="400px" width="400px">
                  </div>
                  <div class="col-sm-7">
                    <div class="card-body">
                      <h1 class='card-title'>Spider-Man</h1>
                      <a href="https://youtu.be/FthQjpO0MLM" button type="submit" class="btn btn-primary">
                        <h1>VIEW STREAM</h1>
                      </a>
                      <h2 class="text" text style="color:navy">IGN reviews</h2>
                      <a href="https://www.ign.com/articles/2018/09/04/marvels-spider-man-ps4-review" button type="submit" button style="background-color:red; border-color:red; color:antiquewhite">
                        <h2>See Reviews</h2>
                      </a>
                      <h2 class="text" text style="color:navy">Gamespot reviews</h2>
                      <a href=" https://www.gamespot.com/reviews/marvels-spider-man-review-amazing-fantasy/1900-6416975/" button type="submit" button style="background-color:red; border-color:red; color:antiquewhite">
                        <h2>See Reviews</h2>
                      </a>
                      <h2 class="text" text style="color:navy">Common Sense Media reviews</h2>
                      <a href=" https://www.commonsensemedia.org/game-reviews/marvels-spider-man-remastered" button type="submit" button style="background-color:red; border-color:red; color:antiquewhite">
                        <h2>See Reviews</h2>
                      </a>
                      </h3>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section><!-- End Branch Section -->




    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <h2>Dawnstar is an online based store that specializes in bringing you a list of games from a wide range of established brands. Navigating through our website, you can easily find the game you want with our regular updating of the store. We grew up playing the things we love and now they are at your doorstep, only a few clicks away.
          </h2>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>

          <h1>Feel free to contact us.</h1>

          <div class="row" data-aos="fade-in">

            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>Mohakhali, Dhaka, Bangladesh</p>
                </div>

                <div class="email">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>info@dcr.com</p>
                </div>

                <div class="phone">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>+1 5589 55488 555</p>
                </div>

                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.1341791530517!2d90.40388691543184!3d23.77823579362829!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c77105370809%3A0xceb3b63e332f8df!2sMohakhali%2C%20Dhaka%201212!5e0!3m2!1sen!2sbd!4v1606909801847!5m2!1sen!2sbd" frameborder="0" style="border:0; width: 100%; height: 290px;" allowfullscreen></iframe>
              </div>

            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="form-row">
                  <div class="form-group col-md-6">
                    <label for="name">Your Name</label>
                    <input type="text" name="name" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                    <div class="validate"></div>
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Your Email</label>
                    <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
                    <div class="validate"></div>
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subject</label>
                  <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validate"></div>
                </div>
                <div class="form-group">
                  <label for="name">Message</label>
                  <textarea class="form-control" name="message" rows="10" data-rule="required" data-msg="Please write something for us"></textarea>
                  <div class="validate"></div>
                </div>
                <div class="mb-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
              </form>
            </div>

          </div>

        </div>
    </section><!-- End Contact Section -->

    <!-- ======= Terms & Conditions Section ======= -->
    <section id="terms" class="contact">
      <div class="container">
        <div class="section-title">
          <h2>Terms & Conditions</h2>
        </div>
        <p>DawnStar Gaming stores are prominent in Bangladesh for its quality and moderate administrations for the Bangladeshi gamers. We have a long term success story of overcoming adversity in the gaming community of Bangladesh. We treat customers as our family members. At the point when you once lease a game from us we gather your contact number just as your data in our information framework. On the off chance that you again lease a game from us you should be permitted to get a discount on game store charge.</p>
        <p>Our game products, networks and services offer trending games, latest games, games at a discounted price and many more. Moreover, we provide business solution for business organizations. We have original copies of all types of games.</p>
        <ul>
          <li> We are one of the primary online based game store in Bangladesh who can arrange games for you within your likings and budget.</li>
          <li> Dawnstar is the easy, hassle free and affordable online game store service provider in Bangladesh.</li>
          <li> If the customer cancels any booking then Dawnstar games will not impose any charges to the customers.</li>
          <li> In the day of general strike or blockade or political movement the games delivery might have to pause.</li>
          <li> Dawnstar will provide the best shopping facility to you as indicated by your prerequisites.</li>
          <li> However, we will provide online trade facilities to our clients all day. A specialized team always works 24/7 in ensuring the facility to the customers.</li>
          <li> If any defect occurs in the game copies, Dawnstar will take responsibility but the defect must be reported within the 24 hours of receiving the game.</li>
          <li>Dawnstar will never allow any illegal means while trading game copies.</li>
          <li>All the prices are excluding VAT/ TAXES and including all expenses like license/ server maintenance and so on.</li>
          <li>Half of the payment of purchasing must be paid during booking and the rest of the amount needs to pay after playing the game.</li>
        </ul>



      </div>
    </section><!-- End Terms & Conditions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Dawnstar</span></strong>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="../View/assets/vendor/jquery/jquery.min.js"></script>
  <script src="../View/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../View/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="../View/assets/vendor/php-email-form/validate.js"></script>
  <script src="../View/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="../View/assets/vendor/counterup/counterup.min.js"></script>
  <script src="../View/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../View/assets/vendor/venobox/venobox.min.js"></script>
  <script src="../View/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="../View/assets/vendor/typed.js/typed.min.js"></script>
  <script src="../View/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="../View/assets/js/main.js"></script>

</body>

</html>