
<!DOCTYPE html>

<html lang="en">
<head>
    <link rel="stylesheet" href="dashboard.css?v=<?php echo time(); ?>" >
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sports store</title>
    
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"/>
    
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
    <div id="body">
    <a href="products.php">
        <button id="button">Explore Now &#8594;

          
        </button>
    </a>
     
    </div>
    <h2 class="fea">Featured products</h2>
<div class="produc">
    
<div id="product1" class="section-p1">
            
            <div class='pro-container'>
                <div class='pro'>
                    <img src="./images/archery kit.jpg" alt='' >
                    <div class='des'>
                        
                        <h5>archery kit</h5>
                        
                        <h4>₹ 18000/-</h4>
                        
                    </div>
                        <a href='#'><i class="fal fa-shopping-cart"></i></a>
                </div>  
            </div>
        </div>

<div id="product1" class="section-p1">
            
            <div class='pro-container'>
                <div class='pro'>
                    <img src="./images/table tennis table.jpg" alt='' >
                    <div class='des'>
                        
                        <h5>table tennis table</h5>
                        
                        <h4>₹ 11999/-</h4>
                        
                    </div>
                        <a href='#'><i class="fal fa-shopping-cart"></i></a>
                </div>  
            </div>
        
</div><div id="product1" class="section-p1">
            
            <div class='pro-container'>
                <div class='pro'>
                    <img src="./images/football kit.jpg" alt='' >
                    <div class='des'>
                        
                        <h5>football kit</h5>
                        
                        <h4>₹ 4999/-</h4>
                        
                    </div>
                        <a href='#'><i class="fal fa-shopping-cart"></i></a>
                </div>  
            </div>
         
</div>
            <div id="product1" class="section-p1">
            
            <div class='pro-container'>
                <div class='pro'>
                    <img src="./images/football shoes.jpg" alt='' >
                    <div class='des'>
                        
                        <h5>football shoes kit</h5>
                        
                        <h4>₹ 1899/-</h4>
                        
                    </div>
                        <a href='#'><i class="fal fa-shopping-cart"></i></a>
                </div>  
            </div>
        </div>
    <div id="product1" class="section-p1">
            
            <div class='pro-container'>
                <div class='pro'>
                    <img src="./images/swimming kit.jpg" alt='' >
                    <div class='des'>
                        
                        <h5>swimming kit</h5>
                        
                        <h4>₹ 4299/-</h4>
                        
                    </div>
                        <a href='#'><i class="fal fa-shopping-cart"></i></a>
                </div>  
            </div>
        </div>
 
</div>
</div>
 
</body>
</html>

