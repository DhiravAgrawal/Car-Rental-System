<!-- Header -->
<header id="header" class="alt">
	
	<nav>
		<a href="#menu">Menu</a>
	</nav>
</header>

<!-- Menu -->
<nav id="menu">
	<ul class="links">
		
		<li><a href="ContactUs.php">Contact</a></li>
		<?php
		
		if(isset($_GET['username'])){
			//echo "<li>".$_SESSION['user']."</li>";
			//echo "<li><a href='Registration.php'>Register</a></li>";
			echo "<li><a href='index.php'>Logout</a></li>";
		}
		elseif(isset($_GET['register'])){
			//echo "<li>".$_SESSION['user']."</li>";
			//echo "<li><a href='Registration.php'>Register</a></li>";
			echo "<li><a href='login.php'>Login</a></li>";
		}
    	else if(isset($_GET['logout'])){
			echo "<li><a href='Login.php'>Login</a></li>";	
			echo "<li><a href='Registration.php'>Register</a></li>";
		}
		else
		{
			echo "<li><a href='Login.php'>Login</a></li>";	
			echo "<li><a href='Registration.php'>Register</a></li>";
		

		}

		?>
	</ul>
</nav>