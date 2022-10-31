
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="dashboard.css">
    
</head>

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
                <div id="gadgetsearch">
                    <form action="search.php" method="GET">
                        <div class="input-group rounded">
                            <input type="search" name="search" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </form>
                </div>
            </ul>
        </div>
    </div>


<div class="produc">

    <?php
    $host="localhost";
    $user="root";
    $password="";
    $db="user_db";
    $connect=mysqli_connect($host,$user,$password,$db);
    mysqli_select_db($connect,$db);

    $select_query="Select * from products order by rand() ";
    $result_query=mysqli_query($connect,$select_query);
    while($row=mysqli_fetch_assoc($result_query)){
        $name=$row['name'];
        $price=$row['price'];
        $image=$row['image'];
        echo "<div id='product1' class='section-p1'>
            
            <div class='pro-container'>
                <div class='pro'>
                    <img src='./images/$image' alt='' >
                    <div class='des'>
                        
                        <h5>$name</h5>
                        
                        <h4>₹ $price/-</h4>
                        
                    </div>
                        <a href='#'><i class='fal fa-shopping-cart'></i></a>
                </div>  
            </div>
        </div>";
                    
    }
        ?>


    
</body>
</html>