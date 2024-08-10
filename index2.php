<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>your5oul</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />

  <!-- Feather Icons -->
  <script src="https://unpkg.com/feather-icons"></script>

  <!-- My Style -->
  <link rel="stylesheet" href="css/style.css" />
</head>

<body>
  <!-- Navbar start -->
  <nav class="navbar">
    <a class="navbar-logo">your<span>5oul</span></a>

    <div class="navbar-nav">
      <a href="#home">Home</a>
      <a href="#product">Product</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </div>

    <div class="navbar-extra">
      <a href="signin.php" id="login"> <i data-feather="user"></i> </a>
      <a href="#" id="menu"> <i data-feather="menu"></i></a>
    </div>
  </nav>
  <!-- Navbar end -->

  <!-- Hero Section start -->
  <section class="hero" id="home">
    <main class="content">
      <h1>Mari <span>Abadikan Momenmu</span> dengan</h1>
      <h1>Orang yang <span>Spesial</span></h1>
      <a href="index.php" class="cta">Log Out</a>
    </main>
  </section>
  <!-- Hero Section end -->

  <!-- Prodcut Section start -->
  <section id="product" class="product">
    <h2>Our <span>Product</span></h2>
    <div class="row">
      <div class="about-img">
        <img src="img/Our-product1.png" alt=" Our product" style="width: 300px; height: 200px" />
      </div>
      <div class="content">
        <h3>Your mine A</h3>
        <p>6x Shoot</p>
        <p>2 Print (Photo Strip)</p>
        <p>All Softcopy File</p>
        <a href="payment.php" class="cta">Order</a>
      </div>
      <div class="row">
        <div class="about-img">
          <img src="img/Our-product2.png" alt=" Our product" style="width: 300px; height: 200px" />
        </div>
        <div class="content">
          <h3>Your Mine B</h3>
          <p>15x Shoot</p>
          <p>4 Print (Photo Strip)</p>
          <a href="payment.php" class="cta">Order</a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="about-img">
        <img src="img/Our-product3.png" alt=" Our product" style="width: 300px; height: 200px" />
      </div>
      <div class="content">
        <h3>Your Mine C</h3>
        <p>8x Shoot</p>
        <p>1 Print (4x6)</p>
        <p>All Softcopy File</p>
        <a href="payment.php" class="cta">Order</a>
      </div>
      <div class="row">
        <div class="about-img">
          <img src="img/Our-product4.png" alt=" Our product" style="width: 300px; height: 200px" />
        </div>
        <div class="content">
          <h3>Your Dream D</h3>
          <p>12x Shoot</p>
          <p>2 Print (4x6)</p>
          <p>All Softcopy File</p>
          <a href="payment.php" class="cta">Order</a>
        </div>
      </div>
    </div>
  </section>
  <!-- Prodcut Section end -->

  <!-- About Section start -->
  <div class="coba">
    <section id="about" class="about">
      <h2>About your<span>5oul</span></h2>

      <div class="content">
        <p>
          Your5oul adalah mesin photobooth yang inovatif, memukau, dan
          <span>menghadirkan pengalaman fotografi yang tak terlupakan
            dengan</span>
          <span>orang yang spesial.</span>
        </p>

        <p>
          Your5oul memadukan teknologi canggih dengan elemen desain yang
          elegan
          <span>untuk memberikan pengalaman yang tak hanya seru, tetapi</span>
          <span>juga menghadirkan foto-foto yang penuh karakter.</span>
        </p>
        <div class="kotak">
          <label for="camera">DSLR Camera</label>
          <div class="icon">
            <i data-feather="camera"></i>
          </div>
        </div>
        <div class="kotak">
          <label for="money">Harga Terjangkau</label>
          <div class="icon">
            <i data-feather="shopping-bag"></i>
          </div>
        </div>
        <div class="kotak">
          <label for="money">High Quality Print</label>
          <div class="icon">
            <i data-feather="thumbs-up"></i>
          </div>
        </div>
      </div>
      <!-- </div> -->
    </section>
  </div>
  <!-- About Section end -->

  <!-- Contact Section start -->
  <section id="contact" class="contact">
    <h2>Our <span>Contact</span></h2>
    <div class="row">
      <div class="cons">
        <div class="info">
          <div class="bulat">
            <i data-feather="mail"></i>
          </div>
          <p>your5oul@gmail.com</p>
        </div>
        <div class="info">
          <div class="bulat">
            <i data-feather="facebook"></i>
          </div>
          <p>your5oul</p>
        </div>
        <div class="info">
          <div class="bulat">
            <i data-feather="message-square"></i>
          </div>
          <p>+6289062123105</p>
        </div>
        <div class="info">
          <div class="bulat">
            <i data-feather="twitter"></i>
          </div>
          <p>@your5oulid</p>
        </div>
        <div class="info">
          <div class="bulat">
            <i data-feather="map-pin"></i>
          </div>
          <p>Local Address, Indonesia, Margocity</p>
        </div>
      </div>
      <form action="funct.php" method="POST">
        <div class="inputgrup">
          <i data-feather="user"></i>
          <input type="text" name="nama" placeholder="Your name" />
        </div>
        <div class="inputgrup">
          <i data-feather="phone"></i>
          <input type="text" name="telp" placeholder="Phone number" />
        </div>
        <div class="inputgrup">
          <i data-feather="mail"></i>
          <input type="text" name="psn" placeholder="Type your message here" />
        </div>
        <button type="submit" name="send2"style="margin-top: 1rem;font-weight: bolder;  display: inline-block;  padding: 1rem 3rem;  font-size: 1.4rem;  color: #000000;  background-color: var(--primary);  border-radius: 0.5rem;  box-shadow: 1px 1px 3px rgba(144, 175, 197, 0.5);">
        Send Message</button>
      </form>
    </div>
  </section>
  <!-- Contact Section end -->
  <!-- Feather Icons -->
  <script>
    feather.replace();
  </script>

  <!-- My Javascript-->
  <script src="js/script.js"></script>
</body>

</html>