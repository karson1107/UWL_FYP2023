<?php

include "./head.php";
session_start();

if (isset($_SESSION["name"]) && ($_SESSION["user_id"])) {
} else {
    header("Location: index.php");
}
?>

	<body>
		<div class="main">
		<div class="main">
		<p class="sign" align="center">Home</p>  
		<h1> Hello, <?php echo $_SESSION['name']; ?></h1>
        <p class="logout" align="center"><a href="logout.php">Logout</p>		
		</div>
		</div>
	</body>



</html> 



