<?php

  if(isset($_POST['valider']))
  {
  	if(isset($_POST['user_name']) AND isset($_POST['user_email']) AND isset($_POST['user_message']))
  	{
  		if(!empty($_POST['user_name']) AND !empty($_POST['user_email']) AND !empty($_POST['user_message']))
  		{
           $name=htmlspecialchars($_POST['user_name']);
           $email=htmlspecialchars($_POST['user_email']);
           $message=htmlspecialchars($_POST['user_message']);
 
             
             echo "<h2> Bonjour <mark><b> $name </b></mark> merci pour votre email:<mark><b> $email </b></mark>, nous avons lu votre message: </br></br> $message </h2>";
  		}
  	}
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>FORM</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  <form method="post">
 <ul>
  <li>
    <label for="name">Name:</label>
    <input type="text" name="user_name" autocomplete="off">
  </li>
  <li>
    <label for="mail">E-mail:</label>
    <input type="email"  name="user_email" autocomplete="off">
  </li>
  <li>
    <label for="msg">Message:</label>
    <textarea  name="user_message"></textarea>
  </li>
   
   <li><button type="submit" name="valider">Envoyer</button></li>
 </ul>
</form>

</body>
</html>
