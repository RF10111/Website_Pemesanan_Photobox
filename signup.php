<?php
require 'funct.php'
?>

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
  <!-- Sign Up Section Start -->
  <section id="signup" class="signup">
    <h2>Sign<span>Up</span></h2>
    <form  method="POST">
      <div class="up">
        <h3>Full Name</h3>
        <input type="text" name="fullname" placeholder=" Full Name" />
      </div>
      <div class="up">
        <h3>Email</h3>
        <input type="text" name="email" placeholder="Your Mail" />
      </div>
      <div class="up">
        <h3>Phone Number</h3>
        <input type="text" name="no_hp" placeholder="Phone Number" />
      </div>
      <div class="up">
        <h3>Username</h3>
        <input type="text" name="username" placeholder="Username" />
      </div>
      <div class="up">
        <h3>Password</h3>
        <input type="password" name="pw" placeholder="Password" />
      </div><br><br>
      <a href="signin.php">
        <button
          style="margin-top: 1rem; font-weight: bolder; display: inline-block; padding: 1rem 3rem; font-size: 1.4rem; color: #000000; background-color: var(--primary); border-radius: 0.5rem; box-shadow: 1px 1px 3px rgba(144, 175, 197, 0.5);"
          type="submit" name="register">Create Account</button></a>
      <br>
      <div class="text1">
        <p>Already have an account?</p>
        <a href="signin.php">Sign In</a>
      </div>
    </form>
  </section>
  <!-- Sign Up Section End -->
</body>

</html>