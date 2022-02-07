<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>University Website Design - Easy Tutorials</title>
     <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   
</head>
<body>
<section class="sub-header">
        <nav>
            <a href="index.html"><img src="images/logo2.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()" ></i>
                <ul>
                    <li><a href="">HOME</a></li>
                    <li><a href="">BUSINESS PLAN</a></li>
                    <li><a href="">REGISTRATION</a></li>
                    <li><a href="">PROFILE</a></li>
                    <li><a href="">TERMS AND CONDITIONS</a></li>
                    <li><a href="">ABOUT US</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
    <h1>Registration Form</h1>

</section>
    
<!---------- registration------>
    
<section class="container">
    <div class="row">
        <div class="col-md-6">
            <h1> Login Here </h1>
            <form action="validation.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="user" class="form-control" required>
                </div>
                 <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" class="form-control" required>
                </div>
                <button type="submit" class="hero-btn green-btn"> Login </button>
            </form>
        
        </div>
     
    </div>
    
</section>
    
<!--------javaScript for Toggle Menu------->
<script>
    var navlinks = document.getElementById("navLinks");
    function showMenu(){
        navLinks.style.right = "0";
    }
       function hideMenu(){
        navLinks.style.right = "-200px";
    }
</script>



    <!-------footer------>
    <section class="footer">
        <h4>About Us</h4>
        <p>I hope that by joining us, You will cooperate with us in saving this nature and in making people aware.
        </p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by Save Trees</p>
    </section>
</body>
</html>



    
        
                
            
                
            
    >
    
    
