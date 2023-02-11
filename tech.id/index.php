<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
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
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Create an account</a>
     </form>
	 </section>
</body>
</html>