<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
     
     <section>
     <header>
            <a href="#"><img src="logo.png" class="logo"></a>
           
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="FT.html">Future Technology</a></li>
                <li><a href="tech_t.php">Technology Type</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="contact.html">Contact</a></li>
                <li><a href="index.php">Login</a></li>
            </ul>
        </header>
    
     <h1>Hello, <?php echo $_SESSION['name']; ?></h1>
     <nav class="home-nav">
     	<a href="change-password.php">Change Password</a>
        <a href="logout.php">Logout</a>
     </nav>
     </section>
</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>