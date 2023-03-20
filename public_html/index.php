<?php include "./head.php" ?>


<body>
  <div class="main">
    <p class="sign" align="center">ABC School Chat Bot</p>
    <?php if(isset($_GET["error"])):?>
      <p class="loginerror" align="center">Incorrect username or password</p>
    <?php endif; ?>  
	<form class="form1" id="login" action="./login.php" method="post">
      <input class="un " type="text" align="center" placeholder="Username" name="username">
      <input class="pass" type="password" align="center" placeholder="Password" name="password">
      <button class="submit" align="center" name="login">Sign in</button>
      <p class="forgot" align="center"><a href="#">Forgot Password?</p>
 
   </form>             
   </div>
     
</body>



</html>