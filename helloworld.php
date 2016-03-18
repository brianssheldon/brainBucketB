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
       <?php
       use google\appengine\api\users\User;
			use google\appengine\api\users\UserService;
			# Looks for current Google account session
			$user = UserService::getCurrentUser();
			if ($user) {
			  echo 'Hello, ' . htmlspecialchars($user->getNickname());
			}
			else {
			  header('Location: ' . UserService::createLoginURL($_SERVER['REQUEST_URI']));
			}

			?>
       <p>
 </form>
 </body>
 </html>