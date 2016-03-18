<?php
use google\appengine\api\users\User;
use google\appengine\api\users\UserService;
// [START user]
# Looks for current Google account session
$user = UserService::getCurrentUser();
// [END user]
// [START ifuser]
if ($user) {
  echo 'Hello, ' . htmlspecialchars($user->getNickname());
}
// [END ifuser]
// [START elseuser]
else {
  header('Location: ' . UserService::createLoginURL($_SERVER['REQUEST_URI']));
}
// [END elseuser]
?>
  <p>
  <html>
 <head>
 <title>My Form</title>
 </head>
 <body>
 <form action="bad_word.php" method=post>
 My name is:
 <br> <input type="text" name="YourName"><br>
 My favorite dirty word is:
 <br><input type="text" name="FavoriteWord"> 
 <p>
 <input type="submit" name="submit" value="That's Right!">
   <p>
     <p>
     <?php
     	   $critters = array ( "Phoebe", "Ruby", "Rotty" );
					foreach ($critters as &$value) {
              print($value);
              print("<p>");
         }
			?>
       <p>
       <p>
 </form>
 </body>
 </html>