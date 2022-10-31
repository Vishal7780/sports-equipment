<!DOCTYPE html>

<html lang="en">

<head>
     
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
 
     

</head>
<link rel="stylesheet" href="about.css">
<link rel="stylesheet" href="dashboard.css">
<body>
<div id="header">
        <a href="#"><img src="images/logo2.jpeg" class="logo"></a>
        <div>
            <ul id="navbar">
                <li><a href="dashboard.php" class="active">HOME</a></li>
                <li><a href="products.php">PRODUCTS</a></li>
                <li><a href="about.php">ABOUT</a></li>
                <li><a href="contact.php">CONTACT</a></li>
                <li><a href="login.php">LOGIN/SIGNUP</a></li>
                <li><a href="login_shopkeeper.php">SHOPKEEPER</a></li>
                <li><a href="cart.html"><i class="far fa-shopping-bag"></i></a></li>
                <div class="flexbox">
                <div class="input-group rounded">
                            <input type="search" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                </div>
            </ul>
        </div>
    </div>

    <section>
        

        <h2 style="text-align:center">Our Team</h2>
        <div class="row">
            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>BUSSA VISHAL</h2>
                        <p class="title">202051052</p>
                        <p>Student at IIITV</p><br>
                        <p>contact at :</p>
                        <p><button class="button">202051052@iiitv.ac.in</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>Jukta barua</h2>
                        <p class="title">202051092</p>
                        <p>Student at IIITV</p><br>
                        <p>contact at :</p>
                        <p><button class="button">202051092@iiitv.ac.in</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>CHETAN VARMNA</h2>
                        <p class="title">202051056</p>
                        <p>Student at IIITV</p><br>
                        <p>contact at :</p>
                        <p><button class="button">202051056@iiitv.ac.in</button></p>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>M.P TARUN</h2>
                        <p class="title">202051122</p>
                        <p>Student at IIITV</p><br>
                        <p>contact at :</p>
                        <p><button class="button">202051122@iiitv.ac.in</button></p>
                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <div class="container">
                        <h2>ABHIJIT PATEL</h2>
                        <p class="title">202051002</p>
                        <p>Student at IIITV</p><br>
                        <p>contact at :</p>
                        <p><button class="button">202051002@iiitv.ac.in</button></p>
                    </div>
                </div>
            </div>

        </div>
    </section>


</body>