<!DOCTYPE html>

<html lang="en">

<head>
    <link rel="stylesheet" href="dashboard.css">
    <link rel="stylesheet" href="contact.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Gadget Now
    </title>

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" />

</head>

<body>
    <section id="header">
        <a href="#"><img src="images/logo2.jpeg" class="logo"></a>
        <div>
            <ul id="navbar">
                
                <li><a href="dashboard.php" class="active" >HOME</a></li>
                <li><a href="products.php">PRODUCTS</a></li>
                <li><a href="about.php" >ABOUT</a></li>
                <li><a href="contact.php" >CONTACT</a></li>
                <li class="uploader"><a href="login.php">LOGIN/SIGNUP</a></li>
                <li><a href="login_shopkeeper.php">SHOPKEEPER</a></li>
                <div id="gadgetsearch">
                    <form action="" method="GET">
                        <div class="input-group rounded">
                            <input type="search" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </ul>
        </div>
    </section>
    <section>
        <div class="container">
            <form action="action_page.php">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">

                <label for="lname">phone number</label>
                <input type="text" id="lname" name="lastname" placeholder="Your phone number..">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="India">India</option>
                    <option value="China">China</option>
                    <option value="Japan">Japan</option>
                </select>

                <label for="subject">Subject</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>
    </section>

</body>