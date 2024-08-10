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
    <style>
        body{
            font-family: "Poppins", sans-serif;
            background-color: var(--bg);
            color: #000;
        }
        h1 {
            color: #000;
            font-size: 30px;
            text-align: center;
            margin-bottom: 20px;
        }
        h1 span{
            color:#ec96a4;
        }

        form {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            font-size: 18px;
            color: #333;

        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        select {
            width: 100%;
            padding: 10px;
            font-size: 14px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        button{
            width: 100%;
            padding: 10px;
            font-size: 14px;
            background-color: #fff;
            font-weight: bold;
            color: #000;
            border: none;
            cursor: pointer;
            border-radius: 10px;
        }

        button:hover {
            background-color: #ec96a4;
        }

        input[type="radio"] {
            margin-right: 5px;
            accent-color: #ec96a4;
        }

        a {
            display: inline-block;
            text-decoration: none;
            color: #333;
            margin-right: 10px;
        }

        a:hover {
            color: #ec96a4;
        }
    </style>
</head>

<body>
    <h1>PAY<span>MENT</span></h1>
    <form method="POST">
        <label for="fullName">Full Name:</label><br>
        <input type="text" id="fullName" name="fullname"><br>
        <label for="mail">Email:</label><br>
        <input type="email" id="mail" name="email"><br>
        <label for="product">Choose Product:</label><br>
        <select id="product" name="product">
            <option value="">Choose Product</option>
            <option value="Your Mine A">Your Mine A</option>
            <option value="Your Mine B">Your Mine B</option>
            <option value="Your Mine C">Your Mine C</option>
            <option value="Your Mine D">Your Mine D</option>
        </select><br>
        <label for="paymentMethod">Payment Method:</label><br>
        <input type="radio" id="DANA" name="pm" value="DANA">
        <label style="display: inline-block; text-align: right;" for="DANA">DANA</label><br>
        <input type="radio" id="ovo" name="pm" value="OVO">
        <label style="display: inline-block; text-align: right;" for="ovo">OVO</label><br>
        <input type="radio" id="SHOPEEPAY" name="pm" value="SHOPEEPAY">
        <label style="display: inline-block; text-align: right;" for="SHOPEEPAY">SHOPEEPAY</label><br><br>
        <button style="margin-bottom: 8px;" type="submit" name ="order"> ORDER </button> 
    </form>
</body>

</html>