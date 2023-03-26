<?php

include "./head.php";
session_start();

if (isset($_SESSION["name"]) && ($_SESSION["login_id"])) {
} else {
    header("Location: index.php");
}
?>

	<body>
		<div class="main">
		<div class="main">
		<p class="sign" align="center">Home</p>  
		<h1> Hello, <?php echo $_SESSION['name']; ?></h1>
		<script src="https://www.gstatic.com/dialogflow-console/fast/messenger/bootstrap.js?v=1"></script>
		<df-messenger
			intent="WELCOME"
			chat-title="ABC_School_Chat_Bot"
			agent-id="1b36ddc5-9aa6-41ab-aacf-360b522648fb"
			language-code="en"
		></df-messenger>
        <p class="logout" align="center"><a href="logout.php">Logout</p>		
		</div>
		</div>
	</body>



</html> 



