<?php define('DB_HOST', 'localhost'); 
define('DB_NAME', 'food');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
 $dbS=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 function NewUser() {
	 $username = $_POST['username'];  
	 $password = $_POST['password'];
	 $name = $_POST['name'];
	 $phone = $_POST['phone'];
	 $query = "INSERT INTO register1 (username,password,name,phone) VALUES ('$username','$password','$name','$phone')";
	 $data = mysql_query ($query)or die(mysql_error());
	 if($data) {
		 echo "YOUR REGISTRATION IS COMPLETED...";
		 }
  } 
		 function SignUp() {
			 if(!empty($_POST['username'])) {
				 //checking the 'user' name which is from Sign-Up.html, is it empty or have some text  
				 $query = mysql_query("SELECT * FROM register1 WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());
				 if(!$row = mysql_fetch_array($query) or die(mysql_error())) {
					 NewUser(); 
					 } else {
						 echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
						 }
						 }
						 } 
						 if(isset($_POST['submit'])) {
							 SignUp();
							 }
							 ?>